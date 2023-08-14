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
    <?php //  foreach($usersdata as $key=>$val) { ?>
    <tr>
      <th> <?php// echo $val['id'] ?> </th>
      <td> <?php// echo $val['firstname'] ?> </td>
      <td><?php //echo $val['lastname'] ?></td>
      <td><?php //echo $val['email'] ?></td>
      <td><?php //echo $val['phone'] ?></td>
      <th><a href="">Edit</a> | <a href="">Delete</a></th>
    </tr>
    <?php // } ?>
    
   
  </tbody>
</table>
   
     
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