
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-heading">
                        <h4><?php echo html_escape((!empty($title)?$title:null)) ?></h4>
                </div>
                <div class="card-body">

                <?php echo form_open('hrm/Employees/new_emp_position') ?>
                         <div class="form-group row">
                            <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('employee_id') ?> <span class="text-danger">*</span></label>

                            
                            <div class="col-sm-9">
                               
                                <input type="text" name="employee_id" class="form-control" placeholder="Please Enter New Employee id">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="first_name" class="col-sm-3 col-form-label"><?php echo display('name') ?> <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="first_name"  placeholder="Please Enter First Name">
                         
                            </div>
                        </div> 
  
                        <div class="form-group row">
                            <label for="pos_id" class="col-sm-3 col-form-label"><?php echo display('pos_id') ?> <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="pos_id" value="">
                         
                            </div>
                        </div> 
                        
                          <div class="form-group row">
                            <label for="position_details" class="col-sm-3 col-form-label"><?php echo display('details') ?> <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea name="position_details" class="form-control"  placeholder="<?php echo display('details') ?>" id="position_details" ></textarea>
                            </div>
                        </div> 

          
                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('ad') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>
     


