<?hh
class :ServicesIndexView extends :x:element{
  attribute
    Data data @required;
  protected function render(): \XHPRoot{
    $title = "Welcome to Eventhives || Online Event Management || Book Hotels, Caterers, Decorators, Photographers";
    $content =<div>
    Services Index
    </div>
    ;
    return
    <CustomerPageUI title={$title} content={$content} data={$this->:data} />;
  }
}
