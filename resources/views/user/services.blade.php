

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Services</h2>
            <p></p>

            <a class="cta-btn" href="contact">Contact For me</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-header">
          <h2>Prices</h2>
          <p>Check my adorable pricing</p>
        </div>

        <div class="row gy-4 gx-lg-5">
  @foreach($service_price as $key => $row)

          <div class="col-lg-6">
            <div class="pricing-item d-flex justify-content-between">
              <h3>{{$row['photo_type']}}</h3>
              <h4> &#8377; {{$row['photo_price']}}.00</h4>
            </div>
          </div><!-- End Pricing Item -->
  @endforeach
         
        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Introduction about devloped us </p>
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
            </div> 

  </main><!-- End #main -->

  