<?hh
class :AddVendorView extends :x:element{
  protected function render(): \XHPRoot{
    $content = <x:js-scope>
                  <AddVendorForm something="as" />
                </x:js-scope>;
    $head = <headUI title="Admin Dashboard || Add Vendor" />;
    $header = <headerUI className="main-header" user="admin"/>;
    $panel = <adminPanelUI />;
    $footer = <footerUI />;
    $body = <bodyUI className="skin-blue sidebar-mini" header={$header} panel={$panel} content={$content} footer={$footer} />;
    return
      <pageUI head={$head} body={$body} />
    ;
  }
}
