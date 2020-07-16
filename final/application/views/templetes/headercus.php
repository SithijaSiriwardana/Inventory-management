<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="#" class="navbar-brand"><?php echo img('images/bb.jpg'); ?></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="<?php echo site_url('Order/readcus/');?>" class="nav-item nav-link ">View Order</a>
            <a href="<?php echo site_url('Order/create/'.$this->session->userdata('user_id'));?>" class="nav-item nav-link ">Create Order</a>

        </div>
        <div class="navbar-nav ml-auto">
            <a href="<?php echo site_url('login_control/logout'); ?>" class="nav-item nav-link">Log Out</a>
        </div>
    </div>
</nav>
