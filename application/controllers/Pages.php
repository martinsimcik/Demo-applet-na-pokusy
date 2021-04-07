<?php
class Pages extends CI_Controller {

        public function view()
        {               
                $this->load->model('pokusy_model');
                $data['polozky'] = $this->pokusy_model->get_menu();
              

		$this->load->view('templates/header', $data);                
		$this->load->view('pages/home', $data);  
		$this->load->view('templates/footer');
	}
        
                public function home()
        {
            
                $this->load->model('pokusy_model');
                $data['polozky'] = $this->pokusy_model->get_menu();
                $this->load->view('templates/header', $data);                
		$this->load->view('pages/home', $data);  
		$this->load->view('templates/footer');
        }
        
                public function pokusy()
        {
            
                $this->load->model('pokusy_model');
                $data['polozky'] = $this->pokusy_model->get_menu();
                $data['pokusy'] = $this->db->query('SELECT * FROM pokusy')->result();
                $this->load->view('templates/header', $data);                
		$this->load->view('pages/pokusy', $data);  
		$this->load->view('templates/footer');
        }
               
        public function pokusyKlik($id)
        {
            
                $this->load->model('pokusy_model');
                $data['polozky'] = $this->pokusy_model->get_menu();
                $data['nazev'] = $this->db->query('SELECT * FROM pokusy where id= '.$id)->result();
                $data['pokusy'] = $this->db->query('SELECT * FROM pokusy where id=  '.$id)->result();
                $this->load->view('templates/header', $data);                
		$this->load->view('pages/pokusyKlik', $data);  
		$this->load->view('templates/footer');
        }
        /*
                public function chemie()
        {
            
                $this->load->model('pokusy_model');
                $data['polozky'] = $this->pokusy_model->get_menu();
                $data['chemie'] = $this->db->query('SELECT * FROM chemie')->result();
                $this->load->view('templates/header', $data);                
		$this->load->view('pages/chemie', $data);  
		$this->load->view('templates/footer');
        }
                public function chemieKlik($id)
        {
            
                $this->load->model('pokusy_model');
                $data['polozky'] = $this->pokusy_model->get_menu();
                $data['nazev'] = $this->db->query('SELECT * FROM chemie where id_chemie= '.$id)->result();
                $data['chemie'] = $this->db->query('SELECT * FROM chemie where id_chemie=  '.$id)->result();
                $this->load->view('templates/header', $data);                
		$this->load->view('pages/chemieKlik', $data);  
		$this->load->view('templates/footer');
        }
         * 
         */

}
