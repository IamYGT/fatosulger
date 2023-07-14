<?php include("admin/include/site_db.php"); ?> <!DOCTYPE html>
<html lang="tr">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="author" content="Memsidea">
        
    
    <?php include("favo.php")?>
	<title><?=$db->VeriOkuTek("blog", "isim", "url", $_GET["url"]);?> - Fatoş Ülger</title>
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
                        		<h2 class="site-text-primary"><?=$db->VeriOkuTek("blog", "isim", "url", $_GET["url"]);?></h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">Anasayfa</a></li>
                                    <li>Haberler</li>
                                </ul>
                            </div>
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            <!-- OUR BLOG START -->
            <div class="section-full  p-t80 p-b50 bg-white">
				<div class="container">
                    <!-- BLOG SECTION START -->
                    <div class="section-content">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 m-b30">
                               <!-- BLOG START -->
                                <div class="blog-post date-style-2 blog-lg">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="#"><img src="upload/<?=$db->VeriOkuTek("blog", "resim", "url", $_GET["url"]);?>" alt="<?=$db->VeriOkuTek("blog", "isim", "url", $_GET["url"]);?>"></a>
                                    </div>
                                    <div class="wt-post-info  bg-white p-t30">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><span><?=$db->VeriOkuTek("blog", "tarih", "url", $_GET["url"]);?></span> </li>
                                              </ul>
                                        </div>                                 
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="#" class="site-text-primary"><?=$db->VeriOkuTek("blog", "isim", "url", $_GET["url"]);?></a></h3>
                                        </div>
                                        <div class="wt-post-text">
<?=$db->VeriOkuTek("blog", "aciklama", "url", $_GET["url"]);?>                                        </div>  
                                    </div>
                                </div>
                                  </div> 
                            <!-- SIDE BAR START -->
                            <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 rightSidebar  m-b30">
                                <aside class="side-bar p-t15">
                                         <div class="widget p-a10">
                                            <div class="text-left m-b30">
                                                <h4 class="widget-title">Sosyal Medya</h4>
                                                <div class="wt-separator sep-gradient-light"></div>
                                            </div>                                         
                                            <div class="widget_social_inks">
                                                <ul class="social-icons social-square social-darkest social-md">
                                                    <li><a href="<?=$rows->facebook;?>" class="fa fa-facebook"></a></li>
                                                    <li><a href="<?=$rows->twitter;?>" class="fa fa-twitter"></a></li>
                                                    <li><a href="<?=$rows->instagram;?>" class="fa fa-instagram"></a></li>
                                                    <li><a href="wa.me/90<?=$rows->whatsapp;?>" class="fa fa-whatsapp"></a></li>
                                                 </ul>
                                            </div>
                                        </div>
                                        <div class="widget recent-posts-entry p-a10">
                                            <div class="text-left m-b30">
                                                <h4 class="widget-title">Son Haberler</h4>
                                                <div class="wt-separator sep-gradient-light"></div>
                                            </div>                                    
                                            <div class="section-content">
                                                <div class="widget-post-bx">
<?php
			if($db->veriSaydir("blog", array(), array()) > 0) {
			$bilgi= $db->VeriOkuCoklu("blog", array(), array(), "row", "ASC",3);
			$bilgial= $db->bilgial;
			foreach($bilgial as $rows){
			?>  <div class="widget-post clearfix">
                                                        <div class="wt-post-media">
                                                            <img src="upload/<?=$rows->resim;?>" alt="<?=$rows->isim;?>">
                                                        </div>
                                                        <div class="wt-post-info">
                                                            <div class="wt-post-header">
                                                                <h6 class="post-title"> <a href="haber-<?=$rows->url;?>.html"><?=$rows->isim;?></a></h6>
                                                            </div>                                                    
                                                            <div class="wt-post-meta">
                                                                <ul>
                                                                    <li class="post-author"><?=$rows->tarih;?></li>
                                                                 </ul>
                                                            </div>                                            
                                                        </div>
                                                    </div>
                                                   <?php }} ?>
												   </div>
                                            </div>
                                        </div>
                                        <!-- Social -->
                                      
										</aside>
									</div>
                         </div>
                    </div>
                </div>
             </div>   
            <!-- OUR BLOG END -->
        </div>
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