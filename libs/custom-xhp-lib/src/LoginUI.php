<?hh

class :loginUI extends :x:element{
  attribute
    string user @required,
    string url @required;
    protected function render(): \XHPRoot{
      $type = $this->:user;
      $title = $type." Login";
      $action = "..".$this->:url."login";
      $content =  <div class="login-box">
                    <div class="login-logo">
                      <a href="../"><b><x:frag>{$type}</x:frag></b><x:frag>{" login"}</x:frag></a>
                    </div>
                    <div class="login-box-body">
                      <p class="login-box-msg">Sign in to start your session</p>
                      <form action={$action} method="post">
                        <div class="form-group has-feedback">
                          <input type="text" class="form-control" placeholder="Email" name="email" />
                          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                          <input type="password" class="form-control" placeholder="Password" name="password" />
                          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                          <div class="col-xs-8">
                            <div class="checkbox icheck">
                              <label>
                                <input type="checkbox" /> Remember Me
                              </label>
                            </div>
                          </div>
                          <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <script>
                    {"$(function () { $('input').iCheck({ checkboxClass: 'icheckbox_square-blue', radioClass: 'iradio_square-blue', increaseArea: '20%' }); });"}
                    </script>
                  </div>
                  ;
      $head = <headUI title={$title} />;
      $body = <bodyUI className="login-page" content={$content} />;
      return
        <pageUI head={$head} body={$body} />;
    }
}
