<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/project/inc/config.php';

if (!isLoggedIn()) {
    header('Location: ' . SITE_URL . 'login.php');
    die();
}

require_once SITE_URI . 'admin/common/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Places</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>admin/dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Places</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="card-title">Places</h3>
                    <a href="<?php echo SITE_URL; ?>admin/places/add.php" class="btn btn-success">Add Place  <i class="fas fa-plus" style="font-size: 10px;"></i></a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Place Image</th>
                            <th>Place Name</th>
                            <th>Location</th>
                            <th>District</th>
                            <th>Dvision</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        // MySQL connection
                        if ($conn = dbConnect()) {
                            $query = "SELECT `places`.*, `districts`.`name` as district_name, `division`.`name` as division_name FROM `places` JOIN `districts` ON `districts`.ID = `places`.`district_id` JOIN `division` ON `division`.ID = `districts`.`division_id` WHERE 1;";

                            $result = mysqli_query($conn, $query);

                            if (mysqli_num_rows($result) > 0) {
                                $i = 1;
                                while ($place = mysqli_fetch_assoc($result)) {
                        ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><img src="<?php echo $place['banner']; ?>" alt="<?php echo $place['name']; ?>" width="100" /></td>
                                        <td><?php echo $place['name']; ?></td>
                                        <td><?php echo $place['location']; ?></td>
                                        <td><?php echo $place['district_name']; ?></td>
                                        <td><?php echo $place['division_name']; ?></td>
                                        <td>
                                            <a href="<?php echo SITE_URL . 'admin/places/edit.php?placeID=' . $place['ID']; ?>" class="btn btn-info">Edit</a>
                                            <form class="d-inline" action="<?php echo SITE_URL . 'inc/placeController.php'; ?>" method="post">
                                                <input type="hidden" name="place_id"  value="<?php echo $place['ID'];?>" />
                                                <input type="hidden" name="operation_type"  value="delete" />
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                        <?php
                                    $i++;
                                }
                            }

                            mysqli_close($conn);
                        } else {
                            die('MySQL Connection Error: ' . mysqli_connect_error());
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Place Image</th>
                            <th>Place Name</th>
                            <th>Location</th>
                            <th>District</th>
                            <th>Dvision</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once SITE_URI . 'admin/common/footer.php';
