<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SchoolController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata("userStatus"))) {
            redirect(site_url(), 'refresh');
        }
        $this->load->model("SchoolModel");
    }

    #School Information Setting
    public function schoolIndex()
    {
        $data["schoolTypeArr"] = $this->SchoolModel->get_school_type();
        $data["row"] = $this->SchoolModel->get_school();
        $this->load->view("layout/header");
        $this->load->view("school/schoolIndex", $data);
        $this->load->view("layout/footer");
    }

    public function update_school()
    {
        $data = array(
            'school_type_id' => $_POST["inSchoolTypeId"],
            'name' => $_POST["inSchoolName"],
            'logo' => $_POST["inSchoolLogo64"],
            'tambol' => $_POST["inSchoolTambol"],
            'amphur' => $_POST["inSchoolAmphur"],
            'province' => $_POST["inSchoolProvince"],
            'zipcode' => $_POST["inSchoolZipcode"],
            'phone' => $_POST["inSchoolPhone"]
        );
        $this->SchoolModel->update_school($_POST["inSchoolId"], $data);
        echo $_POST["inSchoolId"]; //$this->input->post("inSchoolName");
    }

    #Education Year and Semester Setting
    public function educationYearSemesterIndex()
    {
        $this->load->view("layout/header");
        $this->load->view("school/setting/educationYearSemesterIndex");
        $this->load->view("layout/footer");
    }
}