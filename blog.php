<?php require_once("baglan.php");
require_once("inc/fonk.php");
require_once("inc/page/Pagination.class.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Elbistan Diyetisyen|Ayse Davdav|Blog </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Diyetisyen Ayşe Davdav Ankara Gazi Üniversitesi Beslenme ve Diyetetik Bölümü Mezunudur ve Elbistan Diyetisyen Olarak Hizmet Vermektedir.">
<meta name="keywords" content="elbistan diyet,elbistan diyetisyen,diyetisyen ayşe davdav,elbistan özel diyetisyen,elbistan en iyi diyet,beslenme,diyet,elbistan diyet merkezi,elbistan beslenme ve diyet danışmanlıgı">
<meta name="author" content="Ayşe Davdav">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="h84qrpO56dEfkOdt_6WZl-ArNJ6bk5ZocfwPW_jfewc" /> 

<script type="application/ld+json">
{ "@context" : "http://schema.org",
  "@type" : "Person",
  "name" : "Elbistan Diyetisyen Ayşe Davdav",
  "url" : "http://www.aysedavdav.com/",
  "sameAs" : ["https://www.facebook.com/Diyetisyen-Ay%C5%9Fe-Davdav-727095737654678/","https://www.instagram.com/dyt_aysedavdav/","https://plus.google.com/u/0/?tab=wX"]
}

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133728534-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133728534-1');
</script>


<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/news.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>

<div class="super_container">

	
	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>			
			<ul>
				<li class="menu_item"><a href="index.php">Anasayfa</a></li>
				<li class="menu_item"><a href="hakkinda.php">Hakkında</a></li>
				<li class="menu_item"><a href="hizmet.php">Hizmetlerimiz</a></li>
				<li class="menu_item"><a href="diyet.php">Online Diyet</a></li>
				<li class="menu_item"><a href="tarif.php">Diyet Tarifleri</a></li>
				<li class="menu_item"><a href="blog.php">Başarı Öyküleri</a></li>
				<li class="menu_item"><a href="iletisim.php">İletişim</a></li>
			</ul>
		</div>
		<div class="menu_social">
			<ul>
				<li><a href="https://www.facebook.com/Diyetisyen-Ay%C5%9Fe-Davdav-727095737654678/" target="_blank"  alt="Elbistan diyetisyen"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="https://www.instagram.com/dyt_aysedavdav/" target="_blank"  alt="Elbistan diyetisyen"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>	
				<li><a href="https://mail.google.com/mail/" target="_blank"  alt="Elbistan diyetisyen"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>					
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" alt="Elbistan diyetisyen" data-speed="0.8"></div>

		<!-- Header -->

	<!-- Header -->
		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">									
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<div class="header_top_whatsapp">
											<i class="fab fa-whatsapp"></i>
											<span>0544 713 68 50</span>							
								</div>
										
								<div class="header_top_instgram">
											<i class="fab fa-instagram"></i>
										<a href="https://www.instagram.com/dyt_aysedavdav/" target="_blank" alt="Elbistan diyetisyen"> <span>dyt_aysedavdav</span> </a>
								</div>
										
								<div class="header_top_facebook">
											<i class="fab fa-facebook-square"></i>
											<a href="https://www.facebook.com/Diyetisyen-Ay%C5%9Fe-Davdav-727095737654678/"  target="_blank" alt="Elbistan diyetisyen"> <span>Diyetisyen Ayşe Davdav</span> </a>
								</div>
										
								<div class="header_top_gmail">
											<i class="fa fa-envelope"></i>
											<a href="https://mail.google.com/mail/" target="_blank" alt="Elbistan diyetisyen"> <span>dytaysedavdav@gmail.com</span> </a>
								</div>
																
									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li><a href="index.php">Anasayfa</a></li>
													<li><a href="hakkinda.php">Hakkında</a></li>
													<li><a href="hizmet.php">Hizmetlerimiz</a></li>
													<li><a href="diyet.php">Online Diyet</a></li>
													<li><a href="tarif.php">Diyet Tarifleri</a></li>
													<li><a href="blog.php">Başarı Öyküleri</a></li>
													<li><a href="iletisim.php">İletişim</a></li>
												</ul>
											</nav>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</header>		

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Başarı Öyküleri</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- News -->
	<div class="news">
	<div class="container" >
	<div style="margin-top:40px; margin-bottom:40px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="row">			
	<?php
    $page = isset($_GET['sayfa']) ? ((int)$_GET['sayfa']) : 1;
    $toplamSorgusu= $baglanti->query("select count(*) as toplam from basari where basari_id");
    $toplamKayit = $toplamSorgusu->fetch_assoc();
    $toplam = $toplamKayit["toplam"];   //toplam kayıt değerini değişkenimize aktardık
    $sayfaBasinaKayitSayisi = 9; // her sayfada gösterilecek kayıt sayısını tutan değişken

    $pagination = (new Pagination());
    $pagination->setCurrent($page);
    $pagination->setTotal($toplam);
    $pagination->setRPP($sayfaBasinaKayitSayisi);

	
    $sayfalama = $pagination->parse();
    $sayfalama = str_replace(" service.php?sayfa=$1", "anasayfa-", $sayfalama);
    //sayfalamanın seo ya uygun olması için ?sayfa= değeri yerine anasayfa- değeri ile değiştiriyoruz
    //Bunu sınıf içinde kodlara müdahale etmemek için burada yaptım.
    //yapmasanızda sisteminiz çalışır.
    ?>
   
			
	<div class="row">
        <?php
        $sorgu = $baglanti->query("SELECT * FROM basari limit " . (($page - 1) * $sayfaBasinaKayitSayisi) . "," . $sayfaBasinaKayitSayisi);
        // veri tabanımızdan tablo_adi tablosundan verileri çekiyoruz ama burada limit anahtar kelimesi ile sayfalamayı gerçekleştiriyoruz.
        // bu sayede istenilen aralıktaki kayıtlar sayfada gösterilecek
        while ($sonuc = $sorgu->fetch_assoc()) { // verileri döngü ile sayfamıza yazıyoruz
            ?>
			 <div  class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img  src="<?php echo $sonuc["basari_resim"];?>" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><?php echo $sonuc['basari_adi'] ?></h3>
                                    <p><?php echo mb_substr($sonuc["basari_icerik"],0,120,"UTF-8"); ?></p>
 
									<?php echo "<a href='basaridevami.php?id=".$sonuc["basari_id"]." '>";?>	<p><i class="fa fa-eye"></i> Devamı</p></a>
								
								</div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
            <?php
        }
        ?>
	</div> <!-- 1. row sonu-->	
	</div>
	<div class="pagination"><?php echo $sayfalama; ?></div>
	</div>	
	</div>	
	</div>

	
	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg"  alt="Elbistan diyetisyen" data-speed="0.8"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-4 footer_col">
						<div class="footer_about">
							<div class="footer_contact_title">Sosyal Medya</div>
							<div class="footer_about_text">Sosyal Medyada İletişim Adreslerimiz Bizleri Takip Edebilirsiniz.</div>
							<div class="footer_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="https://www.facebook.com/Diyetisyen-Ay%C5%9Fe-Davdav-727095737654678/" target="_blank"  alt="Elbistan diyetisyen"><i style="color:white;font-size:20px;" class="fab fa-facebook" aria-hidden="true"></i></a></li>
				                        <li><a href="https://www.instagram.com/dyt_aysedavdav/" target="_blank"  alt="Elbistan diyetisyen"><i style="color:white;font-size:20px;" class="fab fa-instagram" aria-hidden ="true"></i></a></li>	
			                        	<li><a href="https://mail.google.com/mail/" target="_blank"  alt="Elbistan diyetisyen"><i style="color:white;font-size:20px;" class="fa fa-envelope" aria-hidden="true"></i></a></li>	
									
								</ul>
							</div>
							<div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tüm Haklar Ayşe Davdav Diyetisyenlik Aittir. Site Tasarım <i style="color:#28a745;" class="fas fa-desktop"></i> <a style="color:#28a745" href="https://www.instagram.com/twins_software/" target="_blank">Twins Software</a>

</div>
						</div>
					</div>
					
					<!-- Footer Contact -->
					<div class="col-lg-3 footer_col">
						<div class="footer_contact">
							<div class="footer_contact_title"></div>
							<div class="footer_contact_form_container">
         
                       

	                        </div>
						</div>
					</div>

					<!-- Footer Hours -->
					<div class="col-lg-5 footer_col">
						<div class="footer_hours">
							<div style="text-align:center;" class="footer_hours_title">Çalısma Saatlerimiz</div>
							<ul class="hours_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Pazartesi – Cuma</div>
									<div class="ml-auto">9.30 – 18.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Cumartesi</div>
									<div class="ml-auto">11.00 - 18.00</div>
								</li>
								
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Pazar</div>
									<div class="ml-auto">Kapalı</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
							<nav class="footer_nav">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<li><a href="index.php">Anasayfa</a></li>
									<li><a href="hakkinda.php">Hakkında</a></li>
									<li><a href="hizmet.php">Hizmetlerimiz</a></li>
										<li><a href="diyet.php">Online Diyet</a></li>
									<li><a href="tarif.php">Diyet Tarifleri</a></li>
									<li><a href="blog.php">Başarı Öyküleri</a></li>
									<li><a href="iletisim.php">İletişim</a></li>
								</ul>
							</nav>							
							<div class="footer_phone ml-lg-auto">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span>0544 713 68 50</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/news.js"></script>
</body>
</html>