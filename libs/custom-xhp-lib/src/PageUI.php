<?hh
class :pageUI extends :x:element{
  attribute
    XHPRoot head,
    XHPRoot body;
    protected function render(): \XHPRoot{
      return
      <html>
      {$this->:head}
      {$this->:body}
      </html>
      ;
    }
}
