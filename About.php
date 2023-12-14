<?php 
$connect = mysqli_connect("localhost", "root","","portofolio_native");

function query($query) {

    global $connect;
    $result = mysqli_query($connect, "SELECT * FROM about");
    $tampung = [];

    while( $baris = mysqli_fetch_assoc($result)) {
        $tampung[] = $baris;
    }
    return $tampung;
}
?>