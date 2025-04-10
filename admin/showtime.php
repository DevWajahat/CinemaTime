<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header('Location: login.php');
    exit();
}
include 'header.php';
?>
<?php include 'sidebar.php'; ?>
<?php include 'navbar.php'; ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Showtime</h6>
        </div>
        <a href="addshowtime.php" class="btn btn-outline-primary w-100 m-2" type="button">Add Showtime</a>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">Id</th>
                        <th scope="col">Movie Title</th>
                        <th scope="col">Theatre Name</th>
                        <th scope="col">Show Date</th>
                        <th scope="col">Show Time</th>
                        <th scope="col">Class Type</th>
                        <th scope="col">Price</th>
                        <th scope="col">Created At</th>
                        <th scope="col" colspan="2" style="text-align:center;">Operations</th>
                    </tr>
                </thead>
                <?php
                include 'conn.php';
                $query = mysqli_query($conn, "SELECT showtime.id, movies.title AS movie_title, theaters.name AS theater_name, showtime.show_date, showtime.show_time, showtime.class_type, showtime.price, showtime.created_at 
                                              FROM showtime 
                                              JOIN movies ON showtime.movie_id = movies.id 
                                              JOIN theaters ON showtime.theatre_id = theaters.id");
                while ($fetch = mysqli_fetch_array($query)) {
                ?>
                <tbody>         
                    <tr>
                        <td><?php echo $fetch['id']; ?></td>
                        <td><?php echo $fetch['movie_title']; ?></td>
                        <td><?php echo $fetch['theater_name']; ?></td>
                        <td><?php echo $fetch['show_date']; ?></td>
                        <td><?php echo $fetch['show_time']; ?></td>
                        <td><?php echo $fetch['class_type']; ?></td>
                        <td><?php echo $fetch['price']; ?></td>
                        <td><?php echo $fetch['created_at']; ?></td>
                        <td><a href="deleteshowtime.php?id=<?php echo $fetch['id']; ?>" class="btn btn-primary">Delete</a></td>
                        <td><a href="updateshowtime.php?id=<?php echo $fetch['id']; ?>" class="btn btn-primary">Update</a></td>
                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
