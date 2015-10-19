<div class="container">
<section id="">
    
    <div class="col-md-3"></div>
    <div id="body-cont" class="col-md-6 text-center">
        <div id="error_text">
            <?php
                if(($this->session->flashdata('error'))!= null) {
                    echo $this->session->flashdata('error');
                }
            ?>
        </div>	
        <p><h3>Users Login</h3></p>
                <?php
                    $formattributes = array(
                        'role' => 'form'
                        );
                    echo form_open('user/authenticate',$formattributes);
                    ?>
                    <div class="form-group">
                    <label for="username" class='control-label col-sm-2'>UserName:</label>
                    <div class="col-sm-10">
                    <?php
                    $usernamedata = array(
                        'name'=>'username',
                        'placeholder'=>'User Name',
                        'class'=>'form-control',
                        'id'=>'username'
                    );
                    echo form_input($usernamedata);
                    ?>
                        <br><br>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="password" class='control-label col-sm-2'>Password:</label>
                    <div class="col-sm-10">
                    <?php
                    $passworddata = array(
                      'name'=>'password',
                        'type'=>'password',
                        'placeholder'=>'Password',
                        'class'=>'form-control',
                        'id'=>'password'
                    );
                    echo form_input($passworddata);
                    ?>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <br>
                    <button type="submit" class="btn btn-default">Login</button>
                     <br>
                    </div>
                    </div>
   
                    <?php
                    

                    echo form_close();
                ?>
    </div>
</section>
</div>

