<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata("userStatus"))) {
            redirect(site_url(), 'refresh');
        }
        $this->load->model("PersonnelModel");
    }
    public function activityIndex()
    {
        $this->load->model("UserModel");
        $data["Logs"] = $this->UserModel->get_user_logs($this->session->userdata("userId"));
        $this->load->view("layout/header");
        $this->load->view("profile/activityIndex", $data);
        $this->load->view("layout/footer");
    }

    public function profileIndex()
    {
        $data["row"] = $this->PersonnelModel->get_personnel_by_user_id($this->session->userdata("userId"));
        $this->load->view("layout/header");
        $this->load->view("profile/profileIndex", $data);
        $this->load->view("layout/footer");
    }

    public function profile_update()
    {
        $data = array(
            'titlename' => $_POST["inTitleName"],
            'firstname' => $_POST["inFirstName"],
            'lastname' => $_POST["inLastName"],
            'profile_image' => $_POST["inPersonnelLogo64"]
        );
        $this->PersonnelModel->update_personnel($_POST["inPersonnelId"], $data);

        $Personnel = $this->PersonnelModel->get_personnel_by_user_id($this->session->userdata("userId"));
        $this->session->set_userdata('userName', $Personnel["personnel_fullname"]);
        $this->session->set_userdata('userImage', $Personnel['personnel_profile_image']);
        // 'profile_image' => $_POST["inSchoolAmphur"]
    }

}