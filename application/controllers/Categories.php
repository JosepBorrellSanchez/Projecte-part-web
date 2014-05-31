<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('mod_categories');
        $this->load->helper('url');
    }
	public function llistar()
	//crida el model de categories i les recupera totes per mostrarles a una vista
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
		//Agafa el contingut del formulari i l’envia al model per fer la operació d’insertar.
		
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
		
		
		$this->load->view('afegircategoria'); 
                $name = $this->input->post('name');
                $url = $name;
                //$slug = $this->input->post('slug');
                $descripcio = $this->input->post('descripcio');
                $url = urls_amigables($url);
                if($name != null)
                $this->mod_categories->insertCategoria($name, $url, $descripcio);}
                else{
     //If no session, redirect to login page
     redirect('login', 'refresh');}
}

	function json()
	//recupera les categories des del model i carrega una vista amb el json.
    {
        $data['json'] = $this->mod_categories->getCategoriesjson();
        if (!$data['json']) show_404();
        $this->load->view('json_view2', $data);
    }
    
	public function modificar($term_id)
	//Obté la categoria que es vol modificar i envia les dades del formulari al model per a que aquest pugui fer la operació de modificar.
	{
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
		
		$this->load->view('modificarcategoria'); 
		$name = $this->input->post('name');
                $url = $name;
                //$slug = $this->input->post('slug');
                $descripcio = $this->input->post('descripcio');
                $url = urls_amigables($url);
                if($name != null){
                $this->mod_categories->modificar($term_id, $name, $url, $descripcio);
                redirect('Categories/llistar');}
}
	public function borrar($ID)
	//Mira quina categoria hem dit de borrar i carrega el model passantli l’ID de la categoria per a que l’elimine
	{
		if($this->session->userdata('logged_in')){
                $this->mod_categories->borrar($ID);
                //com actualitzo la taula?
                redirect('Categories/llistar');}
                else{
     //If no session, redirect to login page
     redirect('login', 'refresh');}


}
}
