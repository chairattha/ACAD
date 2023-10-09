<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    School
                </div>
                <h2 class="page-title">
                    School Information
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
                            <h2 class="mb-4">My School</h2>
                            <h3 class="card-title">School Logo</h3>
                            <div class="row align-items-center">
                                <input type='file' id="inSchoolLogo" style="display:none;" />
                                <input type='hidden' id="inSchoolLogo64" name="inSchoolLogo64" style="display:none;"
                                    value="" />
                                <div class="col-auto">
                                    <span class="avatar avatar-xl" id="logo-image"
                                        style="background-image: url('<?php echo $row["school_logo"] ?>');"></span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="btn" id="btn-change-image">Change Logo</a>
                                </div>
                            </div>
                            <h3 class="card-title mt-4">Information</h3>
                            <div class="row g-3">
                                <div class="col-md">
                                    <label class="form-label">Advanced select</label>
                                    <select type="text" class="form-select" id="inSchoolTypeId" name="inSchoolTypeId">
                                        <option value="">--Select--</option>
                                        <?php foreach ($schoolTypeArr as $r) { ?>
                                            <?php $chk = ""; ?>
                                            <?php if ($r["school_type_id"] == $row["school_type_id"]) { ?>
                                                <?php $chk = "selected" ?>
                                            <?php } ?>
                                            <option value="<?php echo $r["school_type_id"] ?>" <?php echo $chk ?>><?php echo $r["type_name"] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md">
                                    <?php _label("School Name"); ?>
                                    <?php _input($type = "text", $id = "inSchoolName", $name = "inSchoolName", $value = $row["school_name"]); ?>
                                </div>
                                <div class="col-md">
                                    <div class="form-label">School ID</div>
                                    <input type="text" class="form-control" id="" name="">
                                </div>

                            </div>

                            <h3 class="card-title mt-4">Location</h3>
                            <div class="row g-3">
                                <div class="col-md">
                                    <div class="form-label">Tambol</div>
                                    <input type="text" class="form-control" id="inSchoolTambol" name="inSchoolTambol"
                                        value="<?php echo $row["school_tambol"] ?>">
                                </div>
                                <div class="col-md">
                                    <div class="form-label">Amphur</div>
                                    <input type="text" class="form-control" id="inSchoolAmphur" name="inSchoolAmphur"
                                        value="<?php echo $row["school_amphur"] ?>">
                                </div>
                                <div class="col-md">
                                    <div class="form-label">Province</div>
                                    <input type="text" class="form-control" id="inSchoolProvince"
                                        name="inSchoolProvince" value="<?php echo $row["school_province"] ?>">
                                </div>
                                <div class="col-md">
                                    <div class="form-label">Zipcode</div>
                                    <input type="text" class="form-control" id="inSchoolZipcode" name="inSchoolZipcode"
                                        value="<?php echo $row["school_zipcode"] ?>">
                                </div>
                                <div class="col-md">
                                    <div class="form-label">Phone</div>
                                    <input type="text" class="form-control" id="inSchoolPhone" name="inSchoolPhone"
                                        value="<?php echo $row["school_phone"] ?>">
                                </div>
                            </div>

                        </div>
                        <div class="card-footer bg-transparent mt-auto">
                            <div class="btn-list justify-content-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" id="inSchoolId" name="inSchoolId"
                            value="<?php echo $row["school_id"] ?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var img64 = "";
    $("#btn-change-image").click(function () {
        $('#inSchoolLogo').trigger('click');
    });

    $("#inSchoolLogo").change(function () {
        readURL(this);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#inSchoolLogo64").val(e.target.result);
                $('#logo-image').css('background-image', 'url(' + e.target.result + ')');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#insert-form").submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url("SchoolController/update_school"); ?>",
            data: $(this).serialize(),
        }).done(function (data) {
            location.reload();
        });
    });
</script>