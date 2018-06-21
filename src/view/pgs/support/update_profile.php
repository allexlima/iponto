<div class="jumbotron">
    <h3 class="display-5">Profile settings</h3>
    <hr class="my-4">
    <form method="post" action="?pg=update">
      <div class="form-group row">
          <label for="userID" class="col-sm-2 col-form-label">User ID</label>
          <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="userID" value="#<?php echo $_SESSION['user_id']; ?>">
          </div>
      </div>
      <div class="form-group row">
          <label for="userName" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
              <input type="text" name="userName" class="form-control" id="userName" placeholder="User name" value="<?php echo $user_details['colab_nome']; ?>">
          </div>
      </div>
      <div class="form-group row">
          <label for="userName" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
              <input type="email" name="userEmail" class="form-control" id="userEmail" placeholder="User name" value="<?php echo $user_details['colab_email']; ?>">
          </div>
      </div>
      <div class="form-group row">
          <label for="userFuncao" class="col-sm-2 col-form-label">Post</label>
          <div class="col-sm-10">
              <input type="text" name="userFuncao" class="form-control" id="userFuncao" placeholder="User name" value="<?php echo $user_details['colab_funcao']; ?>">
          </div>
      </div>
      <div class="form-group row">
          <label for="userPassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
              <input type="password" name="userPassword" class="form-control" id="userPassword" placeholder="Password">
          </div>
      </div>
      <button class="btn btn-primary float-right" type="submit">Update</button>
    </form>
</div>
