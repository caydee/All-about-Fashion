<?php
class Cms_model extends CI_Model
	{
		public function __construct()
			{
				parent::__construct();
			}
		public function getCategories($limit=null,$start=0)
			{   
				if($limit!=null)
					{
						$this->db->limit($limit,$start);
					}
				$this->db->where("inactive is null");
				$dbh=$this->db->get("category");
				return $dbh->result();
			}
		public function addArticle($x)
		    {
		    	$data=array(
					         	"title"=>$this->input->post("title"),
					        	"story"=>$this->input->post("story"),
					        	"listorder"=>$this->input->post("listorder"),
					        	"keywords"=>$this->input->post("keywords"),
					        	"blog_category"=>$this->input->post("category"),
					        	"thumbcaption"=>$this->input->post("caption"),
					        	"thumburl"=>$x
					        );

				if($this->input->post("save"))
					{
					  	$data["inactive"]="b:1";
					}
				else
			        {
			      	    $data["inactive"]=NULL;
			        }  
                $this->db->where("title",$this->input->post("title"));
                $dbh=$this->db->get("Article");
                if($dbh->num_rows()>0)
                   {

                   	  $this->db->where("id",$dbh->row()->id);
                   	  $this->db->update("Article",$data);
                   	  return ($this->db->affected_rows()>0)?"Article - ".$data["title"]." created successfully":"Article update failed";
                   }
                else
                   {    
                   	    //$this->db->where("id",$dbh->row()->id);

                   		$this->db->insert("Article",$data);
                   		return ($this->db->affected_rows()>0)?"Data insert successful":"Article creation failed";
                   }   
		    }	
		public function addCategory()
			{  
				$data=array(
					         	"categoryname"=>$this->input->post("catName"),
					        	"description"=>$this->input->post("description"),
					        	"categorylistorder"=>$this->input->post("categorylistorder")
					        );
				if($this->input->post("save"))
					{
					  	$data["inactive"]="b:1";
					}
				else
			        {
			      	    $data["inactive"]=NULL;
			        }  
                $this->db->like("categoryname",$this->input->post("catName"));
                $dbh=$this->db->get("category");
                if($dbh->num_rows()>0)
                   {
                   	  $this->db->where("id",$dbh->row()->id);
                   	  $this->db->update("category",$data);
                   	  return ($this->db->affected_rows()>0)?"Data updated successful":"category update failed";
                   }
                else
                   {    
                   	    //$this->db->where("id",$dbh->row()->id);
                   		$this->db->insert("category",$data);
                   		return ($this->db->affected_rows()>0)?"Category ".$data["categoryname"]." created successfully":"Category creation failed";
                   }   
				
			}
	    public function adduser()
			{

				//unset($this->input->post('roles'));
                $x=$this->input->post("pass1");
                unset($_POST['save']);
                unset($_POST['pass1']);
                unset($_POST["pass2"]);
				$data=$this->input->post();
                $data['seed']=$this->chunga->passgen(12);
                $data["password"]=$this->chunga->secu($data['seed'],$x);

                $data["role"]=json_encode((array)$this->input->post('role'));
				$this->db->insert("users",$data);
                if($this->db->affected_rows()>0)
                  {
                      return "succeeded";
                  }
                else
                  {
                      return json_encode($this->db->error());
                  }
			}
        public function viewuser($limit, $start)
            {
                $this->db->limit($limit, $start);
                $dbh=$this->db->get('users');
                return $dbh->result();
            }
	    public function totalusers()
		   {
			   $this->db->select("count(email) as totusers");
			   $this->db->from("users");
			   $dbh=$this->db->get();
			   return $dbh->row()->totusers;
		   }
		public function viewarticles($limit, $start)
			{
				$this->db->select('Article.id,Article.inactive,Article.thumburl,Article.updateddate,Article.publishdate,Article.author,Article.title,category.categoryname');
				$this->db->from("Article,category");
				$this->db->where("category.id=Article.blog_category");
				$this->db->limit($limit, $start);
				$this->db->order_by("Article.updateddate","DESC");
				$dbh=$this->db->get();
				return $dbh->result();
			}
		public function totalarticles()
		   {
			   $this->db->select("count(title) as totarticles");
			   $this->db->from("Article");
			   $dbh=$this->db->get();
			   return $dbh->row()->totarticles;
		   }
        public function readarticle($id,$where=null)
            {
                if($where!=null)
                  {
                      $this->db->where($where);
                  }
                $this->db->where("id",$id);
                $dbh=$this->db->get("Article");
                return $dbh->row();
            }
	}