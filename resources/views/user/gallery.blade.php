

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>{{$gallery_name_desc[0]['gallery_name']}}</h2>
            <p>{{$gallery_name_desc[0]['gallery_desc']}}</p>

            <a class="cta-btn" href="contact">Contact For me</a>

          </div>
          <form action="" class="d-flex justify-content-center">
          <div class="form-group col-md-6 mt-5 text-center">
            <input type="search" name="search" width="100%" placeholder="search here" value="" class="form-control text-center" >
            <button class="mt-3 rounded bg-primary ">Search</button>
            <a href="/gallery">
                <button class="mt-3 rounded bg-primary" type="button">Reset</button>
            </a>
          </div>
          </form>
        </div>
      </div>
    </div><!-- End Page Header -->
    
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="row gy-4 justify-content-center">
   @foreach($gallery_image as $key => $row)
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item ">
              <img src="/images/{{$row['gallery_image']}}" class="img-fluid" alt="" style="height:300px;width:100%" >
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-1.jpg" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
   @endforeach

          

        </div>

      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  