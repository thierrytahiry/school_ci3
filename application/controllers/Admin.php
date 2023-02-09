<?php 
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->View('includes/header');
        $this->load->View('home');
        $this->load->View('includes/footer');
    }
    public function categorie()
    {
        echo "Voici le Function categorie";
    }
}