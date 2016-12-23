<?hh
class :CustomerPageUI extends :x:element{
  attribute
    Data data @required,
    string title @required,
    XHPRoot content @required;
  protected function render(): \XHPRoot{
    return
    <x:doctype>
      <html lang="en">
        <CustomerHeadUI title={$this->:title} />
        <CustomerBodyUI content={$this->:content} data={$this->:data} />
      </html>
    </x:doctype>
    ;
  }
}
