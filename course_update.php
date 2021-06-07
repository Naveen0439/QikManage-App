
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
                        
                    <?php

require 'db_connection.php';
$userid = $_GET['id'];
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    
    $userid = $_GET['id'];
    $get_user = mysqli_query($conn,"SELECT * FROM `branches` WHERE isactive=1 and bid='$userid'");
    if(mysqli_num_rows($get_user) === 1){
        
      $row = mysqli_fetch_assoc($get_user);
    
  }
}

  if($_SERVER["REQUEST_METHOD"]=="POST" && empty($_POST['delete'])){
    
require "connection.php";
    $stmt=mysqli_prepare($mysql,'update branches set bname=?,duration=?,seats=?,bhod=?,hodsince=?,fee=? where bid=?');
    mysqli_stmt_bind_param($stmt,"siisssi",$bname,$duration,$seats,$_POST['select'],$hodsince,$fee,$_GET['id']);
                             $bname = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['bname']));
                             $duration = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['duration']));
                             $seats = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['seats']));
                             $bhod = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['select']));
                             
                            if (isset($_POST['select'])) {
                                $bhod = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['select']));
                                $hodsince = date('d/m/y');
                            }
                            else{
                                $hodsince=$_POST['hodsince']; 
                            }
                            $fee = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['fee']));
if(mysqli_stmt_execute($stmt)){
  echo "<script>
                    alert('Details Updated Successfully!');
                    window.location.href='course.php';
                    </script>";
  }
  else{

    echo "<script>
                    alert('HOD not update Successfully!');
                    
                    </script>";
  }
}
?>
   
                      
<center><h3 class="font-weight-light">Channge Details of <?php echo $row['bname'].' '.'Department' ;?></h3></center><br><br>

<form action="" method="POST">
    
    <?php
    require "connection.php";
    $details="select a.fee,bname,bhod,bid,badded,duration,hodsince,seats,concat(First_name,' ',last_name) as name from branches a left join staff b on b.empid_number=a.bhod where isactive=1 and bid=".$_GET['id'];
    $b=mysqli_query($mysql,$details);
if (mysqli_num_rows($b)>0) {
    $a=mysqli_fetch_assoc($b);
}
else{
    echo "<script>
    alert('No Records found')
    window.location.href='branch.php';
     </script>";
}
    ?>
  <div class="form-group">
    <label for="bname">Enter Branch Name</label>
    <input type="text" class="form-control" name="bname" id="bname" placeholder="Enter Branch Name Here" value="<?php echo $a['bname'];?>">
  </div>
  <div class="form-group">
    <label for="bname">Branch Seats</label>
    <input type="number" class="form-control" name="seats" id="seats" placeholder="Enter Number of seats allocated for this branch" value="<?php echo $a['seats'];?>">
  </div>
  <div class="form-group">
    <label for="bname">Course Duration</label>
    <input type="number" class="form-control" name="duration" id="duration" placeholder="Enter course duration in years" value="<?php echo $a['duration'];?>">
    <input type="text" value="<?php echo $a['hodsince'];?>" name="hodsince" hidden>
  </div>
  <p>Please select faculty name from below list</p>
  <?php
$query=mysqli_query($conn,"SELECT empid_number,concat(First_name,' ',last_name) as name FROM staff where branch_teaching=$userid");
if(mysqli_num_rows($query)){
$select= '<select class="custom-select" name="select"><option value="">None</option>';
while($rs=mysqli_fetch_array($query)){
      $select.='<option value="'.$rs['empid_number'].'" selected>'.ucwords($rs['name']).'</option>';
  }
}
else{
  $query=mysqli_query($conn,"SELECT empid_number,concat(First_name,' ',last_name) as name FROM staff");
  if(mysqli_num_rows($query)){
    $select= '<select class="custom-select"  name="select"><option value="'.$a['bhod'].'">'.ucwords($a['name']).'</option><option value="">None</option>';
    while($rs=mysqli_fetch_array($query)){
          $select.='<option value="'.$rs['empid_number'].'">'.ucwords($rs['name']).'</option>';
      }
    }
}
$select.='</select>';
echo $select.'<br> <br>';

                ?>            
<div class="form-group">
    <label for="fee">Course fee</label>
    <input type="number" class="form-control" name="fee" id="fee" placeholder="Enter College fee" value="<?php echo $a['fee'];?>">
  </div>
             <input onclick="conf()" id="input" value="Update" class="btn btn-primary btn-lg btn-block">
             <script>
               function conf(){
                 a=document.getElementById("input");
                 if(confirm("Are you sure you want to change HOD?")){
                   a.type="submit";
                 }
                 else {
                  a.type="";
                 }
               }
             </script>

<input id="delete" name="delete" hidden>
<input  onclick=conff() value="Delete" class="btn btn-danger btn-lg btn-block">
             <script>
               function conff(){
                 a=document.getElementById("delete");
                 if(confirm("Are you sure you want to Delete Branch?")){
                    a.value="delete";
                    a.type="submit";
                    a.click();
                 }
               }
             </script>

            </form>
        
        <!-- END OF UPDATE DATA SECTION -->
   
        <?php 
if(!empty($_POST['delete'])){
    if(mysqli_query($mysql,"update branches set isactive='0' where bid=".$_GET['id'])){
        echo "<script>
        alert('Branch Deleted Succesfully')
        window.location.href='branch.php';
        </script>";
    }
}

mysqli_close($mysql);  // close connection ?>


                       
                            
                         
                                
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
