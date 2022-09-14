<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$data = array();
		$data["file"]="index";
		$data["title"]="Digi Web Marketing";
		$this->load->view('template',$data);
	}


	public function about()
	{
		$data = array();
		$data["file"]="about";
		$data["title"]="About Us";
		$data["heading"] = "About Us";
		$data["slug"] = "about";
		$this->load->view('include/template',$data);
	}



	public function team()
	{
		$data = array();
		$data["file"]="team";
		$data["title"]="Our Team";
		$data["heading"] = "Our Team";
		$data["slug"] = "about";
		$this->load->view('include/template',$data);
	}


	public function testimonials()
	{
		$data = array();
		$data["file"]="testimonials";
		$data["title"]="Testimonials";
		$data["heading"] = "Testimonials";
		$data["slug"] = "testimonials";
		$this->load->view('include/template',$data);
	}


	public function faq()
	{
		$data = array();
		$data["file"]="faq";
		$data["title"]="FAQ";
		$data["heading"] = "Frequently Asked Question";
		$data["slug"] = "faq";
		$this->load->view('include/template',$data);
	}


	public function contact()
	{
		$data = array();
		$data["file"]="contact";
		$data["title"]="Contact Us";
		$data["heading"] = "Contact Us";
		$data["slug"] = "contact";
		$this->load->view('include/template',$data);
	}

	public function seo()
	{
		$data = array();
		$data["file"]="seo-optimization";
		$data["title"]="Search Engine Optimization";
		$data["heading"] = "Search Engine Optimization";
		$data["slug"] = "seo";
		$this->load->view('include/template',$data);
	}

	public function sem()
	{
		$data = array();
		$data["file"]="seo-marketing";
		$data["title"]="Search Engine Marketing";
		$data["heading"] = "Search Engine Marketing";
		$data["slug"] = "sem";
		$this->load->view('include/template',$data);
	}

	public function ppc()
	{
		$data = array();
		$data["file"]="ppc";
		$data["title"]="Pay-Per-Click";
		$data["heading"] = "Pay-Per-Click";
		$data["slug"] = "ppc";
		$this->load->view('include/template',$data);
	}

	public function smo()
	{
		$data = array();
		$data["file"]="smo";
		$data["title"]="Social Media Optimization";
		$data["heading"] = "Social Media Optimization";
		$data["slug"] = "smo";
		$this->load->view('include/template',$data);
	}

	public function smm()
	{
		$data = array();
		$data["file"]="smm";
		$data["title"]="Social Media Marketing";
		$data["heading"] = "Social Media Marketing";
		$data["slug"] = "smm";
		$this->load->view('include/template',$data);
	}

	public function email()
	{
		$data = array();
		$data["file"]="email";
		$data["title"]="Email Marketing";
		$data["heading"] = "Email Marketing";
		$data["slug"] = "email";
		$this->load->view('include/template',$data);
	}

	public function content()
	{
		$data = array();
		$data["file"]="content";
		$data["title"]="Content Marketing";
		$data["heading"] = "Content Marketing";
		$data["slug"] = "content";
		$this->load->view('include/template',$data);
	}

	public function google()
	{
		$data = array();
		$data["file"]="google";
		$data["title"]="Google Analytics Services";
		$data["heading"] = "Google Analytics Services";
		$data["slug"] = "google";
		$this->load->view('include/template',$data);
	}


}
