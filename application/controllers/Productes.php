<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//<?php include('http://josepborrellweb.esy.es/wordpress/wp-admin/includes/image.php');

class Productes extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        
        $this->load->model('mod_categories');
        $this->load->model('mod_productes');
    }
// fer un vector i recorrel en lo for each, ha de portar 
// l'objecte persona 
	public function llistar()
	{	
		if($this->session->userdata('logged_in')){

		$users ['query'] = $this->mod_productes->getProducte();
		$this->load->view('llistaproductes', $users);
		
		}
		else{
     //If no session, redirect to login page
     redirect('login', 'refresh');
		}

		
	}
	
	public function listcategories()
	{
		if($this->session->userdata('logged_in')){	
		$users ['query'] = $this->mod_categories->getCategoria();
		$this->load->view('list', $users);}
		else{
     //If no session, redirect to login page
     redirect('login', 'refresh');}
	}
	
	

	public function crear()
	{
		$this->load->library('PushBots');
		$pb = new PushBots();
		// Application ID
		$appID = '5384b34d1d0ab1d2048b459f';
		// Application Secret
		$appSecret = 'a79871c9cafd06607bf95fc2fc8700fa';
		$pb->App($appID, $appSecret);
		if($this->session->userdata('logged_in')){	
			
		function urls_amigables($url) {
			// Tranformamos todo a minusculas
			$url = strtolower($url);
			//Rememplazamos caracteres especiales latinos
			$find = array('á', 'é', 'í', 'ó', 'ú', 'à', 'è', 'ì', 'ò', 'ù', 'ñ');
			$repl = array('a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'n');
			$url = str_replace ($find, $repl, $url);
			// Añaadimos los guiones
			$find = array(' ', '&', '\r\n', '\n', '+'); 
			$url = str_replace ($find, '-', $url);
			// Eliminamos y Reemplazamos demás caracteres especiales
			$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
			$repl = array('', '-', '');
			$url = preg_replace ($find, $repl, $url);
			return $url;
		}
		$users ['query'] = $this->mod_categories->getCategoria();
		$this->load->view('afegir', $users); 
                $fullname = $this->input->post('fullname');
                $price = $this->input->post('price');
                $categoria = $this->input->post('categoria');
                $descripcio = $this->input->post('descripcio');
                $notificar = $this->input->post('notificar');
                //$count = $users->count;
                if($fullname != null && $descripcio != null &&$price != null &&$price >0 ){
					$url = $fullname;
					$url = urls_amigables($url);
					$this->mod_productes->insertProducte($fullname, $price, $categoria, $descripcio, $url);
					// si notificacions esta a false aixo de aqui no ho te que fer..
					if($notificar == 1){
						$msg="Ara pots demanar el nou producte :$fullname a la Cafeteria Da Vinci per un preu de : $price €!!";
						$pb->Alert($msg);
						$platforms= array(0,1);
						$pb->Platform($platforms);
						// Push it !
						$pb->Push();}
					$idproducte = $this->db->insert_id();
					redirect('Productes/upload', $idproducte);
                }
                
              
	}
	else{
     //If no session, redirect to login page
     redirect('login', 'refresh');}
     
 }

	public function upload() {
		if($this->session->userdata('logged_in')){
			$data['content'] = 'penjafoto';
			$this->load->vars($data);
			$this->load->view('penjafoto');}
			else{
     //If no session, redirect to login page
     redirect('login', 'refresh');}
	}

	public function DoUpload() {
		if($this->session->userdata('logged_in')){
		$config_file = array ( 'upload_path' => './../wordpress/wp-content/uploads/2014/05',
			'allowed_types' => 'png|jpg',
			'overwrite' => false,
			'max_size' => 0,
			'max_width' => 0,
			'max_height' => 0,
			'encrypt_name' => false,
			'remove_spaces' => true, );
		$this->upload->initialize($config_file);
		if (!$this->upload->do_upload('cipote')) {
			$error = $this->upload->display_errors();
			echo $error; 
		} 
	    else { 
			$this->session->set_flashdata('success_upload','Pujat Correcament');
			$nom = $this->upload->file_name;
			$file_name = "http://josepborrellweb.esy.es/wordpress/wp-content/uploads/2014/05/".$this->upload->file_name;
			//$file_name = base_url()."imatges/".$this->upload->file_name;
			$idproducte = $this->mod_productes->getUltimProducte();
			$this->mod_productes->pujarFoto($nom, $file_name, $idproducte);
			redirect('Productes/llistar'); 
		}
	}
	else{
     //If no session, redirect to login page
     redirect('login', 'refresh');}
	}

			
	public function modificar($ID)
	{
		if($this->session->userdata('logged_in')){
		function urls_amigables($url) {
			// Tranformamos todo a minusculas
			$url = strtolower($url);
			//Rememplazamos caracteres especiales latinos
			$find = array('á', 'é', 'í', 'ó', 'ú', 'à', 'è', 'ì', 'ò', 'ù', 'ñ');
			$repl = array('a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'n');
			$url = str_replace ($find, $repl, $url);
			// Añaadimos los guiones
			$find = array(' ', '&', '\r\n', '\n', '+'); 
			$url = str_replace ($find, '-', $url);
			// Eliminamos y Reemplazamos demás caracteres especiales
			$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
			$repl = array('', '-', '');
			$url = preg_replace ($find, $repl, $url);
			return $url;
		}
		$users ['query'] = $this->mod_categories->getCategoria();
		$this->load->view('modificarproductes', $users); 
				$fullname = $this->input->post('fullname');
                $price = $this->input->post('price');
                $categoria = $this->input->post('categoria');
                $descripcio = $this->input->post('descripcio');
                //$count = $users->count;
                if($fullname != null && $price != null){
					$url = $fullname;
					$url = urls_amigables($url);
					$this->mod_productes->modificar($ID, $fullname, $price, $categoria, $descripcio, $url);
						redirect('Productes/llistar');
				}
	}
	else{
     //If no session, redirect to login page
     redirect('login', 'refresh');}
}
	public function borrar($ID)
	{
		if($this->session->userdata('logged_in')){
                $this->mod_productes->borrar($ID);
                //com actualitzo la taula?
                redirect('Productes/llistar');}
                else{
     //If no session, redirect to login page
     redirect('login', 'refresh');}
	}

function json()
    {
        $data['json'] = $this->mod_productes->getProductejson();
        if (!$data['json']) show_404();
        $this->load->view('json_view', $data);
    }
    
function jsoncat($categoria)
    {
		//$categoria = 2;
        $data['json'] = $this->mod_productes->getProductejsoncat($categoria);
        if (!$data['json']) show_404();
        $this->load->view('json_view', $data);
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
