<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . 'project/inc/config.php';

if (!isLoggedIn()) {
    header('Location: ' . SITE_URL . 'login.php');
    die();
}

$placeID = ! empty( $_GET['placeID'] ) ? $_GET['placeID'] : 0;

if ( ! $placeID ) { 
    header('Location: ' . SITE_URL . 'admin/places/list.php');
    die();
}

// MySQL connection
if ($conn = dbConnect()) {
	$query = "SELECT places.*, districts.name as district_name FROM places JOIN districts ON districts.ID=places.district_id WHERE places.ID=$placeID";

    //var_dump($query);exit;

    $result = mysqli_query($conn, $query);

    $place = [];
    if ( $result ) {
        $place = mysqli_fetch_assoc($result);
        //echo "<pre>"; print_r($place); echo "</pre>";exit;
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
                        <h1>Edit Place</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>admin/dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active">Edit Place</li>
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
                                <h3 class="card-title">Edit Place</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="<?php echo SITE_URL . 'inc/placeController.php'; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="place" class="col-sm-2 col-form-label">Place Name<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control" id="place" placeholder="Enter Place Name" value="<?php echo $place['name'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="description" class="col-sm-2 col-form-label">Description<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control" id="description" rows="6" placeholder="Enter Description" required><?php echo $place['description'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="banner" class="col-sm-2 col-form-label">Banner<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="file" name="banner" id="banner">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="location" class="col-sm-2 col-form-label">Location<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="location" class="form-control" id="location" placeholder="Enter Location" value="<?php echo $place['location'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="google_map" class="col-sm-2 col-form-label">Google Map<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <textarea name="google_map" class="form-control" id="google_map" rows="6" placeholder="Enter Google Map Embed" required><?php echo $place['google_map'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="youtube_embed" class="col-sm-2 col-form-label">Youtube Embed<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <textarea name="youtube_embed" class="form-control" id="youtube_embed" rows="6" placeholder="Enter Youtube Embed" required><?php echo $place['youtube_link'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="district">District<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <select name="district_id" id="district" class="form-control" required>
                                                <option>Select District</option>

												<?php


												// MySQL connection
												if ($conn = dbConnect()) {
													$query = "SELECT * FROM districts";

													$result = mysqli_query($conn, $query);

													if (mysqli_num_rows($result) > 0) {
														while ($district = mysqli_fetch_assoc($result)) {
															?>
                                                            <option value="<?php echo $district['ID']; ?>"<?php echo $place['district_id'] == $district['ID'] ? ' selected': '';?>><?php echo $district['name']; ?></option>
															<?php
														}
													}

													mysqli_close($conn);
												} else {
													die('MySQL Connection Error: ' . mysqli_connect_error());
												}
												?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <input type="hidden" name="prev_img" value=" <?php echo $place['banner']; ?>"/>
                                    <input type="hidden" name="place_id" value=" <?php echo $place['ID']; ?>"/>
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
