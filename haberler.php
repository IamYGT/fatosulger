<?php include("admin/include/site_db.php"); ?> <!DOCTYPE html>
<html lang="tr">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="author" content="Memsidea">
        
    
    <?php include("favo.php")?>
	<title>Haberler - Fatoş Ülger</title>
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
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/9.jpg);">
            	<div class="overlay-main site-bg-secondry opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2  style="    color: #ffffff;" class="site-text-primary">Haberler</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                            <div>
                                <ul  style="    color: #ffffff;" class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a  style="    color: #ffffff;" href="index">Anasayfa</a></li>
                                    <li  style="    color: #ffffff;">Haberler</li>
                                </ul>
                            </div>
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            <!-- OUR BLOG START -->
            <div class="section-full  p-t80 p-b50 bg-white blog-post-outer-3 ">
				<div class="container">
                    <!-- BLOG SECTION START -->
                    <div class="section-content">
                        <div class="row d-flex justify-content-center">
                            <?php
			if($db->veriSaydir("blog", array(), array()) > 0) {
			$bilgi= $db->VeriOkuCoklu("blog", array(), array(), "row", "ASC");
			$bilgial= $db->bilgial;
			foreach($bilgial as $rows){
			?> 	<div class="col-lg-4 col-md-6 col-sm-12">
                                <!--Block one-->
                                <div class="blog-post date-style-2">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="haber-<?=$rows->url;?>.html"><img src="upload/<?=$rows->resim;?>" alt="<?=$rows->isim;?>"></a>
                                    </div>
                                    <div class="wt-post-info bg-white p-a20 p-b0 text-center">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><span><?=$rows->tarih;?></span> </li>
                                             </ul>
                                        </div>                                 
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="haber-<?=$rows->url;?>.html" class="site-text-primary"><?=$rows->isim;?></a></h3>
                                        </div>
                                        <div class="wt-post-readmore ">
                                            <a href="haber-<?=$rows->url;?>.html" class="site-button-link black">Devamını Oku</a>
                                        </div>                                        
                                   </div>                                
                                </div>
                            </div>
                          <?php }} ?>
						 </div>
                       
                    </div>
                </div>
             </div>   
            <!-- OUR BLOG END -->
        </div>
      <?php include("alt.php")?>
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