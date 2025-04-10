<?php
include 'conn.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "DELETE FROM `showtime` WHERE id= $id";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Showtime deleted successfully!'); window.location.href = 'showtime.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}