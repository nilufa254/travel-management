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
                    <h1>Divisions</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>admin/dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Divisions</li>
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
                    <h3 class="card-title">Divisions</h3>
                    <a href="<?php echo SITE_URL; ?>admin/divisions/add.php" class="btn btn-success">Add Division  <i class="fas fa-plus" style="font-size: 10px;"></i></a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Division Name</th>
                            <th>Division Short Form</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        // MySQL connection
                        if ($conn = dbConnect()) {
                            $query = "SELECT * FROM division";

                            $result = mysqli_query($conn, $query);

                            if (mysqli_num_rows($result) > 0) {
                                $i = 1;
                                while ($division = mysqli_fetch_assoc($result)) {
                        ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $division['name']; ?></td>
                                        <td><?php echo $division['short']; ?></td>
                                        <td>
                                            <a href="<?php echo SITE_URL . 'admin/divisions/edit.php?divisionID=' . $division['ID']; ?>" class="btn btn-info">Edit</a>
                                            <form class="d-inline" action="<?php echo SITE_URL . 'inc/divisionController.php'; ?>" method="post">
                                                <input type="hidden" name="division_id"  value="<?php echo $division['ID'];?>" />
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
                            <th>Division Name</th>
                            <th>Division Short Form</th>
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
