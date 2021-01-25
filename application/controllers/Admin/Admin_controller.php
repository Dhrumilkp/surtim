<?php 
class Admin_controller extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/Admin_model');
    }
    public function admin()
    {
        if(isset($_SESSION['csrf']))
        {
            redirect(base_url()."home");
        }
        else
        {
            $this->load->view('Admin/login_view');
        }
    }
    public function authuser()
    {
        $this->Admin_model->authuser($_POST);
    }
}
