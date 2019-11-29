<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class imk extends CI_Model
{
    public $adm='Admin';
    public $pub='images';
    public $comm='commentaires';
    public function verifier($data)
    {
        $this->db->where($data);
        $q=$this->db->get($this->adm);
        $res=$q->result();
        return $res;

    }
    public function listpub(){
        return $this->db->get($this->pub)->result();
    }
    public function listcomment(){
        return $this->db->get($this->comm)->result();
    }
    public function publier($data){
        $this->db->insert($this->pub, $data);
        $this->db->where($data);
        $a=$this->db->get($this->pub);
        $ste=$a->result();
        return $ste; 
    }
    public function img($fil,$a){
        $this->db->set('name',$fil);
        $this->db->where('titre',$a);
        $this->db->update($this->pub);
	}
	public function commenter($data)
	{
		$this->db->insert($this->comm,$data);
		return $this->db->get($this->comm)->result();
	}
	public function realisation(){
		return $this->db->get($this->pub)->result();
	}
	public function supp($d){
		$this->db->where($d);
		$this->db->delete($this->pub);
	}
}
