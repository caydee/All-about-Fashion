<?php
class Home_model extends CI_Model
    {
        public function __construct()
            {
                parent::__construct();
            }
        public function homepage()
            {
                $this->db->where("Inactive is Null");
                $dbh=$this->db->get("homepage");
                if($dbh->num_rows()>0)
                    {
                       return $dbh->result();
                    }
            }
        public function getaboutus()
            {
                $this->db->order_by("id","DESC");
                $this->db->limit(1);
                $dbh=$this->db->get("aboutus");
                if($dbh->num_rows()>0)
                  {
                    return $dbh->result();
                  }
            }
        public function getCategories()
            {
                $this->db->where('inactive is null');
                $dbh=$this->db->get("category");
                if($dbh->num_rows()>0)
                 {
                    return $dbh->result();
                 }
            }
        public function storyByCategory($catid)
            {
                $this->db->select('count(title) as num')
                         ->from('Article')
                         ->where('inactive is null')
                         ->where('blog_category',$catid);
                $dbh=$this->db->get();
                if($dbh->num_rows()>0)
                    {
                        return $dbh->result();
                    }
            }
        public function recentArticles($limit=10)
            {
               $this->db->where('inactive is null')
                        ->limit($limit)
                        ->order_by('publishdate','desc');
               $dbh=$this->db->get("Article");
               if($dbh->num_rows()>0)
                    {
                         return $dbh->result();
                    }
            }
    public function popularArticles($limit=10)
        {
            $this->db->where('inactive is null')
                ->limit($limit)
                ->order_by('article_hits','desc')
                ->order_by('publishdate','desc');
            $dbh=$this->db->get("Article");
            if($dbh->num_rows()>0)
            {
                return $dbh->result();
            }
        }
    }