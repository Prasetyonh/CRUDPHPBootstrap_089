<?php

$koneksi=mysqli_connect("localhost","root","","umy");

if(mysqli_connect_error()) {
    echo "Koneksi  database gagal : " . mysqli_connect_error();
}