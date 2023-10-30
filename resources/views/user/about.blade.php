
     <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>About</h2>
            <p>PhotoGraphy Lover</p>
            <a class="cta-btn" href="contact">Contact For me</a>

          </div>
        </div>
      </div>
    </div>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="/images/{{$about_info[0]['about_image']}}" class="img-fluid" alt="Upload Your Picture" style="width:100%;height:400px;border:2px solid gray;border-radius: 10px;">
          </div>
          <div class="col-lg-5 content mt-5">
            <h2>{{$about_info[0]['about_name']}}</h2>
            <p class="fst-italic py-3">
              {{$about_info[0]['about_title']}}
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$about_info[0]['about_dob']}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{$about_info[0]['about_website']}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$about_info[0]['about_mobile']}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span>{{$about_info[0]['about_city']}}</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$about_info[0]['about_age']}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>{{$about_info[0]['about_email']}}</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              {{$about_info[0]['about_desc']}}
            </p>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-header">
          <h2>Testimonials</h2>
          <!-- <p>What they are saying</p> -->
        </div>

        <div class="slides-3 swiper">
          <div class="swiper-wrapper">
      @foreach($about_slider as $key => $row)

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p class="text-center">
                  {{$row['slider_desc']}}
                </p>
                <div class="profile mt-auto">
                  <img src="/images/{{$row['slider_image']}}" class="testimonial-img" alt="" style="width:100px;height:100px">
                  <h3>{{$row['slider_name']}}</h3>
                  <h4>{{$row['slider_ceo']}}</h4>
                </div>
              </div>
            </div>
    
    @endforeach
            <!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div> --><!-- End testimonial item -->

            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  