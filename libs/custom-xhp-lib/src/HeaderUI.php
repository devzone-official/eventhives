<?hh

class :headerUI extends :x:element{
  attribute
    string className,
    string user;
  protected function render(): \XHPRoot{
    if ($this->:user == "admin") {
      $nav = <adminNavUI />;
    }
    elseif ($this->:user == "vendor") {
      $nav = <vendorNavUI />;
    }
    else{
      $nav = <adminNavUI />;
    }
    return
    <header class={$this->:className}>
      <script src="/assets/js/bundle.js"></script>
      <script src="/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
      <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="/assets/js/app.min.js"></script>
      <script src="/assets/plugins/iCheck/icheck.min.js"></script>
      <a href="/" class="logo">
        <span class="logo-mini"><b>EH</b></span>
        <span class="logo-lg"><b>Event Hives</b></span>
      </a>
      {$nav}
    </header>
    ;
  }
}
