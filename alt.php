 <!-- FOOTER START -->
        <footer class="site-footer footer-large footer-dark text-white">
            <!-- FOOTER BLOCKES START -->  
            <div class="footer-top  dot2-left-top-img">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">  
                            <div class="widget widget_about">
                                <div class="logo-footer clearfix p-b15">
                                    <a href="index"><img src="images\beyaz-logo.png" alt="Alt Logo"></a>
                                </div>
                                <p><?=$db->ayarlar("value" , "alt");?></p>
                            </div>
                        </div> 
						<div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget widget_services">
                                <h4 class="widget-title">Hızlı Menü</h4>
							    <ul>
                                    <li><a href="index">Anasayfa</a></li>
                                    <li><a href="kurumsal">Kurumsal </a> </li>
                                    <li><a href="hizmetlerimiz">Hizmetlerimiz</a> </li>
                                    <li><a href="galeri">Galeri</a> </li>
                                    <li><a href="iletisim">İletişim</a></li>
                                </ul>
                            </div>
                        </div> 
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget recent-posts-entry">
                                <h4 class="widget-title">İletişim</h4>
                                  <ul class="widget_address"> 
                                  	<li><i class="fa fa-map-marker"></i><?=$db->ayarlar("value" , "adres");?></li>
                                    <li><a  style="color:#fff;"href="mailto:<?=$db->ayarlar("value" , "mail");?>"><i class="fa fa-envelope"></i><?=$db->ayarlar("value" , "mail");?></a></li>
                                    <li> <a style="color:#fff;" href="tel:<?=$db->ayarlar("value" , "tel");?>"><i class="fa fa-phone"></i><?=$db->ayarlar("value" , "tel");?> </a></li>
                                </ul>  
                            </div>           
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom">
              <div class="container">
                <div class="wt-footer-bot-left d-flex justify-content-between">
                    <span class="copyrights-text">Copyright © 2020 Fatoş Ülger </span>
                    <ul class="copyrights-nav"> 
                         <li><a rel="dofollow" href="https://www.memsidea.com">Memsidea Group</a></li>
                    </ul>     
                </div>
              </div>   
            </div>   
        </footer>
        <!-- FOOTER END -->