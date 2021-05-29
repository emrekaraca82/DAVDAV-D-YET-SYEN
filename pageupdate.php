<?php require_once("baglan.php"); ?>
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
  <link rel="stylesheet" href="styles/admin/pagesupdate.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ckeditor.js"></script>
</head>
<body>
<?php 		   
		     if(@$_SESSION["uye"]){
				 
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
	<?php 
	if (!isset($id)) {
			$id = $_GET['id'];
		}	
		$veri= $db->query("SELECT * FROM sayfalar where sayfa_id=$id")->fetch(PDO::FETCH_ASSOC);
	?>
	<!-- php sayfa güncelle -->
	<?php 
		if(isset($_POST['btn_düzenle']))
		{	
			$sayfa_adi = $_POST["sayfa_adi"];
			$sayfa_icerik = $_POST["sayfa_icerik"];
			$sayfa_kategori = $_POST["sayfa_kategori"];
			
					 if($_FILES["sayfa_resim"]["name"]){
							 
							$maxSize = 7000000;
							$dosyaUzantisi = substr($_FILES["sayfa_resim"]["name"],-4,4);
                            $dosyaAdi      = rand(0,999999).$dosyaUzantisi;
                            $dosyaYolu     = "upload/".$dosyaAdi;  
                        				  
							
							if($_FILES["sayfa_resim"]["size"]> $maxSize){
								
	            echo '<div class="alert alert-warning">dosya boyutu 700 kb dan buyuk olamaz..</div>';
	
								
							}else {
								
								$dosya = $_FILES["sayfa_resim"]["type"];
								
								
								if($dosya == "image/jpeg" || $dosya == "image/png" || $dosya == "image/gif"){
									
									
									if(is_uploaded_file($_FILES["sayfa_resim"]["tmp_name"])){
										 
										@unlink($veri["sayfa_resim"]);
										
										$ok = move_uploaded_file($_FILES["sayfa_resim"]["tmp_name"],$dosyaYolu);
										
										if($ok){
										
										$sayfa_resim = $dosyaYolu;
											
										}else {
											
			          echo '<div class="alert alert-warning">dosya tasınamadı...</div>';

											
										}
										
										
									}else {
										
										
			       echo '<div class="alert alert-warning">dosya yuklenemedi..</div>';

										
									}
									
									
								}else {
									
									echo '<div class="alert alert-warning">dosya formati sadece urun_resim olmalıdır...</div>';
									
								}								
								
							}
																											 
						 } 
					
			$guncelle=$db->prepare("UPDATE sayfalar SET sayfa_adi=?, sayfa_icerik=?, sayfa_kategori=?,sayfa_resim=? WHERE sayfa_id=?");
			$guncelle->execute(array($sayfa_adi,$sayfa_icerik,$sayfa_kategori,$sayfa_resim,$id));
			header("location:pages.php");
		}
	?>
<!-- php sayfa güncelle -->
    <div  style="margin-bottom:15px; " class="col-sm-9">
	<div class="well">YAZI İÇERİĞİNİ DÜZENLEME İŞLEMLERİ</div>
		<div class="cizgi">
			<p>Sitenizdeki sayfaları buradan yönetebilirsiniz.</p>
		</div><br>
	<form method="post" enctype="multipart/form-data">
	<p>
	  <label>Sayfa Adı</label>
	  <input name="sayfa_adi" class="w3-input w3-border" type="text" value="<?php echo $veri['sayfa_adi']; ?>">
	</p><br>
	
	<p>
	  <label>Sayfa İçeriği</label>
	  <textarea name="sayfa_icerik" id="editor"><?php echo $veri['sayfa_icerik']; ?></textarea>
		<script>
			ClassicEditor
				.create( document.querySelector( '#editor' ) )
				.then( editor => {
					console.log( editor );
				} )
				.catch( error => {
					console.error( error );
				} );
		</script>
    </p><br>  
	
	<p>
	  <label>Kategori Adı</label><br>
	  <select name="sayfa_kategori" class="form-control">
		<option value="Tarif">Tarif</option>
		<option value="Blog">Blog</option>
	  </select>
	</p><br>
	<div class="form-group">
		<label>Ürün Resim</label>
        <input type="file" name="sayfa_resim" />
	</div>
	
		<button type="submit" name="btn_düzenle" class="btn btn-primary btn-md">Verileri Güncelle</button><br>
	</form>
    </div>
  </div>
</div>
 <?php				 				 
			 }
		  		   
		   ?>

</body>
</html>