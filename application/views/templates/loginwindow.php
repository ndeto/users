<section>
        <div id="body-cont" class="text-center">
   
                        <?php
                    $formattributes = array(
                        'role' => 'form',
                        'class'=>'form-horizontal'
                        );
                    echo '<p><h3>Login</h3></p>';
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
   
                    <?php echo form_close(); ?>
        </div>
    </section>