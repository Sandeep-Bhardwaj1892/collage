<?php echo view('includes/header');?>


<!---------- edit user -->

<!-- <?php //  if (isset($Flash_message)) : ?>
        <div class="col-12">
            <div class="alert alert-success" role="alert">
               Congratulations ! Registration successfully
            </div>
        </div>
       <?php //  endif; ?> -->

<form method="post">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" name="firstname" class="form-control" id="" placeholder="First Name"
                value="<?php echo $userdata['firstname'];?>" required="">

        </div>
        <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" name="lastname" class="form-control" id="lastName" placeholder="last Name"
                value="<?php echo $userdata['lastname'];?>" required="">

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="email">Email ID</label>
            <input type="text" name="email" class="form-control" id="" placeholder="Enter Email"
                value="<?php echo $userdata['email'];?>" required="">

        </div>
        <div class="col-md-6 mb-3">
            <label for="phone">Phone No</label>
            <input type="text" name="phone" class="form-control" id="" placeholder="Phone"
                value="<?php echo $userdata['phone'];?>" required="">

        </div>
    </div>
    <div class=" mb-3">
        <label for="address">Address</label>
        <input type="text" name="address" class="form-control" id="" placeholder="Address"
            value="<?php echo $userdata['address'];?>" required="">

    </div>


    <hr class="mb-3 ">
    <button class="btn btn-primary  " type="submit">Save </button>



    <div class="modal-footer">
        <button class="btn btn-outline-danger my-2 my-sm-0 mr-sm-3" type="submit"><a
                href="<?php echo base_url('dashboard');?>">Close</a></button>

    </div>


    </div>
</form>
<!-- form edit -->






<?php echo view('includes/footer');?>