<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    <a href="<?php echo site_url("student"); ?>">Student </a>
                </div>
                <h2 class="page-title text-muted">
                    Create new student
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
                            <h2 class="mb-4">Student</h2>
                            <h3 class="card-title">User Image</h3>
                            <div class="row align-items-center">
                                <input type='file' id="inStudentLogo" style="display:none;" />
                                <input type='hidden' id="inStudentLogo64" name="inStudentLogo64" style="display:none;" value="" />
                                <div class="col-auto">
                                    <span class="avatar avatar-xl" id="logo-image" style="background-image: url('');">
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
                                    <select type="text"  class="form-select tomselected " id="inTitleName" name="inTitleName" value="" tabindex="-1">
                                        <option value="">เลือกข้อมูล</option>
                                        <option value="เด็กหญิง">เด็กหญิง</option>
                                        <option value="เด็กชาย">เด็กชาย</option>
                                        <option value="นางสาว">นางสาว</option>
                                        <option value="นาย">นาย</option>
                                    </select>
                                    <?php //_input($type = "text", $id = "inTitleName", $name = "inTitleName", $value = "") 
                                    ?>

                                </div>
                                <div class="col-md">
                                    <?php _label("First Name"); ?>
                                    <?php _input($type = "text", $id = "inFirstName", $name = "inFirstName", $value = "",$req="required") ?>
                                </div>
                                <div class="col-md">
                                    <?php _label("Last Name"); ?>
                                    <?php _input($type = "text", $id = "inLastName", $name = "inLastName", $value = "",$req="required") ?>
                                </div>
                                <div class="col-md">
                                    <?php _label("Id Card"); ?>
                                    <?php _input($type = "text", $id = "inIdCard", $name = "IdCard", $value = "") ?>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md">
                                    <?php _label("Birth Date"); ?>
                                    <?php _input($type = "date", $id = "inBirthDate", $name = "inBirthDate", $value = "") ?>

                                </div>
                                <div class="col-md">
                                    <?php _label("Blood Type"); ?>
                                    <select type="text" class="form-select tomselected " id="inBloodType" name="inBloodType" value="" tabindex="-1">
                                        <option value="">เลือกข้อมูล</option>
                                        <option value="O">O</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                    </select>
                                    <?php //_input($type = "text", $id = "inBloodType", $name = "inBloodType", $value = "") 
                                    ?>
                                </div>
                                <div class="col-md">
                                    <?php _label("Phone Number"); ?>
                                    <?php _input($type = "text", $id = "inPhoneNumber", $name = "inPhoneNumber", $value = "") ?>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md">
                                    <?php _label("Religion"); ?>
                                    <select type="text" class="form-select tomselected " id="inReligion" name="inReligion" value="" tabindex="-1">
                                        <option value="">เลือกข้อมูล</option>
                                        <option value="พุทธ">พุทธ</option>
                                        <option value="คริสต์">คริสต์</option>
                                        <option value="อิสลาม">อิสลาม</option>
                                    </select>
                                    <?php //_input($type = "text", $id = "inReligion", $name = "inReligion", $value = "") 
                                    ?>
                                </div>
                                <div class="col-md">
                                    <?php _label("Ethnicity"); ?>
                                    <select type="text" class="form-select tomselected " id="inEthnicity" name="inEthnicity" value="" tabindex="-1">
                                        <option value="">เลือกข้อมูล</option>
                                        <option value="ไทย">ไทย</option>
                                        <option value="อังกฤษ">อังกฤษ</option>
                                    </select>
                                    <?php //_input($type = "text", $id = "inEthnicity", $name = "inEthnicity", $value = "") ?>
                                </div>
                                <div class="col-md">
                                    <?php _label("Nationality"); ?>
                                    <select type="text" class="form-select tomselected " id="inNationality" name="inNationality" value="" tabindex="-1">
                                        <option value="">เลือกข้อมูล</option>
                                        <option value="ไทย">ไทย</option>
                                        <option value="อังกฤษ">อังกฤษ</option>
                                    </select>
                                    <?php //_input($type = "text", $id = "inNationality", $name = "inNationality", $value = "") ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent mt-auto">
                            <div class="btn-list justify-content-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#btn-change-image").click(function() {
        $('#inStudentLogo').trigger('click');
    });

    $("#inStudentLogo").change(function() {
        readURL(this);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#inStudentLogo64").val(e.target.result);
                $('#logo-image').css('background-image', 'url(' + e.target.result + ')');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#insert-form").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url("StudentController/insert_student"); ?>",
            data: $(this).serialize(),
        }).done(function(data) {
            // alert(data);
            location.reload();
        });
    });
</script>