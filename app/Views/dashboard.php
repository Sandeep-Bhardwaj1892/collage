

<?php echo view('includes/header');?>
       
      
        

   
    <div class=" container col-md-12 ">




        
    <table class="table table-hover table-sm " id="example" style="width:100%">
    <!-- <table id="example" class="table table-striped table-bordered" style="width:100%"> -->
  <thead class="thead-dark">
    <tr >
      <th scope="col">User Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
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
      <td><?php echo $val['address'] ?></td>
      <th>
         <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Edit
</button> |  -->
<button type="button" class="btn btn-light" > <a href="<?php  echo base_url();?>edit/<?php  echo $val['id'] ?>">Edit</a> </button> | 
<button type="button" class="btn btn-light " > <a  onclick="return confirm('Are you sure want to delete this record')"  href="<?php // echo base_url();?>delete/<?php // echo $val['id'] ?>">Delete</a> </button>
</th>
    </tr>
    <?php  } ?>
    
   
  </tbody>
  <thead class="thead-secondary ">
    <tr >
      <th scope="col">User Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
</table>
   
     
    </div>


    <!-- Button edit user modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button> -->

<!----------- Modal -->
 <!-- <section>
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
       

        <form  method="post">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" name="firstname" class="form-control" id="" placeholder="First Name" value="<?php //  echo $userdata['firstname'];?>" required="">
                
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" name="lastname" class="form-control" id="lastName" placeholder="last Name" value="<?php // echo $userdata['lastname'];?>" required="">
                
              </div>
            </div>
      
                          
            <hr class="mb-4 ">
            <button class="btn btn-primary  " type="submit">Save </button>
          </form>
    
       
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
    </div>
  </div>
</div>
</section>  -->
<!-- Button edit user model -->





  

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