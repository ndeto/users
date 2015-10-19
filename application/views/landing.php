<div class="container-fluid">
<section id="full">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Welcome To the Users Website</h1>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1 class="text-center"><small><span class="blue">
                Assignments? Don't Worry, we understand the pressure of being a student.
                <?php ?>
                </span></small></h1>
            </div>
            <div class="col-md-4"></div>
            
            <br>
        </div>
        <div class="row">
            
        </div>
    </div>
</section>
</div>
<div class="container">
    <div id="body-cont" class="row text-center">
        <div class="col-md-4">
            <img src="<?php echo base_url(); ?>resources/images/pen.jpg" alt=""/>
            <p><span class="largefirst">J</span><span class="logo-text">ust Tell us what you need!</span></p>
            <p><span class="blue"><i class="fa fa-arrow-right fa-5x"></i></span></p>
        </div>
        <div class="col-md-8">
            <?php $this->load->view('templates/orderwindow'); ?>
        </div>
     </div>


        
