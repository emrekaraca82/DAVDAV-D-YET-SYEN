<?php require_once("baglan.php"); ?>
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
<link rel="stylesheet" href="styles/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/css/w3.css">
<link rel="stylesheet" href="styles/admin/admin.css">
<script src="styles/js/jquery.min.js"></script>
<script src="styles/js/bootstrap.min.js"></script>
<script src="styles/js/ckeditor.js"></script> 
</head>
<body>
	<?php 		   
		     if(@$_SESSION["uye"]){
				 
				 ?>
<div  style="margin-top:15px; margin-left:10px;" class="container-fluid">
  <div class="row content">
    <div  class="col-sm-3 sidenav text-center">
      <h4>Ayşe Davdav</h4>
	  <img src="images/ayse.jpg" class="w3-circle" style="width:50%"><br><br>
      <ul class="nav nav-pills nav-stacked">
		<li class="active"><a href="admin.php">ANASAYFA</a></li><br>
        <li class="active"><a href="pages.php">SAYFA İŞLEMLERİ</a></li><br>
        <li class="active"><a href="basari.php">BAŞARI ÖYKÜLERİ</a></li><br>
		<li class="active"><a href="cikis.php">ÇIKIŞ</a></li>
      </ul>
    </div>
		
		
    <div style="margin-bottom:15px; " class="col-sm-9 col-md-9 col-lg-9">	
		<div  class="well text-center"><strong>ADMİN YÖNETİM PANELİ</strong></div>
		<div class="cizgi">
			<p>Sitenizi buradan yönetebilirsiniz.</p>
		</div><br>
		<div class="row">
			<?php  
				$vericek = $db->query("SELECT * FROM sayfalar order by sayfa_id desc limit 6", PDO::FETCH_ASSOC); 
				foreach($vericek as $row){	
					$row['sayfa_id'];
			?>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading text-center"><?php echo $row['sayfa_adi'] ?></div>
					<div class="panel-body"><img src="<?php echo $row["sayfa_resim"];?>" class="panel-img-top"></div>
					<div class="panel-footer">
						<?php echo "<a href='page.php?id=".$row["sayfa_id"]." '>";?>
							<p class="btn btn-secondary">Devamını Oku »</p></a>
					</div>
				</div>
			</div>
			<?php
				}
			?>	
		</div>
    </div>
	
  </div>
</div>


	 <?php				 				 
			 }
		  		   
		   ?>
	
</body>
</html>
