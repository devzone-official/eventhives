<?hh
class :DecorationsResultView extends :x:element{
  attribute
    DecorationsData data @required;
  protected function render(): \XHPRoot{
    $data = $this->:data;
    $block = $data->getDecorations();
    return<div>
        <div class="col-md-4 col-sm-6">
          <div class="product">
            <div class="image">
              <a href="shop-detail.html">
                <img src="/assets/img/decoration1.jpg" alt="" class="img-responsive image1" />
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
                <img src="/assets/img/decoration1.jpg" alt="" class="img-responsive image1" />
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
                <img src="/assets/img/decoration1.jpg" alt="" class="img-responsive image1" />
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
                <img src="/assets/img/decoration1.jpg" alt="" class="img-responsive image1" />
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
                <img src="/assets/img/decoration1.jpg" alt="" class="img-responsive image1" />
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
                <img src="/assets/img/decoration1.jpg" alt="" class="img-responsive image1" />
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
        </div></div>
    ;
  }
}
