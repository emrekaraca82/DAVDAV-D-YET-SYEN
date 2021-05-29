<?php require_once("baglan.php");
require_once("inc/fonk.php");
require_once("inc/page/Pagination.class.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Elbistan Diyetisyen|Ayse Davdav|aysedavdav.com </title>
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

  <link rel="stylesheet" href="styles/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/css/w3.css">
  <link rel="stylesheet" href="styles/admin/pages.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ckeditor.js"></script>
 
  <script language="javascript">
		function confirmDel() {
			var agree=confirm("Bu içeriği silmek istediğinizden emin misiniz?\nBu işlem geri alınamaz!");
			if (agree) {
				return true ; 
			}
			else {
				return false ;
			}
		}
	</script>
 
</head>
<body>
<?php 		   
		     if(@$_SESSION["uye"]){
				 
				 ?>
				 
				  <?php
    $page = isset($_GET['sayfa']) ? ((int)$_GET['sayfa']) : 1;
    $toplamSorgusu= $baglanti->query("select count(*) as toplam from sayfalar where sayfa_id");
    $toplamKayit = $toplamSorgusu->fetch_assoc();
    $toplam = $toplamKayit["toplam"];   //toplam kayıt değerini değişkenimize aktardık
    $sayfaBasinaKayitSayisi = 8; // her sayfada gösterilecek kayıt sayısını tutan değişken

    $pagination = (new Pagination());
    $pagination->setCurrent($page);
    $pagination->setTotal($toplam);
    $pagination->setRPP($sayfaBasinaKayitSayisi);

	
    $sayfalama = $pagination->parse();
    $sayfalama = str_replace(" pages.php?sayfa=$1", "anasayfa-", $sayfalama);
    //sayfalamanın seo ya uygun olması için ?sayfa= değeri yerine anasayfa- değeri ile değiştiriyoruz
    //Bunu sınıf içinde kodlara müdahale etmemek için burada yaptım.
    //yapmasanızda sisteminiz çalışır.
    ?>
	
<div style="margin-top:15px; margin-left:10px;" class="container-fluid">
  <div class="row content">
	<div class="col-sm-3 sidenav text-center">
      <h4>Ayşe Davdav</h4>
	 <img src="images/ayse.jpg" class="w3-circle" style="width:50%"><br><br>
      <ul class="nav nav-pills nav-stacked">
		<li class="active"><a href="admin.php">ANASAYFA</a></li><br>
        <li class="active"><a href="pages.php">SAYFA İŞLEMLERİ</a></li><br>
        <li class="active"><a href="basari.php">BAŞARI ÖYKÜLERİ</a></li><br>
		<li class="active"><a href="cikis.php">ÇIKIŞ</a></li>
      </ul>
    </div>
	
    <div class="col-sm-9">
		<div class="well">SAYFA İŞLEMLERİ</div>
		<div class="cizgi">
			<p>Sitenizdeki sayfaları buradan yönetebilirsiniz.</p>
		</div><br>
		<a href="pageadd.php" type="button" class="btn btn-success">Yazı Ekle</a><br><br>
		<div class="well well-sm">Tüm kayıtlar</div>   
		<div class="table-responsive">		  
		<table class="table table-hover">
			  <thead>
				<tr>
				   <th scope="col">Sayfa Resim</th>				 
				  <th scope="col">Sayfa Adı</th>
				  <th scope="col">Kategori</th>
				   <th scope="col">Eklendiği Tarih</th>
				  <th scope="col">Düzenleme</th>
				  <th scope="col">Silme</th>
				  
				</tr>
			  </thead>
			  <tbody>
				
<?php
        $sorgu = $baglanti->query("SELECT * FROM sayfalar order by sayfa_id desc limit " . (($page - 1) * $sayfaBasinaKayitSayisi) . "," . $sayfaBasinaKayitSayisi);
        // veri tabanımızdan tablo_adi tablosundan verileri çekiyoruz ama burada limit anahtar kelimesi ile sayfalamayı gerçekleştiriyoruz.
        // bu sayede istenilen aralıktaki kayıtlar sayfada gösterilecek
        while ($sonuc = $sorgu->fetch_assoc()) { // verileri döngü ile sayfamıza yazıyoruz
            ?>					
					<tr>
						<td> <img  src="<?php echo $sonuc["sayfa_resim"];?>" class="card-img-top" width="100px;" height="50px;" ></td>						
						<td><?php echo $sonuc['sayfa_adi'] ?></td>
						<td><?php echo $sonuc['sayfa_kategori'] ?></td>
						<td><?php echo $sonuc['sayfa_tarih'] ?></td>
					    <td><?php echo "<a href='pageupdate.php?id=".$sonuc["sayfa_id"]." '>";?>
							<p class="btn btn-success">Düzenle</p></a>
						</td>
						<td><?php echo "<a href='upload.php?id=".$sonuc["sayfa_id"]."' onclick='return confirmDel();'>";?>
							<p class="btn btn-danger">Sil</p></a>
						</td>
						
					</tr>
				<?php
					}
				?>						
			  </tbody>			  	
		</table>
		<div class="text-center"><?php echo $sayfalama; ?></div>
		</div>
    </div>

  </div>
</div>

 <?php				 				 
			 }
		  		   
		   ?>
</body>
</html>
