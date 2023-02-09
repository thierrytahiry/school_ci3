<?php
class Etudiant extends CI_Controller
{
    public function  __construct()
    {
        parent::__construct();
    }

    public function etudiant()
    {
        if($this->input->method()=='post')
        {
            $data=$this->input->post();
            $res=$this->db->insert('etudiant',$data);
            if($res)
            echo 1;
            else
            echo "Enregistrement à echoué";
        }
        else
        {
            $data['all_categorie'] = $this->CM->select_data('categorie', '*');
            $data['etudiants'] = $this->CM->select_data('etudiant', '*');
            $data['classes'] = $this->CM->select_data('classes', '*');
            $this->load->View('includes/header');
            $this->load->View('etudiant', $data);
            $this->load->View('includes/footer');
        }
    
    }

    function delete_etudiant($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('etudiant');
        redirect(base_url(). 'index.php/etudiant/etudiant');
    }

    function edit_etudiant($id)
    {
        if($this->input->method()=='post')
        {
            $this->db->where('id',$id);
            $res=$this->db->update('etudiant',$_POST);
            if($res)
            {
                echo 1;
            }
            else
            {
                echo "Modification à echoué";
            }
        }
        else
        {
            $data['etudiant_data']=$this->CM->select_data('etudiant','*', array('id'=>$id))[0];
            $data['categorie'] = $this->CM->select_data('categorie', '*');
            $data['classes'] = $this->CM->select_data('classes', '*');
            $this->load->View('includes/header');
            $this->load->View('edit_etudiant', $data);
            $this->load->View('includes/footer');
        }
    }
}