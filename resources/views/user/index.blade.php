


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>{{$photography[0]['name']}}</h2>
          <p>{{$photography[0]['title']}}</p>
          <a href="contact" class="btn-get-started">Contact For me</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container-fluid">

        <div class="row gy-4 justify-content-center">
@foreach($images as $key => $row)

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item">
              <img src="/images/{{$row['image']}}" class="img-fluid" alt="" style="height: 200px;width: 100%; border:1px solid white">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-1.jpg" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div> <!-- End Gallery Item -->
  @endforeach

        </div>

      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  