
<!-- icon list--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Tees Resort & Bar</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <!-- Page-->
    <div class="text-center page"><a class="banner banner-top" href="https://www.templatemonster.com/website-templates/monstroid2.html" target="_blank"><img src="images/monstroid.jpg" alt="" height="0"></a>
      <!-- Page preloader-->
      <!-- Page Header-->
      <header class="page-header" style="padding-bottom: 24px">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default-with-top-panel" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-lg-device-layout="rd-navbar-fullwidth" data-md-stick-up-offset="90px" data-lg-stick-up-offset="150px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-top-panel rd-navbar-collapse">
              <div class="rd-navbar-top-panel-inner">
                <div class="left-side">
                  <div class="group"><span class="text-italic">Follow Us:</span>
                    <ul class="list-inline">
                      <li><a class="icon icon-sm icon-secondary-5 fa fa-instagram" href="https://www.instagram.com/tees_teesresortandbar?igshid=ZDdkNTZiNTM%3D"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="center-side">
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand fullwidth-brand"><h3 style="color: rgb(0,0,255)">Tees Resort and Bar</h3></a></div>
                </div>
                <div class="right-side">
                  <!-- Contact Info-->
                  <div class="contact-info">
                    <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                      <div class="unit__left"><span class="icon icon-primary text-middle mdi mdi-phone"></span></div>
                      <div class="unit__body"><a class="text-middle" href="tel:#">+234 816 649 1554</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar collapse toggle-->
                <button class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand mobile-brand"><a class="brand-name" href="index.html"><img src="images/logo.png" alt="" width="40" height="30"/></a></div>
              </div>
              <div class="rd-navbar-aside-right">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-nav-scroll-holder">
                    <ul class="rd-navbar-nav">
                            <li class="{{ Request::path() ==  '/' ? 'active' : ''  }}"><a href="{{url('/')}}" id="ok">Home</a></li> 
                            <li class="{{ Request::path() ==  'about' ? 'active' : ''  }}"><a href="{{url('/about')}}" id="ok">About us</a></li>
                            <li class="{{ Request::path() ==  'about' ? 'active' : ''  }}"><a href="#" id="ok">Saki Town</a></li>
                            <li class="{{ Request::path() ==  'contact' ? 'active' : ''  }}"><a  href="{{url('/contact')}}" id="ok">contact</a></li>
                            <li class="{{ Request::path() ==  'gallery' ? 'active' : ''  }}"><a  href="{{url('/gallery')}}" id="ok">Gallery</a></li>
                            @if(Auth::id())
                            <li class="{{ Request::path() ==  'gallery' ? 'active' : ''  }}"><a href="{{url('/')}}" id="ok">{{Auth::user()->name}}</a></li>
                            <li class="{{ Request::path() ==  'gallery' ? 'active' : ''  }}">
                        <form method="POST" action="{{ route('logout') }}">
							              @csrf
                            <a  class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit(); " role="button">
                                Logout
                            </a>
						</form>
                        </li>

                            @else
                            <li class="nav-item {{ Request::path() ==  'gallery' ? 'active' : ''  }}"><a class="nav-link" href="{{url('/register')}}" id="ok">Register</a></li>
                            <li class="nav-item {{ Request::path() ==  'gallery' ? 'active' : ''  }}"><a class="nav-link" href="{{url('/login')}}" id="ok">Login</a></li>
                            @endif
                            <li class="nav-item"><a class="nav-link" href="https://web.whatsapp.com/send?phone=+2348166491554">Chat us<i class="fa fa-whatsapp" style="color: green; font-size: 24px; font-weight: 900"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>