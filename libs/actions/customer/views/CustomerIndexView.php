<?hh
class :CustomerIndexView extends :x:element{
  attribute
    Data data @required;
  protected function render(): \XHPRoot{
    $data = $this->:data;
    $title = "Welcome to Eventhives || Online Event Management || Book Hotels, Caterers, Decorators, Photographers";
    $content =<div>
    <section>
      <div class="home-carousel">
        <div class="dark-mask"></div>
          <div class="container">
            <div class="homepage owl-carousel">
              <div class="item">
                <div class="row">
                  <div class="col-sm-5 right">
                    <p>
                      <img src="/assets/img/logo.png" alt="" />
                    </p>
                    <h1>Multipurpose responsive theme</h1>
                    <p>Business. Corporate. Agency.
                      <br />Portfolio. Blog. E-commerce.
                    </p>
                  </div>
                  <div class="col-sm-7">
                    <img class="img-responsive" src="/assets/img/banner1.jpg" alt="" />
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-7 text-center">
                    <img class="img-responsive" src="/assets/img/banner9.jpg" alt="" />
                  </div>
                  <div class="col-sm-5">
                    <h2>46 HTML pages full of features</h2>
                    <ul class="list-style-none">
                      <li>Sliders and carousels</li>
                      <li>4 Header variations</li>
                      <li>Google maps, Forms, Megamenu, CSS3 Animations and much more</li>
                      <li>+ 11 extra pages showing template features</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-5 right">
                    <h1>Design</h1>
                    <ul class="list-style-none">
                      <li>Clean and elegant design</li>
                      <li>Full width and boxed mode</li>
                      <li>Easily readable Roboto font and awesome icons</li>
                      <li>7 preprepared colour variations</li>
                    </ul>
                  </div>
                  <div class="col-sm-7">
                    <img class="img-responsive" src="/assets/img/banner3.jpg" alt="" />
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-7">
                    <img class="img-responsive" src="/assets/img/banner4.jpg" alt="" />
                  </div>
                  <div class="col-sm-5">
                    <h1>Easy to customize</h1>
                    <ul class="list-style-none">
                      <li>7 preprepared colour variations.</li>
                      <li>Easily to change fonts</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <section class="bar background-white">
        <div class="container">
          <div class="col-md-12">
            <div class="row">
              <a href="/services/venues">
                <div class="col-md-4">
                  <div class="box-simple">
                    <div class="icon">
                      <i class="fa fa-institution"></i>
                    </div>
                    <h3>Halls</h3>
                    <p>Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
                  </div>
                </div>
              </a>
              <a href="/services/caterers">
                <div class="col-md-4">
                  <div class="box-simple">
                    <div class="icon">
                      <i class="fa fa-cutlery"></i>
                    </div>
                    <h3>Caterers</h3>
                    <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural hastily is justice. Six draw you him full not mean evil. Prepare garrets it expense windows shewing do an.</p>
                  </div>
                </div>
              </a>
              <a href="/services/photography">
                <div class="col-md-4">
                  <div class="box-simple">
                    <div class="icon">
                      <i class="fa fa-camera"></i>
                    </div>
                    <h3>Photographer</h3>
                    <p>Am terminated it excellence invitation projection as. She graceful shy believed distance use nay. Lively is people so basket ladies window expect.</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="row">
              <a href="/services/decorations">
                <div class="col-md-4">
                  <div class="box-simple">
                    <div class="icon">
                      <i class="fa fa-diamond"></i>
                    </div>
                    <h3>Decorations</h3>
                    <p>Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
                  </div>
                </div>
              </a>
              <a href="/services/packages">
                <div class="col-md-4">
                  <div class="box-simple">
                    <div class="icon">
                      <i class="fa fa-dropbox"></i>
                    </div>
                    <h3>Social Packages</h3>
                    <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural hastily is justice. Six draw you him full not mean evil. Prepare garrets it expense windows shewing do an.</p>
                  </div>
                </div>
              </a>
              <a href="/services/college">
                <div class="col-md-4">
                  <div class="box-simple">
                    <div class="icon">
                      <i class="fa fa-users"></i>
                    </div>
                    <h3>College and Corporate Packages</h3>
                    <p>Am terminated it excellence invitation projection as. She graceful shy believed distance use nay. Lively is people so basket ladies window expect.</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
    ;
    return
    <CustomerPageUI title={$title} content={$content} data={$this->:data}/>;
  }
}
