<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index()
	{
		
		$this->load->view('Admin');
	}

	public function admen(){
		$this->load->model('imk');
		$liste['data']= $this->imk->listcomment();
		$this->load->view('navAdmin');
		$this->load->view('accueil_admin',$liste);
	}

	public function confirmer(){
		$this->form_validation->set_rules('login','login', 'required|min_length[4]',
		array('required' => 'Ce champs est obligatoire',
            'min_length' => '4 caractères minimum'));
            $this->form_validation->set_rules('mdp','mdp', 'required|min_length[4]',
            array('required' => 'Ce champs est obligatoire',
                'min_length' => '4 caractères minimum'));
            if($this->form_validation->run())
            {
				$login=$this->input->post('login');
				$pwd=$this->input->post('mdp');

				$tabs=array(
					'loginAdmin'=>$login,
					'mdpAdmin'=>$pwd
				);
				$this->load->model('imk');
				$retour= $this->imk->verifier($tabs);
				if(count($retour)>0)
				{
					$user=$retour[0];
					$ret=array (
						//'id'=>$user->id,
						'login'=>$user->loginAdmin,
						'mdp'=>$user->mdpAdmin,
						'email'=>$user->emailAdmin,
						'is_connected'=>true
					);

				
				$loginAdmin=$ret['login'];
							$mdpAdmin=$ret['mdp'];
							if($login==$loginAdmin && $pwd==$mdpAdmin)
							{
								$this->session->set_userdata($ret);
								
							}
							else{
								$ret=array(
									'error_login'=> 'login ou mot de passe incorrect'
								);
								$this->session->set_flashdata($ret);
								$this->admen();
					
							}
							$this->load->model('imk');
							$liste['data']= $this->imk->listcomment();
							$this->load->view('navAdmin');
							$this->load->view('accueil_admin',$liste);

						}
						else
						{
							$health_d=array(
								'error_login'=> 'login ou mot de passe incorrect'
							);
							$this->session->set_flashdata($health_d);
							$this->load->view('navAdmin');
							//$this->admen();

						}
            }else{
                $this->load->view('admin');
            }

}
public function publications(){
	$this->load->model('imk');
	$retour['data']=$this->imk->listpub();
	$this->load->view('navAdmin');
	$this->load->view('vuepub',$retour);
}
public function newpub(){
	$this->load->view('navAdmin');
	$this->load->view('formpub');
}
public function publier(){
	$titre=$this->input->post('titre');
	$descript=$this->input->post('description');

	$data=array(
		'titre'=>$titre,
		'description'=>$descript
	);
	$this->load->model('imk');
	$rty['data']=$this->imk->publier($data);
	$this->load->view('navAdmin');
	$this->load->view('image',$rty);
}
public function upload($tyr){
	$fil['name']=$this->input->post('userFile');

    $config['upload_path'] = './Assets/img';
    $config['allowed_types']= 'gif|jpg|png|jpeg';
    $config['max_width'] = '2024';
    $config['max_height'] = '2024';
    

    $this->load->library('upload',$config);

    if(!$this->upload->do_upload('userFile') )
    {
        $error = array('error'=>$this->upload->display_errors());
        $id=$this->input->post('userFile');
         var_dump($error);

    }
    else
    {
        $data = array('upload_data' => $this->upload->data());
        
        $ty=$data['upload_data'];
		$this->load->model('imk');
		$this->imk->img($ty['file_name'],$tyr);
		var_dump($tyr);
		//$this->publications();
    }
	

}
public function deconnecter(){
	$this->session->unset_userdata('is_connected');
	redirect('Admin/index');	
}
public function real(){
	$this->load->model('imk');
	$reali['data']=$this->imk->realisation();
	$this->load->view('realis',$reali);
}
public function supprimer($id)
{
	$data=array('idImage'=>$id);
	$this->load->model('imk');
	$this->imk->supp($data);
	redirect('Admin/real');
}
}
