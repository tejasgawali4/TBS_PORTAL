                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                            <div class="user-panel">
                                <div class="pull-left image">
                                    <img src="img/26115.jpg" class="img-circle" alt="User Image" />
                                </div>
                                <div class="pull-left info">
                                <?php
                                       $name=$_SESSION['u_fisrtname'];
                                        echo "<p>Hello, $name</p>";
                                ?>
                                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                                </div>
                            </div>
                            <!-- search form -->
                            <form action="#" method="get" class="sidebar-form">
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                    <span class="input-group-btn">
                                        <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                            <!-- /.search form -->
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            <ul class="sidebar-menu">
                                 <li class="active">
                                    <a href="AdminAddJobPost.php">
                                        <i class="fa fa-dashboard"></i> <span>Add jobs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="AdminViewJobPost.php">
                                        <i class="fa fa-gavel"></i> <span>Job Openings</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="AdminAddCandidate.php">
                                        <i class="fa fa-globe"></i> <span>Add Candidates</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="AdminViewCandidate.php">
                                        <i class="fa fa-glass"></i> <span>View Candidates</span>
                                    </a>
                                </li>

                            </ul>
                        </section>
                        <!-- /.sidebar -->
                    </aside>

                    <aside class="right-side">
