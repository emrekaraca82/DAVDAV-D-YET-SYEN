<?php require_once("baglan.php"); ?>
<!-- php sayfa ekleme -->
<?php 
	 
	if(isset($_POST['btn_kaydet']))
	{
		$sayfa_adi = $_POST["sayfa_adi"];
		$sayfa_icerik = $_POST["sayfa_icerik"];
		$sayfa_kategori = $_POST["sayfa_kategori"];
		$t = date("Y-m-d");
		$sayfa_resim = $_POST["sayfa_resim"]; 
		
				 if($_FILES["sayfa_resim"]["name"]){
			 
				$maxSize = 7000000;
				$dosyaUzantisi = substr($_FILES["sayfa_resim"]["name"],-4,4);
                $dosyaAdi      = rand(0,999999).$dosyaUzantisi;
                @$dosyaYolu     = "upload/".$dosyaAdi; 
			 
			 
							if($_FILES["sayfa_resim"]["size"]> $maxSize){
								
	            echo '<div class="alert alert-warning">dosya boyutu 700 kb dan buyuk olamaz..</div>';
	
								
							}else{
								
									$dosya = $_FILES["sayfa_resim"]["type"];
									
									
										if($dosya == "image/jpeg" || $dosya == "image/png" || $dosya == "image/gif"){
											
											if(is_uploaded_file($_FILES["sayfa_resim"]["tmp_name"])){
												
											
										
										$ok = move_uploaded_file($_FILES["sayfa_resim"]["tmp_name"],$dosyaYolu);
										
										if($ok){
										
										$sayfa_resim = $dosyaYolu;
											
										}else {
											
			          echo '<div class="alert alert-warning">dosya tasınamadı...</div>';

											
										}
												
											}else{
												
												 echo '<div class="alert alert-warning">dosya yuklenemedi..</div>';
											}
											
											
											
										}else{
											
											echo '<div class="alert alert-warning">dosya formati sadece resim olmalıdır...</div>';
											
										}
								
								
							}
			 
		 }
		
		$ekle=$db->prepare("insert into sayfalar set sayfa_adi=?,sayfa_icerik=?,sayfa_kategori=?,sayfa_tarih=?,sayfa_resim=?");
		$ekle->execute(array($sayfa_adi,$sayfa_icerik,$sayfa_kategori,$t,$sayfa_resim));
		header("location:admin.php");
	}
?>
<!-- php sayfa ekleme -->

<?php 
  
	if (!isset($id)) {
		$id = $_GET['id'];
	}	
	$sorgu= $db->query("SELECT * FROM sayfalar where sayfa_id=$id")->fetch(PDO::FETCH_ASSOC);	
	@unlink($sorgu["sayfa_resim"]);
	$veri = $db->prepare("DELETE FROM sayfalar WHERE sayfa_id = :id");
	$delete = $veri->execute(array('id' => $_GET['id']));
	header("location:pages.php");
		
?>