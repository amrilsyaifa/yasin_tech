<section id="contact">
  <div class="contact wow fadeInUp">
    <div class="section-header">
      <h3 class="section-title">Contact</h3>
    </div>
  </div>

  <!-- Uncomment below if you wan to use dynamic maps -->
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3982.0788560092783!2d98.57957221475851!3d3.5693303974025032!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312f1f1acba163%3A0x808213a4cce4c8eb!2sYASIN+TECH+%7C+Web+Developer+%7C+CCTV+%7C+IT+Solution!5e0!3m2!1sid!2sid!4v1562400795742!5m2!1sid!2sid"
    width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
  <div class="container wow fadeInUp mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-3 col-md-4">
        <div class="info">
          <div>
            <i class="fa fa-map-marker"></i>
            <p>Sei Mencirim Street<br>Medan, Nort Sumatra</p>
          </div>
          <div>
            <i class="fa fa-envelope"></i>
            <p>yasin.tech.com@gmail.com</p>
          </div>
          <div>
            <i class="fa fa-phone"></i>
            <p>+62 812 6506 6406</p>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-8">
        <div class="form">
            @if(\Session::has('alert-failed'))
            <div class="alert alert-failed">
                <div>{{Session::get('alert-failed')}}</div>
            </div>
            @endif
            @if(\Session::has('alert-success'))
            <div class="alert alert-success">
                <div>{{Session::get('alert-success')}}</div>
            </div>
            @endif
          <form action="{{ url('/sendEmail') }}" method="post" class="contactForm">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required"
                data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>