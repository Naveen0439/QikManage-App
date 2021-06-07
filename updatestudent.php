<?php
require "session.php";
require "connection.php";
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
                                    <a class="nav-link" href="viewtimetable.php">Time Table</a>
                                   
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
require "connection.php";
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['halltic']) && isset($_POST['regulation'])  && isset($_POST['year']) && isset($_POST['branch']) && isset($_POST['email']) && isset($_POST['dob']) && isset($_POST['halltic']) && isset($_POST['gender']) && isset($_POST['quota']) && isset($_POST['permanentaddress']) && isset($_POST['state']) && isset($_POST['district']) && isset($_POST['pincode']) ){
    
    // check username and email empty or not
    if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['halltic']) && !empty($_POST['regulation']) && !empty($_POST['year']) && !empty($_POST['branch']) && !empty($_POST['email']) && !empty($_POST['dob']) && !empty($_POST['stdphn']) && !empty($_POST['gender']) && !empty($_POST['quota'])  && !empty($_POST['permanentaddress']) && !empty($_POST['state']) && !empty($_POST['district']) && !empty($_POST['pincode'])){
        
        // Escape special characters.
        $First_Name = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['fname']));
        $Last_Name = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['lname']));
        $Hall_Ticket = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['halltic']));
        $regulation  = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['regulation']));
        $Year = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['year']));
        $Branch = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['branch']));
        $user_email = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['email']));
        $DOB = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['dob']));
        $DOJ = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['doj']));
        $Student_PhNo = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['stdphn']));
        $Parent_PhNo = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['prtphn']));
        $Gender = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['gender']));
        $Blood_Group = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['bloodgroup']));
        $Quota = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['quota']));
        $Bus_Transport  = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['bustrans']));
        $College_Fee  = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['clgfees']));
        $Permanent_Address = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['permanentaddress']));
        $State = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['state']));
        $District = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['district']));
        $Pin_code = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['pincode']));
        $Father_Name = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['fo']));
        $Mother_Name = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['mo']));
        $tenth= mysqli_real_escape_string($mysql, htmlspecialchars($_POST['perct10']));
        $twelve = mysqli_real_escape_string($mysql, htmlspecialchars($_POST['perct12']));

        //CHECK EMAIL IS VALID OR NOT
        if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            $user_id = $_GET['id'];
            // CHECK IF EMAIL IS ALREADY INSERTED OR NOT
            $check_email = mysqli_query($mysql, "SELECT `user_email` FROM `students` WHERE user_email = '$user_email' AND sid != '$user_id'");
            
            if(mysqli_num_rows($check_email) > 0){    
                
                echo "<script>
                    alert('Data not  Updated');
                    </script>";
            }else{
                
                // UPDATE USER DATA               
                $update_query = mysqli_query($mysql,"UPDATE `students` SET First_Name='$First_Name',Last_Name='$Last_Name',Hall_Ticket='$Hall_Ticket',regulation='$regulation',Year='$Year',Branch='$Branch',DOB='$DOB',DOJ='$DOJ',user_email='$user_email',Student_PhNo='$Student_PhNo',Parent_PhNo='$Parent_PhNo',Gender='$Gender',Blood_Group='$Blood_Group',Quota='$Quota',Bus_Transport='$Bus_Transport',College_Fee='$College_Fee',Permanent_Address='$Permanent_Address',State='$State',District='$District',Pin_code='$Pin_code',Father_Name='$Father_Name', Mother_Name='$Mother_Name',tenth='$tenth',twelve='$twelve' WHERE sid=$user_id");
                //CHECK DATA UPDATED OR NOT
                if($update_query){
                    echo "<script>
                    alert('Data Updated');
                    window.location.href = 'students.php';
                    </script>";
                    exit;
                }else{
                    echo "<script>
                    alert('Data Not Updated');
                    window.location.href = 'students.php';
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
        <center><h2 style="color:#d7385e;">UPDATE STUDENT DETAILS
        </h2></center>
        <center>Please make sure while updating current data.</center>
      </div>';
    }  
    

// END OF UPDATING DATA
?>
                 
                        
                     <?php

require "connection.php";
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    
    $userid = $_GET['id'];
    $get_user = mysqli_query($mysql,"SELECT * FROM `students` a left join branches b on a.Branch=b.bid WHERE sid='$userid'");
    
    if(mysqli_num_rows($get_user) === 1){
        
        $row = mysqli_fetch_assoc($get_user);
?>
<div class="container">
      
      <!-- UPDATE DATA -->
       <div class="form">
       <marquee><h2 >SRINIVASA INSTITUTE OF SCIENCE AND TECHNOLOGY</h2></marquee>
       
           <form action="" method="post">
          <div class="form-group">
   <label for="fname">First Name</label>
   <input type="text" class="form-control" id="fname" name="fname"  placeholder="Enter First Name" value="<?php echo $row['First_Name'];?>" required>
 </div>
 <div class="form-group">
 <label for="lname">Last Name</label>
 <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" value="<?php echo $row['Last_Name'];?>" required>
 </div>
  
   <div class="form-group">
   <label for="halltic">Roll Number</label>
   <input type="text" class="form-control" id="halltic" name="halltic" placeholder="Enter Roll Number" value="<?php echo $row['Hall_Ticket'];?>" required>
   </div>

   <div class="form-group">
   <label for=regulation>Regulation</label>
   <input type="text" class="form-control" id="regulation" name="regulation" placeholder="Enter Regulation ( Eg:R09,R13,R15 )" value="<?php echo $row['Regulation'];?>" required>
  </div>

  <div class="form-group">
   <label for="year">Year</label>
   <select class="form-control" id="year" name="year" placeholder="Enter Class Of Studing" value="<?php echo $row['Year'];?>" required>
   <option value=""></option>
   <option value="1">1st Year</option>
   <option value="2">2nd Year</option>
   <option value="3">3rd Year</option>
   <option value="4">4th Year</option>
   <option value="5r">5th Year</option>
   </select>
   </div>

   <div class="form-group">
   <label for="branch">Branch</label>
   <select class="form-control" id="branch" name="branch" palceholder="Enter Branch" value="<?php echo $row['Branch'];?>" required>
   <option value=""></option>
   <option value="ECE">ECE</option>
    <option value="CSE">CSE</otion>
    <option value="EEE">EEE</option>
    <option value="MECH">MECH</option>
    <option value="CIVIL">CIVIL</option>
    <option value="other">other</option>
    </select>
    </div>

    <div class=form-group>
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Id" value="<?php echo $row['user_email'];?>" required>
    </div>

    <div class="control-group">
    <label for="dob">Date Of Birth</label>
    <input type="date" class="form-control" id="dob" name="dob" placeholder="Date OF Birth" value="<?php echo $row['DOB'];?>" required>
    </div><br>


  <div class="control-group">
  <label for="doj">Date Of Joining</label>
  <input type="date" class="form-control" id="doj" name="doj" placeholder="Date Of Joining" value="<?php echo $row['DOJ'];?>" required>
  </div><br>

 

  <div class="control-group">
  <label for="stdphn">Student Phone No.</label>
  <input type="number" class="form-control" id="stdphn" name="stdphn" maxlength="10" title="only numbers are allowed!!" value="<?php echo $row['Student_PhNo'];?>" required>
  </div><br>

  <div class="control-group">
  <label for="prtphn">Parents Phone No.</label>
  <input type="number" class="form-control" id="prtphn" name="prtphn" maxlength="10" title="only numbers are allowed!!" value="<?php echo $row['Parent_PhNo'];?>" required>
  </div><br>
  

  <div class="control-group">
  <label for="gender">Gender</label>
  <select class="form-control" id="gender" name="gender" value="<?php echo $row['Gender'];?>" required>
  <option value=""></option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="other">other</option>
  </select>
  </div><br>

  <div class="control-group">
  <label for="bloodgroup">Blood Group</label>
  <select class="form-control" id="bloodgroup" name="bloodgroup" value="<?php echo $row['Blood_Group'];?>" >
                                           <option value=""></option>
                                               <option value="O+ve">O+ve</option>
                                               <option value="O-ve">O-ve</option>
                                               <option value="AB+ve">AB+ve</option>
                                               <option value="AB-ve">AB-ve</option>
                                               <option value="B+ve">B+ve</option>
                                               <option value="B-ve">B-ve</option>
                                               <option value="A+ve">A+ve</option>
                                               <option value="A-ve">A-ve</option>
                                           </select>
                                           </div><br>

                                           
  <div class="control-group">
  <label for="quota">Quota</label>
  <select class="form-control" id="quota" name="quota" value="<?php echo $row['Quota'];?>" required>
  <option value=""></option>
           <option value="GOVERNMENT">GOVERNMENT</option>
               <option value="MANAGEMENT">MANAGEMENT</option>
               </select>
               </div><br>


   <div class="control-group">
   <label for="bustrans">Bus Transport</label>
  <select class="form-control" id="bustrans" name="bustrans" value="<?php echo $row['Bus_Transport'];?>" required>
  <option value=""></option>
     <option value="YES">YES</option>
          <option value="NO">NO</option>
            </select>
            </div><br>

            <div class="control-group">
            <label for="clgfees">College Fees</label>
            <input type="text" class="form-control" id="clgfees" name="clgfees" placeholder="Enter your College Fees" value="<?php echo $row['College_Fee'];?>" ><br>
             </div>

             <div class="control-group">
             <label for="permanentaddress">permanent Address</label>
             <input type="text" class="form-control" id="permanentaddress" name="permanentaddress" placeholder="Enter your permanent Address" value="<?php echo $row['Permanent_Address'];?>" required><br>
</div>


<div class="control-group">
            <label for="state">State</label>
            <input type="text" class="form-control" id="state" name="state" placeholder="Enter your state" value="<?php echo $row['State'];?>" required><br>
             </div>



             <div class="control-group">
            <label for="district">District</label>
            <input type="text" class="form-control" id="district" name="district" placeholder="Enter your District" value="<?php echo $row['District'];?>" required><br>
             </div>
                                          

             <div class="control-group">
            <label for="pincode">Pin code</label>
            <input type="number" class="form-control" id="pincode" name="pincode" maxlength="6" title="only numbers allowed!!" placeholder="Enter your Pin code" value="<?php echo $row['Pin_code'];?>" required><br>
             </div>
                                          
                                       
             <div class="control-group">
            <label for="fo">Father Name</label>
            <input type="text" class="form-control" id="fo" name="fo"  placeholder="Enter your Father Name (optional)" value="<?php echo $row['Father_Name
            '];?>"><br>
             </div>                            
                                          
                                      
             <div class="control-group">
            <label for="mo">Mother Name</label>
            <input type="text" class="form-control" id="mo" name="mo"  placeholder="Enter your Mother Name (optional)" value="<?php echo $row['Mother_Name'];?>" ><br>
             </div>


             <div class="control-group">
            <label for="perct10">10th %</label>
            <input type="number" class="form-control" id="perct10" name="perct10" step='0.01' placeholder="Enter your 10th % ( Eg: 95.6 )" value="<?php echo $row['tenth'];?>"><br>
             </div>



<div class="control-group">
            <label for="perct12">12th %</label>
            <input type="number" class="form-control" id="perct12" name="perct12"  placeholder="Enter your 12th % ( Eg: 95.6 )" value="<?php echo $row['twelve'];?>" ><br>
             </div>
          
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
</form>                

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
        Are You Sure You Want To Delete
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