<?php
class Examen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function add_examen()
    {
        if($this->input->method()=='post')
        {
            $res=$this->db->insert('examen',$_POST);
            if($res)
                echo 1;
            else
                echo 0;
        }
        else
        {
            $data['categorie'] = $this->CM->select_data('categorie', '*',array('status'=>'1'));
            $data['all_examen']=$this->CM->select_data('examen','*');
            $this->load->View('includes/header');
            $this->load->View('add_examen',$data);
            $this->load->View('includes/footer');
        }
    }
    function find_class()
    {
    
        $classe=$this->CM->select_data('classes','nom',$_POST);
    
        if($classe)
        {
            echo "<option value=''>Select</option>";
            foreach($classe as $cla)
            {
                ?>
                <option><?php echo $cla['nom'] ?></option>
                <?php
            }
        }
        else
        {
            echo "<option value=''>Select</option>";
        }
    }
    function edit_examen($id)
    {
        if($this->input->method()=='post')
        {
            $res=$this->CM->update_data('examen',$_POST,array('id'=>$id));
            if($res)
                echo 1;
            else
                echo 0;
        }
        else
        {
            $data['exam']=$this->CM->select_data('examen','*',array('id'=>$id))[0];
            $data['categorie'] = $this->CM->select_data('categorie', '*', array('status' => '1'));
            $data['classes'] = $this->CM->select_data('classes', '*', array('cat' => $data['exam']['categorie']));
            $this->load->View('includes/header');
            $this->load->View('edit_examen', $data);
            $this->load->View('includes/footer');
        }
    }
    function add_time_table()
    {   
        if($this->input->method()=='post')
        {
            $file_data=$this->file_lib->upload_image('uploads/time_table/','file','PDF|JPG|PNG|JPEG|jpg|png|jpeg|PDF');
            if($file_data)
            {
                $_POST['file']=$file_data['file_name'];
                $res=$this->db->insert('examen_time_table',$_POST);
                if($res)
                    echo 1;
                else
                    echo 0;
            }
            
            else
            {
                echo '2';
            }
        }
        else
        {
            $data['exams']=$this->CM->select_data('examen','*',array('status'=>'1'));
            $data['time_tables']=$this->CM->select_data('examen_time_table','*');
            $this->load->View('includes/header');
            $this->load->View('add_time_table',$data);
            $this->load->View('includes/footer');
        }
    }
    function edit_time_table($id)
    {
        if ($this->input->method() == 'post')
        {
            $count=0;
            if($_FILES['file']['name']!='')
            {
                $file_data = $this->file_lib->upload_image('uploads/time_table/', 'file', 'PDF|JPG|PNG|JPEG|jpg|png|jpeg|PDF');
                if($file_data)
                {
                    $_POST['file'] = $file_data['file_name'];
                }
                else
                {
                    $count=1;
                }
            }
            
            if ($count==0) {
                $this->db->where('id',$id);
                $res = $this->db->update('examen_time_table', $_POST);
                if ($res)
                    echo 1;
                else
                    echo 0;
            } else {
                echo 2;
            }
        } else {
            $data['exams'] = $this->CM->select_data('examen', '*', array('status' => '1'));
            $data['time_table'] = $this->CM->select_data('examen_time_table', '*',array('id'=>$id));
            $this->load->View('includes/header');
            $this->load->View('edit_time_table', $data);
            $this->load->View('includes/footer');
        }
    }
    function delete_time_table($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('examen_time_table');
        redirect(base_url().'index.php/examen/add_time_table');
    }
}
?>