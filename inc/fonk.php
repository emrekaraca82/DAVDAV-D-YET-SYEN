<?php
@$baglanti = new mysqli("127.0.0.1", "aysedavd_root", "F(E2Ebu0YaYD", "aysedavd_data");

if ($baglanti->connect_error) {
    echo $baglanti->connect_error . " hatasi oluştu";
    exit;
}
$baglanti->set_charset("UTF-8");

