<?php
class Cms extends CI_Controller
    {
        public function __construct()
            {
                parent::__construct();
                $this->checkifloggedin();
                $this->load->model("Cms_model");
                $this->load->model("home_model");
                $this->load->library("Chunga");
            }
        public function pagination($baseurl,$totalrows,$perpage=20)
            {
                $this->load->library('pagination');
                $config['num_links'] = 9;
                //$config['page_query_string'] = TRUE;
                //$config['use_page_numbers'] = TRUE;

                $config['full_tag_open'] = '<div class=""><ul>';
                $config['full_tag_close'] = '</ul></div><!--pagination-->';
                $config['first_link'] = '&laquo; First';
                $config['first_tag_open'] = '<li class="page-item">';
                $config['first_tag_close'] = '</li>';
                $config['last_link'] = 'Last &raquo;';
                $config['last_tag_open'] = '<li class="page-item">';
                $config['last_tag_close'] = '</li>';
                $config['next_link'] = 'Next &rarr;';
                $config['next_tag_open'] = '<li class="page-item">';
                $config['next_tag_close'] = '</li>';
                $config['prev_link'] = '&larr; Previous';
                $config['prev_tag_open'] = '<li class="page-item">';
                $config['prev_tag_close'] = '</li>';
                $config['cur_tag_open'] = '<li class="active page-item"><a href="">';
                $config['cur_tag_close'] = '</a></li>';
                $config['num_tag_open'] = '<li class="page-item">';
                $config['num_tag_close'] = '</li>';
                // $config['display_pages'] = FALSE;
                $config['anchor_class'] = 'page-link';
                $config['base_url'] = $baseurl;
                $config['total_rows'] = $totalrows;
                $config['per_page'] = $perpage;
           
                $this->pagination->initialize($config);
                return $this->pagination->create_links();
            }
        public function index()
            {
                try
                    {
                       $data["view"]="main"; 
                       $this->load->view("cms/structure",array("elements"=>$data));
                    }
                catch (Exception $e)
                    {
                        $this->log("cms.php","MAIN INDEX:".$e->getMessage());
                    }
            }
        public function home()
            {
                try
                {
                    
                    $data["view"]="home";
                    $this->load->view("cms/structure",array("elements"=>$data));

                }
                catch (Exception $e)
                {
                    $this->log("cms.php","About Us:".$e->getMessage());
                }
            }
        public function AboutUs()
            {
                try
                {
                    $data['about']=$this->home_model->getaboutus();
                    $data["view"]="AboutUs";
                    $this->load->view("cms/structure",array("elements"=>$data));
                    
                }
                catch (Exception $e)
                {
                    $this->log("cms.php","About Us:".$e->getMessage());
                } 
            }    
        public function article($value)
            {
                try
                {
                    switch($value)
                        {
                            case 'Add':
                                if($this->input->post("save")||$this->input->post("publish"))
                                    {   
                                        $data["msg"]="";  
                                        $x=$this->picuploads("main upload",array('max_size'=>500,'overwrite'=>FALSE,'file_ext_tolower'=>TRUE));
                                        if (array_key_exists("upload_data", $x))
                                           {
                                                $upload = $x["upload_data"]["file_name"];
                                                //$this->output->set_output(json_encode($upload)); exit();
                                           } 
                                        else if (array_key_exists("error", $x))
                                            {
                                               $data["msg"] .=$x["error"];
                                               $upload = NULL;
                                            }
                                        $data["msg"].=$this->Cms_model->addArticle($upload);
                                    }
                                $data["categorylist"]=$this->Cms_model->getCategories();
                                $data["view"]="article";
                                break;
                            case "View":
                                $perpage=10;
                                $rows=$this->Cms_model->totalarticles();
                                $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
                                $data["link"]=$this->pagination(site_url('cms/article/View'),$rows,$perpage);
                                $data["value"]=$this->Cms_model->viewarticles($perpage, $page);
                                $data["view"]="view_articles";
                                break;
                            case "preview":
                                $data["value"]=$this->Cms_model->readarticle($this->uri->segment(4));
                                $data["view"]="preview";
                                break;
                            
                        }
                    
                    $this->load->view("cms/structure",array("elements"=>$data));
                    
                }
                catch (Exception $e)
                {
                    $this->log("cms.php","MAIN INDEX:".$e->getMessage());
                } 
            } 
        public function category($value,$ck=null)
            {
                try
                {
                    switch($value)
                        {
                            case 'Add':
                                //$data["categorylist"]=$this->Cms_model->getCategories();
                                if($ck!=null)
                                  {
                                     $data["resp"]=$this->Cms_model->addCategory();
                                  }
                                $data["view"]="add_category";
                                break;
                            case "View":
                                $data["view"]="view_categories";
                                break;    
                        }
                    
                    $this->load->view("cms/structure",array("elements"=>$data));
                    
                }
                catch (Exception $e)
                {
                    $this->log("cms.php","MAIN INDEX:".$e->getMessage());
                } 
            }           
        public function checkifloggedin()
            {
                try
                    {
                        if ($_SESSION['login'] != TRUE)
                            {
                                redirect("login","refresh");
                            }
                    }
                catch (Exception $e)
                    {
                        $this->log("cms.php","CHECK LOGIN:".$e->getMessage());
                    }
            }
        public function log($file,$msg)
            {
                file_put_contents(FCPATH."application/logs/".$file,"\n".$msg,FILE_APPEND);
            }
        public function picuploads($x=NULL,$config=NULL)
            {
                $config['upload_path']= FCPATH."uploads";
                $config['allowed_types']='gif|jpg|png|jpeg';
                $config['file_ext_tolower']     = TRUE;
                $config['file_name'] = "FILE-".time();              
                $this->load->library('upload', $config);
                if( ! $this->upload->do_upload('image'))
                  {
                    $error = array('error' => $this->upload->display_errors());
                    $this->output->set_output(json_encode($error));
                  }
                else
                  {
                    $data = array('upload_data' => $this->upload->data());
                    if($x=="main upload")
                      {
                         return $data;
                      }
                    else
                       {
                          $this->output->set_output($data["upload_data"]["file_name"]);
                       }  
                    
                  }
            }
        public function users($value)
             {
                error_reporting(E_ALL);
                ini_set("display_errors",1);
                switch($value)
                    {
                        case "Add":
                            //$this->output->set_output(date("Y"));
                            if($this->input->post('save'))
                               {
                                   $data['msg']=$this->Cms_model->adduser();
                               }
                            $data['view']='add_user';
                            break;
                        case "View":
                            $perpage=10;
                            $rows=$this->Cms_model->totalusers();
                            $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
                            $data["link"]=$this->pagination(site_url('cms/users/View'),$rows,$perpage);
                            $data["value"]=$this->Cms_model->viewuser($perpage, $page);
                            $data['view']='view_users';
                            break;
                        default:
                            $data['view']='main';
                                break;
                    }
                $this->load->view("cms/structure",array("elements"=>$data));
             }
    }