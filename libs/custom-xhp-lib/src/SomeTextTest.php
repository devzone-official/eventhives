<?hh

class :SomeTextTest extends :x:element{
  use XHPHelpers;
  use XHPReact;
  attribute
    :xhp:html-element,
    string something @required;
  protected function render(): XHPRoot{
    $this->constructReactInstance(
    'MyReactClass',
      Map {'someAttribute' => $this->:something }
  );
    return
    <div id={$this->getID()}/>
    ;
  }
}
