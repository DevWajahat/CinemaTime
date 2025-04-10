<?php
include 'conn.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "DELETE FROM `theaters` WHERE id= $id";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Theatre deleted successfully!'); window.location.href = 'theatres.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}