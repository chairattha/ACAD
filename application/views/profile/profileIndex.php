<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Profile
                </div>
                <h2 class="page-title">
                    Personnel Information
                </h2>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="row g-0">
                <div class="col d-flex flex-column">
                    <form id="insert-form" method="post" autocomplete="off" enctype="multipart/form-data">
                        <div class="card-body">
                            <h2 class="mb-4">Personnel</h2>
                            <h3 class="card-title">Profile Image</h3>
                            <div class="row align-items-center">
                                <input type='file' id="inPersonnelLogo" style="display:none;" />
                                <input type='hidden' id="inPersonnelLogo64" name="inPersonnelLogo64"
                                    style="display:none;" value="" />
                                <div class="col-auto">
                                    <span class="avatar avatar-xl" id="logo-image"
                                        style="background-image: url('<?php echo $row["personnel_profile_image"] ?>');">
                                    </span>
                                </div>

                                <div class="col-auto">
                                    <a href="#" class="btn" id="btn-change-image">Change avatar</a>
                                </div>
                            </div>
                            <h3 class="card-title mt-4">Information</h3>
                            <div class="row g-3">
                                <div class="col-md">
                                    <?php _label("Title Name"); ?>
                                    <?php _input($type = "text", $id = "inTitleName", $name = "inTitleName", $value = $row["personnel_titlename"]); ?>

                                </div>
                                <div class="col-md">
                                    <?php _label("First Name"); ?>
                                    <?php _input($type = "text", $id = "inFirstName", $name = "inFirstName", $value = $row["personnel_firstname"]); ?>
                                </div>
                                <div class="col-md">
                                    <?php _label("Last Name"); ?>
                                    <?php _input($type = "text", $id = "inLastName", $name = "inLastName", $value = $row["personnel_lastname"]); ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent mt-auto">
                            <div class="btn-list justify-content-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" id="inPersonnelId" name="inPersonnelId"
                            value="<?php echo $row["personnel_id"] ?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#btn-change-image").click(function () {
        $('#inPersonnelLogo').trigger('click');
    });

    $("#inPersonnelLogo").change(function () {
        readURL(this);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#inPersonnelLogo64").val(e.target.result);
                $('#logo-image').css('background-image', 'url(' + e.target.result + ')');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#insert-form").submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url("ProfileController/profile_update"); ?>",
            data: $(this).serialize(),
        }).done(function (data) {
            location.reload();
        });
    });
</script>