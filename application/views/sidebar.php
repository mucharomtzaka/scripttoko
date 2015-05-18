
<!-- Sidebar -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url();?>"><i class="fa fa-bar-chart-o fa-fw"></i> SIMA OFFICE</a>
    </div>
 <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="sidebar-search">

                <a href="<?php echo base_url();?>">
                    <img src="<?php echo base_url();?>assets/images/new-logo.png" height="35">
                 </a>
            </li>
            <?php if($this->general->privilege_check(PRODUK,'view')){ ?>
            <li class="<?php echo ($this->session->userdata('menu')=='product') ? 'active' : '';?> dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-dashboard"></i> Product <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <?php if($this->general->privilege_check(LAMPU,'view')){ ?>
                    <li><a href="<?php echo base_url();?>product/lampu">Lampu</a></li>
                    <?php } ?>
                    <?php if($this->general->privilege_check(FIXTURE,'view')){ ?>
                    <li><a href="<?php echo base_url();?>product/fixture">Fixture</a></li>
                    <?php } ?>
                    <?php if($this->general->privilege_check(ACCESORIES,'view')){ ?>
                        <li><a href="<?php echo base_url();?>product/accesories">Accesories</a></li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
            <?php if($this->general->privilege_check(KATALOG,'view')){ ?>
            <li class="<?php echo ($this->session->userdata('menu')=='katalog') ? 'active' : '';?>"><a href="<?php echo base_url();?>katalog"><i class="fa fa-glass"></i> Katalog</a></li>
            <?php } ?>
            <?php if($this->general->privilege_check(CLIENT,'view')){ ?>
            <li class="dropdown <?php echo ($this->session->userdata('menu')=='client') ? 'active' : '';?>">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Client <b class="caret"></b> </a>
                
                <ul class="dropdown-menu">
                    <?php if($this->general->privilege_check(CLIST,'view')){ ?>
                    <li><a href="<?php echo base_url();?>client/listc">List Client</a></li>
                    <?php } ?>
                     <?php if($this->general->privilege_check(CPROJECT,'view')){ ?>
                    <li><a href="<?php echo base_url();?>client/project">Project</a></li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
            <?php if($this->general->privilege_check(JOBDESK,'view')){ ?>
            <li class="dropdown <?php echo ($this->session->userdata('menu')=='quotation') ? 'active' : '';?>">
                
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book"></i> Job Desk <b class="caret"></b> </a>
                
                <ul class="dropdown-menu">
                    <?php if($this->general->privilege_check(QUOTATION,'view')){ ?>
                    <li><a href="<?php echo base_url();?>quotation">Quotation</a></li>
                    <?php } ?>
                   
                </ul>
            
            </li>
            <?php } ?>
            <?php if($this->general->privilege_check(REPORT,'view')){ ?>
            <li class="<?php echo ($this->session->userdata('menu')=='report') ? 'active' : '';?>"><a href="<?php echo base_url();?>report"><i class="fa fa-bar-chart-o"></i> Report</a></li>
            <?php } ?>
            <?php if($this->general->privilege_check(USER_MANAGEMENT,'view')){ ?>
            <li class="dropdown <?php echo ($this->session->userdata('menu')=='user_management') ? 'active' : '';?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sitemap"></i> User Management <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <?php if($this->general->privilege_check(USER,'view')){ ?>
                    <li><a href="<?php echo base_url();?>user">User</a></li>
                    <?php } ?>
                     <?php if($this->general->privilege_check(JABATAN,'view')){ ?>
                    <li><a href="<?php echo base_url();?>jabatan">Jabatan</a></li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
        </ul>

        <ul class="nav navbar-top-links navbar-right">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                    <i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('nama');?> <i class="fa fa-caret-down"></i>

                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="<?php echo base_url();?>user/profile"><i class="fa fa-user fa-fw"></i>Profile</a>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url();?>logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>

    </div><!-- /.navbar-collapse -->

</nav>
