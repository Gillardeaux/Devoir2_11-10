<?php

    class Ctrl_1 extends CI_Controller 
    
    {

    public function index()
	{
		$this->load->view('acceuil');
    }

    public function CreerConf()
    {
        $this->load->view('creation');
    }

    public function getAfficherlesConf()
    {
        $this->load->model('Model_Voter');
        $tab['lesConf'] = $this->Model_Voter->getVoter();
        $this->load->view('voter');
    }
    }