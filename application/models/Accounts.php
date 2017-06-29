<?php
class Accounts extends CI_Model
	{
		public function __construct()
		  	{
		  		parent::__construct();
		  	}
		public function login()
			{   
				$dbh=$this->db->get("users");
				if($dbh->num_rows()<1)
					{
						//#!2016Fa5h!0N
                       	if(($this->input->post("email")=="admin@aaf.com")&($this->input->post("password")=="1234"))
                       		{
                       			$roles=array("article"=>array("edit","delete","disable"),"users"=>array("edit","delete","disable"));
                       			$x=array("id"=>"#1","Name"=>"DEFAULT ADMIN","Designation"=>"System Administrator","email"=>"admin@aaf.com","password"=>"#!2016Fa5h!0N","role"=>json_encode($roles),"pass_status"=>1,"user_status"=>1,"userimg"=>"uploads/avartar.jpg");
                       			return (object)$x;
                       		}
                       	else
                       	    {
                       	    	 $msg=array("error"=>"Invalid username or password");
                       	    	 return (object)$msg;
                       	    }	
					}
				else
					{
						$this->db->where("email",$this->input->post("email"));
						$s=$this->db->get("users");
						$password=$this->chunga->secu($s->row()->seed,$this->input->post("password"));
						$this->db->where("email",$this->input->post("email"));
						$this->db->where("password",$password);
		                $dbh=$this->db->get("users");
		                if($dbh->num_rows()>0)
		                	{
		                		return $dbh->row();
		                	} 
		                else
                       	    {
                       	    	$msg=array("error"=>"Invalid username or password");
                       	    	return (object)$msg;
                       	    }	
					}	
				
			}
	    public function changepassword()
	    	{
                $this->db->where("email",$this->input->post("email"));
                $dbh=$this->db->get("users");
                if($dbh->num_rows()>0)
                	{   
                		$pass=$this->chunga->passgen(15);
						$seed=$this->chunga->passgen(12);
                		$password=$this->chunga->secu($seed,$pass);
                		$this->db->where("email",$this->input->post("email"));
                		$this->db->update("users",array("password"=>$password,"seed",$seed));
                		if($this->db->affected_rows()>0)
                		   {
                		   	 	return (object)array("message"=>"New password sent to ".$this->input->post("email"),"email"=>$this->input->post("email"),"password"=>$pass);
                		   }
                		else
                		   {
                             	return (object)array("error"=>"password not changed");
                		   }  
                	}
                else
                	{
                        return (object)array("error"=>"Email does not exist");
                	}  	
	    	}
	    public function register()
	    	{

	    	}	
	}