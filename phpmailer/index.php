<?php 

	include '/home/aysedavd/public_html/phpmailer/class.phpmailer.php';

	$smtpuser="info@aysedavdav.com";
	$smtphost="mail.aysedavdav.com";
	$smtpport="587";
	$smtppass="excipialD1.";

	if (isset($_POST["mail_gonder"])) {

	  $adsoyad = htmlspecialchars($_POST["isim"]);
	  $eposta = htmlspecialchars($_POST["email"]);
	  $konu = htmlspecialchars($_POST["konu"]);
	  $mesaj = htmlspecialchars($_POST["mesaj"]);
		
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = $smtphost;
		$mail->Port = $smtpport;
		$mail->SMTPSecure = 'tls';
		$mail->Username = $smtpuser;
		$mail->Password = $smtppass;
		$mail->SetFrom($mail->Username, $adsoyad);
		$mail->AddAddress($smtpuser, $adsoyad);

		$mail->CharSet = 'UTF-8';
		$mail->Subject = $konu;
		$content = '
		<b>Websitenizden gelen iletişim maili</b><br>
		<table align="left" class="tg" style="undefined;table-layout: fixed; width: 535px">

			<tr>
				<td class="tg-031e">Ad Soyad: </td>
				<td class="tg-031e">:</td>
				<td class="tg-031e">'.$adsoyad.'</td>
			</tr>
			<tr>
				<td class="tg-031e">Eposta: </td>
				<td class="tg-031e">:</td>
				<td class="tg-031e">'.$eposta.'</td>
			</tr>
			<tr>
				<td class="tg-031e">Mesaj: </td>
				<td class="tg-031e">:</td>
				<td class="tg-031e">'.$mesaj.'</td>
			</tr>
		</table>';


		$mail->MsgHTML($content);
		if($mail->Send()) {
				header("Location:../iletisim.php");
		} 
		else {
				header("Location:../iletisim.php");
		}
	}

	exit;

?>

