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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->model('welcome_model');
		$data = array(
			$shopgroup = $this->welcome_model->shopgroup(),
			$categorie = $this->welcome_model->categorie()
	);
		if (isset($this->session)){
			$data = array(
				'Id'=>$this->session->Id,
				'Name'=>$this->session->Name,
				'Surname'=>$this->session->Surname,
				'Email'=>$this->session->Email,
				'Phone'=>$this->session->Phone,
				'Adress'=>$this->session->Adress,
				'Priority'=>$this->session->Priority,
				'Remember'=>$this->session->Remember,
				'shopgroup'=>$shopgroup,
				'categorie'=>$categorie
			);
		}
		$this->load->view('accueil',$data);
	}
	public function single($idProduct)
	{
		$this->load->model('welcome_model');
		$shopgroup = $this->welcome_model->shopgroup();
		$categorie = $this->welcome_model->categorie();
		$product = $this->welcome_model->displayItem($idProduct);
		$this->load->view('single', array('shopgroup'=>$shopgroup,'categorie'=>$categorie,'product'=>$product));
	}

	public function categorie($idCategorie){
		$this->load->model('welcome_model');
		$shopgroup = $this->welcome_model->shopgroup();
		$categorie = $this->welcome_model->categorie();
		$selectCategorie = $this->welcome_model->displayCategorie($idCategorie);
		$categorieSelect = $idCategorie;
			$this->load->view('categories', array('shopgroup'=>$shopgroup,'categorie'=>$categorie,'selectCategorie'=>$selectCategorie,'categorieSelect'=>$categorieSelect));
	}
	public function typeSelect($idCategorie,$idsouscategorie,$idtype){
		$this->load->model('welcome_model');
		$shopgroup = $this->welcome_model->shopgroup();
		$categorie = $this->welcome_model->categorie();
		$selectCategorie = $this->welcome_model->displayCategorie($idCategorie);
		$categorieSelect = $idCategorie;
		if(!empty($idsouscategorie) AND !empty($idtype)){
			$this->load->view('categories', array('shopgroup'=>$shopgroup,'categorie'=>$categorie,'selectCategorie'=>$selectCategorie,'categorieSelect'=>$categorieSelect));
		}else{
			$this->load->view('categories', array('shopgroup'=>$shopgroup,'categorie'=>$categorie,'selectCategorie'=>$selectCategorie,'categorieSelect'=>$categorieSelect));
		}

	}
	public function registration(){
		$this->load->model('welcome_model');
		$shopgroup = $this->welcome_model->shopgroup();
		$categorie = $this->welcome_model->categorie();
		if ($this->welcome_model->register() == 1){
			$message = "Votre compte a bel et bien été créé
						Veuillez vous connecter !!";
			$this->load->view('accueil', array('shopgroup'=>$shopgroup,'categorie'=>$categorie,'message'=>$message));
		}elseif ($this->welcome_model->register() == 2){
			$message = "Une erreur est survenue à a création de votre compte";
			$this->load->view('accueil', array('shopgroup'=>$shopgroup,'categorie'=>$categorie,'message'=>$message));
		}elseif ($this->welcome_model->register() == 3){
			$message = "Cet utilisateur existe déjà";
			$this->load->view('accueil', array('shopgroup'=>$shopgroup,'categorie'=>$categorie,'message'=>$message));
		}elseif ($this->welcome_model->register() == 4){
			$message = "Les mots de passe ne correspondent pas ";
			$this->load->view('accueil', array('shopgroup'=>$shopgroup,'categorie'=>$categorie,'message'=>$message));
		}elseif ($this->welcome_model->register() == 5){
			$message = "Veuillez remplir tous les champs du formulaire s'il vous plait";
			$this->load->view('accueil', array('shopgroup'=>$shopgroup,'categorie'=>$categorie,'message'=>$message));
		}

	}
	public function connection(){
		$this->load->model('welcome_model');
		$shopgroup = $this->welcome_model->shopgroup();
		$categorie = $this->welcome_model->categorie();
		if ($this->welcome_model->connect() == 1){
			$data = array(
				'Id'=>$this->session->Id,
				'Name'=>$this->session->Name,
				'Surname'=>$this->session->Surname,
				'Email'=>$this->session->Email,
				'Phone'=>$this->session->Phone,
				'Adress'=>$this->session->Adress,
				'Priority'=>$this->session->Priority,
				'Remember'=>$this->session->Remember,
				'shopgroup'=>$shopgroup,
				'categorie'=>$categorie
			);
			$this->index();
			/*$this->load->view('accueil', $data);*/
		}

	}
	public function deconnexion(){
		$this->load->model('welcome_model');
		$this->welcome_model->deconnect();
		redirect('welcome/index');
	}
	public function sell(){
		$this->load->model('welcome_model');
		$this->welcome_model->becomeSeller();
	}
	public function upload(){

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 268;
		$config['max_width'] = 1680;
		$config['max_height'] = 700;

		$this->load->library('upload',$config);

		if ($this->upload->do_upload('Photo'))
		{
			print_r($this->upload->data());
			die;
		}
		else
		{
			print_r($this->upload->display_errors());
		}
	}

}
