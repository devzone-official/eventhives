<?hh
class :CustomerLoginView extends :x:element{
  protected function render(): \XHPRoot{
    $title = "Member Login || Eventhives";
    $content = <div>
    <div id="heading-breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1>Login</h1>
          </div>
          <div class="col-md-5">
            <ul class="breadcrumb">
              <li><a href="index.html">Home</a>
              </li>
              <li>Login</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="box">
                <p class="lead">Already our member?</p>
                  <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                  <hr />
                  <form action="/login" method="post">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input name="email" type="text" class="form-control" id="email" />
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input name="password" type="password" class="form-control" id="password" />
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>;
    return
    <CustomerPageUI title={$title} content={$content} />;
    ;
  }
}
