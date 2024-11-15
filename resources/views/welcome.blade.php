@include('partials/header')
      <section class="section">
        <div class="shell-wide">
          <div class="range range-30 range-xs-center">
            <div class="cell-lg-8 cell-xl-9">
              <!-- Classic slider-->
              <section class="section">
                <!-- Swiper -->
                <div class="swiper-container swiper-slider swiper-style-2" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="slide" data-direction="vertical">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide" data-slide-bg="images/banner.jpg">
                      <div class="swiper-slide-caption">
                        <div class="shell text-sm-left" style="background-color: rgba(0,0,0,0.4)">
                          <h1 data-caption-animate="slideInDown" data-caption-delay="100">Your Ideal Retreat</h1>
                          <div class="slider-subtitle-group">
                            <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400"></div>
                            <h4 data-caption-animate="slideInLeft" data-caption-delay="700">Enjoy the world of relaxation</h4>
                            <h3 data-caption-animate="slideInLeft" data-caption-delay="800">and tranquility!</h3>
                          </div><a class="button button-effect-ujarak button-lg button-white-outline button-square" href="about-us.html" data-caption-animate="slideInLeft" data-caption-delay="1150"><span>learn more</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="images/banner1.jfif">
                      <div class="swiper-slide-caption">
                        <div class="shell text-sm-left" style="background-color: rgba(0,0,0,0.4)">
                          <h1 data-caption-animate="slideInDown" data-caption-delay="100">Relax & Unwind</h1>
                          <div class="slider-subtitle-group">
                            <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400"></div>
                            <h4 data-caption-animate="slideInLeft" data-caption-delay="700">Experience the luxurious level</h4>
                            <h3 data-caption-animate="slideInLeft" data-caption-delay="800">of our spa treatments</h3>
                          </div><a class="button button-effect-ujarak button-lg button-white-outline button-square" href="about-us.html" data-caption-animate="slideInLeft" data-caption-delay="1150"><span>learn more</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="images/banner2.jpeg">
                      <div class="swiper-slide-caption">
                        <div class="shell text-sm-left" style="background-color: rgba(0,0,0,0.4)">
                          <h1 data-caption-animate="slideInDown" data-caption-delay="100">Revitalize & Relax</h1>
                          <div class="slider-subtitle-group"> 
                            <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400"></div>
                            <h4 data-caption-animate="slideInLeft" data-caption-delay="700">Indulge in our top-notch</h4>
                            <h3 data-caption-animate="slideInLeft" data-caption-delay="800">spa resort</h3>
                          </div><a class="button button-effect-ujarak button-lg button-white-outline button-square" href="about-us.html" data-caption-animate="slideInLeft" data-caption-delay="1150"><span>learn more</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </section>
            </div>
            <div class="cell-lg-4 cell-xl-3 reveal-lg-flex">
              <div class="hotel-booking-form">
                <h3>Book a Room</h3>
                <!-- RD Mailform-->
                <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                  <div class="range range-sm-bottom spacing-20">
                    <div class="cell-lg-12 cell-md-4">
                      <p class="text-uppercase">Your Name</p>
                      <div class="form-wrap">
                        <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="Required">
                        <label class="form-label" for="contact-first-name">Your Full Name</label>
                      </div>
                    </div>
                    <div class="cell-lg-12 cell-md-4 cell-sm-6">
                      <p class="text-uppercase">Arrival</p>
                      <div class="form-wrap">
                        <label class="form-label form-label-icon" for="date-in"><span class="icon icon-primary fa-calendar"></span><span>Check-in Date</span></label>
                        <input class="form-input" id="date-in" data-time-picker="date" type="text" name="date" data-constraints="Required">
                      </div>
                    </div>
                    <div class="cell-lg-12 cell-md-4 cell-sm-6">
                      <p class="text-uppercase">Departure</p>
                      <div class="form-wrap">
                        <label class="form-label form-label-icon" for="date-out"><span class="icon icon-primary fa-calendar"></span><span>Check-out Date</span></label>
                        <input class="form-input" id="date-out" data-time-picker="date" type="text" name="date" data-constraints="Required">
                      </div>
                    </div>
                    <div class="cell-lg-6 cell-md-4 cell-xs-6">
                      <p class="text-uppercase">Adults</p>
                      <div class="form-wrap form-wrap-validation">
                        <!--Select 2-->
                        <select class="form-input select-filter" data-minimum-results-search="-1" data-placeholder="1" data-constraints="Required">
                          <option>&nbsp;</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>
                    </div>
                    <div class="cell-lg-6 cell-md-4 cell-xs-6">
                      <p class="text-uppercase">Children</p>
                      <div class="form-wrap form-wrap-validation">
                        <!--Select 2-->
                        <select class="form-input select-filter" data-minimum-results-search="-1" data-placeholder="0" data-constraints="Required">
                          <option>&nbsp;</option>
                          <option value="1">0</option>
                          <option value="2">1</option>
                          <option value="3">2</option>
                          <option value="4">3</option>
                          <option value="5">4</option>
                        </select>
                      </div>
                    </div>
                    <div class="cell-lg-12 cell-md-4">
                      <button class="button button-primary button-square button-block button-effect-ujarak" type="submit"><span>check availability</span></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- About us-->
      <section class="section section-md bg-white text-center text-sm-left">
        <div class="shell-wide">
          <div class="range range-50 range-xs-center overflow-hidden">
            <div class="cell-sm-10 cell-md-8 cell-lg-7 wow fadeInUp" data-wow-delay=".1s">
              <div class="post-video post-video-border">
                <div class="post-video__image"><img src="images/img1.jpg" alt="" width="1020" height="525"/>
                </div>
                <div class="post-video__body"><a class="link-control post-video__control" data-lightgallery="item" href="https://www.youtube.com/watch?v=I5FlP07kdvM"></a></div>
              </div>
            </div>
            <div class="cell-sm-10 cell-md-8 cell-lg-5 reveal-flex wow fadeInUp" data-wow-delay=".3s">
              <div class="bg-primary section-wrap-content-var-1" style="background-image: url(images/img3.jpg)">
                <div class="section-wrap-content-var-1-inner">
                  <h2>About Us</h2>
                  <p>Committed to everyone seeking energy and excitement, we offer endless possibilities to unwind and reenergize.</p>
                  <div class="group">
                    <dl class="list-desc">
                      <dt>Weekdays:</dt>
                      <dd><span>8:00–20:00</span></dd>
                    </dl>
                    <dl class="list-desc">
                      <dt>Weekends:</dt>
                      <dd><span>9:00–18:00</span></dd>
                    </dl>
                  </div><a class="button button-effect-ujarak button-lg button-secondary-outline button-square" href="about-us.html"><span>book now</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Indoor Pool-->
      <section class="section section-md bg-secondary-4 text-center text-sm-left">
        <div class="shell">
          <div class="range range-50 range-md-justify range-sm-middle">
            <div class="cell-sm-6 cell-md-5">
              <h3>Indoor Hotel Pool</h3>
              <p>The indoor heated pool has vaulted wood beam ceilings. The whirlpool features bay windows and overlooks the pond and the north face of the local beauty spot. For the safety and health reasons, children must be accompanied by an adult when visiting the pool.</p>
              <p>The serene pool at Royal Villas spa resort and hotel boasts sleek décor that features striking floor-to-ceiling teak columns set against a cool black tile floor. Poolside dining is also available, featuring a selection of dishes from any cuisine you desire that are both healthy and delicious. Daily aqua aerobics classes help keep guests fit while on the road.</p><a class="button button-primary button button-square button-effect-ujarak button-lg" href="#"><span>read more</span></a>
            </div>
            <div class="cell-sm-6">
              <div class="box-outline box-outline__mod-1">
                <figure><img src="images/img2.jpg" alt="" width="546" height="516"/>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Portfolio-->
      <section class="section section-md bg-white text-center text-sm-left">
        <div class="shell-wide">
          <div class="range range-10 range-middle">
            <div class="cell-sm-6">
              <h3>Our Gallery</h3>
            </div>
            <div class="cell-sm-6 text-sm-right"><a class="heading-link link-gray-darker" href="#">See All Photos</a></div>
          </div>
          <hr>

        @php

        $room=App\Models\RoomModel::limit(4)->get();
        @endphp
          <div class="isotope-wrap">
            <!-- Isotope Content-->
            <div class="row isotope" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group">
              <div class="col-xs-12 col-sm-6 col-md-3 grid-sizer"></div>
              @foreach($room as $rooms)
              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1" data-wow-delay=".5s"><a class="portfolio-item thumbnail-classic" href="images/gallery-4-1200x800_original.jpg" data-size="1200x800" data-lightgallery="item"><img src="{{url($rooms->image)}}" style="width:100%; height: 300px" alt=""/>
                  <div class="caption"><span class="icon mdi-thumb-up-outline">346</span><span class="icon mdi-eye">220</span></div></a>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>
      <!-- Blog-->
      <section class="section section-sm bg-white text-center text-sm-left">
        <div class="row">
          <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1011786.9876787838!2d4.039279!3d7.864383999999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103759e654dc3bdb%3A0x837fc9151752551d!2sTEES%20Resort%20and%20Bar!5e0!3m2!1sen!2sng!4v1731673514154!5m2!1sen!2sng" style="width: 100%; height: 450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </section>

    @include('partials/footer')
  