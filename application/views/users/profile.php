<?php

$set_data = $this->session->all_userdata();
if(!(isset($set_data['username']))){
    redirect('user/login','refresh');
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-2" id="vert-nav">
            <ul class="nav nav-pills nav-stacked">
                <li id="homenav"  onclick="getcontent('homenav','<?php echo base_url(); ?>');" class="active"><a href="#">Home</a></li>
                <li id="editprofnav" class="" onclick="getcontent('editprofnav','<?php echo base_url(); ?>');"><a href="#">Edit Profile</a></li>
                <li id="paynav" class="" onclick="getcontent('paynav','<?php echo base_url(); ?>');"><a href="#">Payments</a></li>
                <li id="accountnav" class="" onclick="getcontent('accountnav','<?php echo base_url(); ?>');"><a href="#">Account Settings</a></li>
            </ul>
        </div>
        <div class="col-md-10" id="body-cont">
            <?php $this->load->view('users/homenav'); ?>
        </div>
    </div>
</div>

