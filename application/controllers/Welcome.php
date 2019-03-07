<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

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
		$query = $this->db->get("posts"); 
		$blogPosts = [];
		foreach ($query->result() as $post) {
			$fileContent = file_get_contents("application/data/".$post->file.".json");
			$blogPosts[] = json_encode($fileContent);			
		  }
		$this->page = "home";
		$this->data['posts'] = $blogPosts;
		
		add_js(array("home/home.index.js"));
		$this->setHeader();
		$this->layout();		
	}

	public function article()
	{
		$this->page = "article";
		$this->layout();		
	}
}
