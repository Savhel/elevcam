<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	public function shopgroup(){
		$query = "SELECT * FROM shopgroup";
		$select = $this->db->query($query);
		return $select;
	}
	public function categorie(){
		$query = "SELECT * FROM categories";
		$select = $this->db->query($query);
		return $select;
	}
	public function countShopGroup($id){
		$query = "SELECT * FROM sellers WHERE  IDGROUP = ?";
		$select = $this->db->query($query, array($id));
		if($select->num_rows() >= 2){

			if($select->num_rows() % 2 == 0){
				$count = $this->shopgroup()->num_rows() / 2;
			}else{
				$count = floor($this->shopgroup()->num_rows() / 2) + 1;
			}
		}
		return $count;
	}
	public function displayItem($id){
		$query = "SELECT * FROM products WHERE  IDPRODUCT = ?";
		$select = $this->db->query($query, array($id));
		return $select;
	}
	public function displayCategorie($id){
		$query = "SELECT * FROM categories WHERE  IDCATEGORIE = ?";
		$select = $this->db->query($query, array($id));
		return $select;
	}
	public function register(){
			if(!empty($_POST['Name']) AND !empty($_POST['Surname'])
				AND !empty($_POST['Phone']) AND !empty($_POST['Adresse'])
				AND !empty($_POST['password']) AND !empty($_POST['Cpassword']) AND !empty($_POST['Email']) AND valid_email($_POST['Email'])){
				$Name = htmlspecialchars($this->input->post('Name'));
				$Surname = htmlspecialchars($this->input->post('Surname'));
				$Phone = htmlspecialchars($this->input->post('Phone'));
				$Adresse = htmlspecialchars($this->input->post('Adresse'));
				$Password = htmlspecialchars(password_hash($this->input->post('password'),PASSWORD_DEFAULT));
				$Email = htmlspecialchars($this->input->post('Email'));
				$Browse = $_SERVER['REMOTE_ADDR'];
				$Id = "1234567890AZERTYUIOPQSDFGHJKLMWXCVBNazertyuiopmlkjhgfdsqwxcvbn£$";
				$Idcustomer = substr(str_shuffle($Id), 0,9);
				if (htmlspecialchars($this->input->post('password')) == htmlspecialchars($this->input->post('Cpassword')) ){

					$check = "SELECT * FROM customer WHERE NAMECUSTOMER = ? AND SURNAMECUSTOMER = ? AND EMAILCUSTOMER = ? AND PHONECUSTOMER = ?";
					$query = $this->db->query($check,array($Name,$Surname,$Email,$Phone));
					if ($query->num_rows() == 0){
						$data = array(
							'IDCUSTOMER'=>$Idcustomer,
							'NAMECUSTOMER' => $Name,
							'SURNAMECUSTOMER'=> $Surname,
							'EMAILCUSTOMER'=>$Email,
							'PHONECUSTOMER'=>$Phone,
							'ADRESSCUSTOMER'=>$Adresse,
							'PASSWORD'=>$Password,
							'BROWSERCUSTOMER'=>$Browse,
							'PRIORITY'=>"1A2"
						);
						if ($this->db->insert('customer',$data)){
							return 1;
						}else{
							return 2;
						}
					}else{
						return 3;
					}
				}else{
					return 4;
				}

			}else{
				return 5;
			}
		}
		public function connect(){
			if(!empty($_POST['Email']) AND !empty($_POST['Password']) AND valid_email($_POST['Email'])){
				if (isset($_POST['Remember'])){
					$Email = htmlspecialchars($this->input->post('Email'));
					$Password = htmlspecialchars($this->input->post('Password'));
					$check = "SELECT * FROM customer WHERE EMAILCUSTOMER = ?";
					$query = $this->db->query($check,array($Email));
					if ($query->num_rows() == 1){
						$data = $query->row();
						if (password_verify($Password,$data->PASSWORD)){
							$this->session->set_userdata('Id',$data->IDCUSTOMER);
							$this->session->set_userdata('Name',$data->NAMECUSTOMER);
							$this->session->set_userdata('Surname',$data->SURNAMECUSTOMER);
							$this->session->set_userdata('Email',$data->EMAILCUSTOMER);
							$this->session->set_userdata('Phone',$data->PHONECUSTOMER);
							$this->session->set_userdata('Adress',$data->ADRESSCUSTOMER);
							$this->session->set_userdata('Priority',$data->PRIORITY);
							$this->session->set_userdata('Remember',true);
							return 1 ;
						}else{
							return 2 ;
						}
					}else{
						return 3;
					}
				}else{
					return 4;
				}
			}return 5;
		}
		public function deconnect(){
			$this->session->sess_destroy();
		}
		public function becomeSeller(){
			if(!empty($_POST['Name']) AND !empty($_POST['Position'])
				AND !empty($_POST['Desc'])){
				if(!empty($_FILES)){

					$Name = htmlspecialchars($this->input->post('Name'));
					$Position = htmlspecialchars($this->input->post('Position'));
					$Desc = htmlspecialchars($this->input->post('Desc'));
					$Photo = htmlspecialchars($this->input->post('Photo'));
					$Idcustomer = $this->session->Id;

					$query = "SELECT * FROM sellers";
					$setquery = $this->db->query($query);
					$Id = $setquery->num_rows();
					$Idseller = $Id + 1 ;

					$data = array(
						'IDSELLER'=> $Idseller,
						'IDGROUP'=>"",
						'SHOPPOSITION' => $Name,
						'STATUTSELLER'=> false,
						'NAMESHOP'=>$Name,
						'PHOTOSHOP'=>$Phone,
						'DESCRIPTION'=>$Desc,
						'IDCUSTOMER'=>$Idcustomer,
					);
				}

			}
		}

}
