<?hh
class :CustomerLogoutView extends :x:element{
  protected function render(): \XHPRoot{
    return
    <div> Logged out successfully! <hr />Thank you
    <a href="/">Visit Again</a>
    </div>
    ;
  }
}
