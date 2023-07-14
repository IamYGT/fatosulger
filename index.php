<?php include("admin/include/site_db.php"); ?> <!DOCTYPE html>
<html lang="tr">
<head>
	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="author" content="Memsidea">
        
    
    <?php include("favo.php")?>
	<title>Anasayfa - Fatoş Ülger</title>
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
    <!-- GOOGLE FONTS -->
    
    
     
</head>
<body>
	<div class="page-wraper"> 
      <?php include("ust.php")?>
        <div class="page-content"> 
            <div class="slider-outer">
                <!-- SLIDER START -->
                <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
                    <div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
                        <ul>	
 <?php
			if($db->veriSaydir("slayt", array(), array()) > 0) {
			$bilgi= $db->VeriOkuCoklu("slayt", array(), array(), "row", "ASC");
			$bilgial= $db->bilgial;
			foreach($bilgial as $rows){
			?> 			<li data-index="rs-<?=$rows->id;?>" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="upload/<?=$rows->resim;?>" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Slide Title" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="upload/<?=$rows->resim;?>" alt="<?=$rows->baslik1;?>" data-lazyload="upload/<?=$rows->resim;?>" data-bgposition="center center" data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina="">
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-<?=$rows->id;?>-layer-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
                                {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                ]' data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                                </div>
                                <div class="tp-caption rev-btn  tp-resizeme slider-block" id="slide-<?=$rows->id;?>-layer-2" data-x="['left','left','left','left']" data-hoffset="['100','100','10','10']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                                    {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]' data-textalign="['left','left','left','left']" data-paddingtop="[200,200,200,150]" data-paddingright="[150,150,150,100]" data-paddingbottom="[200,200,200,150]" data-paddingleft="[150,150,150,100]" style="z-index: 8;"><div class="rs-wave" data-speed="1" data-angle="0" data-radius="2px"></div></div>                              
                                <!-- LAYER NR. 3 [ Black Box ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-<?=$rows->id;?>-layer-3" data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']" data-y="['top','top','top','top']" data-voffset="['200','200','200','220']" data-fontsize="['48','48','48','34']" data-lineheight="['56','56','56','50']" data-width="['700','700','96%','96%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
                                white-space: normal; 
                                color:#111;
                                border-width:0px;     font-family: 'Dancing Script', cursive;">Fatoş Ülger</div>
                                <!-- LAYER NR. 4 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-<?=$rows->id;?>-layer-4" data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']" data-y="['top','top','top','top']" data-voffset="['260','260','260','270']" data-fontsize="['72','72','72','38']" data-lineheight="['66','66','48','38']" data-width="['700','700','96%','96%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textalign="['left','left','left','left']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
                                white-space: normal; 
                                font-weight: 400;
                                color:#fff;
                                border-width:0px;">
                                <div style="font-family: 'Yeseva One', cursive; text-transform:uppercase;">
                                    <span class="site-text-primary"><?=$rows->baslik1;?></span>
                                </div>
                                </div>
                                <!-- LAYER NR. 5 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme" id="slide-<?=$rows->id;?>-layer-5" data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']" data-y="['top','top','top','top']" data-voffset="['350','350','350','330']" data-fontsize="['20','20','20','16']" data-lineheight="['30','30','30','22']" data-width="['600','600','90%','90%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
                                font-weight: 500; 
                                color:#111;
                                border-width:0px;">
                                <span style="font-family: 'Poppins', sans-serif;"><?=$rows->baslik2;?></span>
                                </div>
                                <!-- LAYER NR. 6 [ for see all service botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-<?=$rows->id;?>-layer-6" data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']" data-y="['top','top','top','top']" data-voffset="['450','450','450','440']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase;">
                                <a href="<?=$rows->buton_link;?>" class="site-button site-btn-effect"><?=$rows->buton_isim;?></a>
                                </div>
                                <!-- Border Part -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-<?=$rows->id;?>-layer-8" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-visibility="['on','on','off','off']" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]' data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);border-style:solid;border-width:0px 50px 50px 50px;"></div>
                            </li>
                          
	  <?php }} ?>
						  
						  </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
                    </div>
                </div>
                <div class="slider-social-outer social-mobile-hide">
                    <div class="slider-social-info">
                    	<ul class="list-unstyled text-black">
                        	<li><a href="<?=$db->ayarlar("value" , "facebook");?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?=$db->ayarlar("value" , "twitter");?>"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?=$db->ayarlar("value" , "instagram");?>"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="wa.me/90<?=$db->ayarlar("value" , "whatsapp");?>"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="slider-appointment-outer">
                    <div class="slider-appointment-btn">
                    	<a href="iletisim" class="contact-slide-show"><span> İletişime Geçin</span></a>
                    </div>
                </div>  
			</div>
            <!-- SLIDER END -->
            <!-- ABOUT SECTION START -->
            <div class="section-full welcome-section-outer">
            	<div class="welcome-section-top shadow-lg bg-white p-tb80">
                    <div class="container">
                    	<div class="row">
                        	<div class="col-lg-7 col-md-12">
                                <div class="welcom-to-section">
                                    <!-- TITLE START-->
                                    <div class="left wt-small-separator-outer">
                                        <div class="wt-small-separator">
                                            <div class="sep-leaf-left"><img src="images\sep-leaf-left.png" alt="Fatoş Ülger"></div>
                                            <div>Kurumsal</div>
                                            <div class="sep-leaf-right"><img src="images\sep-leaf-right.png" alt="Fatoş Ülger"></div>
                                        </div>
                                    </div>
                                    <h2>Bizi daha yakından tanıyın...</h2>
                                    <p> <?=$db->ayarlar("value" , "anasayfa");?> </p> 
                                    <div class="welcom-to-section-bottom d-flex justify-content-between">
                                        <div class="welcom-btn-position m-t20"><a href="iletisim" class="site-button site-btn-effect">İletişim</a></div>
                                     </div>                                
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                            	<div class="img-colarge">
                                	<div class="colarge-1"><img src="images\colarge\s1.jpg" alt="Fatoş Ülger"></div>
                                    <div class="colarge-2"><img src="images\colarge\s2.jpg" alt="Fatoş Ülger"></div>
                                    <div style="    bottom: 42px;" class="colarge-3"><img src="images\colarge\s3.jpg" alt="Fatoş Ülger"></div>
                                </div>
                            </div>
                         </div>
                    </div> 
                </div>
                <div class="welcome-section-bottom overlay-wraper bg-cover bg-no-repeat " style="background-image:url(images/background/bg-2.jpg);"> 
                		<div class="overlay-main bg-orange-light opacity-09"></div>
                        <div class="container welcome-section-bottom-space p-t80 p-b50">
                             </div>
                </div>                                        
            </div>   
            <!-- ABOUT SECTION  SECTION END -->    
            <!-- SERVICES SECTION START -->
            <div class="section-full p-t80 p-b70 bg-white bg-no-repeat bg-top-right" style="background-image:url(images/background/bubble-bg.png)">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="center wt-small-separator-outer section-head">
                        <div class="wt-small-separator">
                            <div class="sep-leaf-left"><img src="images\sep-leaf-left.png" alt=""></div>
                            <div>Fatoş Ülger</div>
                            <div class="sep-leaf-right"><img src="images\sep-leaf-right.png" alt=""></div>
                        </div>
                        <h2 data-title="Hizmetlerimiz">Hizmetlerimiz</h2>
                    </div>
                    <!-- TITLE END-->
                </div> 
                <div class="section-content container-fluid"> 
                    <div class="owl-carousel services-slider owl-btn-bottom-center light-next-prev">    
<?php
			if($db->veriSaydir("hizmetlerimiz", array(), array()) > 0) {
			$bilgi= $db->VeriOkuCoklu("hizmetlerimiz", array(), array(), "row", "ASC");
			$bilgial= $db->bilgial;
			foreach($bilgial as $rows){
			?> 			<div class="item">
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
            <div class="section-full  p-t80 p-b40 bg-white blog-post-outer-3 ">
				<div class="container">
                    <!-- TITLE START-->
                    <div class="center wt-small-separator-outer section-head">
                        <div class="wt-small-separator">
                            <div class="sep-leaf-left"><img src="images\sep-leaf-left.png" alt=""></div>
                            <div>Fatoş Ülger</div>
                            <div class="sep-leaf-right"><img src="images\sep-leaf-right.png" alt=""></div>
                        </div>
                        <h2 data-title="Haberler">Haberler</h2>
                    </div>
                    <!-- TITLE END-->
                    <!-- BLOG SECTION START -->
                    <div class="section-content">
                        <div class="row d-flex justify-content-center">
                         <?php
			if($db->veriSaydir("blog", array(), array()) > 0) {
			$bilgi= $db->VeriOkuCoklu("blog", array(), array(), "row", "ASC",3);
			$bilgial= $db->bilgial;
			foreach($bilgial as $rows){
			?> 	 <div class="col-lg-4 col-md-6 col-sm-12">
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
            <!-- INSTAGRAM FOLLOW START -->
            <div class="section-full p-t80 p-b50 bg-orange-light">
                <div class="container-fluid">
                    <div class="section-content">
                            <div class="section-content">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-5 col-md-12 instagram-follows-section bg-white">
                                        <div class="p-a30">
                                            <!-- TITLE START-->
                                            <div class="left wt-small-separator-outer">
                                                <div class="wt-small-separator">
                                                    <div class="sep-leaf-left"><img src="images\sep-leaf-left.png" alt=""></div>
                                                    <div>Fatoş Ülger</div>
                                                    <div class="sep-leaf-right"><img src="images\sep-leaf-right.png" alt=""></div>
                                                </div>
                                            </div>
                                            <h2>Galeri</h2>
                                            <!-- TITLE END-->
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 col-md-12 instagram-pics-slide-outer">
                                        <div class="instagram-pics-slide">
                                            <div class="owl-carousel instagram-slider owl-btn-bottom-left light-next-prev">
												<?php
			if($db->veriSaydir("galeri", array(), array()) > 0) {
			$bilgi= $db->VeriOkuCoklu("galeri", array(), array(), "row", "ASC");
			$bilgial= $db->bilgial;
			foreach($bilgial as $rows){
			?> 								<div class="item">
                                                    <div class="wt-box instagram-box-1">
                                                        <div class="instagram-box-media"><img src="upload/<?=$rows->image;?>" alt="Fatoş Ülger Galeri"></div>
                                                        
                                                    </div>
                                                </div>
                                            <?php }} ?>
											</div>                                        	
                                        </div>
                                    </div>
                                </div>
                            </div>      
                    </div>
                </div>
            </div>   
            <!-- INSTAGRAM FOLLOW SECTION END -->        
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
<!-- REVOLUTION JS FILES -->
<script src="plugins\revolution\revolution\js\jquery.themepunch.tools.min.js"></script>
<script src="plugins\revolution\revolution\js\jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
<script src="plugins\revolution\revolution\js\extensions\revolution-plugin.js"></script>
<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script src="js\rev-script-2.js"></script>
</body>
</html>