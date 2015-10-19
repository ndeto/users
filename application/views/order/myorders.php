
<!--
 * Created by PhpStorm.
 * User: TGB
 * Date: 10/9/2015
 * Time: 10:32 PM
 *-->


<div class="container">
    <section>

        <div id="body-cont" class="col-md-12 text-center">
            <?php
            if($this->session->flashdata('complete')!=NULL){
                echo '<div class="alert alert-dismissible alert-success">
                <strong>Success! : </strong>';
                echo $this->session->flashdata('complete');
                echo '</div>';
            }
            elseif($this->session->flashdata('incomplete')!=NULL){
                echo '<div class="alert alert-dismissible alert-info">
                <strong>Info : </strong>';
                echo $this->session->flashdata('incomplete');
                echo '</div>';
            }
            ?>

            <table class="table table-hover table-bordered active">
                <thead>
                <th>Order Id</th>
                <th>Order Title</th>
                <th>Order Description</th>
                <th>Time Remaining</th>
<!--            <th>Completion Date</th>
                <th>Assigned Status</th>
                <th>Assigned Writer</th> -->
                <th>Order Price</th>
<!--            <th>Client ID</th> -->
                </thead>
                <tbody>
                    <?php foreach ($orders as $order):
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
                        ?>

<tr>
    <td> <a href="view/<?php echo $order['order_id'] ?>"><?php echo $id; ?></a></td>
    <td> <?php echo $order['order_title'];?></td>
    <td> <?php echo $order['order_description'];?></td>
    <td> <?php echo $order['order_date'];?></td>
    <!--                     <td> <?php //echo $order['order_completion_date'];?></td>
                        <td> <?php //echo $order['assigned_status'];?></td>
                        <td> <?php //echo $order['assigned_writer'];?></td>-->
    <td> <?php echo $order['order_price'];?></td>
   <!-- <td><button id="<?php /*echo 'b'.$order['order_id'];*/?>" class="btn btn-info" onclick="work('<?php /*echo 'b'.$order["order_id"]; */?>','<?php /*echo 'fa'.$order["order_id"]; */?>','<?php /*echo $order['order_id']; */?>');">
            <i id="<?php /*echo 'fa'.$order['order_id']; */?>" class="fa fa-files-o"></i> Take Order</button></td>-->

    <?php endforeach ?>
    </tbody>
    </table>
    </div>
    </section>
    </div>

    <?php

    //echo $order['order_id']."<p>";
    //echo $order['order_title']."<p>";
    //echo $order['order_description']."<p>";
    //echo $order['order_date']."<p>";
    //echo $order['order_completion_date']."<p>";
    //echo $order['assigned_status']."<p>";
    //echo $order['assigned_writer']."<p>";
    //echo $order['order_price']."<p>";
    //echo $order['user_id']."<p>";

    ?>





