<div class="tab-pane fade" id="new-user" role="tabpanel" aria-labelledby="pills-new-user-tab">
    <div class="jumbotron">
        <h3 class="display-5">New employee account</h3>
        <hr class="my-4">
        <form method="post" action="?pg=create">
          <div class="form-group row">
              <label for="newUserName" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                  <input type="text" name="newUserName" class="form-control" id="newUserName" placeholder="User name" required>
              </div>
          </div>
          <div class="form-group row">
              <label for="newUserName" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                  <input type="email" name="newUserEmail" class="form-control" id="newUserEmail" placeholder="Email address" required>
              </div>
          </div>
          <div class="form-group row">
              <label for="newUserFuncao" class="col-sm-2 col-form-label">Post</label>
              <div class="col-sm-10">
                  <input type="text" name="newUserFuncao" class="form-control" id="newUserFuncao" placeholder="User post">
              </div>
          </div>
          <div class="form-group row">
              <label for="newUserPassword" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                  <input type="password" name="newUserPassword" class="form-control" id="newUserPassword" placeholder="Password" required>
              </div>
          </div>
          <button class="btn btn-primary float-right" type="submit">Create new user</button>
        </form>
    </div>
</div>
