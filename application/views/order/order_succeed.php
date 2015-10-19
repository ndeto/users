<?php $data = $_POST;?>
            
            <?php if(isset($upload_data)){ ?>
            <ul>
                <?php //foreach ($upload_data as $item => $value):?>
                <li><?php echo "The File ".$upload_data['orig_name']." has been Uploaded! Order Successful"; ?> <?php// echo $value;?></li>
            <?php //endforeach;
            
//            echo anchor('upload', 'Upload Another File!');
            } ?>
            </ul>