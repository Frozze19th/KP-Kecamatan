<?php
include_once 'koneksi.php';
require_once 'authentication/check.php';
$sql = "DELETE FROM pengusaha WHERE ijin_usaha='" . $_GET["ijin_usaha"] . "'";
if (mysqli_query($link, $sql)) {
    echo "Record deleted successfully";
	header("location:daftarusahaadmin.php");
} else {
    echo "Error deleting record: " . mysqli_error($link);
}
mysqli_close($link);
?>