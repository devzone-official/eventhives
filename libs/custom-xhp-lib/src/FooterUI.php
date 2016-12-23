<?hh

class :footerUI extends :x:element{
  protected function render(): \XHPRoot{
    return
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <!-- Anything you want -->
      </div>
      <strong>Copyright &copy; 2016 <a href="#">Event Hives</a>.</strong> All rights reserved.
    </footer>
    ;
  }
}
