<?php echo view('includes/header');?>
    
    <div class=" container col-md-12 ">
    
    <table class="table table-hover ">
  <thead>
    <tr >
      <th scope="col">User Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php   foreach($usersdata as $key=>$val) { ?>
    <tr>
      <th> <?php echo $val['id'] ?> </th>
      <td> <?php echo $val['firstname'] ?> </td>
      <td><?php echo $val['lastname'] ?></td>
      <td><?php echo $val['email'] ?></td>
      <td><?php echo $val['phone'] ?></td>
      <th>
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Edit
</button> | 
<button type="button" class="btn btn-primary" >  Delete</button>
</th>
    </tr>
    <?php  } ?>
    
   
  </tbody>
</table>
   
     
    </div>


    <!-- Button edit user modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button> -->

<!----------- Modal -->
<section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Signup page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!---------- edit user -->
        <form action="<?php base_url('/signup');?>" method="post">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" name="firstname" class="form-control" id="" placeholder="First Name" value="" required="">
                
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" name="lastname" class="form-control" id="lastName" placeholder="last Name" value="" required="">
                
              </div>
            </div>

           
              <div class="row">
            <div class="mb-3 col-md-6">
              <label for="email">Email </label>
              <input type="email" name="email" class="form-control" id="email" value="" placeholder="example@gmail.com">
              
            </div>

            <div class="mb-3 col-md-6">
              <label for="address">Phone No</label>
              <input type="text" name="phone" class="form-control" id="" value="" placeholder="Phone No" required="">
             
            </div>
            </div>

           


            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" name="address" class="form-control" id="" value="" placeholder="Address">
            </div>

           
           
            <hr class="mb-4 ">
            <button class="btn btn-primary  " type="submit">Save </button>
          </form>
        <!------------------------- edit user -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
    </div>
  </div>
</div>
</section>
<!-- Button edit user model -->


<div><p>This user information table show</p></div>


  

<div class="container-fluid">

<hr class="featurette-divider">
<div class="row featurette">
          <div class="col-md-5 ">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-7">
             <!-- <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="<?php echo base_url('public/pic/picture30.jpg');?>" data-holder-rendered="true"> -->
             <img src="<?php echo base_url('public/pic/picture12.jpg');?>" height="400px" width="630px" alt="">
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