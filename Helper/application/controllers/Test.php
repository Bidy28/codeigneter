<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

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
	public function __construct()
		{
		parent::__construct();
		
		//  « Décommenter » cette ligne pour charger le helper url
		$this->load->helper('url');
		}
	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }	
    
    // public function helper(){
    //     $this->load->helper('url_helper');
    // }

    public function lien(){
        $this->load->view('test');
    }
	public function page(){
		$this->load->view('page');
	}
}
