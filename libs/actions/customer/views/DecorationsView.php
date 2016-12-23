<?hh
class :DecorationsView extends :x:element{
  attribute
    Data data @required;
  protected function render(): \XHPRoot{
    $db = new Database();
    $unit = Get::data("unit");
    $query = "SELECT * FROM decoration WHERE id = '$unit'";
    $result = \HH\Asio\join($db->makeQuery($query));
    $name = $result->mapRows()[0]["name"];
    $title = "Welcome to Eventhives || Online Event Management || Book Hotels, Caterers, Decorators, Photographers";
    $content =<div>
    <div id="heading-breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1>{$name}</h1>
          </div>
          <div class="col-md-5">
            <ul class="breadcrumb">
              <li><a href="index.html">Home</a>
              </li>
              <li><a href="shop-category.html">decorations</a>
              </li>
              <li>{$name}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row" id="productMain">
              <div class="col-sm-8">
                <div id="mainImage">
                  <img src="/assets/img/main-slider1.jpg" alt="" class="img-responsive" />
                </div>
                <div class="ribbon sale">
                  <div class="theribbon">SALE</div>
                  <div class="ribbon-background"></div>
                </div>
                <div class="ribbon new">
                  <div class="theribbon">NEW</div>
                  <div class="ribbon-background"></div>
                </div>
              </div>
              <div class="col-sm-4">
                <div id="calendar">
                  <script src="/assets/js/calendar_demo.js"></script>
                </div>
                <div class="row hide" id="thumbs">
                  <div class="col-xs-4">
                    <a href="/assets/img/main-slider1.jpg" class="thumb">
                      <img src="/assets/img/detailsquare.jpg" alt="" class="img-responsive" />
                    </a>
                  </div>
                  <div class="col-xs-4">
                    <a href="/assets/img/main-slider2.jpg" class="thumb">
                      <img src="/assets/img/detailsquare2.jpg" alt="" class="img-responsive" />
                    </a>
                  </div>
                  <div class="col-xs-4">
                    <a href="/assets/img/main-slider3.jpg" class="thumb">
                      <img src="/assets/img/detailsquare3.jpg" alt="" class="img-responsive" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8">
                <div class="box" id="details">
                  <p></p>
                    <h4>Long Product details</h4>
                    <p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>
                    <h4>Material &amp; care</h4>
                    <ul>
                      <li>Polyester</li>
                      <li>Machine wash</li>
                    </ul>
                    <h4>Size &amp; Fit</h4>
                    <ul>
                      <li>Regular fit</li>
                      <li>The model (height 5'8" and chest 33") is wearing a size S</li>
                    </ul>
                    <blockquote>
                      <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em>
                      </p>
                    </blockquote>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="box">
                    <form>
                      <div class="price">&#8377;12400.00 <del> &#8377;15339.00</del> <p>per event</p></div>
                      <p class="text-center">
                        <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Add to Event</button>
                        <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i>
                        </button>
                      </p>
                    </form>
                  </div>
                </div>
              </div>
              <div class="box social" id="product-social">
                <h4>Show it to your friends</h4>
                <p>
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </p>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-6">
                  <div class="box text-uppercase">
                    <h3>You may also like these products</h3>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="product">
                    <div class="image">
                      <a href="#">
                        <img src="/assets/img/product2.jpg" alt="" class="img-responsive image1" />
                      </a>
                    </div>
                    <div class="text">
                      <h3>Fur coat</h3>
                      <p class="price">$143</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="product">
                    <div class="image">
                      <a href="#">
                        <img src="/assets/img/product3.jpg" alt="" class="img-responsive image1" />
                      </a>
                    </div>
                    <div class="text">
                      <h3>Fur coat</h3>
                      <p class="price">$143</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="product">
                    <div class="image">
                      <a href="#">
                        <img src="/assets/img/product1.jpg" alt="" class="img-responsive image1" />
                      </a>
                    </div>
                    <div class="text">
                      <h3>Fur coat</h3>
                      <p class="price">$143</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    ;
    return
    <CustomerPageUI title={$title} content={$content} data={$this->:data} />;
  }
}
