<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/project/inc/config.php';

if (!isLoggedIn()) {
    header('Location: ' . SITE_URL . 'login.php');
    die();
}

$divisionID = ! empty( $_GET['divisionID'] ) ? $_GET['divisionID'] : 0;

if ( ! $divisionID ) { 
    header('Location: ' . SITE_URL . 'admin/divisions/list.php');
    die();
}

// MySQL connection
if ($conn = dbConnect()) {
    $query = "SELECT * FROM division WHERE ID=$divisionID";

    $result = mysqli_query($conn, $query);

    $division = [];
    if ( $result ) {
        $division = mysqli_fetch_assoc($result);
    }
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
                    <h1>Edit Division</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>admin/dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Edit Division</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Edit Division</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo SITE_URL . 'inc/divisionController.php' ;?>" method="post" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="division" class="col-sm-2 col-form-label">Division Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="division" value="<?php echo $division['name'];?>" placeholder="Enter Division Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="short" class="col-sm-2 col-form-label">Division Short Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="short" class="form-control" id="short" value="<?php echo $division['short'];?>" placeholder="Enter Division Short Name">
                                    </div>
                                </div>
                                <input type="hidden" name="division_id"  value="<?php echo $division['ID'];?>" />
                                <input type="hidden" name="operation_type"  value="edit" />
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="<?php echo SITE_URL . 'admin/divisions/list.php'; ?>" class="btn btn-default">Back to List</a>
                                <button type="submit" class="btn btn-info float-right">Submit</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once SITE_URI . 'admin/common/footer.php';
