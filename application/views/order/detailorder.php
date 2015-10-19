<div class="container" >
    <div class="row" >
        <div class="col-md-6 col-md-offset-3" id="body-cont">
            <?php
            if($this->session->flashdata('upload_success')!=NULL){
                echo '<div class="alert alert-success">
                  <strong>Success!: </strong>';
               $upload_data = $this->session->flashdata('upload_success');
               echo $upload_data['upload_data']['raw_name'].'has been Uploaded Successfully';
                echo '</div>';
                }elseif($this->session->flashdata('error')!=NULL){
                    $errors = $this->session->flashdata('error');
                    echo  '<div class="alert alert-danger">
                      <strong>Error!</strong>'; 
                    echo $errors['error'];
                    echo '</div> ';
                    
                }

?>
            <h2>
                <?php 
                   $num = $order['order_id'];
                    switch ($num){
                    case($num<10):
                        $id='#OID00'.$order['order_id'];
                    break;
                    case ($num<100):
                        $id='#OID00'.$order['order_id'];
                    break;
                    default :$id = '#OID'.$order['order_id'];
                     }
                     
                echo $id.": ".$order['order_title']; ?>
            </h2>
            
            <p><?php echo "Description: <pre>".$order['order_description'].'</pre>'; ?></p>
            <p><?php echo "Order Date: <pre>".$order['order_date'].'</pre>'; ?></p>
            <p><?php echo "Due Date: <pre>".$order['order_completion_date'].'</pre>'; ?></p>
            <p><?php echo "Order Cost: <pre>".$order['order_price'].'</pre>'; ?></p>
            <p>Order Files: 
            <pre> 
           <?php
           $dir = "uploads/".$order['user_id']."/".$order['order_id'];
           if(!is_dir($dir)){
                mkdir($dir,0777,TRUE);
            }
            
            $files = scandir($dir);
            foreach ($files as $file){
                echo '<p><a href="'.  base_url().'uploads/'.$order["user_id"].'/'.$order["order_id"].'/'.$file.'">'.$file.'</a></p>';
            }?>
            </pre></p>
            <?php
            $data = array(
              'user_id' => $order['user_id'],
                'order_id' => $order['order_id']
            );
            
            $formattributes = array(
                      'role'=>'form',
                      'class'=>'form-horizontal'
                    );
            echo form_open_multipart('orders/add_upload',$formattributes,$data);
            echo '<div class="form-group">';
            echo '<label for="username" class="control-label col-sm-2">Add Document:</label>';
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