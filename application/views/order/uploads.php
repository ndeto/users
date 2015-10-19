<?php 
require_once 'application/siteconfig/siteconfig.php';
if(isset($set_data['session_dats'])){
    redirect('order/orderdetails');
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center" id="body-cont">
            <?php $data = $_POST;?>
            
            <?php if(isset($upload_data)){ ?>
            <ul>
                <?php foreach ($upload_data as $item => $value):?>
                <li><?php echo $item;?>: <?php echo $value;?></li>
            <?php endforeach;
            
            echo anchor('upload', 'Upload Another File!');
            } ?>
            </ul>
           
            <?php 
            if(isset($error)){
            echo $error;
            }
            ?>
            
            <?php

            $formattributes = array(
                      'role'=>'form',
                      'class'=>'form-horizontal'
                    );
            ?>
            <p><h3>Upload Documents</h3></p>
            <br />
            <?php
            echo form_open_multipart('orders/do_upload',$formattributes,$data);
            echo '<div class="form-group">';
            echo '<label for="order_title" class="control-label col-sm-2">Title:</label>';
            echo '<div class="col-sm-10">'; 
            ?>
            <input type="name" name="order_title" class="form-control" />
            </div></div>
            <?php
          
            echo '<div class="form-group">';
            echo '<label for="order_description" class="control-label col-sm-2">Order Description:</label>';
            echo '<div class="col-sm-10">'; 
            ?>
            <input type="name" name="order_description" class="form-control" />
            </div></div>
            <?php
            echo '<div class="form-group">';
            echo '<label for="username" class="control-label col-sm-2">Upload Document:</label>';
            echo '<div class="col-sm-10">'; 
            ?>
            <input type="file" name="userfile" size="20" />
            </div></div>
            <?php
            echo 
            '<div class="col-sm-offset-2 col-sm-10">
            <br>
            <button type="submit" class="btn btn-default">Upload</button>
            <br></div>';
            ?>
            </form>
        </div>
    </div>
</div>
