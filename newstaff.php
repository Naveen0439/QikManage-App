
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
                        
                    <div class="container">
      
       <!-- UPDATE DATA -->
        
        <div class="form">
      <div class="alert alert-primary" role="alert">
        <center><h2 style="color:#d7385e;">ADD STAFF DETAILS
        </h2></center></div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <strong>First Name</strong><br>
                <input class="form-control"type="text" autocomplete="on" name="first" placeholder="Enter First Name" value="" required><br>
                <strong>Last Name</strong><br>
                <input class="form-control"type="text" autocomplete="on" name="last" placeholder="Enter Last Name" value="" required><br>
                <strong>Email</strong><br>
                            <input class="form-control"type="text" autocomplete="on" name="email" placeholder="Enter Mail ID" value="" required><br>
                <strong>Teaching Branch</strong><br>
                <?php
                include "connection.php";
$query=mysqli_query($mysql, "SELECT distinct bname,bid FROM branches where isactive=1");
if (mysqli_num_rows($query)) {
    $select= '<select name="branch" class="form-control" ><option value="">Select Branch From Below List</option>';
    while ($rs=mysqli_fetch_array($query)) {
        $select.='<option value="'.$rs['bid'].'">'.$rs['bname'].'</option>';
    }
}
$select.='</select>';
echo $select;
                ?> <br> 
                  <strong>Qualification</strong><br>
                <select class="form-control"id="selectBox" onchange="changeFunc()" name="qua" required>
                                                <option value="">Select Qualification</option>
                                                <option value="B.Tech"> B.Tech </option>
                                                <option value="B.Sc">B.Sc</option>
                                                <option value="M.Tech">M.Tech</option>
                                                <option value="Ph.D">Ph.D</option>
                                                <option value="other">Other</option>
                                                </select><br> 
                                                <input class="form-control"name="Enter qualification" placeholder="other" class="form-control" type="text" style="display: none" id="textboxes">
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
                            <select class="form-control"id=" BTq" name="role" >
                                                <option value=""></option>
                                                <option value="Management">Management</option>
                                                <option value="Admin">Admin </option>
                                                <option value="Faculty" selected>Faculty </option>
                                                </select><br>                         
                                                   <strong>Employment Type</strong><br>
                                                   <select class="form-control"id=" BTq" name="emptype" >
                                                <option value="">Employement Type</option>
                                                <option value="Permanent">Permanent</option>
                                                <option value="Temporary">Temporary </option>
                                                <option value="Other">Other</option>
                                                </select><br>  
                             <strong>Experience</strong><br>
                             <select class="form-control"id=" BTq" name="exper" >
                                                <option value="">Experiance </option>
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
                            <input class="form-control"type="date" autocomplete="on" name="dob" placeholder="Enter Date of Birth" value="" required><br>
                            <strong>Date Of Joining</strong><br>
                            <input class="form-control"type="date" autocomplete="on" name="doj" placeholder="Enter Date Of Joining" value="" required><br>
                            <strong>Mobile Number</strong><br>
                            <input class="form-control"type="number" name="phoneno1" placeholder="Enter 10-digits Mobile Number *"  title="only numbers are allowed!!" maxlength="10" value="" ><br>
                            <strong>Additional Mobile Number</strong><br>
                            <input class="form-control"type="number" name="phoneno2" placeholder="Enter 10-digits Additional Mobile Number (Optional)"  title="only numbers are allowed!!" maxlength="10" value="" required><br>
                            
                            <strong>Gender</strong><br>
                            <select class="form-control"id=" BTq" name="gen" required>
                                                <option value=""></option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female </option>
                                                <option value="Other">Other</option>
                                                </select><br>                   
                                                         <strong>Blood Group</strong><br>
                                                         <select class="form-control"id=" BTq" name="bg" >
            <option value=""> Blood Group (Optional) </option>
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
                            <input class="form-control"type="text" autocomplete="on" name="peradd"  placeholder="Enter Permanent Address *" value="" required><br>
                            <strong>City</strong><br>
                            <input class="form-control"type="text" autocomplete="on" name="city"  placeholder="Enter City Name *" value="" required><br>
                            <strong>State</strong><br>
                            <input class="form-control"type="text" autocomplete="on" name="states" pattern="[A-Za-z\s]{1,15}" placeholder="Enter State *" value="" required><br>
                            <strong>District</strong><br>
                            <input class="form-control"type="text" autocomplete="on" name="dis" pattern="[A-Za-z\s]{1,15}" placeholder="Enter District *" value="" required><br>
                            <strong>Pin code</strong><br>
                            <input class="form-control"type="number" autocomplete="on" maxlength="6" name="pin" placeholder="Enter 6-digits pincode *" value="" required><br>
                            <strong>Salary</strong><br>
                            <input class="form-control"type="number" autocomplete="on" pattern="\d{6}"  name="sal" placeholder="Enter Salary (optional)" value="" ><br>
                            <strong>Bank Account Number</strong><br>
                            <input class="form-control"type="number" autocomplete="on" pattern="\d{6}"  name="bank" placeholder="Enter Bank Account Number (optional)" value="" ><br>
                            <strong>Bank IFSC Code</strong><br>
                            <input class="form-control"type="text" autocomplete="on" name="ifsc" placeholder="Enter IFSC Code (optional)" value="" ><br>

                            
                            

             <input type="submit" value="Insert" name="submit">
            </form>
        </div>
        <!-- END OF UPDATE DATA SECTION -->
    </div>

<?php



/* ---------------------------------------------------------------------------
------------------------------------------------------------------------------ */


// UPDATING DATA
if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // check username and email empty or not
    if (!empty($_POST['first']) && !empty($_POST['last']) && !empty($_POST['dob']) && !empty($_POST['phoneno1'])) {
        
        // Escape special characters.
        $First_Name = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['first']));
        $Last_Name = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['last']));
        $Branch_Teaching = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['branch']));
        $Qualification = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['qua']));
        $Staff_Role = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['role']));
        $Employment_Type = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['emptype']));
        $Experience = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['exper']));
        $user_email = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['email']));
        $Dateof_Birth = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['dob']));
        $DateOf_Joining = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['doj']));
        $Faculty_PhNo = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['phoneno1']));
        $addlPhNo = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['phoneno2']));
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
            // CHECK IF EMAIL IS ALREADY INSERTED OR NOT
            $check_email = mysqli_query($mysql, "SELECT `user_email` FROM `staff` WHERE user_email = '$user_email'");
            
            if (mysqli_num_rows($check_email) > 0) {
                echo "<script>
                    alert('Email ID Is already used');
                    </script>";
            } else {
                $cnt=mysqli_fetch_assoc(mysqli_query($mysql, "select ifnull(max(id),'')+1 as cnt from staff"));
                $pass=md5(strtoupper(substr($_POST['first'], 0, 4)).substr(str_replace('-', '', $_POST['dob']), 4, 7));
                $emp=substr(strtoupper($_POST['first']), 0, 4).$cnt['cnt'];
                $uid=$_POST['first'].'.'.$_POST['last'];
                // UPDATE USER DATA
                $insert_query = mysqli_query($mysql, "insert into `staff` (`First_Name`, `Last_Name`, `User_Name1`, `EmpId_Number`, `Branch_Teaching`, `Qualification`, `Staff_Role`, `Employment_Type`, `Experience`, `user_email`, `Dateof_Birth`, `DateOf_Joining`, `Faculty_PhNo`,`addlPhNo`, `Gender`, `Blood_Group`, `Permanent_Address`,`city`, `State1`, `District`, `Pin_code`, `status`, `sal`, `BAN`, `ifsc`) values ("."'$First_Name'".",'$Last_Name'".",'$uid'".",'$emp'".",'$Branch_Teaching'".",'$Qualification'".",'$Staff_Role'".",'$Employment_Type'".",'$Experience'".",'$user_email'".",'$Dateof_Birth'".",'$DateOf_Joining'".",'$Faculty_PhNo'".",'$addlPhNo'".",'$Gender'".",'$Blood_Group'".",'$Permanent_Address'".",'$city'".",'$State1'".",'$District'".",'$Pin_code'".",1,'$sal'".",'$BAN'".",'$ifsc'".")");
                $to_users=mysqli_query($mysql, "insert into users (u_id,password,emp_id,fname,lname,role) values("."'$uid'".",'$pass'".",'$emp'".",'$First_Name'".",'$Last_Name'".",'$Staff_Role'".")");
                //CHECK DATA UPDATED OR NOT
                    
                if ($insert_query&&$to_users) {
                    echo "<script>
                    alert('New Staff Record Inserted');
                    window.location.href = 'staff.php';
                    </script>";
                    exit;
                } else {
                    echo "<h3>Opps something wrong!</h3>";
                }
            }
        } else {
            echo "Invalid email address. Please enter a valid email address";
        }
    } else {
        echo "<script>alert('Please fill all fields');</Script>";
    }
}


// END OF UPDATING DATA

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
