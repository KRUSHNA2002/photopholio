
  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Contact</h2>
            <p>Contact for any inquiry you fill up given below form and send me your message and i will help you , Thank you ...</p>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row gy-4 justify-content-center">

          <div class="col-lg-3">
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>{{$about_info[0]['about_city']}}</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3">
            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>{{$about_info[0]['about_email']}}</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3">
            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>{{$about_info[0]['about_mobile']}}</p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row justify-content-center mt-4">

          <div class="col-lg-9">
            <form action="/user/save_contact" method="post"  >
              <div class="row">
                @csrf
                <div class="col-md-6 ">
                  <input type="text" name="contact_name" class="form-control bg-white" id="contact_name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6  mt-3 mt-md-0">
                  <input type="text" class="form-control bg-white" name="contact_email" id="contact_email" placeholder="Your Email" required>
                </div>
              </div>
              <div class=" mt-3">
                <input type="text" class="form-control bg-white" name="contact_subject" id="contact_subject" placeholder="Subject" required>
              </div>
              <div class=" mt-3">
                <textarea class="form-control bg-white" name="contact_message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="text-center mt-3 "><button type="submit" class="bg-success rounded" onclick="msg()" >Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <script type="text/javascript">
    
  function msg()
  {
    alert("message send succesfully");
  }

  </script>

  