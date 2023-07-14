<?php include("admin/include/site_db.php"); ?> <!DOCTYPE html>
<html lang="tr">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="author" content="Memsidea">
        
    
    <?php include("favo.php")?>
	<title>Hizmetlerimiz - Fatoş Ülger</title>
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
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/8.jpg);">
            	<div class="overlay-main site-bg-secondry opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="site-text-primary">Hizmetlerimiz</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="index">Anasayfa</a></li>
                                    <li>Hizmetlerimiz</li>
                                </ul>
                            </div>
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            <!-- ALL SERVICES START -->
            <div class="section-full p-t80 p-b50 bg-no-repeat bg-bottom-right" style="background-image:url(images/background/bubble-bg.png)">
                <div class="container">
                    <div class="section-content"> 
					<div class="row d-flex justify-content-center">
                          <?php
			if($db->veriSaydir("hizmetlerimiz", array(), array()) > 0) {
			$bilgi= $db->VeriOkuCoklu("hizmetlerimiz", array(), array(), "row", "ASC");
			$bilgial= $db->bilgial;
			foreach($bilgial as $rows){
			?> 	<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-box service-box-1">
                                    <div class="service-box-media"><img src="upload/<?=$rows->resim;?>" alt="<?=$rows->isim;?>"></div>
                                    <div class="service-box-info p-t20 text-center">
                                         <h3 class="m-b0"><a href="hizmet-<?=$rows->url;?>.html" class="site-text-primary"><?=$rows->isim;?></a></h3> 
                                    </div>
                                </div>                          
                            </div>
                              <?php }} ?>

							</div>
                    </div>
                </div>
            </div>   </div>
<?php include("alt.php")?>
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
    </div>
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
<script src="js\theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
<script src="js\custom.js"></script><!-- CUSTOM FUCTIONS  -->
</body>
</html>