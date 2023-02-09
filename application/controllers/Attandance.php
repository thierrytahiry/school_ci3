<?php
class Attandance extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $data['classes']=$this->CM->select_data('classes','*');
        $this->load->View('includes/header');
        $this->load->View('attandance',$data);
        $this->load->View('includes/footer');
    }

    function list_etudiant($class_id)
    {
        $classes = $this->CM->select_data('classes', 'nom',array('id'=>$class_id));
        $data['list_etudiant'] = $this->CM->select_data('etudiant', 'nom,id', array('classe' => $classes[0]['nom']));

        
        $this->load->View('includes/header');
        $this->load->View('list_etudiant',$data);
        $this->load->View('includes/footer');
    }

    function add_attandance()
    {

        if($this->input->method()=='post')
        {

            // print_r($_POST);
            
            // $_POST['etudiant_id']=$etudiant_id;

            $res=$this->db->insert('attandance_manage',$_POST);
            if($res)
                echo 1;
            else
                echo 0;
        }
        else
        {
            $data['all_attandance']=$this->CM->select_data('attandance_manage','*');
            // var_dump("xxxxxxxxx", $data['all_attandance']);
            $data1['etudiants'] = $this->CM->select_data('etudiant', '*');
            // print_r($data);
            $this->load->View('includes/header');
            $this->load->View('includes/select', $data1);
            $this->load->View('add_attandance',$data);
            $this->load->View('includes/footer');
        }
    }

    function edit_attandance($id)
    {
        if ($this->input->method()=='post') {
            $res=$this->CM->update_data('attandance_manage',$_POST,array('id'=> $id));
            if($res)
            echo 1;
            else
            echo 0;
        }
        else
        {
        $data['attandance'] = $this->CM->select_data('attandance_manage', '*',array('id'=> $id));
        //var_dump("xxxxxxxxx", $data['attandance']);
        $data1['etudiants'] = $this->CM->select_data('etudiant', '*',array('id' => $id));
        // print_r($data);
        $this->load->View('includes/header');
        $this->load->View('includes/select', $data1);
        $this->load->View('edit_attandance', $data);
        $this->load->View('includes/footer');
        }
    }
}