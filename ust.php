<!-- HEADER START -->
        <header class="site-header header-style-1 mobile-sider-drawer-menu">
            
            <div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">
                    <div class="container">
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="index">
                                <img src="images\logo-light.png" alt="Fatoş Ülger Logo">
                                </a>
                            </div>
                        </div>
                        <!-- NAV Toggle Button -->

                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Menü</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>

                         
                        <div class="extra-nav header-2-nav">
                            <div class="extra-cell d-none d-sm-block">
<ul class="social-icons social-square social-darkest social-md">
                                                    <li><a href="<?=$db->ayarlar("value" , "facebook");?>" class="fa fa-facebook"></a></li>
                                                    <li><a href="<?=$db->ayarlar("value" , "twitter");?>" class="fa fa-twitter"></a></li>
                                                    <li><a href="<?=$db->ayarlar("value" , "instagram");?>" class="fa fa-instagram"></a></li>
                                                    <li><a href="wa.me/90<?=$db->ayarlar("value" , "whatsapp");?>" class="fa fa-whatsapp"></a></li>
                                                 </ul>                            </div>
                         </div>
                         
                        <!-- MAIN Vav -->
                        <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
                    
                            <ul class=" nav navbar-nav">
                                <li><a href="index">Anasayfa</a>
                                      </li>
                                <li><a href="kurumsal">Kurumsal</a></li>
                                <li><a href="hizmetlerimiz">Hizmetlerimiz</a>
                                    <ul class="sub-menu">
<?php
			if($db->veriSaydir("hizmetlerimiz", array(), array()) > 0) {
			$bilgi= $db->VeriOkuCoklu("hizmetlerimiz", array(), array(), "row", "ASC");
			$bilgial= $db->bilgial;
			foreach($bilgial as $rows){
			?> 	<li><a href="hizmet-<?=$rows->url;?>.html"><?=$rows->isim;?></a></li>
				<?php }} ?>	                                    </ul>                                
                                </li>
                                <li><a href="galeri">Galeri</a>
                                                                 
                                </li>
                                <li><a href="haberler">Haberler</a></li>                                                                
                                
                                <li><a href="iletisim">İletişim</a></li>                                
                            </ul>

                        </div>
                        
                    </div>
                </div>
            </div>
            
        </header>
        <!-- HEADER END -->