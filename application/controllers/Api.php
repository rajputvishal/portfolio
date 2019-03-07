<?php 
class Api extends MY_Controller{
    function articles()
    {
        $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);    
		$query = $this->db->get("posts"); 
		$blogPosts = [];
		foreach ($query->result() as $post) {
			$fileContent = file_get_contents("application/data/".$post->file.".json");
			$blogPosts[] = json_decode($fileContent);			
          }
        //add the header here
        header('Content-Type: application/json');           
        echo json_encode($blogPosts);        
    }
     
    function user_post()
    {
        $result = $this->user_model->update( $this->post('id'), array(
            'name' => $this->post('name'),
            'email' => $this->post('email')
        ));
         
        if($result === FALSE)
        {
            $this->response(array('status' => 'failed'));
        }
         
        else
        {
            $this->response(array('status' => 'success'));
        }
         
    }
     
    function users_get()
    {
        $users = $this->user_model->get_all();
         
        if($users)
        {
            $this->response($users, 200);
        }
 
        else
        {
            $this->response(NULL, 404);
        }
    }
}?>