<?php
include 'conn.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "DELETE FROM `movies` WHERE `id` = $id";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Movie deleted successfully!'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}

