<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}
	public function home()
	{
		$this->load->view('home');
	}
	public function apropos(){
		$this->load->view('about');
	}
	public function service()
	{
		$this->load->view('services');
	}
	public function gallerie()
	{
		$this->load->model('imk');
	$reali['data']=$this->imk->realisation();
	$this->load->view('gallery',$reali);
		
	}
	public function contact()
	{
		$this->load->view("contact");
	}
	public function souscrire(){
		$name=$this->input->post('name');
		$msg=$this->input->post('msg');

		$data=array(
			'contenu'=>$msg,
			'name'=>$name
		);
		$this->load->model('imk');
		$rat['data']=$this->imk->commenter($data);
		$this->load->view('comment',$rat);
	}
	public function send_mail(){

		$name = strip_tags(trim($this->input->post('name')));
		$name = str_replace(array("\r","\n"),array(" "," "),$name);

		$sujet=trim($this->input->post('subject'));
		$email_adress = filter_var(trim($this->input->post('email')), FILTER_SANITIZE_EMAIL);
		$corp = trim($this->input->post('message'));

		if ( empty($name) OR empty($corp) OR empty($sujet)OR !filter_var($email_adress, FILTER_VALIDATE_EMAIL)){
			// Set a 400 (bad request) response code and exit.
			http_response_code(400);
			echo "Veuillez remplir tous les champs.";
			exit;
		}
		 
		
		$this->load->library('email');
        $fromName=$name;
        $to='imkdesign@gmail.com';
        $subject=$sujet;
        $message=$corp;
        $from =$email_adress;
        $this->email->from($from, $fromName);
        $this->email->to($to);

        $this->email->subject($subject);
        $this->email->message($message);

        if($this->email->send())
        {
            echo "Mail Sent Successfully";
        }
        else
        {
            echo "Failed to send email";
            // show_error($this->email->print_debugger());             
                }
    }
}
