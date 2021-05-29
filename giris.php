  <link rel="stylesheet" href="styles/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/css/w3.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ckeditor.js"></script>
  
<?php 
    
	require_once("baglan.php");
	require_once("fonksiyon.php");
    
	if(!isset($_POST["login.html"])){
		
		
		   $kulad = @p("kulad",true);
		   $kulsifre = @md5(p("kulsifre",true));
		   		   
		   if(!$kulad || !$kulsifre){
			   
			 echo '<div class="alert alert-warning">gerekli alanları doldurmanız gerekiyor..</div>'; 
			   
		   }else {
			   
			  $query = pre("select * from admin where kul_ad=? and kul_sifre=?"); 
			  $query->execute(array($kulad,$kulsifre)); 
			  $row =  fetch($query);  
			  $kontrol = $query->rowcount();  
			  
			  if($kontrol){
					$_SESSION["uye"] = $row["kul_ad"];
					$_SESSION["id"] = $row["id"];		    						  
					 header("location:admin.php");
													
			  }else { 
			  
		 echo '<div class="alert alert-danger">kullanıcı adı yada sifreniz yanlıs gozukuyor..</div>';
			  
			  }			  
		   }		  
		 	
	}
?>