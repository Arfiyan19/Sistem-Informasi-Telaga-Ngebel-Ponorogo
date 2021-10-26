<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Telaga Ngebel</title>
<!-- 
Cafe House Template
http://www.templatemo.com/tm-466-cafe-house
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
  <link href="template/css/bootstrap.min.css" rel="stylesheet">
  <link href="template/css/font-awesome.min.css" rel="stylesheet">
  <link href="template/css/templatemo-style.css" rel="stylesheet">
  <link rel="shortcut icon" href="template/img/favicon.ico" type="image/x-icon" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <!-- Preloader -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Preloader -->
    <div class="tm-top-header">
        <div class="row">
          <div class="tm-top-header-inner">
            <div class="tm-logo-container">
              <h1 class="tm-site-name tm-handwriting-font" style="    padding-left: 30px;">Sistem Informasi WIsata Telaga Ngebel</h1>
            </div>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <nav class="tm-nav" style="    padding-right: 50px;">
              <ul>
                <li><a href="index.html" class="active">Home</a></li>
                <li><a href="menu.html">About</a></li>
                <li><a href="contact.html">Contact Us</a></li>
              </ul>
            </nav>   
          </div>           
        </div>    
      </div>
    </div>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main" style="    padding-top: 12px;">
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
      </div>
    </div> 
    
    <footer>
      <div class="tm-black-bg">
        <div class="container">
          <div class="row margin-bottom-60">
            <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
              <h3 class="tm-footer-div-title">Main Menu</h3>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Directory</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Our Services</a></li>
              </ul>
            </nav>
            <div class="col-lg-5 col-md-5 tm-footer-div">
              <h3 class="tm-footer-div-title">About Us</h3>
              <p class="margin-top-15">Telaga Ngebel adalah sebuah danau alami yang terletak di Kecamatan Ngebel, Kabupaten Ponorogo. Kecamatan Ngebel terletak di kaki gunung Wilis. Telaga Ngebel terletak sekitar 30 kilometer dari pusat kota Ponorogo atau yang terkenal dengan nama Kota Reog. Keliling dari Telaga Ngebel sekitar 5 KM</p>
            </div>
            <div class="col-lg-4 col-md-4 tm-footer-div">
              <h3 class="tm-footer-div-title">Get Social</h3>
              <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante.</p>
              <div class="tm-social-icons-container">
                <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-behance"></i></a>
              </div>
            </div>
          </div>          
        </div>  
      </div>      
      <div>
            <img src="template/img/1.jpg" alt="">
        <div class="container" img>
          <div class="row tm-copyright">
           <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2084 Your Cafe House</p>
         </div>  
       </div>
     </div>
   </footer> <!-- Footer content-->  
   <!-- JS -->
   <script type="text/javascript" src="template/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
   <script type="text/javascript" src="template/js/templatemo-script.js"></script>      <!-- Templatemo Script -->

 </body>
 </html>