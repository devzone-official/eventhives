<?hh
class :VenuesIndexView extends :x:element{
  attribute
    Data data @required;
  protected function render(): \XHPRoot{
  $type = "venue";
  $db = new Database();
  if(Get::data("page") == "null"){
    $page = 1;
  }
  else {
    $page = (int) Get::data("page");
  }
  $offset = 6 * ($page - 1);
  $limit = 6;
  $query = "SELECT * FROM venue LIMIT $limit OFFSET $offset";
  $result = \HH\Asio\join($db->makeQuery($query));
  $productCount = $result->numRows();
  $block = $result->mapRows();
  $title = "Welcome to Eventhives || Online Event Management || Book Hotels, Caterers, Decorators, Photographers";
  $description = "venue description goes on here  .. ";
  $filter = <div class="col-sm-3">
                  <div class="panel panel-default sidebar-menu">
                    <div class="panel-heading">
                      <h3 class="panel-title">Categories</h3>
                    </div>
                    <div class="panel-body">
                      <ul class="nav nav-pills nav-stacked category-menu">
                        <li>
                          <a href="shop-category.html">Function Hall <span class="badge pull-right">42</span></a>
                          <ul>
                            <li><a href="shop-category.html">Birthday</a>
                            </li>
                            <li><a href="shop-category.html">Others</a>
                            </li>
                          </ul>
                        </li>
                        <li class="active">
                          <a href="shop-category.html">Banquet Hall  <span class="badge pull-right">123</span></a>
                          <ul>
                            <li><a href="shop-category.html">Marriage</a>
                            </li>
                            <li><a href="shop-category.html">Others</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="panel panel-default sidebar-menu">
                    <div class="panel-heading">
                      <h3 class="panel-title">Providers</h3>
                      <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> <span class="hidden-sm">Clear</span></a>
                    </div>
                    <div class="panel-body">
                      <form>
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" />Kosala (10)
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" />Tabla (12)
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" />Paradise (15)
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" />TAJ Ventures(14)
                            </label>
                          </div>
                        </div>
                        <button class="btn btn-default btn-sm btn-template-main"><i class="fa fa-pencil"></i> Apply</button>
                      </form>
                    </div>
                  </div>
        <div class="panel panel-default sidebar-menu">
          <div class="panel-heading">
            <h3 class="panel-title clearfix">Price Range</h3>
            <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> <span class="hidden-sm">Clear</span></a>
          </div>
          <div class="panel-body">
            <form>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" /> <span class="colour white"></span> White (14)
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" /> <span class="colour blue"></span> Blue (10)
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" /> <span class="colour green"></span> Green (20)
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" /> <span class="colour yellow"></span> Yellow (13)
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" /> <span class="colour red"></span> Red (10)
                  </label>
                </div>
              </div>
              <button class="btn btn-default btn-sm btn-template-main"><i class="fa fa-pencil"></i> Apply</button>
            </form>
          </div>
        </div>
        <div class="banner">
          <a href="shop-category.html">
            <img src="/assets/img/banner.jpg" alt="sales 2014" class="img-responsive" />
          </a>
        </div>
      </div>;

    $content =<div>
    <div id="heading-breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1>Venue</h1>
          </div>
          <div class="col-md-5">
            <ul class="breadcrumb">
              <li><a href="/">Home</a>
              </li>
              <li><a href="/services">Services</a>
              </li>
              <li>Venue</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="content">
      <div class="container">
        <div class="row">
          {$filter}
          <div class="col-sm-9">
            <p class="text-muted lead">{$description}</p>
            <div class="row products">
              <div class="col-md-4 col-sm-6">
                <div class="product">
                  <div class="image">
                    <a href="shop-detail.html">
                      <img src="/assets/img/product1.jpg" alt="" class="img-responsive image1" />
                    </a>
                  </div>
                  <div class="text">
                    <h3><a href="shop-detail.html">{$block[0]["name"]}</a></h3>
                    <p class="price">{"$ ".$block[0]["cost"]}</p>
                    <p class="buttons">
                      <a href="shop-detail.html" class="btn btn-default">View detail</a>
                      <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="product">
                  <div class="image">
                    <a href="shop-detail.html">
                      <img src="/assets/img/product1.jpg" alt="" class="img-responsive image1" />
                    </a>
                  </div>
                  <div class="text">
                    <h3><a href="shop-detail.html">{$block[1]["name"]}</a></h3>
                    <p class="price">{"$ ".$block[1]["cost"]}</p>
                    <p class="buttons">
                      <a href="shop-detail.html" class="btn btn-default">View detail</a>
                      <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="product">
                  <div class="image">
                    <a href="shop-detail.html">
                      <img src="/assets/img/product1.jpg" alt="" class="img-responsive image1" />
                    </a>
                  </div>
                  <div class="text">
                    <h3><a href="shop-detail.html">{$block[2]["name"]}</a></h3>
                    <p class="price">{"$ ".$block[2]["cost"]}</p>
                    <p class="buttons">
                      <a href="shop-detail.html" class="btn btn-default">View detail</a>
                      <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="product">
                  <div class="image">
                    <a href="shop-detail.html">
                      <img src="/assets/img/product1.jpg" alt="" class="img-responsive image1" />
                    </a>
                  </div>
                  <div class="text">
                    <h3><a href="shop-detail.html">{$block[3]["name"]}</a></h3>
                    <p class="price">{"$ ".$block[3]["cost"]}</p>
                    <p class="buttons">
                      <a href="shop-detail.html" class="btn btn-default">View detail</a>
                      <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="product">
                  <div class="image">
                    <a href="shop-detail.html">
                      <img src="/assets/img/product1.jpg" alt="" class="img-responsive image1" />
                    </a>
                  </div>
                  <div class="text">
                    <h3><a href="shop-detail.html">{$block[4]["name"]}</a></h3>
                    <p class="price">{"$ ".$block[4]["cost"]}</p>
                    <p class="buttons">
                      <a href="shop-detail.html" class="btn btn-default">View detail</a>
                      <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="product">
                  <div class="image">
                    <a href="shop-detail.html">
                      <img src="/assets/img/product1.jpg" alt="" class="img-responsive image1" />
                    </a>
                  </div>
                  <div class="text">
                    <h3><a href="shop-detail.html">{$block[5]["name"]}</a></h3>
                    <p class="price">{"$ ".$block[5]["cost"]}</p>
                    <p class="buttons">
                      <a href="shop-detail.html" class="btn btn-default">View detail</a>
                      <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="pages">
              <p class="loadMore">
                <a href="#" class="btn btn-template-main"><i class="fa fa-chevron-down"></i> Load more</a>
              </p>
              <ul class="pagination">
                <li><a href="#">&laquo;</a>
                </li>
                <li class="active"><a href="#">1</a>
                </li>
                <li><a href="#">2</a>
                </li>
                <li><a href="#">3</a>
                </li>
                <li><a href="#">4</a>
                </li>
                <li><a href="#">5</a>
                </li>
                <li><a href="#">&raquo;</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div></div>
    ;
    return
    <CustomerPageUI title={$title} content={$content} data={$this->:data} />;
  }
}
