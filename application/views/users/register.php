<div class="container">
    <section>
        <div class="col-md-3"></div>
        <div id="body-cont" class="col-md-6 text-center">
        <div id="success">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
        
        <?php 
        $formattributes = array(
          'role'=>'form',
            'class'=>'form-horizontal'
        );
        
        echo form_open('user/newuser', $formattributes);
        
        
        echo '<div class="form-group">';
        echo '<label for="username" class="control-label col-sm-2">UserName:</label>';
        echo '<div class="col-sm-10">'; 
        $username_data = array(
            'name' => 'username',
            'placeholder' => 'User Name',
            'id'=>'username',
                        'class'=>'form-control'
        );
                
        echo form_input($username_data);
        
        echo '</div></div>';
        
        echo '<div class="form-group">';
        echo '<label for="email" class="control-label col-sm-2">Email:</label>';
        echo '<div class="col-sm-10">';
        $emaildata = array(
            'name' => 'email',
            'type' => 'email',
            'placeholder' => 'Email',
            'id'=>'email',
            'class'=>'form-control'
        );
        echo form_input($emaildata);
        echo '</div></div>';
        echo '<div class="form-group">';
        echo '<label for="phone" class="control-label col-sm-2">Phone Number:</label>';
        echo '<div class="col-sm-10">';
        $phonedata = array(
            'name'=>'phone',
            'placeholder'=>'Phone Number',
            'id'=>'phone',
            'class'=>'form-control'
        );
        echo form_input($phonedata);
        echo '</div></div>';
        echo '<div class="form-group">';
        echo '<label for="password" class="control-label col-sm-2">Password:</label>';
        echo '<div class="col-sm-10">';
        $passworddata = array(
            'type'=>'password',
            'placeholder'=>'Password',
            'name'=>'password',
            'id'=>'password',
            'class'=>'form-control'
        );
        echo form_input($passworddata);
        echo '</div></div>';
        echo '<div class="form-group">';
        echo '<label for="cpassword" class="control-label col-sm-2">Password:</label>';
        echo '<div class="col-sm-10">';
        $cpassworddata = array(
            'type'=>'password',
            'placeholder'=>'Confirm Password',
            'name'=>'cpassword',
            'id'=>'cpassword',
            'class'=>'form-control'
        );
        echo form_input($cpassworddata);
        echo '</div></div>';
        echo '<div class="form-group">';
        echo 
        '<div class="col-sm-offset-2 col-sm-10">
        <br>
        <button type="submit" class="btn btn-default">Login</button>
         <br>';
        $string = "</div></div>";
        echo form_close($string);
        ?>
        </div>
    </section>
</div>