<?hh
class :CustomerHeadUI extends :x:element{
  attribute
    string title @required;
  protected function render(): \XHPRoot{
    return
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>{$this->:title}</title>

      <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="/assets/css/font-awesome.css" />
      <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />

      <!-- Css animations  -->
      <link href="/assets/css/animate.css" rel="stylesheet" />

      <!-- Theme stylesheet, if possible do not edit this stylesheet -->
      <link href="/assets//css/style.default.css" rel="stylesheet" id="theme-stylesheet" />



      <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />

      <!-- Responsivity for older IE -->
          <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Favicon and apple touch icons-->
      <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon" />
      <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png" />
      <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/apple-touch-icon-57x57.png" />
      <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/apple-touch-icon-72x72.png" />
      <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-touch-icon-76x76.png" />
      <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/apple-touch-icon-114x114.png" />
      <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/apple-touch-icon-120x120.png" />
      <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/apple-touch-icon-144x144.png" />
      <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/apple-touch-icon-152x152.png" />

      <link href="/assets/css/fullcalendar.css" rel="stylesheet" />

      <link href="/assets/css/owl.carousel.css" rel="stylesheet" />
      <link href="/assets/css/owl.theme.css" rel="stylesheet" />
    </head>
    ;
  }
}
