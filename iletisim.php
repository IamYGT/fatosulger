<?php include("admin/include/site_db.php"); ?> <!DOCTYPE html>
<html lang="tr">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="author" content="Memsidea">
        
    
    <?php include("favo.php")?>
	<title>İletişim - Fatoş Ülger</title>
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css\fontawesome\css\font-awesome.min.css">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css\owl.carousel.min.css">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="css\bootstrap-select.min.css">    
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css\magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css\loader.min.css">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css\style.css">
        <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css\flaticon.min.css">     
     <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="plugins\revolution\revolution\css\settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="plugins\revolution\revolution\css\navigation.css">
</head>
<body>
	<div id="page-boxed" class="page-wraper"> 
      <?php include("ust.php")?> 
	  <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/7.jpg);">
            	<div class="overlay-main site-bg-secondry opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="site-text-primary">İletişim</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="index">Anasayfa</a></li>
                                    <li>İletişim</li>
                                </ul>
                            </div>
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            <!-- SECTION CONTENTG START -->
          
               <!-- GOOGLE MAP & CONTACT FORM -->
             <div class="section-full  p-t80 p-b80 bg-orange-light">   
                <div class="section-content">
                    <div class="container">
                        <div class="contact-one  ">
                            <!-- CONTACT FORM-->
                                    <form class="cons-contact-form" method="post" action="form-handler2.php">
                                        <!-- TITLE START -->
                                        <div class="center wt-small-separator-outer section-head">
                                            <div class="wt-small-separator">
                                                <div class="sep-leaf-left"><img src="images\sep-leaf-left.png" alt=""></div>
                                                <div>İletişim</div>
                                                <div class="sep-leaf-right"><img src="images\sep-leaf-right.png" alt=""></div>
                                            </div>
                                            <h2 data-title="İletişim Formu">İletişim Formu</h2>
                                        </div>                                         
                                        <!-- TITLE END --> 
                                        <div class="row">
                                           <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input style="    border: 1px solid;" name="username" type="text" required="" class="form-control" placeholder="İsminiz">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                   <input style="    border: 1px solid;" name="email" type="text" class="form-control" required="" placeholder="Eposta">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input style="    border: 1px solid;" name="phone" type="text" class="form-control" required="" placeholder="Telefon">
                                                 </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                     <input style="    border: 1px solid;" name="subject" type="text" class="form-control" required="" placeholder="Konu">
                                                 </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <textarea style="    border: 1px solid;" name="message" class="form-control" rows="4" placeholder="Mesajınız"></textarea>
                                                 </div>
                                            </div>
                                           <div class="col-md-12">
                                                <button type="submit" class="site-button-secondry site-btn-effect">Gönder</button>
                                            </div>
                                        </div>
                                   </form>
                                    <div   class="contact-info m-t30">
                                        <div class="contact-info-inner">
                                            <!-- TITLE START-->
                                            <div class="center wt-small-separator-outer section-head">
                                                <div class="wt-small-separator">
                                                    <div class="sep-leaf-left"><img src="images\sep-leaf-left.png" alt=""></div>
                                                    <div>İletişim</div>
                                                    <div class="sep-leaf-right"><img src="images\sep-leaf-right.png" alt=""></div>
                                                </div>
                                                <h2 data-title="İletişim Bilgileri">İletişim Bilgileri</h2>
                                            </div>                                            
                                            <!-- TITLE END--> 
                                            <div style="    padding-top: 45px;" class="contact-info-section text-black">  
                                                 <div class="row"> 
                                                   	<div class="col-lg-4 col-md-6">                                                            
                                                        <div class="wt-icon-box-wraper left m-b30 text-center">
                                                            <div class="icon-content">
                                                                <h4 style="    font-weight: 700;"  class="m-t0">Telefon</h4>
                                                                <p><a href="tel:<?=$db->ayarlar("value" , "tel");?>"><?=$db->ayarlar("value" , "tel");?></a></p>
                                                                <p><a href="tel:<?=$db->ayarlar("value" , "tel2");?>"><?=$db->ayarlar("value" , "tel2");?></a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="wt-icon-box-wraper left m-b30 text-center">
                                                            <div class="icon-content">
                                                                <h4 style="    font-weight: 700;"   class="m-t0">Eposta</h4>
                                                                <p><a href="mailto:<?=$db->ayarlar("value" , "mail");?>"><?=$db->ayarlar("value" , "mail");?> </a></p>
                                                             </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="wt-icon-box-wraper left m-b30 text-center">
                                                            <div class="icon-content">
                                                                <h4 style="    font-weight: 700;"   class="m-t0">Adres</h4>
                                                                <p><?=$db->ayarlar("value" , "adres");?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                               
                                                 </div> 
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
			   <!-- 
			  <div class="section-full">
             
                <div class="section-content">
                    <div class="gmap-outline">
                        <div id="gmap_canvas2" class="google-map"></div>
                    </div>
                </div>                    
           </div>-->
		   
		   
        </div>
   <?php include("alt.php")?></div>
<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-loader">
            <div class="cssload-dots">
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
                <div class="cssload-dot"></div>
            </div>
        </div>	
    </div>
</div>
<!-- LOADING AREA  END ====== -->
<!-- JAVASCRIPT  FILES ========================================= --> 
<script src="js\jquery-2.2.0.min.js"></script><!-- JQUERY.MIN JS -->
<script src="js\popper.min.js"></script><!-- POPPER.MIN JS -->
<script src="js\bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="js\bootstrap-select.min.js"></script><!-- Form js -->
<script src="js\magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script src="js\waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script src="js\counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="js\waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
<script src="js\isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script src="js\owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script src="js\stellar.min.js"></script><!-- PARALLAX BG IMAGE   -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_8C7p0Ws2gUu7wo0b6pK9Qu7LuzX2iWY&libraries=places&"></script><!-- GOOGLE MAP -->
<script src="js\map.script.js"></script>
<script src="js\theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
<script src="js\custom.js"></script><!-- CUSTOM FUCTIONS  -->
</body>
</html>