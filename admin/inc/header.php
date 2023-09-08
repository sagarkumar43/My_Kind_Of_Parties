<?php
session_start();
?>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)"
                data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <div class="top-left-part"><a class="logo" href="dashboard.php">
                    <b><img src="../vendor/images/MyKOP_logo1.png" alt="home"
                            style="width:217px;" /></b></a></div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i
                            class="icon-arrow-left-circle ti-menu"></i></a></li>
                <li>
                    <!-- <form role="search" class="app-search hidden-xs">
                        <input type="text" placeholder="Search..." class="form-control"><a href=""><i
                                class="fa fa-search"></i></a>
                    </form> -->
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                    <!-- <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                       <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Jatin kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                       <div class="mail-contnet">
                                            <h5>Vaibhav Tomar</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Smily</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Amit Kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                           <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>

                 </li> -->
                                            <!-- /.dropdown -->
                                            <!-- <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
                                        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                                        </a>
                                                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                                                            <li>
                                                                <a href="#">
                                                                    <div>
                                                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                                                        <div class="progress progress-striped active">
                                                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li>
                                                                <a href="#">
                                                                    <div>
                                                                        <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                                                        <div class="progress progress-striped active">
                                                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li>
                                                                <a href="#">
                                                                    <div>
                                                                        <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                                                        <div class="progress progress-striped active">
                                                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li>
                                                                <a href="#">
                                                                    <div>
                                                                        <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                                                        <div class="progress progress-striped active">
                                                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li>
                                                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                                                            </li>
                                                        </ul>
                                                        
                                                    </li> -->
                                            <!-- /.dropdown -->

                            <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="plugins/images/users/1.jpg" alt="" class="img-circle" width="36
                            "> <span class="hidden-md-down"><b>Welcome Admin</b> &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                
                                <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                
                                <div class="dropdown-divider"></div>
                                
                                <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                                
                                <div class="dropdown-divider"></div>
                                
                                <a href="logout.php" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                
                            </div>
                        </li>

          <!-- <div class="not working div">
                <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                            <img src="plugins/images/users/1.jpg" alt="user-img" width="36" class="img-circle">
                            <b class="hidden-xs">Welcome Admin</b>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="profile.php"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i>  Inbox</a></li>
                            <li><a href="profile.php"><i class="ti-settings"></i> Account Setting</a></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                       
                    </li>
          </div> -->

            <!-- <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i
                        class="ti-settings"></i></a></li> -->
            <!-- /.dropdown -->
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>