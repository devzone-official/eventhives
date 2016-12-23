<?hh
class :headUI extends :x:element{
  attribute
    string title @required;
    protected function render(): \XHPRoot{
      return
      <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
        <title>{$this->:title}</title>
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
        <link rel="stylesheet" href="/assets/css/AdminLTE.min.css" />
        <link rel="stylesheet" href="/assets/css/skins/_all-skins.min.css" />
        <link rel="stylesheet" href="/assets/css/style.css" />
        <link rel="stylesheet" href="/assets/plugins/iCheck/square/blue.css" />
      </head>
      ;
    }
}
