
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
                        
                      <center><form action="" method="get">
                      <label for="htno">Student HallTicket No.</label><br>
                          <input id="htno" type="text" placeholder="Enter Hall Ticket No." name="htno" required>
                          <button class="btn btn-primary">Go</button>
                      </form> </center>
                      <script>
        function myFunction() {
          document.getElementById("chgfee").readOnly = false;
          document.getElementById("chgbfee").readOnly = false;
        }
        </script>
                      <?php
                      if(isset($_GET['htno'])){
                          require "connection.php";
echo '<center><h4>Fee History for Hallticket No.'.strtoupper($_GET['htno']).'</h4></center>';
$query="select b.year,a.id,concat(b.first_name,' ',b.Last_Name) as name,a.htno,bname,a.fee,paidfee,(a.fee*b.Year)-paidfee balance,((duration*a.fee)-paidfee) as totalbalance from fees a join students b on a.htno=b.Hall_Ticket left join branches c on b.Branch=c.bid where a.htno='".$_GET['htno']."'";
$query2="select b.year,a.id,concat(b.first_name,' ',b.Last_Name) as name,a.htno,bname,a.busfee,busfeepaid,((a.busfee*b.year)-busfeepaid) balance from fees a join students b on a.htno=b.Hall_Ticket left join branches c on b.Branch=c.bid where a.htno='".$_GET['htno']."'";
$result=mysqli_query($mysql,$query);
$result2=mysqli_query($mysql,$query2);
if(mysqli_num_rows($result)>0){
    
    echo '<div class="btn btn-danger btn-sm">College Fee Details</div>';
    echo '<form action="" method="POST">';
    echo ' <div class="card-body">
    <div class="table-responsive">
        <table class="table" width="100%" cellspacing="0">
            <thead>
    
    <tr>
    
    <th scope="col">Student Name</th>

    <th scope="col">HallTicket No</th>
      
    <th scope="col">Branch</th>

    <th scope="col">Year</th>

    <th scope="col">College fee</th>

    <th scope="col">Paid Fee</th>

    <th scope="col">Balance Fee</th>

    <th scope="col">Total Balance Fee</th>
    
    <th scope="col">Pay Fee</th>
    
    </tr>
    </thead>';
     while($row=mysqli_fetch_array($result)){
        echo '<tr>
        <td>'.ucwords($row['name']).'</td>
        <td>'.$row['htno'].'</td>
        <td>'.ucwords($row['bname']).'</td>
        <td>'.$row['year'].'</td>
        <td><input id="chgfee" name="fee" value='.$row['fee'].' ondblclick="myFunction()" readonly></td>
        <td>'.$row['paidfee'].'</td>
        <td>'.$row['balance'].'</td>
        <td>'.$row['totalbalance'].'</td>
        <td>
        <input type="text" name="htno" value="'.$row['htno'].'" hidden>
        <input type="number" name="cfee" value="0" class="btn btn-secondary btn-sm">
        </td></tr>';
        
     }
     
     echo '</table></div></div><br>';
}
else{
    echo '<center><p class="btn btn-primary btn-sm">No records available</p></center><br>';
}


if(mysqli_num_rows($result2)>0){
    echo '<div class="btn btn-danger btn-sm">Bus Fee Details</div>';
    echo ' <div class="card-body">
    <div class="table-responsive">
        <table class="table" width="100%" cellspacing="0">
            <thead>
    
    <tr>
    
    <th scope="col">Student Name</th>

    <th scope="col">HallTicket No</th>
      
    <th scope="col">Branch</th>

    <th scope="col">Year</th>

    <th scope="col">Bus fee</th>

    <th scope="col">Bus Fee Paid</th>

    <th scope="col">Balance Fee</th>
    
    <th scope="col">Pay Fee</th>
    
    </tr>
    </thead>';
     while($row=mysqli_fetch_array($result2)){
        echo '<tr>
        <td>'.ucwords($row['name']).'</td>
        <td>'.$row['htno'].'</td>
        <td>'.ucwords($row['bname']).'</td>
        <td>'.$row['year'].'</td>
        <td><input id="chgbfee" name="bfee" value='.$row['busfee'].' ondblclick="myFunction()" readonly></td>
        <td>'.$row['busfeepaid'].'</td>
        <td>'.$row['balance'].'</td>
        <td>
        <input type="number" name="busfee" value="0" class="btn btn-secondary btn-sm">
        </td></tr>';
        
     }
     
     echo '</table></div></div><center><input type="text" placeholder="comment" value="" name="comment" ><input type="submit" value="Pay" class="btn btn-primary btn-sm"></center></form><br>';
}
else{
    echo '<center><p class="btn btn-primary btn-sm">No records available</p></center><br>';
}


$query1="select * from feelog where htno='".$_GET['htno']."' order by date desc";
$result1=mysqli_query($mysql,$query1);
if(mysqli_num_rows($result1)>0){
    echo '<div class="btn btn-success btn-sm">Payment History & Comments</div>';
    
    echo ' <div class="card-body">
    <div class="table-responsive">
        <table class="table-primary" width="100%" cellspacing="0">
            <thead>
    
    <tr>
    
    <th scope="col">HallTicket No</th>

    <th scope="col">clg fee</th>
      
    <th scope="col">Bus fee</th>

    <th scope="col">Paid clg fee</th>

    <th scope="col">Paid bus fee</th>
    <th scope="col">Comment</th>
    
    <th scope="col">Date</th>
    
    </tr>
    </thead>';
     while($row=mysqli_fetch_array($result1)){
        echo '<tr>
        <td>'.ucwords($row['htno']).'</td>
        <td>'.$row['cfee'].'</td>
        <td>'.$row['bfee'].'</td>
        <td>'.$row['cfeepaid'].'</td>
        <td>'.$row['bfeepaid'].'</td>
        <td>'.$row['comment'].'</td>
        <td>'.$row['date'].'</td>
        </tr>';
        
     }
     echo '</table></div></div>';
}

echo '<button class="btn btn-primary" onclick=window.print()>Print</button>';        }
                            
                          ?>  
                          
                          
                          <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require "connection.php";
    $id=$_POST['htno'];
    $fee=mysqli_real_escape_string($mysql,htmlspecialchars($_POST['fee']));
    $cfee=mysqli_real_escape_string($mysql,htmlspecialchars($_POST['cfee']));
    $bfee=mysqli_real_escape_string($mysql,htmlspecialchars($_POST['bfee']));
    $busfee=$_POST['busfee'];
    $comment=mysqli_real_escape_string($mysql,htmlspecialchars($_POST['comment']));
    
    mysqli_query($mysql,"insert into feelog (`htno`,`cfee`,`bfee`,`cfeepaid`,`bfeepaid`,`comment`) values('$id','$fee','$bfee','$cfee','$busfee','$comment')");
    
    mysqli_query($mysql,"update fees set fee=".$fee.",busfee=".$bfee.",paidfee=paidfee+".$cfee.",busfeepaid=busfeepaid+".$busfee." where htno='".$id."'");
  
    echo '<script>alert("success");
    window.location.href="receivefee.php?htno='.$_GET['htno'].'";
    
    </script>';

}

if(isset($_GET['move'])&&$_SERVER["REQUEST_METHOD"]!="POST"){
    require "connection.php";
    if(mysqli_query($mysql,"update issuebook set returneddate='',isreturned=0 where id=".$_GET['move'])){
    echo '<script>window.location.href="receivebook.php?htno='.$_GET['htno'].'";
    </script>';
}
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
