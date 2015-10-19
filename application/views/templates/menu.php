<?php ?>
<div id="container" class="container-fluid">
<section id="menu">
    <nav id="nav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><span class="largefirst">U</span><span class="logo-text">sers</span></a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home blue"></i> Home</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/orders"><i class="fa fa-reorder blue"></i> Order</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/orders/myorders"><i class="fa fa-pencil-square blue"></i> Current Orders</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/orders/history""><i class="fa fa-clock-o blue"></i> History</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    require_once 'application/siteconfig/siteconfig.php';
                    $set_data = Siteconfig::check_login();
                    if(!isset($set_data['username'])){ ?>
                    <li><a href="<?php echo base_url(); ?>index.php/user/register"><i class="fa fa-user blue"></i></span>  Register</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/user"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
                    <?php }else{ ?>
                        <li><a href="<?php echo base_url(); ?>index.php/user/logout"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</section>
</div>