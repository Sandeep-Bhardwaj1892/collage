<?php echo view('includes/header');?>

  
        <div class="container">
         
        <div class="col-md-6 order-md-1">
          <h2 class="mb-3">Signup page</h2>
            
          <?php if (isset($validation)) : ?>
        <div class="col-12">
            <div class="alert alert-danger" role="alert">
                <?=$validation->listErrors()?>
            </div>
        </div>
       <?php endif; ?>



       <?php if (isset($Flash_message)) : ?>
        <div class="col-12">
            <div class="alert alert-success" role="alert">
               Congratulations ! Registration successfully
            </div>
        </div>
       <?php endif; ?>


           <form action="<?php base_url('/signup');?>" method="post">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" name="firstname" class="form-control" id="" placeholder="First Name" value="<?php set_value('firstname')?>" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" name="lastname" class="form-control" id="lastName" placeholder="last Name" value="<?php set_value('lastname')?>" required="">
                
              </div>
            </div>

           
              <div class="row">
            <div class="mb-3 col-md-6">
              <label for="email">Email </label>
              <input type="email" name="email" class="form-control" id="email" value="<?php set_value('email')?>" placeholder="example@gmail.com">
              
            </div>

            <div class="mb-3 col-md-6">
              <label for="address">Phone No</label>
              <input type="text" name="phone" class="form-control" id="" value="<?php set_value('phone')?>" placeholder="Phone No" required="">
             
            </div>
            </div>

            <div class="row">
            <div class="mb-3 col-md-6">
              <label for="email">Password </label>
              <input type="password" name="password" class="form-control" id="" placeholder="Password">
              
            </div>

            <div class="mb-3 col-md-6">
              <label for="address">Confirm Password</label>
              <input type="password" name="confirmpassword" class="form-control" id="" placeholder="Confirm Password" required="">
             
            </div>
            </div>


            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" name="address" class="form-control" id="" value="<?php set_value('firstname')?>" placeholder="Address">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" name="country" id="country" required="">
                  <option value="">Choose...</option>
                  <option>India</option>
                  <option>China</option>
                  <option>Russia</option>
                  <option>Pakistan</option>
                  <option>Bangladesh</option>
                  <option>United States</option>
                  <option>Japan</option>


                </select>
               
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" name="state" id="state" required="">
                  <option value="">Choose...</option>
                  <option>Utter Pradesh</option>
                  <option>Madhya Pradesh</option>
                  <option>Maharashtra</option>
                  <option>Andhra Pradesh</option>
                  <option>Panjab</option>
                  <option>Gujarat</option>
                  <option>Rajasthan</option>
                </select>
               
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Pin Code</label>
                <input type="text" class="form-control" name="pin" id="zip" placeholder="" required="">
              
              </div>
            </div>
           
            <hr class="mb-4 ">
            <button class="btn btn-primary  " type="submit">Submit</button>
          </form>
          <br><div ><a  href="<?php echo base_url('/');?>">Back to Login page</a></div>
        </div>
      </div>
      </div>




      <div class="container-fluid">



<hr class="featurette-divider">
<div class="row featurette">
          <div class="col-md-5 ">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-7">
             <!-- <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="<?php echo base_url('public/pic/picture30.jpg');?>" data-holder-rendered="true"> -->
             <img src="<?php echo base_url('public/pic/picture12.jpg');?>" height="400px" width="750px" alt="">
            </div>
        </div>


        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-5 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-7 order-md-1">
            <!-- <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="<?php echo base_url('public/pic/picture30.jpg');?>" data-holder-rendered="true"> -->
            <img src="<?php echo base_url('public/pic/picture13.jpg');?>" height="400px" width="630px" alt="">
          </div>
        </div>
        <hr class="featurette-divider">
        </div>

      <?php echo view('includes/footer');?>