<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Orders extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('order_model');
    }

    public function makeorder($data){
        require_once 'application/siteconfig/siteconfig.php';

        //Get The Form Post
        $currentdatetime = date('Y-m-d H:i:s');
        $servicetype = $data['servicetype'];
        $assignmenttype = $data['assignmenttype'];
        $level = $data['level'];
        $deadline = $data['deadline'];
        $spacing = $data['spacing'];
        $pages  = $data['pages'];
        $order_price = $data['order_price'];
        $order_title = $data['order_title'];
        $order_description = $data['order_description'];
        $duedate = date('Y-m-d H:i:s',  strtotime("+$deadline hours"));
        $user_id = $data['user_id'];



        $originaldata=array(
            'order_title'=>$order_title,
            'order_description'=>$order_description,
            'order_date'=>$currentdatetime,
            'order_completion_date'=>$duedate,
            'assigned_status'=>'UNASSIGNED',
            'assigned_writer'=>'UNASSIGNED',
            'order_price'=>$order_price,
            'user_id'=>$user_id,
            'order_type'=>$servicetype,
            'document_type'=>$assignmenttype,
            'academic_level'=>$level,
            'spacing'=>$spacing,
            'pages'=>$pages,
        );


        //Insert Order To DB
        $this->order_model->insert('orders',$originaldata);

        //Retrieve Assigned Order Id
        $retrievedata =  array(
            'user_id'=>$user_id,
            'order_date'=>$currentdatetime
        );



        $retrieved_id = $this->order_model->get_id('orders',$retrievedata);
        $order_id = $retrieved_id['order_id'];

        //Send Data Array to Create Path Function
        $makepath = array(
            'user_id' => $user_id,
            'order_id'=>$order_id,
        );

        $uploaddata = $this->make_path($makepath);

        //Reformat DB for Writers View

        $w_deadline = $this->get_wdeadline($deadline);
        $w_order_price = $order_price/2;
        $wduedate = date('Y-m-d H:i:s',  strtotime("+$w_deadline hours"));

        $editeddata=array(

            'order_title'=>$order_title,
            'order_description'=>$order_description,
            'order_date'=>$currentdatetime,
            'order_completion_date'=>$wduedate,
            'assigned_status'=>'UNASSIGNED',
            'assigned_writer'=>'UNASSIGNED',
            'order_price'=>$w_order_price,
            'user_id'=>$user_id,
            'order_type'=>$servicetype,
            'document_type'=>$assignmenttype,
            'academic_level'=>$level,
            'spacing'=>$spacing,
            'pages'=>$pages,
        );


        $this->order_model->insert('worders',$editeddata);

        return $uploaddata;

    }

    public function index(){
        require_once 'application/siteconfig/siteconfig.php';

        if(Siteconfig::check_login()==FALSE){
            redirect('user/login');
        }else{
            $this->load->view('templates/header');
            $this->load->view('templates/menu');
            $this->load->view('order/order');
            $this->load->view('templates/footer');
        }
    }

    protected function get_wdeadline($time){
        $w_dline=0;
        if($time>48){
            $w_dline = $time/2;
        }elseif(($time<=48)&&($time>=24)){
            $w_dline = $time-6;
        }elseif($w_dline==12){
            $w_dline = $time-3;
        }elseif($w_dline==6){
            $w_dline = $time-2;
        }elseif($w_dline==3){
            $w_dline = $time-1;
        }
        return $w_dline;
    }

    public function orderdetails(){
        require_once 'application/siteconfig/siteconfig.php';

        //If not logged in Redirect to Register or Login Page
        if ($this->session->userdata('username')!=NULL){

            $data = array(
                'servicetype' => $this->input->post('servicetype'),
                'assignmenttype' => $this->input->post('assignmenttype'),
                'level' => $this->input->post('level'),
                'deadline' => $this->input->post('deadline'),
                'spacing' => $this->input->post('spacing'),
                'pages'  => $this->input->post('pages'),
                'order_price' => $this->input->post('order_cost')
            );


            $this->load->view('templates/header');
            $this->load->view('templates/menu');
            $this->load->view('order/uploads',$data);
            $this->load->view('templates/footer');


        }else{
            $this->load->view('templates/header');
            $this->load->view('templates/menu');
            $this->load->view('users/login_or_reg');
            $this->load->view('templates/footer');
        }

    }

    public function do_upload(){

        require_once 'application/siteconfig/siteconfig.php';

        if($this->session->userdata('username') == NULL){
            redirect(base_url());
        }

        $user_id = $this->session->userdata('user_id');




        $postdata = $_POST;
        $postdata['user_id'] = $user_id;
        $data = $this->makeorder($postdata);
        if(isset($data['upload_data'])){
            $this->load->view('templates/header');
            $this->load->view('templates/menu');
            $this->load->view('order/order_succeed', $data);
            $this->load->view('templates/footer');
        }
        elseif(isset($data['error'])){

            $this->load->view('templates/header');
            $this->load->view('templates/menu');
            $this->load->view('order/uploads', $data);
            $this->load->view('templates/footer');

        }


    }

    public function make_path($pathdata){

        $user_id = $pathdata['user_id'];
        $order_id = $pathdata['order_id'];

        if(!is_dir("uploads/$user_id/$order_id")){
            mkdir("uploads/$user_id/$order_id",0777,TRUE);
        }

        $uploadconfig['upload_path'] = "uploads/$user_id/$order_id";
        $uploadconfig['allowed_types'] = 'pdf|docx|doc|ppt|pptx|xls|xlxs|accdb';
        $uploadconfig['max_size']	= '100';
        $uploadconfig['max_width']  = '1024';
        $uploadconfig['max_height']  = '768';

        $this->load->library('upload', $uploadconfig);
        $this->upload->initialize($uploadconfig);

        if($this->upload->do_upload()){
            return $data = array('upload_data' => $this->upload->data());
        }  else {
            return $data = array('error' => $this->upload->display_errors());
        }
    }

    public function myorders() {

        require 'application/siteconfig/siteconfig.php';

        $set_data = Siteconfig::check_login();

        if(isset($set_data['username'])){
            $user_id = $set_data['user_id'];
            $data = array(
                'user_id'=>$user_id
            );

            $data['orders'] = $this->order_model->get_my_orders('orders',$data);
            $this->load->view('templates/header');
            $this->load->view('templates/menu');
            $this->load->view('order/currentorders', $data);
            $this->load->view('templates/footer');
        }
        else{
            redirect('user/login');
        }

    }

    public function view($order_id){
        require_once 'application/siteconfig/siteconfig.php';
        $set_data = Siteconfig::check_login();
        $data['order']['user_id'] = $this->session->userdata('username');
        $data['order'] = $this->order_model->get_orders($order_id);
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('order/detailorder', $data);
        $this->load->view('templates/footer');
    }

    public function add_upload(){

        $user_id = $this->input->post('user_id');
        $order_id = $this->input->post('order_id');

        if(!is_dir("uploads/$user_id/$order_id")){
            mkdir("uploads/$user_id/$order_id",0777,TRUE);
        }

        $uploadconfig['upload_path'] = "uploads/$user_id/$order_id";
        $uploadconfig['allowed_types'] = 'pdf|docx|doc|ppt|pptx|xls|xlxs|accdb';
        $uploadconfig['max_size']	= '100';
        $uploadconfig['max_width']  = '1024';
        $uploadconfig['max_height']  = '768';

        $this->load->library('upload', $uploadconfig);
        $this->upload->initialize($uploadconfig);

        if($this->upload->do_upload()){
            $upd =  array('upload_data' => $this->upload->data());
            $this->session->set_flashdata('upload_success',$upd);
            redirect('orders/view/'.$order_id);

        }  else {
            $errs = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error',$errs);
            redirect('orders/view/'.$order_id);
        }
    }

    public function complete($order_id){
        $data = array(
            'assigned_status'=>'COMPLETE'
        );

        $this->order_model->complete($data,$order_id);
        $this->session->set_flashdata('complete',' Order Has been completed');


    }

    public function incomplete($order_id){
        $data = array(
            'assigned_status'=>'INCOMPLETE'
        );

        $this->order_model->complete($data,$order_id);
        $this->session->set_flashdata('incomplete',' Order Has been marked incomplete');
    }

    public function history(){

        $username = $this->session->userdata('user_id');
        $data['orders'] = $this->order_model->history($username);
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('order/myorders', $data);
        $this->load->view('templates/footer');
    }

}
    
