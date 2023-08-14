<?php echo view('includes/header');?>

    

         
  <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-5 order-md-2  bg-dark">
            <!-- <h1>logon</h1> -->
           
           

            <div class="container col-8">


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
               Congratulations  
            </div>
        </div>
       <?php endif; ?>
             
            <form action="<?php base_url('/');?>" method="post">
            <h1 class="p-4 text-white" >User Login</h1>
              
              <div class="form-group">
                <label class="text-white" for="">Email address</label>
                <input type="email" name="email" class="form-control" id=""  placeholder="Enter email">
                 </div>

              <div class="form-group">
                <label class="text-white" for="">Password</label>
                <input type="password" name="password" class="form-control" id="" placeholder="Password">
              </div>
             
              <button type="submit" class="btn btn-primary   ">Login</button>

              <div class="p-3 "><a href="<?php echo base_url('signup');?>">Create a new accounts</a></div>
            </form>
            </div>
  
            <!-- <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p> -->
          </div>
          <div class="col-md-7 order-md-1">
            <!-- <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="<?php echo base_url('public/pic/picture11.jpg');?>" data-holder-rendered="true"> -->
            <img src="<?php echo base_url('public/pic/picture11.jpg');?>" height="400px" width="646px" alt="">
          </div>
        </div>
        <hr class="featurette-divider">






      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="<?php echo base_url('public/pic/picture21.jpg');?>" data-holder-rendered="true">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="<?php echo base_url('public/pic/picture20.jpg');?>" data-holder-rendered="true" style="width: 200px; height: 250px;">
          </div>
        </div>
      </div>
    </div>
   


<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url('public/pic/picture30.jpg');?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('public/pic/picture40.jpg');?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('public/pic/picture50.jpg');?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
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
            <img src="<?php echo base_url('public/pic/picture13.jpg');?>" height="400px" width="646px" alt="">
          </div>
        </div>
        <hr class="featurette-divider">
        </div>


        <?php echo view('includes/footer');?>