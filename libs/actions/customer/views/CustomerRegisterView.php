<?hh
class :CustomerRegisterView extends :x:element{
  attribute
    Data data @required;
  protected function render(): \XHPRoot{
    $title = "Member Registration || Eventhives";
    $content = <div>
    <div id="heading-breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1>Register</h1>
          </div>
          <div class="col-md-5">
            <ul class="breadcrumb">
              <li><a href="/">Home</a>
              </li>
              <li>Register</li>
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
              <h2 class="text-uppercase">New account</h2>
                <p class="lead">Not our registered customer yet?</p>
                <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                <p class="text-muted">If you have any questions, please feel free to <a href="/contact">contact us</a>, our customer service center is working for you 24/7.</p>
                <hr />
                <form action="customer-orders.html" method="post">
                  <div class="form-group">
                    <label for="name-login">Name</label>
                    <input type="text" class="form-control" id="name-login" />
                  </div>
                  <div class="form-group">
                    <label for="email-login">Email</label>
                    <input type="text" class="form-control" id="email-login" />
                  </div>
                  <div class="form-group">
                    <label for="password-login">Password</label>
                    <input type="password" class="form-control" id="password-login" />
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-user-md"></i> Register</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>;
    return
    <CustomerPageUI title={$title} content={$content} data={$this->:data}/>;
    ;
  }
}
