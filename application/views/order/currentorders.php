
<div class="container">
    <section>

        <div id="body-cont" class="col-md-12 text-center">
            <table class="table table-hover table-bordered active">
                <thead>
                <th>Order Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Time Remaining</th>
                <!--            <th>Completion Date</th> -->

                <!--                <th>Assigned Writer</th>-->
                <th>Order Price</th>
                <th>Assigned Status</th>
                <th>Actions</th>
                <!--            <th>Client ID</th>-->
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
                    <!--                    <td><?php //// echo $order['order_completion_date'];?></td>-->

                    <!--                        <td> <?php //echo $order['assigned_writer'];?></td>-->
                    <td> <?php echo $order['order_price'];?></td>
                    <!--                    <td> <?php //echo $order['user_id'];?></td>-->
                    <td><?php echo $order['assigned_status'];?></td>
                    <td>
                        <ul class="nav nav-tabs ">
                            <ul  id="nav-bar" class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" id="dropdown-toggle" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs"></i>Order Action <i class="fa fa-chevron-down"></i> </a>
                                    <ul class="dropdown-menu">
                                        <li style="background-color:lightgreen;" ><a href="#" id="<?php echo 'complete-btn'.$order['order_id']; ?>" onclick="complete('<?php echo $order['order_id']; ?>','<?php echo base_url(); ?>')"> Complete <i class="fa fa-check"></i> </a></span></li>
                                        <li class="divider" style="background-color: darkgreen;"></li>
                                        <li style="background-color: indianred;"><a href="#" id="<?php echo 'incomplete-btn'.$order['order_id']; ?>" onclick="incomplete('<?php echo $order['order_id']; ?>','<?php echo base_url(); ?>')">Incomplete <i class="fa fa-times"></i></a></span></li>
                                        <li class="divider" style="background-color: darkred;"></li>
                                    </ul>
                                </li>
                            </ul>
                        </ul>
                    </td>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<?php
?>

    



