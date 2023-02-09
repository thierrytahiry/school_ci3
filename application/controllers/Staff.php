<?php
class Staff extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function staff()
    {
        if($this->input->method()=='post')
        {
            $res=$this->db->insert('staff',$_POST);
            if($res)
                echo 1;
            else
                echo 0;
        }
        else
        {
            $data['staff']=$this->CM->select_data('staff','*');
            $this->load->View('includes/header');
            $this->load->View('staff',$data);
            $this->load->View('includes/footer');
        }
    }

    function edit_staff($id)
    {
        if($this->input->method()=='post')
        {
            $this->db->where('id',$id);
            $res=$this->db->update('staff',$_POST);
            if($res)
            echo 1;
            else
            echo 0;
        }
        else
        {
            $data['staff']=$this->CM->select_data('staff','*',array('id'=>$id));
            $this->load->View('includes/header');
            $this->load->View('edit_staff', $data);
            $this->load->View('includes/footer');
        }
    }

    function delete_staff($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('staff');
        redirect(base_url(). 'index.php/staff/staff');
    }
}