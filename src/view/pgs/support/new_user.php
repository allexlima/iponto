<div class="tab-pane fade" id="new-user" role="tabpanel" aria-labelledby="pills-new-user-tab">
    <div class="jumbotron">
        <h3 class="display-5">New employee account</h3>
        <hr class="my-4">
        <form method="post" action="?pg=create">
          <div class="form-group row">
              <label for="userName" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                  <input type="text" name="userName" class="form-control" id="userName" placeholder="User name" required>
              </div>
          </div>
          <div class="form-group row">
              <label for="userName" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                  <input type="email" name="userEmail" class="form-control" id="userEmail" placeholder="Email address" required>
              </div>
          </div>
          <div class="form-group row">
              <label for="userFuncao" class="col-sm-2 col-form-label">Post</label>
              <div class="col-sm-10">
                  <input type="text" name="userFuncao" class="form-control" id="userFuncao" placeholder="User post">
              </div>
          </div>
          <div class="form-group row">
              <label for="userPassword" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                  <input type="password" name="userPassword" class="form-control" id="userPassword" placeholder="Password" required>
              </div>
          </div>
          <button class="btn btn-primary float-right" type="submit">Create new user</button>
        </form>
    </div>
</div>
