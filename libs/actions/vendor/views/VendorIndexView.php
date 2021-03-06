<?hh
class :VendorIndexView extends :x:element{
  protected function render(): \XHPRoot{
    $content = <div class="content-wrapper">
                <x:js-scope>
                  <SomeTextTest something="sdfg" />
                </x:js-scope>
                <section class="content-header">
                  <h1>
                    Dashboard
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                  </ol>
                </section>
                <section class="content">
                      <div class="box box-info">
                        <div class="box-header with-border">
                          <h3 class="box-title">Latest Orders</h3>
                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                          </div>
                        </div>
                        <div class="box-body">
                          <div class="table-responsive">
                            <table class="table no-margin">
                              <thead>
                              <tr>
                                <th>Order ID</th>
                                <th>Item</th>
                                <th>Status</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                <td>Call of Duty IV</td>
                                <td><span class="label label-success">Shipped</span></td>
                              </tr>
                              <tr>
                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="label label-warning">Pending</span></td>
                              </tr>
                              <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>iPhone 6 Plus</td>
                                <td><span class="label label-danger">Delivered</span></td>
                              </tr>
                              <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="label label-info">Processing</span></td>
                              </tr>
                              <tr>
                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="label label-warning">Pending</span></td>
                              </tr>
                              <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>iPhone 6 Plus</td>
                                <td><span class="label label-danger">Delivered</span></td>
                              </tr>
                              <tr>
                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                <td>Call of Duty IV</td>
                                <td><span class="label label-success">Shipped</span></td>
                              </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="box-footer clearfix">
                          <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
                        </div>
                      </div>
            		  <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Recently Added Products</h3>

                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                          </div>
                        </div>
                        <div class="box-body">
                          <ul class="products-list product-list-in-box">
                            <li class="item">
                              <div class="product-img">
                                <img src="../assets/img/default-50x50.gif" alt="Product Image" />
                              </div>
                              <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Samsung TV
                                  <span class="label label-warning pull-right">$1800</span></a>
                                    <span class="product-description">
                                      Samsung 32" 1080p 60Hz LED Smart HDTV.
                                    </span>
                              </div>
                            </li>
                            <li class="item">
                              <div class="product-img">
                                <img src="../assets/img/default-50x50.gif" alt="Product Image" />
                              </div>
                              <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Bicycle
                                  <span class="label label-info pull-right">$700</span></a>
                                    <span class="product-description">
                                      26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                                    </span>
                              </div>
                            </li>
                            <li class="item">
                              <div class="product-img">
                                <img src="../assets/img/default-50x50.gif" alt="Product Image" />
                              </div>
                              <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Xbox One <span class="label label-danger pull-right">$350</span></a>
                                    <span class="product-description">
                                      Xbox One Console Bundle with Halo Master Chief Collection.
                                    </span>
                              </div>
                            </li>
                            <li class="item">
                              <div class="product-img">
                                <img src="../assets/img/default-50x50.gif" alt="Product Image" />
                              </div>
                              <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">PlayStation 4
                                  <span class="label label-success pull-right">$399</span></a>
                                    <span class="product-description">
                                      PlayStation 4 500GB Console (PS4)
                                    </span>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="box-footer text-center">
                          <a href="javascript:void(0)" class="uppercase">View All Products</a>
                        </div>
                      </div>
                  </section>
              </div>
    ;
    $head = <headUI title="Vendor Dashboard" />;
    $header = <headerUI className="main-header" user="vendor"/>;
    $panel = <panelUI />;
    $footer = <footerUI />;
    $body = <bodyUI className="skin-blue sidebar-mini" header={$header} panel={$panel} content={$content} footer={$footer} />;
      return
      <pageUI head={$head} body={$body} />
      ;
  }
}
