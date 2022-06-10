<?php include "header.php";?>
<div class="container">
<?php if(isset($_SESSION["message"])):?>
  <div class="row justify-content-center mt-5">
    <div class="col-6">
      <?php if($_SESSION["message_type"]== "success"):?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $_SESSION["message"];?>
        
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

      <?php elseif($_SESSION["message_type"]== "error"):?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?php echo $_SESSION["message"];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php endif;?>
    </div>
  </div>
  <?php unset($_SESSION["message"]); ?>
  <?php endif;?>
<div class="row justify-content-center mt-5">
      <div class="col-lg-5 col-md-10 col-sm-10 col-10 ">
        <div class="card border-0 shadow rounded-3 ">
<div class="card-body">
            <form method="post" action="login-patient">
              <div class="mb-3">
                <label class="form-label text-light">Phone Number</label>
                <input type="text" class="form-control" name="phone">
              </div>
              <div class="mb-3">
                <label class="form-label text-light">Password</label>
                <input type="password" name="password" class="form-control">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label text-light" for="exampleCheck1">Remember me</label>
              </div>
              <div class="d-grid gap-2">
                <center>
                <button type="submit" class="btn btn-warning text-secondary" style="width:50%; border-radius:10px; height:43px;">Login</button>
                </center>
              </div>
            </form>
            
            
            <!-- Button trigger modal -->
           
            </div>
        </div>
      </div>
</div>
            <?php   include "footer.php";?>