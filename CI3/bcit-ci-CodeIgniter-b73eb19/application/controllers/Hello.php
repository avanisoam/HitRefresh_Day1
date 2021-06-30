<?php 

class Hello extends CI_Controller {

    public function __construct(){

        parent:: __construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Hello_Model');
        
    }

    public function savedata(){

        $this->load->view('registration');

       if($this->input->post('save')) {
           $n = $this->input->post('name');
           $e = $this->input->post('email');
           $m = $this->input->post('mobile');

           $this->Hello_Model->saverecords($n , $e , $m);
           //echo "Records inserted Successfully.";
           redirect("Hello/disp_data");
       }
        
    }

    public function disp_data(){
        $result['data']= $this->Hello_Model->displayrecords();
        //print_r($result['data']);
        //die();
        $this->load->view('display_records', $result);
    }

    public function deletedata(){
        $id=$this->input->get('id');
        //$naam = $this->input->get('Name');
        //print_r( $naam);
        //die();
        $this->Hello_Model->deleterecords($id);
        redirect("Hello/disp_data");
    }

    public function update_data(){
        $id = $this->input->get('id');
        $result['data'] = $this->Hello_Model->displayrecodsById($id);
        $this->load->view('update_records',$result);

        if($this->input->post('update')){

            $n=$this->input->post('name');
            $e=$this->input->post('email');
            $m=$this->input->post('mobile');
            $this->Hello_Model->updaterecords($n,$e,$m,$id);
            redirect("Hello/disp_data");

        }
    }


    public function studentregister(){

        if($this->input->post('register')){

            $n= $this->input->post('name');
            $e= $this->input->post('email');
            $p= $this->input->post('pass');
            $m= $this->input->post('mobile');
            $c= $this->input->post('course');

            $que = $this->db->query("select * from student where email='".$e."'");
            $row= $que->num_rows();

            if($row){
                $data['error'] = "<h3 style='color:red'>This record already exists</h3>";
            }

            else{
                $que = $this->db->query("insert into student value('' , '$n' , '$e' , '$p' , '$m' , '$c')" );

                $data['error'] = "<h3 style='color:red'>You are registered successfully</h3>";
            }
        }

        $this->load->view('student_registration' , @$data);
    }

    public function login(){

        if($this->input->post('login')){

            $e= $this->input->post('email');
            $p= $this->input->post('pass');

            $que = $this->db->query("select * from student where Email= '".$e."' and Password= '".$p."'");
            $row = $que->num_rows();

            if($row){
                redirect("Hello/dashboard");
            }

            else{
                $data['error'] = "<h3 style = 'color : red'>Invalid LOgin Details</h3>";
            }

        }
        $this->load->view('login' , @$data);
    }

    public function dashboard(){
        $this->load->view('dashboard');
    }
}

?>