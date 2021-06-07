
<?php require "session.php";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>QikManage</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark"><?php include "logo.php";?>
            <a class="navbar-brand" href="index.php">QikManage</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <a class="dropdown-item" href="inbox.php">Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                                Manage
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="student.php">Students</a>
                                    <a class="nav-link" href="staff.php">staff</a>
                                    <a class="nav-link" href="course.php">Courses</a>
                                    <a class="nav-link" href="class.php">classes</a>
                                </nav>
                            </div>


                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Other
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Status
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="va.php">Attendance</a>
                                            <a class="nav-link" href="viewtimetable.php">Time Tables</a>
                                            <a class="nav-link" href="fees.php">Fee Details</a>
                                            <a class="nav-link" href="bus.php">Bus Details</a>
                                            
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Info
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                             <a class="nav-link" href="circular.php">Approve Leaves</a>
                                             <a class="nav-link" href="message.php">Message</a>
                                            <a class="nav-link" href="leaves.php">Notifications</a>
                                            
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="Library.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                                Library
                            </a>
                            <a class="nav-link" href="complaints.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-info-circle"></i></div>
                                Complaints
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo ucwords($_SESSION['name']); ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <div class="form">
      <div class="alert alert-primary" role="alert">
        <center><h2 style="color:#d7385e;">VIEW TIMETABLE
        </h2></center></div>   
        <center><a href="timetable.php" class="btn btn-primary">Add New Time Table</a></center>
                    <form action="" method="post">
                        <select name="year" class="form-control" required>
                        <option value="">Select Year</option>
                            <option value="1">1st Year</option>
                            <option value="2">2nd Year</option>
                            <option value="3">3rd Year</option>
                            <option value="4">4th Year</option>
                            <option value="5">5th Year</option>
                        </select>
                        <select name="sem" class="form-control" required>
                            <option value="">Select Semster</option>
                            <option value="1">1st semster</option>
                            <option value="2">2nd semster</option>
                        </select>
                        <?php
                        require "connection.php";
                        $query=mysqli_query($mysql, "SELECT distinct bname,bid FROM branches where isactive=1");
                        if (mysqli_num_rows($query)) {
                            $select= '<select name="branch" class="form-control" required><option value="">Please Select Branch From Below List</option>';
                            while ($rs=mysqli_fetch_array($query)) {
                                $select.='<option value="'.$rs['bid'].'">'.$rs['bname'].'</option>';
                                
                            }
                        }
                        $select.='</select> <br>';
                        echo $select;
                        ?>
                        <center><button type="submit">Show</button></center>
                    </form>

                        <?php
                           if($_SERVER["REQUEST_METHOD"]=="POST"){
                               
                                   require "connection.php";
                                   $year=$_POST['year'];
                                   $sem=$_POST['sem'];
                                   $branch=$_POST['branch'];
                                   $a="select a.*,b.bname from timetable a join branches b on a.branchid=b.bid where a.year=".$year." and a.sem=".$sem." and a.branchid=".$branch;
                                   if (mysqli_num_rows(mysqli_query($mysql, $a))>0) {
                                       echo '<div style="overflow-x:auto;">
                                <table id="staff" class="table table-striped table-dark">
                                      <tr>
                                        <th scope="col">Day</th>
                                        <th scope="col">Period 1</th>
                                        <th scope="col">Period 2</th>
                                        <th scope="col">Period 3</th>
                                        <th scope="col">Period 4</th>
                                        <th scope="col">Period 5</th>
                                        <th scope="col">Period 6</th>
                                        <th scope="col">Period 7</th>
                                        <th scope="col">Period 8</th>
                                        <th scope="col">Action</th>
                                        
                                      </tr>';
                                       $branchname="";
                                       $res=mysqli_query($mysql, $a);
                                       while ($row=mysqli_fetch_array($res)) {
                                           echo '<tr>
                                    <td >'.ucwords($row['day']).'</td>
                                    <td>'.ucwords($row['p1']).'</td>
                                    <td>'.ucwords($row['p2']).'</td>
                                    <td>'.ucwords($row['p3']).'</td>
                                    <td>'.ucwords($row['p4']).'</td>
                                    <td>'.ucwords($row['p5']).'</td>
                                    <td>'.ucwords($row['p6']).'</td>
                                    <td>'.ucwords($row['p7']).'</td>
                                    <td>'.ucwords($row['p8']).'</td>
                                    <td>'.'<a href=updatetimetable.php?id='.$row['id'].' class="btn btn-danger btn-sm">Change</a>'.'</td>
                                    </tr> </div>';
                                           $branchname=$row['bname'];
                                       }
                                       echo '</table>';
                                       echo "<strong>Year :".$_POST['year']." Semster :".$_POST['sem']." Branch Name: ".$branchname."</strong>";
                                   } else {
                                       echo "<h1>No Records Found</h1>";
                                   }
                                   echo "<br><button onclick=window.print()>Print</button>";
                              
                               }
                        ?>
                            
                                
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; QikManage 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
