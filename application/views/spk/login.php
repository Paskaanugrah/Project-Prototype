
<div class="container">

<div class="card" style="width: 50rem;">

  <div class="card-body" style="width:50rem; padding:10rem;">
    <h4 class="card-title">Login</h4>
<?php
       if ($this->session->flashdata('error')) {
            echo "<b>Username/password salah.</b>";
        }
    ?>
            <form action="<?php echo base_url('index.php/user/verify'); ?>" method="post">
              <div class="form-group" >
                <label>Username</label>
                <input type="text" class="form-control" name="username">

              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password">
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  Check me out
                </label>
              </div><br>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

  </div>
</div>
</div>


