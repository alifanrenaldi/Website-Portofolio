<?php
$connect = mysqli_query("localhost", "root", "", "portofolio_native");

function query($query) {
    global $connect;
    $result = mysqli_query($query, "SELECT * FROM contact");
    $tampung = [];

    while($baris = mysqli_fetch_assoc($result)) {
        $tampung[] = $baris;
    }
    return $tampung;
}
?>