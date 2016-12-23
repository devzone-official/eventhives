<?hh
class :CustomerBodyUI extends :x:element{
  attribute
    Data data @required,
    XHPRoot content @required;
  protected function render(): \XHPRoot{
    return
    <body>
      <script src="/assets/js/jquery.min.js"></script>
      <script src="/assets/js/bootstrap.min.js"></script>
      <script src="/assets/js/jquery.cookie.js"></script>
      <script src="/assets/js/moment.js"></script>
      <script src="/assets/js/fullcalendar.js"></script>
      <div id="all">
        <CustomerHeaderUI data={$this->:data} />
        {$this->:content}
        <CustomerFooterUI />
      </div>
      <script src="/assets/js/waypoints.min.js"></script>
      <script src="/assets/js/jquery.counterup.min.js"></script>
      <script src="/assets/js/jquery.parallax-1.1.3.js"></script>
      <script src="/assets/js/front.js"></script>
      <script src="/assets/js/owl.carousel.min.js"></script>
      <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
      <script src="/assets/js/react.min.js"></script>
      <script src="/assets/js/react-dom.min.js"></script>
      <script src="/assets/js/script.js" type="text/babel"></script>
    </body>
    ;
  }
}
