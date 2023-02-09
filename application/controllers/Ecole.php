<?php
class Ecole extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function categorie()
    {
        if($this->input->method()=='post') {
            $this->form_validation->set_rules('nom', 'Nom categorie','required');
            if($this->form_validation->run()==false)
            {
                echo "Something Morng please try again";
            }
            else
            {
                $resp=$this->db->insert('categorie',$_POST);
                if($resp)
                echo 1;
                else
                echo "Categorie non ajouter";
            }
        }
        else{
        
        $data['all_categorie'] = $this->CM->select_data('categorie','*');
        $this->load->View('includes/header');
        $this->load->View('categorie',$data);
        $this->load->View('includes/footer');
        }
    }

    function delete_cat($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('categorie');
        redirect(base_url().'index.php/ecole/categorie');
    }

    function edit_cat($id)
    {
        if($this->input->method()=='post')
        {
            $resp=$this->CM->update_data('categorie', $_POST, array('id'=>$id));
            if($resp)
            echo 1;
            else
            echo 0;
        }
        else
        {
            $data['cat_info'] = $this->CM->select_data('categorie','*',array('id'=>$id));
        
            $this->load->View('includes/header');
            $this->load->View('edit_cat', $data);
            $this->load->View('includes/footer');
        }
    }

    function classes()
    {
        if($this->input->method()=='post')
        {
            $res=$this->db->insert('classes',$_POST);
            if($res)
            echo 1;
            else
            echo "Classe non ajouté";
        }

        else
        {
            $data['classes'] = $this->CM->select_data('classes', '*');
            $data['categories'] = $this->CM->select_data('categorie', '*', array('status' => '1'));
            $this->load->View('includes/header');
            $this->load->View('classes', $data);
            $this->load->View('includes/footer');
        }
    
    }

    function delete_class($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('classes');
        redirect(base_url().'index.php/ecole/classes');
    }
    function edit_class($id)
    {
        if($this->input->method()=='post')
        {
            $res=$this->CM->update_data('classes',$_POST,array('id'=>$id));
            if($res)
                echo 1;
            else
                echo 0;

        }
        else
        {
            $data['classes'] = $this->CM->select_data('classes','*', array('id' => $id));
            $data['categories'] = $this->CM->select_data('categorie', '*', array('status' => '1'));
            $this->load->View('includes/header');
            $this->load->View('edit_classes', $data);
            $this->load->View('includes/footer');
        }
    }

    function course()
    {
        if($this->input->method()=='post')
        {
            $res = $this->db->insert('course',$_POST);
            if($res)
            {
                echo 1;
            }
            else
            {
                echo "Echec d'ajout coure";
            }
        
        }
        else
        {$this->db->order_by('id','desc');

            $data['course'] = $this->CM->select_data('course', '*');
            
            $this->load->View('includes/header');
            $this->load->View('course',$data);
            $this->load->View('includes/footer');
        }
    }

    function delete_coure($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('course');
        redirect(base_url().'index.php/ecole/course/');
    }

    function edit_coure($id)
    {
        if($this->input->method()=='post')
        {
            $res = $this->CM->update_data('course',$_POST,array('id'=>$id));
            if($res)
            echo 1;
            else
            echo "Modification à echoué";
        }

        else
        {
            $data['course'] = $this->CM->select_data('course', '*',array('id'=>$id));

            $this->load->View('includes/header');
            $this->load->View('edit_coure', $data);
            $this->load->View('includes/footer');
        }
    }
}
