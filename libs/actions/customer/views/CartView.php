<?hh
class :CartView extends :x:element{
  attribute
    Data data @required;
    protected function render(): \XHPRoot{
      $title = "Event Cart || Eventhives";
      $content =
      <div>
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1>Event cart</h1>
            </div>
            <div class="col-md-6">
              <ul class="breadcrumb">
                <li><a href="/">Home</a>
                </li>
                <li>Event cart</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p class="text-muted lead">You currently have 3 item(s) in your cart.</p>
            </div>
            <div class="col-md-9 clearfix" id="basket">
              <div class="box">
                <form method="post" action="shop-checkout1.html">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan={2}>Product</th>
                          <th>Quantity</th>
                          <th>Unit price</th>
                          <th>Discount</th>
                          <th colspan={2}>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <a href="#">
                              <img src="/assets/img/detailsquare.jpg" alt="White Blouse Armani" />
                            </a>
                          </td>
                          <td><a href="#">Hotel Kosala</a>
                          </td>
                          <td>
                            <input type="number" value="2" class="form-control" />
                          </td>
                          <td>$123.00</td>
                          <td>$0.00</td>
                          <td>$246.00</td>
                          <td><a href="#"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">
                              <img src="/assets/img/basketsquare.jpg" alt="Black Blouse Armani" />
                            </a>
                          </td>
                          <td><a href="#">Mini</a>
                          </td>
                          <td>
                            <input type="number" value="1" class="form-control" />
                          </td>
                          <td>$200.00</td>
                          <td>$0.00</td>
                          <td>$200.00</td>
                          <td><a href="#"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan={5}>Total</th>
                          <th colspan={2}>$446.00</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="box-footer">
                    <div class="pull-left">
                      <a href="shop-category.html" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue Creating Event</a>
                    </div>
                    <div class="pull-right">
                      <button class="btn btn-default"><i class="fa fa-refresh"></i> Update cart</button>
                      <button type="submit" class="btn btn-template-main">Proceed to checkout <i class="fa fa-chevron-right"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box" id="order-summary">
                <div class="box-header">
                  <h3>Order summary</h3>
                </div>
                <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>Order subtotal</td>
                        <th>$446.00</th>
                      </tr>
                      <tr>
                        <td>Shipping and handling</td>
                        <th>$10.00</th>
                      </tr>
                      <tr>
                        <td>Tax</td>
                        <th>$0.00</th>
                      </tr>
                      <tr class="total">
                        <td>Total</td>
                        <th>$456.00</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="box">
                <div class="box-header">
                  <h4>Coupon code</h4>
                </div>
                <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" />
                        <span class="input-group-btn">
                          <button class="btn btn-template-main" type="button"><i class="fa fa-gift"></i></button>
                        </span>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>;
      return
      <CustomerPageUI title={$title} content={$content} data={$this->:data}/>;
    }
}
