@extends('master')
@section('konten')
<section class="tm-section row">
          <h2 class="col-lg-12 margin-bottom-30">Send us a message</h2>
          <form action="#" method="post" class="tm-contact-form">
            <div class="col-lg-6 col-md-6">
              <div class="form-group">
                <input type="text" id="contact_name" class="form-control" placeholder="NAME" />
              </div>
              <div class="form-group">
                <input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
              </div>
              <div class="form-group">
                <input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
              </div>
              <div class="form-group">
                <textarea id="contact_message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
              </div>
              <div class="form-group">
                <button class="tm-more-button" type="submit" name="submit">Send message</button> 
              </div>               
            </div>
            <div class="col-lg-6 col-md-6">
            <iframe style="width: 550px;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22360.69124501219!2d111.63290760512342!3d-7.8057945101141355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79a5c5dec5ee11%3A0x2f8d7bcc05a5221a!2sWisata%20Telaga%20Ngebel!5e0!3m2!1sen!2sid!4v1635217906561!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            ></iframe>
            </div> 
          </form>
        </section>
@endsection