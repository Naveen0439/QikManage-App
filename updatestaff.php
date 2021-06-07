
<?php
require "session.php";
require 'connection.php';
?>



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
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Start Bootstrap</a>
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
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
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
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                SRTS
                            </a>
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                                Manage 
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Hod.php">HOD</a>
                                    <a class="nav-link" href="class.php">classes</a>
                                    <a class="nav-link" href="staff.php">Staff</a>
                                    <a class="nav-link" href="timetable.php">Time Table</a>
                                   
                                </nav>
                            </div>


                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Observation
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Attendance
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>
                                       
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                       Syllabus
                                         <div class="sb-sidenav-collapse-arrow"></i></div>
                                    </a>
                                    
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                         Qik Manage
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <?php
/* ---------------------------------------------------------------------------
------------------------------------------------------------------------------ */


// UPDATING DATA

if(isset($_POST['first']) && isset($_POST['last'])){
// check username and email empty or not
if(!empty($_POST['first']) && !empty($_POST['last']) && !empty($_POST['user']) && !empty($_POST['branch']) && !empty($_POST['qua'])){
    
    // Escape special characters.
    $First_Name = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['first']));
    $Last_Name = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['last']));
    $User_Name1 = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['user']));
    $Branch_Teaching = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['branch']));
    $Qualification = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['qua']));
    $Staff_Role = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['role']));
    $Employment_Type = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['emptype']));
    $Experience = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['exper']));
    $user_email = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['email']));
    $Dateof_Birth = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['dob']));
    $DateOf_Joining = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['doj']));
    $Faculty_PhNo = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['phoneno1']));
    $facultyphno2 = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['addlPhNo']));
    $Gender = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['gen']));
    $Blood_Group = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['bg']));
    $Permanent_Address = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['peradd']));
    $city = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['city']));
    $State1 = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['states']));
    $District = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['dis']));
    $Pin_code = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['pin']));
    $sal = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['sal']));
    $BAN = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['bank']));
    $ifsc = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['ifsc']));
        //CHECK EMAIL IS VALID OR NOT
    if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        $user_id = $_GET['id'];
        // CHECK IF EMAIL IS ALREADY INSERTED OR NOT
        $check_email = mysqli_query($mysql, "SELECT `user_email` FROM `staff` WHERE user_email = '$user_email' AND id != '$user_id'");
        
        if(mysqli_num_rows($check_email) > 0){    
            
            echo "<script>
                alert('Data not  Updated');
                </script>";
        }else{
            
            // UPDATE USER DATA               
            $update_query = mysqli_query($mysql,"UPDATE `staff` SET First_Name='$First_Name',Last_Name='$Last_Name',User_Name1='$User_Name1',Branch_Teaching='$Branch_Teaching',Qualification='$Qualification',Staff_Role='$Staff_Role',Employment_Type='$Employment_Type',Experience='$Experience',user_email='$user_email',Dateof_Birth='$Dateof_Birth',DateOf_Joining='$DateOf_Joining',Faculty_PhNo='$Faculty_PhNo',addlPhNo='$facultyphno2',Gender='$Gender',Blood_Group='$Blood_Group',Permanent_Address='$Permanent_Address',State1='$State1',District='$District',Pin_code='$Pin_code',sal='$sal', BAN='$bank',ifsc='$ifsc',city='$city' WHERE id=$user_id");
            //CHECK DATA UPDATED OR NOT
            if($update_query){
                echo "<script>
                alert('Data Updated');
                window.location.href = 'staff.php';
                </script>";
                exit;
            }else{
                echo "<script>
                alert('Data Not Updated');
                window.location.href = 'staff.php';
                </script>";
            }
        }
    }else{
        echo '<div class="alert alert-danger" role="alert">
       Email is already used please try another!
      </div>';
    }
    
}else{
    echo '<div class="alert alert-danger" role="alert">
    Please Fill All Required Fields and click on update.
  </div>';
}   
}
else{
    echo '<div class="alert alert-primary" role="alert">
    <center><h2 style="color:#d7385e;">UPDATE DETAILS</h2></center>
   <center> Please make sure while updating current data.</center>
  </div>';
}  

// END OF UPDATING DATA

?>
                 
                        
                     <?php


if(isset($_GET['id']) && is_numeric($_GET['id'])){
    
    $userid = $_GET['id'];
    $get_user = mysqli_query($mysql,"SELECT * FROM `staff` a left join branches b on a.Branch_Teaching=b.bid WHERE id='$userid'");
    
    if(mysqli_num_rows($get_user) === 1){
        
        $row = mysqli_fetch_assoc($get_user);
    
?>
     <div class="container">
      
       <!-- UPDATE DATA -->
        <div class="form">
        
            <form action="" method="POST">
                <strong>First Name</strong><br>
                <input class="form-control"type="text" autocomplete="off" name="first" placeholder="Enter your First Name" value="<?php echo $row['First_Name'];?>" required><br>
                <strong>Last Name</strong><br>
                <input class="form-control"type="text" autocomplete="off" name="last" placeholder="Enter your Last Name" value="<?php echo $row['Last_Name'];?>" required><br>
                <strong>User Name</strong><br>
                <input class="form-control"type="text" autocomplete="off" name="user" placeholder="Enter your User Name" value="<?php echo $row['User_Name1'];?>" required><br>
                <strong>EmpId Number</strong><br>
                <input class="form-control"type="text" autocomplete="off" name="emp" placeholder="<?php echo $row['EmpId_Number'];?>" disabled><br>
                <strong>EMail</strong><br>
                            <input class="form-control"type="text" autocomplete="off" name="email" placeholder="Enter your Mail ID" value="<?php echo $row['user_email'];?>" required><br>
                <strong>Branch Of Teaching</strong><br>
                <?php
$query=mysqli_query($mysql,"SELECT distinct bname,bid FROM `staff` a right join branches b on a.Branch_Teaching=b.bid and isactive=1");
if(mysqli_num_rows($query)){
$select= '<select name="branch" class="form-control">';
while($rs=mysqli_fetch_array($query)){
      $select.='<option value="'.$rs['bid'].'">'.$rs['bname'].'</option>';
  }
}
$select.='</select>';
echo $select;
                ?> <br> 
                  <strong>Qualification</strong><br>
                <select class="form-control"id="selectBox" onchange="changeFunc()" name="qua" required>
                <option value="<?php echo $row['Qualification'];?>"><?php echo $row['Qualification'];?></option>
                                                <option value="B.TECH"> B.Tech </option>
                                                <option value="M.TECH">M.Tech</option>
                                                <option value="Degree">Degree</option>
                                                <option value="Ph.D">Ph.D</option>
                                                <option value="other">Other</option>
                                                </select><br> 
                                                <input class="form-control"name="Please enter qualification" placeholder="other" class="form-control" type="text" style="display: none" id="textboxes">
    <script type="text/javascript">
        function changeFunc() {
            var selectBox = document.getElementById("selectBox");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
            if (selectedValue == "other") {
                $('#textboxes').show();
            } else {

                $('#textboxes').hide();
            }
        }
    </script>         
                            <strong>Staff Role</strong><br>
                            <select class="form-control"id=" BTq" name="role" required>
                                                <option value="<?php echo $row['Staff_Role'];?>"><?php echo $row['Staff_Role'];?> </option>
                                                <option value="Management">Management</option>
                                                <option value="Admin">Admin </option>
                                                <option value="Faculty">Faculty </option>
                                                </select><br>                         
                                                   <strong>EmploymentType</strong><br>
                                                   <select class="form-control"id=" BTq" name="emptype" required>
                                                <option value="<?php echo $row['Employment_Type'];?>"><?php echo $row['Employment_Type'];?></option>
                                                <option value="Permanent">Permanent</option>
                                                <option value="Temporary">Temporary </option>
                                                <option value="OTHER">OTHER</option>
                                                </select><br>  
                             <strong>Experience</strong><br>
                             <select class="form-control"id=" BTq" name="exper" required>
                                                <option value="<?php echo $row['Experience'];?>"><?php echo $row['Experience'];?> </option>
                                                <option value="0">0</option>
                                                <option value="1">1 </option>
                                                <option value="2">2 </option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5-8">5-8</option>
                                                <option value="9-12">9-12</option>
                                                <option value="13-16">13-16</option>
                                                <option value="17+">17+</option>                                                
                                                <option value="other">Other</option>
                                                </select>
                                                <br>    
                                                                            
                            <strong>Date of Birth</strong><br>
                            <input class="form-control"type="date" autocomplete="off" name="dob" placeholder="Enter Date of Birth" value="<?php echo $row['Dateof_Birth'];?>" required><br>
                            <strong>Date Of Joining</strong><br>
                            <input class="form-control"type="date" autocomplete="off" name="doj" placeholder="Enter Date Of Joining" value="<?php echo $row['DateOf_Joining'];?>" required><br>
                            <strong>Mobile Number</strong><br>
                            <input class="form-control"type="text" name="phoneno1" pattern="\d{10}" title="only numbers are allowed!!" maxlength="10" value="<?php echo $row['Faculty_PhNo'];?>" ><br>
                            <strong>Additional Mobile Number</strong><br>
                            <input class="form-control"type="text" name="addlPhNo" pattern="\d{10}" title="only numbers are allowed!!" maxlength="10" value="<?php echo $row['addlPhNo'];?>" ><br>
                            
                            <strong>Gender</strong><br>
                            <select class="form-control"id=" BTq" name="gen" required>
                                                <option value="<?php echo $row['Gender'];?>"><?php echo $row['Gender'];?> </option>
                                                <option value="MALE">MALE</option>
                                                <option value="FEMALE">FEMALE </option>
                                                <option value="OTHER">OTHER</option>
                                                </select><br>                   
                                                         <strong>BloodGroup</strong><br>
                                                         <select class="form-control"id=" BTq" name="bg" required>
            <option value="<?php echo $row['Blood_Group'];?>"><?php echo $row['Blood_Group'];?> </option>
                                                <option value="O+ve">O+ve</option>
                                                <option value="O-ve">O-ve</option>
                                                <option value="AB+ve">AB+ve</option>
                                                <option value="AB-ve">AB-ve</option>
                                                <option value="B+ve">B+ve</option>
                                                <option value="B-ve">B-ve</option>
                                                <option value="A+ve">A+ve</option>
                                                <option value="A-ve">A-ve</option>
                                            </select><br>                       
                                                 <strong>Permanent Address</strong><br>
                            <input class="form-control"type="text" autocomplete="off" name="peradd"  placeholder="Enter Permanent Address" value="<?php echo $row['Permanent_Address'];?>" required><br>
                            <strong>City</strong><br>
                            <input class="form-control"type="text" autocomplete="off" name="city"  placeholder="Enter City Name" value="<?php echo $row['city'];?>" required><br>
                            <strong>State</strong><br>
                            <input class="form-control"type="text" autocomplete="off" name="states" pattern="[A-Za-z\s]{1,15}" placeholder="Enter State " value="<?php echo $row['State1'];?>" required><br>
                            <strong>District</strong><br>
                            <input class="form-control"type="text" autocomplete="off" name="dis" pattern="[A-Za-z\s]{1,15}" placeholder="Enter District" value="<?php echo $row['District'];?>" required><br>
                            <strong>Pin code</strong><br>
                            <input class="form-control"type="text" autocomplete="off" pattern="\d{6}" maxlength="6" name="pin" placeholder="Enter pincode" value="<?php echo $row['Pin_code'];?>" required><br>
                            <strong>Salary</strong><br>
                            <input class="form-control"type="number" autocomplete="off" pattern="\d{6}" maxlength="6" name="sal" placeholder="Enter pincode" value="<?php echo $row['sal'];?>" ><br>
                            <strong>Bank Account Number</strong><br>
                            <input class="form-control"type="number" autocomplete="off" pattern="\d{6}" maxlength="6" name="bank" placeholder="Enter pincode" value="<?php echo $row['BAN'];?>" ><br>
                            <strong>Bank IFSC Code</strong><br>
                            <input class="form-control"type="text" autocomplete="off" name="ifsc" placeholder="Enter pincode" value="<?php echo $row['ifsc'];?>" ><br>

                            <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
  Update
</button><br>
                          <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure You Want To Make Changes?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>  
                            

<button type="button" class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#delete">
  Delete
</button>
                          <!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure You Want To Delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-danger" href="deletestaff.php?id=<?php echo $userid; ?>">Delete</a></button>
      </div>
    </div>
  </div>
</div> 
            </form>
        </div>
        <!-- END OF UPDATE DATA SECTION -->
    </div>

    <?php
}else{
    // set header response code
    http_response_code(404);
    echo "<h1>404 Page Not Found!</h1>";
}

}else{
// set header response code
http_response_code(404);
echo "<h1>404 Page Not Found!</h1>";
}
    ?>
    

                            
                                
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
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
