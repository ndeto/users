<?php
/**
 * Created by PhpStorm.
 * User: Backup
 * Date: 06/11/2015
 * Time: 10:54
 */


?>
<div class="row">
<div class="fb-profile col-lg-3">
    <img id="thumb" class="thumbnail" src="<?php echo base_url(); ?>/resources/images/user.png"
         alt="Profile image example"/>

    <div class="fb-profile-text">
        <h2><?php echo $this->session->userdata('name'); ?></h2>

        <h3>Order Info</h3>
        <p>Total Orders:</p>
        <p class="green">Completed:</p>
        <p class="blue">Active Orders:</p>
        <p class="orange">Pending:</p>


        </ul>
    </div>
</div>
    <div class="col-md-8 col-md-offset-1 text-center">
        <h3>Your Info</h3>
        <p>Email Address: <?php echo $this->session->userdata('email'); ?></p>

    </div>
</div>
