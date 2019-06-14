<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
        public function __construct()
    {
        parent::__construct();
        $this->load->helper('form','url');
        $this->load->model('form_model');
    }

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules('frstname1', 'Your Name', 'trim|required|min_length[3]|max_length[12]');
                $this->form_validation->set_rules('frstname2', 'Email', 'trim|required|valid_email');
                $this->form_validation->set_rules('frstname3', 'Password', 'trim|required|min_length[8]');


               if ($this->form_validation->run() == TRUE)
                {
                    //redirect('ContactController');
                $this->contact_form();
                //this->index();
                }
                else
                {
                      
                    $this->load->view('templates/header');
                    $this->load->view('templates/business');
                    $this->load->view('templates/footer');
                                      
                } 
        }

        public function index_box(){    

        $this->load->model('buyfromus_model');
        $data['fetch_data'] = $this->buyfromus_model->fetch_data();
        $data['fetch1_data'] = $this->buyfromus_model->fetch_data1();
        $data['fetch2_data'] = $this->buyfromus_model->fetch_data2();
        $data['fetch3_data'] = $this->buyfromus_model->fetch_data3();
        $data['fetch4_data'] = $this->buyfromus_model->fetch_data4();
        $data['fetch5_data'] = $this->buyfromus_model->fetch_data5();
        $this->load->view('templates/header');
        $this->load->view('templates/buyfromus1',$data);
        $this->load->view('templates/footer');

    }


    public function contact_form()
  {
    $save=array(
        'name' =>$this->input->post('frstname1'),
        'email' =>$this->input->post('frstname2'),
        'password' =>$this->input->post('frstname3'),
        
    );
    $this->business_model->saveEmployee($save);
    redirect('business');
    }


}
?>


//---view-->
<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('form'); ?>

<h5>Username</h5>
<input type="text" name="username" value="" size="50" />

<h5>Password</h5>
<input type="text" name="password" value="" size="50" />

<h5>Password Confirm</h5>
<input type="text" name="passconf" value="" size="50" />

<h5>Email Address</h5>
<input type="text" name="email" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>

      <?php 
   if($fetch_data->num_rows() > 0)  
      {  
        foreach($fetch_data->result() as $row)  
                {  
           ?>
  <div class="demo">
  <div class="part1">
    <img src="<?php echo $row->images;?>" alt="Snow" width="200" class="img-responsive">
  </div>
 
  <div class="part2">
  <form method="post" action="<?php echo site_url('buyfromus/contact_form');?>" or "<?php echo base_url().buycontact;?>">
  <input type="text" id="box" name="uname1"/>
  
</div>
 <?php       
                }  
           }?>
    </div>     OR

    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <td>ID</td>
                <th>Title</th>
                <th>Description</th>
                <th>Created at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            if($blogs){
                foreach($blogs as $blog){
        ?>
            <tr>
                <td><?php echo $blog->id; ?></td>
                <td><?php echo $blog->title; ?></td>
                <td><?php echo $blog->description; ?></td>
                <td><?php echo $blog->created_at; ?></td>
                <td>
                    <a href="<?php echo base_url('blog/edit/'.$blog->id); ?>" class="btn btn-info">Edit</a>
                    <a href="<?php echo base_url('blog/delete/'.$blog->id); ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this record?');">Delete</a>
                </td>
            </tr>
        <?php
                }
            }
        ?>
        </tbody>
    </table>

//--model-->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business_model extends CI_Model
{

  public function saveEmployee($data)
  {
    {
      $this->db->insert('users',$data);
      $emp_id=$this->db->insert_id();
    }
    return $emp_id;
  } 

   function fetch_data()  
      {  
          
           $this->db->select("*"); 
           $this->db->from("event");  
          $query = $this->db->get();  
           return $query;  
      }  
      
     function delete_data($id){  
           $this->db->where("id", $id);  
           $this->db->delete("event");  
           //DELETE FROM tbl_user WHERE id = $id  
      }  

      function fetch_single_data($id)  
      {  
           $this->db->where("id", $id);  
           $query = $this->db->get("event");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
      }
}
?>