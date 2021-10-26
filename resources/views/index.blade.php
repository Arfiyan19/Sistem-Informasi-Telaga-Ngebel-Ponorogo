@extends('master')
@section('konten')
<section class="tm-section row">
          <div class="col-lg-9 col-md-9 col-sm-8">
            <h2>Wisata Telaga Ngebel Ponorogo</h2>
            
          </div>
          <div>
          <iframe style="width: 950px;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22360.69124501219!2d111.63290760512342!3d-7.8057945101141355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79a5c5dec5ee11%3A0x2f8d7bcc05a5221a!2sWisata%20Telaga%20Ngebel!5e0!3m2!1sen!2sid!4v1635217906561!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            ></iframe>



          </div>
          <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
          </div>            
        </section>          
        <section class="tm-section">
          <div class="row">
            <div class="col-lg-12 tm-section-header-container">
              <h2 class="tm-section-header gold-text tm-handwriting-font"> Keterangan Wisata</h2> 
              <div class="tm-hr-container"><hr class="tm-hr"></div> 
            </div>  
          </div>
          @foreach($dataWisata as $items)
 
		<li style="font-size: 35px; font-family: 'Times New Roman', Times, serif;">{{ $items }}</li>
 
		@endforeach
<br>
            </div>
          </div>          
        </section>
    @endsection