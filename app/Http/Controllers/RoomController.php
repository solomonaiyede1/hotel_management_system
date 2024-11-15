<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Session;
use App\Models\User;
use App\Models\RoomModel;
use App\Models\Booking;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
 

class RoomController extends Controller
{
    public function insert(Request $request){
        $details=new RoomModel;
        $details->room_no=$request->room_no;
        $details->room_type=$request->room_type;
        $details->price=$request->price;
        $details->capacity=$request->capacity;
        $details->description=$request->description;
        if($file = $request->hasFile('image')) {
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
            $details->image = '/images/'.$fileName ;
        }
        $details->save();
        return redirect()->back()->withSuccess('Details saved successfully');
    }
    
       public function deleteView(){
            return view('room-delete');
        }
    
    
     public function delete($id){
            $room=RoomModel::find($id);
            $room->delete();
            return redirect('/room');
    }
    
     public function display(Request $request, $id){
                $single_room=RoomModel::where('id', $id)->get();
                 return view('single_view', ['single_room' => $single_room]);            
    }
    
     public function edit(Request $request, $id){
            $edit=RoomModel::where('id', $id)->get();
            return view('dashboard.edit', ['edit' => $edit]);            
    }
    
        public function update(Request $request, $id){
            $update=RoomModel::where('id', $id)->update([
            'room_no'=>$request->room_no,
            'room_type'=>$request->room_type,
            'price'=>$request->price,
            'capacity'=>$request->capacity,
            'description'=>$request->description
            ]);
            return redirect('/room');           
    }
    
     public function search(){
        return view('search_result');
    }
    
        public function search3(Request $request){
        $room_type=$request->get('room_type');
        $price=$request->get('price');
        $capacity=$request->get('capacity');
        $search=RoomModel::where('room_type', 'like', '%'.$room_type.'%')->Where('price', 'like', '%'.$price.'%')->Where('capacity', 'like', '%'.$capacity.'%')->get();
        return view('search_result', ['search' =>$search]);
    }


    public function book($id){

        if(Auth::id()){
            $book=new Booking;
            $room=RoomModel::find($id);
           $user_id=Auth::user()->id;
           $user_name=Auth::user()->name;
           $user_email=Auth::user()->email;
           $user_phone=Auth::user()->phone;
           $book->user_id=$user_id;
           $book->user_name=$user_name;
           $book->user_email=$user_email;
           $book->user_phone=$user_phone;
           $book->room_no=$room->room_no;
           $book->room_type=$room->room_type;
           $book->price=$room->price;
           $book->booking_status='booked';
           $book->status='pending';
           $book->transaction_id=Str::uuid();
           $book->save();
           
           
          return view('success');
        }else{
           return redirect('/login');
        }
    }
    
    public function success_page(){
         $user_id=Auth::user()->id;
        $print=Booking::where('user_id', $user_id)->orderBy('created_at', 'DESC')->limit(1)->get();
        return view('success_page', ['print' => $print]);
    }

    public function order(){

        $book= Booking::orderBy('created_at', 'DESC')->get();
        return view('dashboard.booking', compact('book'));
    }
    
    public function status($id){
        $update=Booking::where('id', $id)->update([
            'status'=>'completed'
            ]);
            
        return redirect('/booking');
        
    }
    
          public function check($id){
              
             $prev= url()->previous();
            if(Auth::id()){
             return redirect($prev);
            }
            else{
                return redirect('login');
            }
        }
}