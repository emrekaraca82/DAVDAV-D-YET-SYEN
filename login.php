<?php require_once("baglan.php");  ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Elbistan Diyetisyen Ayşe Davdav</title>
  <meta charset="utf-8">
<style>
body {
	font-family: Arial, Helvetica, sans-serif;
}
form {
	border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width:100%;
}

button:hover {
  opacity: 0.8;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  margin-left: 200px;
  margin-right: 200px;
}

@media (max-width: 425.99px) { 
		.container {
		  padding: 16px;
		  margin-left: 0px;
		  margin-right: 0px;
		}
		img.avatar {
			width: 60%;
			border-radius: 50%;
		}
	}
	
	@media (min-width: 426px) and (max-width: 768.99px) {
		.container {
		  padding: 16px;
		  margin-left: 100px;
		  margin-right: 100px;
		}
		img.avatar {
			width: 35%;
			border-radius: 50%;
		}
	}
	
	@media (min-width: 769px) and (max-width: 1024.99px) {
		.container {
		  padding: 16px;
		  margin-left: 200px;
		  margin-right: 200px;
		}
		img.avatar {
			width: 30%;
			border-radius: 50%;
		}
	}
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<form action="giris.php" method="post">
  <div class="imgcontainer">
    <img src="images/ayse.jpg" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Kullanıcı Adı</b></label>
    <input type="text" placeholder="Lütfen Kullanıcı Adını Giriniz" name="kulad" required>

    <label for="psw"><b>Şifre</b></label>
    <input type="password" placeholder="Lütfen Şifrenizi Giriniz" name="kulsifre" required>
        
    <button type="submit" name="giris">Giriş</button>
  </div>
</form>

</body>
</html>
