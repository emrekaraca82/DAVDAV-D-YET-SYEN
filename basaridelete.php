<?php require_once("baglan.php"); ?>
<?php 
  
	if (!isset($id)) {
		$id = $_GET['id'];
	}	
	$sorgu= $db->query("SELECT * FROM basari where basari_id=$id")->fetch(PDO::FETCH_ASSOC);	
	@unlink($sorgu["basari_resim"]);
	$veri = $db->prepare("DELETE FROM basari WHERE basari_id = :id");
	$delete = $veri->execute(array('id' => $_GET['id']));
	header("location:basari.php");
		
?>