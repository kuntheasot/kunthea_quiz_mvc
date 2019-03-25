<?php 
    include_once "conncection.php";
    foreach ($data['data_employee'] as $row){
        $rows= $row;
    }
        
?>
<div class="well col-md-12 well-sm">
<form class="form-horizontal" action="#" method="POST">
    <fieldset>

        <!-- Form Name -->
        <legend class="text-center">Edit Employee</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fistname">First name</label>  
            <div class="col-md-4">
                <input id="fistname" name="firstname" autofocus="" placeholder="first name" value="<?php echo $rows['firstname'];?>" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="lastname">Last name</label>  
            <div class="col-md-4">
                <input id="lastname" name="lastname" placeholder="last name" value="<?php echo $rows['lastname']; ?>" class="form-control input-md" required="" type="text">

            </div>
        </div>

       

        <div class="form-group">
            <label class="col-md-4 control-label" for="age">Age</label>  
            <div class="col-md-4">
                <input id="age" name="age" placeholder="age" value="<?php echo $rows['age']; ?>" class="form-control input-md" required="" type="text">

            </div>
        </div>

        
        
        <div class="form-group">
            <label class="col-md-4 control-label" for="salary">Salary</label>  
            <div class="col-md-4">
                <input id="salary" name="salary" placeholder="salary" value="<?php echo $rows['salary']; ?>" class="form-control input-md" required="" type="text">

            </div>
        </div>

       <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="btn_submit"></label>
            <div class="col-md-8">
                <button id="btn_submit"  class="btn btn-success" type="submit" name="btn-user">Submit</button>
                <a class="btn btn-danger" href="index.php?action=view">Cancel</a>
            </div>
        </div>

    </fieldset>
</form>
</div>