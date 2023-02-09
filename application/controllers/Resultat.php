<?php
class Resultat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        if($this->input->method()=='post')
        {
            $res=$this->db->insert('resultat',$_POST);
            if($res)
                echo 1;
            else
                echo 0;
        }
        else
        {
            $data['all_etudiant']=$this->CM->select_data('etudiant','id,nom,classe');
            $this->db->join('resultat', 'resultat.etudiant_id=etudiant.id');
            // $this->db->join('resultat', 'resultat.etudiant_id=etudiant.id');

            $data['resultat']=$this->CM->select_data('etudiant', 'resultat.*,etudiant.nom as etunom');

            // var_dump($data['resultat']);die();

            // $data['resultat'] = $this->CM->select_data('resultat', '*');
            $this->load->View('includes/header');
            $this->load->View('resultat',$data);
            $this->load->View('includes/footer');
        }
    }
    function find_examens()
    {
        var_dump($_POST);

        $all_examen=$this->CM->select_data('examen','titre',$_POST);

        
       
        if($all_examen)
        {
            echo "<option value=''>Select</option>";
            foreach($all_examen as $exam)
            {
                
            }
        }
        else
        {
            echo "<option value=''>Select</option>";
        }
    }

    function edit_resultat($id)
    {
        echo $id;
    }
}

?>