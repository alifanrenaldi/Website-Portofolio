<?php 
$connect = mysqli_connect("localhost", "root", "", "portofolio_native");
function queryi($query){

    global $connect;
    $result = mysqli_query($connect, "SELECT * FROM interest");
    $tampung = [];

    while ($baris = mysqli_fetch_assoc($result)) {
        $tampung[] = $baris;
    }
    return $tampung;
}
?>