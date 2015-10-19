<?php

$set_data = $this->session->all_userdata();
if(!(isset($set_data['username']))){
    redirect('user/login','refresh');
}
 // Read all session values 
echo 'You are Logged In as '.$set_data['username'];
?>



