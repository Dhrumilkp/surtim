<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home/Home_model');
	}
	public function index()
	{
		$this->load->view('comingsoon.html');
	}
	public function landing()
	{
		$data['category_data'] = $this->Home_model->getcatdata();
		$data['get_slider_data'] = $this->Home_model->getslider_data();
		$data['get_contact_data'] = $this->Home_model->getcontact_data();
		$data['get_address_data'] = $this->Home_model->getaddress_data();
		$data['get_email_data'] = $this->Home_model->getemail();
		$data['book_data'] = $this->Home_model->getbookdatahome();
		$this->load->view('welcome_message',$data);
	}
	public function about()
    {
		$data['category_data'] = $this->Home_model->getcatdata();
		$data['get_contact_data'] = $this->Home_model->getcontact_data();
		$data['get_address_data'] = $this->Home_model->getaddress_data();
		$data['get_email_data'] = $this->Home_model->getemail();
		$data['get_about_header_slider'] = $this->Home_model->getaboutslider();
		$data['get_about_text_data'] = $this->Home_model->getabouttextdata();
        $this->load->view('About/About_view',$data);
	}
	public function shop($type,$id)
    {
		if($type == "product")
		{
			$data['category_data'] = $this->Home_model->getcatdata();
			$data['get_contact_data'] = $this->Home_model->getcontact_data();
			$data['get_address_data'] = $this->Home_model->getaddress_data();
			$data['get_email_data'] = $this->Home_model->getemail();
			$data['get_book_data'] = $this->Home_model->getbookdatabasedid($id);
			$this->load->view('Shope/Book_view',$data);
		}
		else
		{
			$data['category_data'] = $this->Home_model->getcatdata();
			$data['get_contact_data'] = $this->Home_model->getcontact_data();
			$data['get_address_data'] = $this->Home_model->getaddress_data();
			$data['get_email_data'] = $this->Home_model->getemail();
			$data['book_data'] = $this->Home_model->getcallbookscat($id);
			$this->load->view('Shope/Shope_view',$data);
		}
        
	}
	public function contact()
	{
		$data['category_data'] = $this->Home_model->getcatdata();
		$data['get_contact_data'] = $this->Home_model->getcontact_data();
		$data['get_address_data'] = $this->Home_model->getaddress_data();
		$data['get_google_map'] =  $this->Home_model->getgooglemarker();
		$data['get_email_data'] = $this->Home_model->getemail();
		$this->load->view('Contact/Contact_view',$data);
	}
	public function shopping()
	{
		$data['category_data'] = $this->Home_model->getcatdata();
		$data['get_contact_data'] = $this->Home_model->getcontact_data();
		$data['get_address_data'] = $this->Home_model->getaddress_data();
		$data['get_email_data'] = $this->Home_model->getemail();
		$data['book_data'] = $this->Home_model->getallbooks();
		$this->load->view('Shope/Shope_view',$data);
	}
}
