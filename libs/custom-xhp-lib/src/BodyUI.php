<?hh

class :bodyUI extends :x:element{
  attribute
    XHPRoot header,
    XHPRoot panel,
    XHPRoot content,
    XHPRoot footer,
    string className;
    protected function render(): \XHPRoot{
      return
      <body class={$this->:className}>
        <div class="wrapper">
          {$this->:header}
            {$this->:panel}
            {$this->:content}
          {$this->:footer}
        </div>
      </body>
      ;
    }
}
