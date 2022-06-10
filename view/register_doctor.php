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
        <div class="card border-0" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  
                  <div class="modal-body mt-5 ms-3 me-3 ">
                    <form class="row g-3 needs-validation" novalidate action="register-doctor" method="post">
                      <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">First name</label>
                        <input type="text" class="form-control" id="validationCustom01" name="fname" required>
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="validationCustom02" name="lname" required>
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                      </div>
                     
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone </label>
                        <input type="text" class="form-control" placeholder="0915xxxxxxx" name="phone">
                      </div>
                      <label for="inputPassword" class="col-sm col-form-label">Password</label>
                      <div class="mb-3 row">

                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword" name="password">
                        </div>
                      </div>
                      <label for="inputPassword" class="col-sm col-form-label">Confirm Password</label>
                      <div class="mb-3 row">

                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="confirmpass">
                        </div>
                      </div>
                      <div class="col-12 mb-3">
                       
                        <label for="inputPassword" class="col-form-label ">Medical expertise</label>

                        <div class="input-group">
                          
                          <input type="text" name="type" data-name="dtp1-text" class="form-control" placeholder="dentist...">
                        </div>

                      </div>
                     
                      <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">Gender</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="flexRadioDefault1" value="male" name="gender" checked>
                          <label class="form-check-label" for="flexRadioDefault1">
                            male
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="flexRadioDefault2" value="female" name="gender">
                          <label class="form-check-label" for="flexRadioDefault2">
                            female
                          </label>
                        </div>
                        <div class="invalid-feedback">
                          Please select a valid gender.
                        </div>
                      </div>


                      <div class="col-12">
                        <center>
                        <input type="submit" class="btn btn-warning text-secondary" style="width:50%; height:43px;" value="Register">
                        </center>
                      </div>
                    </form>
                  </div>

                </div>
              </div>
            </div>
        </div>
      </div>
      </div>
      </div>
      <div class="mt-5"></div>
      <?php   include "footer.php";?>     