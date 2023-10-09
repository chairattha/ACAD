<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title text-muted">
                    <a class='text-blue' href="<?php echo site_url("student"); ?>">Student</a>/
                    <?php echo (!empty($this->uri->segment(2))) ? "Edit student" : "Create new student"; ?>
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
                        <input type="hidden" id="inStdId" name="inStdId" value="<?php echo (!empty($this->uri->segment(2))) ? $this->uri->segment(2) : ""; ?>" />

                        <div class="card-body">
                            <h2 class="mb-4">Student</h2>
                            <h3 class="card-title">User Image</h3>
                            <div class="row align-items-center">
                                <input type='file' id="inStudentLogo" style="display:none;" />
                                <input type='hidden' id="inStudentLogo64" name="inStudentLogo64" style="display:none;" value="<?php echo (!empty($row["profileimage"])) ? $row["profileimage"] : ""; ?>" />
                                <div class="col-auto">
                                    <span class="avatar avatar-xl" id="logo-image" style="background-image: url('<?php echo (!empty($row["profileimage"])) ? $row["profileimage"] : ""; ?>');">
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
                                    <select class="form-select tomselected " id="inTitleName" name="inTitleName">
                                        <option value="">เลือกข้อมูล</option>
                                        <?php $title = array("เด็กชาย", "เด็กหญิง", "นาย", "นางสาว"); ?>
                                        <?php foreach ($title as $t) { ?>
                                            <?php $sel = (!empty($row["titlename"]) && $row["titlename"] == $t) ? "selected" : ""; ?>
                                            <option value="<?php echo $t ?>" <?php echo $sel ?>><?php echo $t ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md">
                                    <?php _label("First Name"); ?>
                                    <input type="text" class="form-control " id="inFirstName" name="inFirstName" value="<?php echo (!empty($row["firstname"])) ? $row["firstname"] : ""; ?>" required />
                                </div>
                                <div class="col-md">
                                    <?php _label("Last Name"); ?>
                                    <input type="text" class="form-control" id="inLastName" name="inLastName" value="<?php echo (!empty($row["lastname"])) ? $row["lastname"] : ""; ?>" required />
                                </div>
                                <div class="col-md">
                                    <?php _label("Nick Name"); ?>
                                    <input type="text" class="form-control" id="inNickName" name="inNickName" value="<?php echo (!empty($row["nickname"])) ? $row["nickname"] : ""; ?>" />
                                </div>
                                <div class="col-md">
                                    <?php _label("Id Card"); ?>
                                    <input type="text" class="form-control" id="inIdCard" name="inIdCard" value="<?php echo (!empty($row["idcard"])) ? $row["idcard"] : ""; ?>" />
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md">
                                    <?php _label("Birth Date"); ?>
                                    <input type="date" class="form-control" id="inBirthDate" name="inBirthDate" value="<?php echo (!empty($row["birthdate"])) ? todate($row["birthdate"]) : ""; ?>" />
                                </div>
                                <div class="col-md">
                                    <?php _label("Gender"); ?>
                                    <select type="text" class="form-select tomselected " id="inGenDer" name="inGenDer">
                                        <option value="">เลือกข้อมูล</option>
                                        <?php $gender = array("ชาย", "หญิง"); ?>
                                        <?php foreach ($gender as $g) { ?>
                                            <?php $sel = (!empty($row["gender"]) && $row["gender"] == $g) ? "selected" : ""; ?>
                                            <option value="<?php echo $g ?>" <?php echo $sel ?>><?php echo $g ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md">
                                    <?php _label("Blood Type"); ?>
                                    <select type="text" class="form-select tomselected " id="inBloodType" name="inBloodType">
                                        <option value="">เลือกข้อมูล</option>
                                        <?php $blood = array("O", "A", "B"); ?>
                                        <?php foreach ($blood as $b) { ?>
                                            <?php $sel = (!empty($row["bloodtype"]) && $row["bloodtype"] == $b) ? "selected" : ""; ?>
                                            <option value="<?php echo $b ?>" <?php echo $sel ?>><?php echo $b ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md">
                                    <?php _label("Religion"); ?>
                                    <select type="text" class="form-select tomselected " id="inReligion" name="inReligion" value="" tabindex="-1">
                                        <option value="">เลือกข้อมูล</option>
                                        <?php $religion = array("พุทธ", "คริสต์", "อิสลาม"); ?>
                                        <?php foreach ($religion as $r) { ?>
                                            <?php $sel = (!empty($row["religion"]) && $row["religion"] == $r) ? "selected" : ""; ?>
                                            <option value="<?php echo $r ?>" <?php echo $sel ?>><?php echo $r ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php //_input($type = "text", $id = "inReligion", $name = "inReligion", $value = "") 
                                    ?>
                                </div>
                                <div class="col-md">
                                    <?php _label("Ethnicity"); ?>
                                    <select type="text" class="form-select tomselected " id="inEthnicity" name="inEthnicity" value="" tabindex="-1">
                                        <option value="">เลือกข้อมูล</option>
                                        <?php $ethnicity = array("ไทย", "อังกฤษ"); ?>
                                        <?php foreach ($ethnicity as $e) { ?>
                                            <?php $sel = (!empty($row["ethnicity"]) && $row["ethnicity"] == $e) ? "selected" : ""; ?>
                                            <option value="<?php echo $e ?>" <?php echo $sel ?>><?php echo $e ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php //_input($type = "text", $id = "inEthnicity", $name = "inEthnicity", $value = "") 
                                    ?>
                                </div>
                                <div class="col-md">
                                    <?php _label("Nationality"); ?>
                                    <select type="text" class="form-select tomselected " id="inNationality" name="inNationality" value="" tabindex="-1">
                                        <option value="">เลือกข้อมูล</option>
                                        <?php $nationality = array("ไทย", "อังกฤษ"); ?>
                                        <?php foreach ($nationality as $n) { ?>
                                            <?php $sel = (!empty($row["nationality"]) && $row["nationality"] == $n) ? "selected" : ""; ?>
                                            <option value="<?php echo $n ?>" <?php echo $sel ?>><?php echo $n ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php //_input($type = "text", $id = "inNationality", $name = "inNationality", $value = "") 
                                    ?>
                                </div>
                                <div class="col-md">
                                    <?php _label("Phone Number"); ?>
                                    <input type="text" class="form-control" id="inPhoneNumber" name="inPhoneNumber" value="<?php echo (!empty($row["phonenumber"])) ? $row["phonenumber"] : ""; ?>" />
                                </div>
                            </div>
                            <hr>
                            <h2 class="mb-4"><b>Address</b></h2>
                            <h3 class="card-title mb-4"><b>ข้อมูลที่อยู่ปัจจุบัน</b></h3>
                            <div class="row g-3">
                                <? php // print_r($row);
                                ?>
                                <div class="col-md">
                                    <?php _label("บ้านเลขที่"); ?>
                                    <input type="text" class="form-control " id="inC_No" name="inC_No" value="<?php echo (!empty($row["c_address_no"])) ? $row["c_address_no"] : ""; ?>" />
                                </div>
                                <div class="col-md">
                                    <?php _label("หมู่"); ?>
                                    <input type="text" class="form-control " id="inC_Moo" name="inC_Moo" value="<?php echo (!empty($row["c_address_moo"])) ? $row["c_address_moo"] : ""; ?>" />
                                </div>
                                <div class="col-md">
                                    <?php _label("ตำบล"); ?>
                                    <input type="text" class="form-control" id="inC_Tambol" name="inC_Tambol" value="<?php echo (!empty($row["c_address_tambol"])) ? $row["c_address_tambol"] : ""; ?>" />
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md">
                                    <?php _label("อำเภอ"); ?>
                                    <input type="text" class="form-control" id="inC_AmPhur" name="inC_AmPhur" value="<?php echo (!empty($row["c_address_amphur"])) ? $row["c_address_amphur"] : ""; ?>" />
                                </div>
                                <div class="col-md">
                                    <?php _label("จังหวัด"); ?>
                                    <input type="text" class="form-control" id="inC_Province" name="inC_Province" value="<?php echo (!empty($row["c_address_province"])) ? $row["c_address_province"] : ""; ?>" />
                                </div>
                                <div class="col-md">
                                    <?php _label("รหัสไปรษณีย์"); ?>
                                    <input type="text" class="form-control" id="inC_ZipCode" name="inC_ZipCode" value="<?php echo (!empty($row["c_address_zipcode"])) ? $row["c_address_zipcode"] : ""; ?>" />
                                </div>
                            </div>

                            <h3 class="card-title mt-4"><b>ข้อมูลที่อยู่ตามทะเบียนบ้าน</b></h3>
                            <div class="row g-3">
                                <div class="col-md">
                                    <?php _label("บ้านเลขที่"); ?>
                                    <input type="text" class="form-control " id="inR_No" name="inR_No" value="<?php echo (!empty($row["r_address_no"])) ? $row["r_address_no"] : ""; ?>"  />
                                </div>
                                <div class="col-md">
                                    <?php _label("หมู่"); ?>
                                    <input type="text" class="form-control " id="inR_Moo" name="inR_Moo" value="<?php echo (!empty($row["r_address_moo"])) ? $row["r_address_moo"] : ""; ?>"  />
                                </div>
                                <div class="col-md">
                                    <?php _label("ตำบล"); ?>
                                    <input type="text" class="form-control" id="inR_Tambol" name="inR_Tambol" value="<?php echo (!empty($row["r_address_tambol"])) ? $row["r_address_tambol"] : ""; ?>"  />
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md">
                                    <?php _label("อำเภอ"); ?>
                                    <input type="text" class="form-control" id="inR_AmPhur" name="inR_AmPhur" value="<?php echo (!empty($row["r_address_amphur"])) ? $row["r_address_amphur"] : ""; ?>" />
                                </div>
                                <div class="col-md">
                                    <?php _label("จังหวัด"); ?>
                                    <input type="text" class="form-control" id="inR_Province" name="inR_Province" value="<?php echo (!empty($row["r_address_province"])) ? $row["r_address_province"] : ""; ?>" />
                                </div>
                                <div class="col-md">
                                    <?php _label("รหัสไปรษณีย์"); ?>
                                    <input type="text" class="form-control" id="inR_ZipCode" name="inR_ZipCode" value="<?php echo (!empty($row["r_address_zipcode"])) ? $row["r_address_zipcode"] : ""; ?>" />
                                </div>
                            </div>

                            <hr>
                            <h2 class="mb-4"><b>Parent</b></h2>

                            <h3 class="card-title mt-4"><b>ข้อมูลมารดา</b></h3>
                            <div class="row g-3">
                                <div class="row align-items-center">
                                <input type='file' id="inParentLogo" style="display:none;" />
                                <input type='hidden' id="inParentLogo64" name="inParentLogo64" style="display:none;" value="<?php echo (!empty($row["m_profile_image"])) ? $row["m_profile_image"] : ""; ?>" />
                                <div class="col-auto">
                                    <span class="avatar avatar-xl" id="logo-image" style="background-image: url('<?php echo (!empty($row["m_profile_image"])) ? $row["m_profile_image"] : ""; ?>');">
                                    </span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="btn" id="btn-change-image">Change avatar</a>
                                </div>
                            </div>
                                <div class="col-md">
                                    <?php _label("title name"); ?>
                                    <input type="text" class="form-control " id="inM_TitleName" name="inM_TitleName" value="<?php echo (!empty($row["m_titlename"])) ? $row["m_titlename"] : ""; ?>" />
                                </div>
                                <div class="col-md">
                                    <?php _label("First name"); ?>
                                    <input type="text" class="form-control " id="inM_FirstName" name="inM_FirstName" value="<?php echo (!empty($row["m_firstname"])) ? $row["m_firstname"] : ""; ?>" />
                                </div>
                                <div class="col-md">
                                    <?php _label("Last name"); ?>
                                    <input type="text" class="form-control" id="inM_LastName" name="inM_LastName" value="<?php echo (!empty($row["m_lastname"])) ? $row["m_lastname"] : ""; ?>" />
                                </div>
                                <div class="col-md">
                                    <?php _label("อำเภอ"); ?>
                                    <input type="text" class="form-control" id="inM_PhoneNumber" name="inM_PhoneNumber" value="<?php echo (!empty($row["m_phonenumber"])) ? $row["m_phonenumber"] : ""; ?>" />
                                </div>
                            </div>
                            
                            <h3 class="card-title mb-4"><b>ข้อมูลบิดา</b></h3>
                            <div class="row g-3">
                                <? php // print_r($row);
                                ?>
                                <div class="row align-items-center">
                                <input type='file' id="inParentLogo" style="display:none;" />
                                <input type='hidden' id="inParentLogo64" name="inParentLogo64" style="display:none;" value="<?php echo (!empty($row["f_profile_image"])) ? $row["f_profile_image"] : ""; ?>" />
                                <div class="col-auto">
                                    <span class="avatar avatar-xl" id="logo-image" style="background-image: url('<?php echo (!empty($row["f_profile_image"])) ? $row["f_profile_image"] : ""; ?>');">
                                    </span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="btn" id="btn-change-image">Change avatar</a>
                                </div>
                            </div>
                                <div class="col-md">
                                    <?php _label("title name"); ?>
                                    <input type="text" class="form-control " id="inF_TitleName" name="inF_TitleName" value="<?php echo (!empty($row["f_titlename"])) ? $row["f_titlename"] : ""; ?>" />
                                </div>
                                <div class="col-md">
                                    <?php _label("First name"); ?>
                                    <input type="text" class="form-control " id="inF_FirstName" name="inF_FirstName" value="<?php echo (!empty($row["f_firstname"])) ? $row["f_firstname"] : ""; ?>" />
                                </div>
                                <div class="col-md">
                                    <?php _label("Last name"); ?>
                                    <input type="text" class="form-control" id="inF_LastName" name="inF_LastName" value="<?php echo (!empty($row["f_lastname"])) ? $row["f_lastname"] : ""; ?>" />
                                </div>
                                <div class="col-md">
                                    <?php _label("อำเภอ"); ?>
                                    <input type="text" class="form-control" id="inF_PhoneNumber" name="inF_PhoneNumber" value="<?php echo (!empty($row["f_phonenumber"])) ? $row["f_phonenumber"] : ""; ?>" />
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
            url: " <?php echo (!empty($this->uri->segment(2))) ? site_url("StudentController/update_student") : site_url("StudentController/insert_student"); ?>",
            data: $(this).serialize(),
        }).done(function(data) {
            //$("#inFirstName").addClass("is-invalid");
            location.reload();
        });
    });
</script>