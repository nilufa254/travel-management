<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/project/inc/config.php';

if (!isLoggedIn()) {
    header('Location: ' . SITE_URL . 'login.php');
    die();
}

$settings = getSettings();

require_once SITE_URI . 'admin/common/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Homepage Settings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>admin/dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Homepage Settings</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Homepage Settings</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo SITE_URL . 'inc/settingsController.php'; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="banner_heading" class="col-sm-2 col-form-label">Banner Heading</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="banner_heading" class="form-control" id="banner_heading" value="<?php echo !empty($settings['banner_heading']) ? $settings['banner_heading'] : ''; ?>" placeholder="Enter Banner Heading">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="banner_text" class="col-sm-2 col-form-label">Banner Text</label>
                                    <div class="col-sm-10">
                                        <textarea name="banner_text" id="banner_text" class="form-control" rows="6" placeholder="Enter Banner Text"><?php echo !empty($settings['banner_text']) ? $settings['banner_text'] : ''; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="banner_button_1" class="col-sm-2 col-form-label">Banner Button 1 Text</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="banner_button_1" class="form-control" id="banner_button_1" value="<?php echo !empty($settings['banner_button_1']) ? $settings['banner_button_1'] : ''; ?>" placeholder="Enter Banner Button 1 Text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="banner_button_2" class="col-sm-2 col-form-label">Banner Button 2 Text</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="banner_button_2" class="form-control" id="banner_button_2" value="<?php echo !empty($settings['banner_button_2']) ? $settings['banner_button_2'] : ''; ?>" placeholder="Enter Banner Button 2 Text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hero_banner" class="col-sm-2 col-form-label">Banner<span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="file" name="hero_banner" id="hero_banner">
                                    </div>
                                </div>
                                <input type="hidden" name="operation_type" value="edit" />
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="<?php echo SITE_URL . 'admin/dashboard.php'; ?>" class="btn btn-default">Back to Dashboard</a>
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
