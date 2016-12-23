<?hh
class :CustomerHeaderUI extends :x:element{
  attribute
    Data data @required;
  protected function render(): \XHPRoot{
    $data = $this->:data;
    if($data->getId() == "guest"){
      $session =
      <div class="login">
      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="Login">Member login</h4>
            </div>
            <div class="modal-body">
              <form action="/login" method="post">
                <div class="form-group">
                  <input name="email" type="text" class="form-control" id="email_modal" placeholder="email" />
                </div>
                <div class="form-group">
                  <input name="password" type="password" class="form-control" id="password_modal" placeholder="password" />
                </div>
                <p class="text-center">
                  <button type="submit" class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                </p>
              </form>
              <p class="text-center text-muted">Not registered yet?</p>
              <p class="text-center text-muted"><a href="/register"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>
            </div>
          </div>
        </div>
      </div>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-location"></i> <span class="hidden-xs text-uppercase">Location</span></a>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-location"></i> <span class="hidden-xs text-uppercase">Date-Time</span></a>
        <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Login</span></a>
        <a href="/register"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Register</span></a>
        <a href="/eventcart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs text-uppercase">Event Cart</span></a>
      </div>;
    }
    else {
      $session =
      <div class="login">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-location"></i> <span class="hidden-xs text-uppercase">Location</span></a>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-location"></i> <span class="hidden-xs text-uppercase">Date-Time</span></a>
        <a href="#"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Hi,{$data->getUserName()}!</span></a>
        <a href="/logout"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Logout</span></a>
        <a href="/eventcart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs text-uppercase">Event Cart</span></a>
      </div>;
    }
    return
    <header>
      <div id="top">
        <div class="container">
          <div class="row">
            <div class="col-xs-5 contact"><div id="logc"></div>
              <p class="hidden-sm hidden-xs">Contact us on +420 777 555 333 or hello@eventhives.com.</p>
              <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
              </p>
            </div>
            <div class="col-xs-7">
              {$session}
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">
        <div class="navbar navbar-default yamm" role="navigation" id="navbar">
          <div class="container">
            <div class="navbar-header col-sm-8">
              <a class="navbar-brand home" href="/">
                <img src="/assets/img/logo.png" alt="Eventhives logo" class="hidden-xs hidden-sm" />
                <img src="/assets/img/logo-small.png" alt="Eventhives logo" class="visible-xs visible-sm" /><span class="sr-only">Eventhives - go to homepage</span>
              </a>
              <ul class="col-sm-8">
                <li>
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Eg: Decoration, xyz banquet hall" />
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                </li>
              </ul>
              <div class="navbar-buttons">
                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <i class="fa fa-align-justify"></i>
                </button>
              </div>
            </div>
            <div class="navbar-collapse collapse col-sm-4" id="navigation">
              <ul class="nav navbar-nav navbar-right">
                <li class="active">
                  <a href="/">Home</a>
                </li>
                <li class="dropdown use-yamm yamm-fw">
                  <a href="/services" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-sm-6">
                              <img src="/assets/img/template-easy-customize.png" class="img-responsive hidden-xs" alt="" />
                            </div>
                          <div class="col-sm-3">
                          <h5>Booking</h5>
                          <ul>
                            <li><a href="/services/venues">Function Halls</a>
                            </li>
                            <li><a href="/services/decorations">Decorations</a>
                            </li>
                            <li><a href="/services/photography">Photography</a>
                            </li>
                            <li><a href="/services/caterers">Caterers</a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-sm-3">
                          <h5>Packages</h5>
                            <ul>
                              <li><a href="/wedding">Wedding</a>
                              </li>
                              <li><a href="/birthday">Birthday</a>
                              </li>
                              <li><a href="/get-together">Get together</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="/contact">Contact Us</a>
                </li>
              </ul>
            </div>
            <div class="collapse clearfix" id="search">
              <form class="navbar-form" role="search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" />
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>
                  </span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>
    ;
  }
}
