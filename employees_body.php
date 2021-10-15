
<div class="container pt-5">
    <div class="row pb-2">
        <div class="col-sm-12 text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_employee" title='new_employee'>New Employee</button>
        </div>
        
  </div>
  <?php 
  session_start();
  if(isset($_SESSION['msg']) && $_SESSION['msg'] != ''){
    echo'<div class="row">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-9">
        <div class="alert alert-success" role="alert">
             '.$_SESSION['msg'].'
        </div>
    </div>
  </div>';
  unset($_SESSION['msg']);
  }
  if(isset($_SESSION['msg_error']) && $_SESSION['msg_error'] != ''){
    echo'<div class="row">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-9">
        <div class="alert alert-danger" role="alert">
             '.$_SESSION['msg_error'].'
        </div>
    </div>
  </div>';
  unset($_SESSION['msg_error']);
  }
  ?>
   
  
  
  <div class="row">
        <div class="col-sm-12">
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">Employee Number</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Middle Name</th>
                    <th scope="col">Sex</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Age</th>
                    <th scope="col">Address</th>
                    <th scope="col">Telephone Number</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "database.php";
                    $con = new database();
                    $con->select("employees");
                    $result = $con->sql;
                    // var_dump($result);
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                       echo' <tr>
                            <td scope="col">'.$row["employee_number"].'</td>
                            <td scope="col">'.$row["first_name"].'</td>
                            <td scope="col">'.$row["last_name"].'</td>
                            <td scope="col">'.$row["middle_name"].'</td>
                            <td scope="col">'.$row["sex"].'</td>
                            <td scope="col">'.$row["birthdate"].'</td>
                            <td scope="col">'.$row["age"].'</td>
                            <td scope="col">'.$row["address"].'</td>
                            <td scope="col">'.$row["tel_phone"].'</td>
                            
                            <td scope="col">
                                <a href="#" data-toggle="modal" data-target="#edit_employee'.$row["employee_number"].'" title="edit" >
                                    <img src="Cut graphics/ic-edit.png" class="img-fluid "  />
                                </a>
                                <a href="delete_employee.php?id='.$row["employee_number"].'" title="delete" >
                                    <img src="Cut graphics/ic-delete.png" class="img-fluid "   />
                                </a>
                            </td>
                            </tr>';
                            include('edit_employee.php');
                    }
                   
                    }
                ?>
            </tbody>
            </table>
        </div>
  </div>
</div>

<div class="modal fade" id="new_employee" tabindex="-1" role="dialog" aria-labelledby="newEmployeeTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newEmployeeTitle">New Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id='AddEmployee' action="new_employee.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
                <div class="form-group">
                    <label for="EmployeeNumber">Employee Number</label>
                    <input type="text" class="form-control" id="EmployeeNumber" name="employee_number" required>
                </div>
                <div class="form-group">
                    <label for="FirstName">First Name</label>
                    <input type="text" class="form-control" id="FirstName" name="first_name" required>
                </div>
                <div class="form-group">
                    <label for="LastName">Last Name</label>
                    <input type="text" class="form-control" id="EmployeeNumber" name="last_name" required>
                </div>
                <div class="form-group">
                    <label for="MiddleName">Middle Name (Optional)</label>
                    <input type="text" class="form-control" id="MiddleName" name="middle_name" >
                </div>
                <div class="form-group">
                    <label for="Sex">Sex</label>
                    <select class="form-control" name="sex" id="Sex" required>
                        <option value=""></option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Birthday">Birthday</label>
                    <input type="date" class="form-control" max="<?php echo date("Y-m-d") ?>" id="Birthday" name="birthday">
                </div>
                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" class="form-control"  id="Address" name="address">
                </div>
                <div class="form-group">
                    <label for="Telephone">Telephone</label>
                    <input type="text" class="form-control"  id="Telephone" name="tel">
                </div>
        </div>
        <div class="modal-footer">
            <!-- Save changes -->
            <button type="submit" name="submit" class="buttons pr-1"><img src="Cut graphics/btn-save.png"  class="img-fluid"/></button> 
            <button class="buttons" type="button"  data-dismiss="modal"><img src="Cut graphics/btn-cancel.png"  class="img-fluid"/></button>
        </div>
      </form>
    </div>
  </div>
</div>
