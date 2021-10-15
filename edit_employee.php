
<div class="modal fade" id="edit_employee<?php echo$row['employee_number'];?>" tabindex="-1" role="dialog" aria-labelledby="newEmployeeTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newEmployeeTitle">Edit Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id='AddEmployee' action="edit_employee_save.php?id=<?php echo $row["employee_number"];?>" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
               
                <div class="form-group">
                    <label for="FirstName">First Name</label>
                    <input type="text" class="form-control" id="FirstName" value="<?php echo $row["first_name"];?>" name="first_name" required>
                </div>
                <div class="form-group">
                    <label for="LastName">Last Name</label>
                    <input type="text" class="form-control" id="EmployeeNumber" value="<?php echo $row["last_name"];?>" name="last_name" required>
                </div>
                <div class="form-group">
                    <label for="MiddleName">Middle Name (Optional)</label>
                    <input type="text" class="form-control" id="MiddleName" value="<?php echo $row["middle_name"];?>" name="middle_name" >
                </div>
                <div class="form-group">
                    <label for="Sex">Sex</label>
                    <select class="form-control" name="sex" id="Sex" required>
                        <option value=""></option>
                        <option value="M" <?php if($row["sex"] == "M") {echo "selected";} ?>>Male</option>
                        <option value="F" <?php if($row["sex"] == "F") {echo "selected";} ?>>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Birthday">Birthday</label>
                    <input type="date" class="form-control" value="<?php echo $row["birthdate"];?>" max="<?php echo date("Y-m-d") ?>" id="Birthday" name="birthday">
                </div>
                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" class="form-control" value="<?php echo $row["address"];?>"  id="Address" name="address">
                </div>
                <div class="form-group">
                    <label for="Telephone">Telephone</label>
                    <input type="text" class="form-control" value="<?php echo $row["tel_phone"];?>"  id="Telephone" name="tel">
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
