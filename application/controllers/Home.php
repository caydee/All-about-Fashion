<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function  __construct()
          {error_reporting(E_ALL);
              ini_set("display_error",TRUE);
            parent::__construct();
            $this->load->model("home_model");
          }
	public function index()
          {
            $data['title']='HOME : ALL ABOUT FASHION';
            $data["view"]="home";
            $data["art"]=$this->home_model->homepage();
            $this->load->view('structure',array("elements"=>$data));
          }
    public function aboutus()
          {
              $data['about']=$this->home_model->getaboutus();
              $data['title']='ABOUT US : ALL ABOUT FASHION';
              $this->load->view('pages/aboutus',$data);
          }
    public function portfolio()
        {
            $data['title']='Portfolio : ALL ABOUT FASHION';
            $this->load->view('pages/portfolio',$data);
        }
    public function blog()
        {
            $data['categories']=$this->home_model->getCategories();
            $data['recent']=$this->home_model->recentArticles();
            $data['popular']=$this->home_model->popularArticles();
            $data['title']='BLOG : ALL ABOUT FASHION';
            $this->load->view('pages/blogpost',$data);
        }
    public function article($id,$title)
        {
            $data['title']='BLOG : '.$title;
            $this->load->view('pages/blogpost',$data);
        }
    public function contact()
        {
            $data['title']='CONTACT : ALL ABOUT FASHION';
            $data["view"]="contact";
            //$data["art"]=$this->home_model->homepage();
            $this->load->view('structure',array("elements"=>$data));
        }
}
