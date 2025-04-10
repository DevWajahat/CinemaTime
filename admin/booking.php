
<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header('Location: login.php');
    exit();
}


include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'navbar.php'; ?>

<div class="container-fluid pt-4 px-4" style="width:70vw;">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Bookings</h6>
        </div>
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">Booking ID</th>
                        <th scope="col">User ID</th>
                        <th scope="col">Showtime</th>
                        <th scope="col">Number of Tickets</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Booking Date</th>
                        <th scope="col" colspan="2" style="text-align:center;">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'conn.php';
                    $query=mysqli_query($conn,"SELECT * FROM bookings");
                    while($fetch=mysqli_fetch_array($query)){
                    ?>
                        <tr>
                            <td><?php echo $fetch['id']; ?></td>
                            <td><?php echo $fetch['user_name']; ?></td>
                            <td><?php echo $fetch['showtime_info']; ?></td>
                            <td><?php echo $fetch['number_of_tickets']; ?></td>
                            <td><?php echo $fetch['total_price']; ?></td>
                            <td><?php echo $fetch['booking_date']; ?></td>
                            <td><a href="deletebooking.php?id=<?php echo $fetch['id']; ?>" class="btn btn-primary">Delete</a></td>
                            <td><a href="updatebooking.php?id=<?php echo $fetch['id']; ?>" class="btn btn-primary">Update</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>



<?php include 'footer.php';?>
        


           