    <?php get_header(); ?>
    <main class="main">
      <!-- ニュース -->
      <section>
        <div class="container">
          <div class="top_newsbox">
            <p class="text-center my-4 py-2 border-dark border-top border-bottom">現在、在宅勤務（リモートワーク）を実施しております。お問い合わせの際は、電話ではなく、本ホームページ上の「<a href="<?php echo get_template_directory_uri(); ?>/inquiry.html">お問合せ</a>」欄よりご連絡ください。</p>
          </div>
        </div>
      </section>
      <!-- / ニュース / top -->
      <!-- トップスライド -->
      <section>
        <div class="container ">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img20171031231807208238.jpg" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img20171031232139776829.jpg" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img20171031232152197698.jpg" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img20171106164831570048.jpg" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img20171210221448523257.jpg" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img20171210221452437245.jpg" class="d-block w-100 img-fluid" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </section>
      <!-- / トップスライド -->
      <section>
        <div class="container">
          <div class="row overview-wrap">
            <div class="col-lg-3">
              <img src="<?php echo get_template_directory_uri(); ?>/img/800px-TakashiKawakami.jpg" class="img-fluid  overview-img ">
            </div>
            <div class="overview col-lg-9">
              <h3 class="text-light fw-bold ">外交政策センターの概要</h3> 
              <p class=" c-body">
                <span class="text-light">外交政策センター（FPC）は、無極化時代での外交政策を分析し、「日本再生」を目指すビジョンを掲げ学者や有識者が中心となり2011年2月にスタートしました。</span><br>
                <span class="text-light">FPCは、独自のネットワークで最新の外交情報を分析、将来予測を行っています。また、国連などの国際機関や各国の研究機関と協力し、流動化する世界での外交政策や地域規模での脅威（感染症、地震・津波等災害、地球環境等、移民・難民）へ解決に向け政策提言や活動を展開しています。</span><br><br>
                <span class=" d-underline"><a class ="overview-a" href="" data-pid="258">
                  <img class="img-icon img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/61w32phC6ZS._AC_UL480_FMwebp_QL65_.jpg" alt="LinkIcon">活動内容はこちら</a>
                </span>
              </p> 
            </div>
          </div>
        </div>
      </section>
      <!-- 理事時事解説 -->
      <section class="album mt-5 pt-3 pb-5 bg-light">
        <div class="container">
          <h2 class="mt-8 fw-bold s-title">
            <a href="current-affairs-commentary.html" class="text-decoration-none"><span class="fw-bold s-title">理事時事解説</span></a> 
          </h2>
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <a href="Kawakami-commentary.html" target="_blank" rel="noopener noreferrer">
                <div class="mb-4 shadow-sm director-card"> 
                  <div class="pt-2 px-4 ">
                    <h5>川上高司時事解説</h5>
                  </div>
                  <img class="card-img-top d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/-o78buCQ_400x400.jpg" alt="Card image cap">
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6">
              <a href="hosino-commentary.html" target="_blank" rel="noopener noreferrer">
                <div class="mb-4 shadow-sm director-card"> 
                  <div class="pt-2 px-4 ">
                    <h5>星野俊也時事解説</h5>
                  </div>
                  <img class="card-img-top d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/hoshino.jpg" alt="Card image cap">
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-4 shadow-sm">
                <a href="Ishizawa-commentary.html" target="_blank" rel="noopener noreferrer">
                  <div class="mb-4 shadow-sm director-card"> 
                    <div class="pt-2 px-4">
                      <h5>石澤靖治時事解説</h5>
                    </div>
                    <img class="card-img-top d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/ishizawa_images.jpg" alt="Card image cap">
                  </div>
                </a>
              </div>
            </div>    
            <div class="col-lg-3 col-md-6">
              <div class="mb-4 shadow-sm">
                <a href="http://www.foreign-policy-center.tokyo/_src/5116/FPC%20commentary%20volume18.pdf" target="_blank" rel="noopener noreferrer">
                  <div class="mb-4 shadow-sm director-card"> 
                    <div class="pt-2 px-4">
                      <h5>蟹瀬誠一時事解説</h5>
                    </div>
                    <img class="card-img-top d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/kanise.jpg" alt="Card image cap">
                  </div>
                </a>
              </div>
            </div>
          <div> 
            <a href="current-affairs-commentary.html" data-pid="257"><img src="<?php echo get_template_directory_uri(); ?>/img/flat_02_red.png" alt="LinkIcon" class="img-icon">過去の理事時事解説はこちら</a> 
          </div>      
        </div>
      </section>     
      <!-- 理事時事解説  -->
      <!-- コメンタリー -->
      <section class="album pt-3 pb-5 ">
        <div class="container">
          <h2 class="mt-8 fw-bold s-title">
            <a href="commentary.html" class="text-decoration-none"><span class="fw-bold s-title"></span>コメンタリー</span></a> 
          </h2>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume19.pdf" target="_blank" rel="noopener noreferrer">
                <div class="commentary-card mb-4 shadow-sm">
                  <div class="pt-2 px-4 commentary-card-body">
                    <h5>Vol.19<br>「中欧から見る欧州情勢（２）：中国との関係」（細田尚志）（発行：12月25日）</h5>
                  </div>
                  <img class="card-img-top d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/commentary/commentary19.png" alt="Card image cap">
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-md-6">
              <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume18.pdf" target="_blank" rel="noopener noreferrer">
                <div class="commentary-card mb-4 shadow-sm"> 
                  <div class="pt-2 px-4 commentary-card-body">
                    <h5>Vol.18<br>「中国先祖がえり」（蟹瀬誠一）（発行：11月26日）</h5>
                  </div>
                  <img class="card-img-top d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/commentary/commentary18.png" alt="Card image cap">
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-md-6">
              <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume17.pdf" target="_blank" rel="noopener noreferrer">
                <div class="commentary-card mb-4 shadow-sm">
                  <div class="pt-2 px-4 commentary-card-body">
                    <h5>Vol.17<br>「中欧から見る欧州情勢(１)：ロシアとの関係」（細田尚志）（発行：11月20日）</h5>
                  </div>
                  <img class="card-img-top d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/commentary/commentary17.png" alt="Card image cap">
                </div>
              </a> 
            </div>
            <div class="col-lg-4 col-md-6">
              <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume16.pdf" target="_blank" rel="noopener noreferrer">
                <div class="commentary-card mb-4 shadow-sm">
                  <div class="pt-2 px-4 commentary-card-body">
                    <h5>Vol.16<br>「米カリフォルニア州知事リコール騒動とトランピズムの脅威」（蟹瀬誠一）（発行：10月20日）</h5>
                  </div>
                  <img class="card-img-top d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/commentary/commentary16.png" alt="Card image cap">
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-md-6">
              <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume15.pdf" target="_blank" rel="noopener noreferrer">
                <div class="commentary-card mb-4 shadow-sm">
                  <div class="pt-2 px-4 commentary-card-body">
                    <h5>Vol.15<br>「オリンピックと『多様な』『日本人』」（石澤靖治）（発行：9月27日）</h5>
                  </div>
                  <img class="card-img-top d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/commentary/commentary15.png" alt="Card image cap">
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-md-6">
              <a href="commentary/FPC-commentary-volume14.pdf" target="_blank" rel="noopener noreferrer">
                <div class="commentary-card mb-4 shadow-sm">
                  <div class="pt-2 px-4 commentary-card-body">
                    <h5>Vol.14<br>「トランプ暴露本」（蟹瀬誠一）（発行：9月23日）</h5>
                  </div>
                  <img class="card-img-top d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/commentary/commentary14.png" alt="Card image cap">
                </div>
              </a>
            </div>
          </div>
          <div> 
            <a href="<?php echo get_template_directory_uri(); ?>/commentary.html" data-pid="257"><img src="<?php echo get_template_directory_uri(); ?>/img/flat_02_red.png" alt="LinkIcon" class="img-icon">過去のコメンタリーはこちら</a> 
          </div>      
        </div>
      </section>  
     
      <!-- / コメンタリー -->
      <!--  FPCニュース -->
      <section class="album pt-3 pb-5 bg-light">
        <div class="container">
          <h2 class=" fw-bold s-title">FPCニュース</h2>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="card mb-4 shadow-sm">
                <div class="pt-2 px-4 card-writings">
                  <h5>パワーポリティクスの時代―日本の外交・安全保障をどう動かすか―（2021/5/31）</h5>
                  <p class="pt-1 book-p">創成社</p>
                  <p class="book-p">編：外交政策センター</p>
                  <p class="book-p">編著：川上高司・星野俊也・石澤靖治</p>
                </div>
                <img class="card-img-top1 d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/40860-c.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">購入する</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card mb-4 shadow-sm"> 
                <div class="pt-2 px-4 card-writings">
                  <h5>日本は本当に「和の国」か （2019/6/18）</h5>
                  <p class="pt-1  book-p">PHP研究所</p>
                  <p class="book-p">著：吉木誉絵</p>
                </div>
                <img class="card-img-top2 d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/516djhgchyl._sy346_.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">購入する</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card mb-4 shadow-sm">
                <div class="pt-2 px-4 card-writings">
                  <h5>2020年 生き残りの戦略ー世界はこう動く！ （2020/1/24）</h5>
                  <p class="pt-1 book-p">創成社</p>
                  <p class="book-p">編：外交政策センター</p>
                  <p class="book-p">編著：川上高司・石澤靖治</p>
                </div>
                <img class="card-img-top2 d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/fpc-nenkan.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">購入する</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card mb-4 shadow-sm">
                <div class="pt-2 px-4 card-writings">
                  <h5>アメリカ　情報・文化支配の終焉 （2019/12/14）</h5>
                  <p class="pt-1 book-p">PHP研究所</p>
                  <p class="book-p">著：石澤靖治</p>
                </div>
                <img class="card-img-top3 d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/79363928_1358343227673752_7579176126933630976_o.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">購入する</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card mb-4 shadow-sm">
                <div class="pt-2 px-4 card-writings">
                  <h5>オリンピックと日本人の心（単行本）（2018/6/23）</h5>
                  <p class="pt-1 book-p">内外出版株式会社</p>
                  <p class="book-p">著：鈴木くにこ</p>
                </div>
                <img class="card-img-top3 d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/61r5XiMN45L._AC_UY327_FMwebp_QL65_ .jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">購入する</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card mb-4 shadow-sm">
                <div class="pt-2 px-4 card-writings">
                  <h5>男の「定年後」を死ぬまで幸せに生きる方法 （単行本）（2018/6/15）</h5>
                  <p class="pt-1 book-p">WAVE出版</p>
                  <p class="book-p">著：蟹瀬誠一</p>
                </div>
                <img class="card-img-top1 d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/814fhgCdokL._AC_UY327_FMwebp_QL65_.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">購入する</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div> 
            <a href="<?php echo get_template_directory_uri(); ?>/book-introduction.html" data-pid="257"><img src="<?php echo get_template_directory_uri(); ?>/img/flat_02_red.png" alt="LinkIcon" class="img-icon">過去のFPCニュースはこちら</a> 
          </div>      
        </div>
      </section>
      <!-- / FPCニュース -->
      <!-- 書籍紹介 -->
      <secion>
        <div class="container">
          <h2 class="s-title mt-5">
            <a href="<?php echo get_template_directory_uri(); ?>/book-introduction.html" class="text-decoration-none"><span class="fw-bold s-title">書籍紹介</span></a> 
          </h2>
          <div class="row">
            <div id="carouselPlus" class="carousel slide multi-carousel" data-bs-ride="carousel">
              <div class="carousel-inner">       
                <div class="carousel-grid col-lg-3 col-md-4 col-sm-12">
                  <div class="card mb-4 shadow-sm">
                    <div class="pt-2 px-4 card-writings">
                      <h5>パワーポリティクスの時代―日本の外交・安全保障をどう動かすか―（2021/5/31）</h5>
                      <p class="pt-1 book-p">創成社</p>
                      <p class="book-p">編：外交政策センター</p>
                      <p class="book-p">編著：川上高司・星野俊也・石澤靖治</p>
                    </div>
                    <img class="card-img-top1 d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/40860-c.jpg" alt="Card image cap">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="btn btn-sm btn-outline-secondary" href="https://www.amazon.co.jp/2021%E5%B9%B4-%E3%83%91%E3%83%AF%E3%83%BC%E3%83%9D%E3%83%AA%E3%83%86%E3%82%A3%E3%82%AF%E3%82%B9%E3%81%AE%E6%99%82%E4%BB%A3%E2%80%95%E6%97%A5%E6%9C%AC%E3%81%AE%E5%A4%96%E4%BA%A4%E3%83%BB%E5%AE%89%E5%85%A8%E4%BF%9D%E9%9A%9C%E3%82%92%E3%81%A9%E3%81%86%E5%8B%95%E3%81%8B%E3%81%99%E3%81%8B%E2%80%95-%E5%B7%9D%E4%B8%8A%E9%AB%98%E5%8F%B8/dp/4794440863/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=2LYORSZ36JUM9&keywords=%E3%83%91%E3%83%AF%E3%83%BC%E3%83%9D%E3%83%AA%E3%83%86%E3%82%A3%E3%82%AF%E3%82%B9%E3%81%AE%E6%99%82%E4%BB%A3%E2%80%95%E6%97%A5%E6%9C%AC%E3%81%AE%E5%A4%96%E4%BA%A4%E3%83%BB%E5%AE%89%E5%85%A8%E4%BF%9D%E9%9A%9C%E3%82%92%E3%81%A9%E3%81%86%E5%8B%95%E3%81%8B%E3%81%99%E3%81%8B&qid=1641286128&s=books&sprefix=%E3%83%91%E3%83%AF%E3%83%BC%E3%83%9D%E3%83%AA%E3%83%86%E3%82%A3%E3%82%AF%E3%82%B9%E3%81%AE%E6%99%82%E4%BB%A3+%E6%97%A5%E6%9C%AC%E3%81%AE%E5%A4%96%E4%BA%A4+%E5%AE%89%E5%85%A8%E4%BF%9D%E9%9A%9C%E3%82%92%E3%81%A9%E3%81%86%E5%8B%95%E3%81%8B%E3%81%99%E3%81%8B%2Cstripbooks%2C148&sr=1-1" target="_blank" rel="noopener noreferrer">
                            購入する
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-grid col-lg-3 col-md-4 col-sm-12"> 
                  <div class="card mb-4 shadow-sm"> 
                    <div class="pt-2 px-4 card-writings">
                      <h5>日本は本当に「和の国」か （2019/6/18）</h5>
                      <p class="pt-1  book-p">PHP研究所</p>
                      <p class="book-p">著：吉木誉絵</p>
                    </div>
                    <img class="card-img-top2 d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/516djhgchyl._sy346_.jpg" alt="Card image cap">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="btn btn-sm btn-outline-secondary" href="https://www.amazon.co.jp/%E6%97%A5%E6%9C%AC%E3%81%AF%E6%9C%AC%E5%BD%93%E3%81%AB%E3%80%8C%E5%92%8C%E3%81%AE%E5%9B%BD%E3%80%8D%E3%81%8B-%E5%90%89%E6%9C%A8-%E8%AA%89%E7%B5%B5-ebook/dp/B07TWDL2B7/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=QZD6MJWPQTVM&dchild=1&keywords=%E5%90%89%E6%9C%A8%E8%AA%89%E7%B5%B5&qid=1590641063&s=books&sprefix=%E5%90%89%E6%9C%A8%2Cstripbooks%2C263&sr=1-1" target="_blank" rel="noopener noreferrer">
                            購入する
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-grid col-lg-3 col-md-4 col-sm-12">
                  <div class="card mb-4 shadow-sm">
                    <div class="pt-2 px-4 card-writings">
                      <h5>2020年 生き残りの戦略ー世界はこう動く！ （2020/1/24）</h5>
                      <p class="pt-1 book-p">創成社</p>
                      <p class="book-p">編：外交政策センター</p>
                      <p class="book-p">編著：川上高司・石澤靖治</p>
                    </div>
                    <img class="card-img-top2 d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/fpc-nenkan.jpg" alt="Card image cap">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="btn btn-sm btn-outline-secondary" href="https://www.amazon.co.jp/dp/4794440820/ref=cm_sw_r_fa_dp_U_ZnvmEb9QTBW7H?fbclid=IwAR17SbwoOkNE2sgpB-htl4c7TGdoighU4UZjxeq039hMJi2DoBnv1-kQKhY" target="_blank" rel="noopener noreferrer">
                            購入する
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-grid col-lg-3 col-md-4 col-sm-12">
                  <div class="card mb-4 shadow-sm">
                    <div class="pt-2 px-4 card-writings">
                      <h5>アメリカ　情報・文化支配の終焉 （2019/12/14）</h5>
                      <p class="pt-1 book-p">PHP研究所</p>
                      <p class="book-p">著：石澤靖治</p>
                    </div>
                    <img class="card-img-top3 d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/79363928_1358343227673752_7579176126933630976_o.jpg" alt="Card image cap">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="btn btn-sm btn-outline-secondary" href="https://www.amazon.co.jp/%E3%82%A2%E3%83%A1%E3%83%AA%E3%82%AB-%E6%83%85%E5%A0%B1%E3%83%BB%E6%96%87%E5%8C%96%E6%94%AF%E9%85%8D%E3%81%AE%E7%B5%82%E7%84%89-PHP%E6%96%B0%E6%9B%B8-%E7%9F%B3%E6%BE%A4-%E9%9D%96%E6%B2%BB/dp/4569845835/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=LVYP0ZV2KQI9&keywords=%E3%82%A2%E3%83%A1%E3%83%AA%E3%82%AB+%E6%83%85%E5%A0%B1%E3%83%BB%E6%96%87%E5%8C%96%E6%94%AF%E9%85%8D%E3%81%AE%E7%B5%82%E7%84%89&qid=1641287188&s=books&sprefix=%E3%82%A2%E3%83%A1%E3%83%AA%E3%82%AB+%E6%83%85%E5%A0%B1+%E6%96%87%E5%8C%96%E6%94%AF%E9%85%8D%E3%81%AE%E7%B5%82%E7%84%89+%2Cstripbooks%2C237&sr=1-1" target="_blank" rel="noopener noreferrer">
                            購入する
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-grid col-lg-3 col-md-4 col-sm-12">
                  <div class="card mb-4 shadow-sm">
                    <div class="pt-2 px-4 card-writings">
                      <h5>オリンピックと日本人の心（単行本）（2018/6/23）</h5>
                      <p class="pt-1 book-p">内外出版株式会社</p>
                      <p class="book-p">著：鈴木くにこ</p>
                    </div>
                    <img class="card-img-top3 d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/61r5XiMN45L._AC_UY327_FMwebp_QL65_ .jpg" alt="Card image cap">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="btn btn-sm btn-outline-secondary" href="https://www.amazon.co.jp/%E3%82%AA%E3%83%AA%E3%83%B3%E3%83%94%E3%83%83%E3%82%AF%E3%81%A8%E6%97%A5%E6%9C%AC%E4%BA%BA%E3%81%AE%E5%BF%83-%E9%88%B4%E6%9C%A8-%E3%81%8F%E3%81%AB%E3%81%93/dp/4905285895/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1QJSQXGUTNPUS&keywords=%E3%82%AA%E3%83%AA%E3%83%B3%E3%83%94%E3%83%83%E3%82%AF%E3%81%A8%E6%97%A5%E6%9C%AC%E4%BA%BA%E3%81%AE%E5%BF%83&qid=1641287223&s=books&sprefix=%E3%82%AA%E3%83%AA%E3%83%B3%E3%83%94%E3%83%83%E3%82%AF%E3%81%A8%E6%97%A5%E6%9C%AC%E4%BA%BA%E3%81%AE%E5%BF%83%2Cstripbooks%2C153&sr=1-1" target="_blank" rel="noopener noreferrer">
                            購入する
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-grid col-lg-3 col-md-4 col-sm-12">
                  <div class="card mb-4 shadow-sm">
                    <div class="pt-2 px-4 card-writings">
                      <h5>男の「定年後」を死ぬまで幸せに生きる方法 （単行本）（2018/6/15）</h5>
                      <p class="pt-1 book-p">WAVE出版</p>
                      <p class="book-p">著：蟹瀬誠一</p>
                    </div>
                    <img class="card-img-top1 d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/814fhgCdokL._AC_UY327_FMwebp_QL65_.jpg" alt="Card image cap">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="btn btn-sm btn-outline-secondary" href="https://www.amazon.co.jp/%E7%94%B7%E3%81%AE%E3%80%8C%E5%AE%9A%E5%B9%B4%E5%BE%8C%E3%80%8D%E3%82%92%E6%AD%BB%E3%81%AC%E3%81%BE%E3%81%A7%E5%B9%B8%E3%81%9B%E3%81%AB%E7%94%9F%E3%81%8D%E3%82%8B%E6%96%B9%E6%B3%95-%E8%9F%B9%E7%80%AC-%E8%AA%A0%E4%B8%80-ebook/dp/B07GP8F6Z4/ref=sr_1_3?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=2LV5Q3F2DO3P1&keywords=%E7%94%B7%E3%81%AE%E3%80%8C%E5%AE%9A%E5%B9%B4%E5%BE%8C%E3%80%8D%E3%82%92%E6%AD%BB%E3%81%AC%E3%81%BE%E3%81%A7%E5%B9%B8%E3%81%9B%E3%81%AB%E7%94%9F%E3%81%8D%E3%82%8B%E6%96%B9%E6%B3%95&qid=1641287248&s=books&sprefix=%E7%94%B7%E3%81%AE+%E5%AE%9A%E5%B9%B4%E5%BE%8C+%E3%82%92%E6%AD%BB%E3%81%AC%E3%81%BE%E3%81%A7%E5%B9%B8%E3%81%9B%E3%81%AB%E7%94%9F%E3%81%8D%E3%82%8B%E6%96%B9%E6%B3%95%2Cstripbooks%2C150&sr=1-3" target="_blank" rel="noopener noreferrer">
                            購入する
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-grid col-lg-3 col-md-4 col-sm-12">
                  <div class="card mb-4 shadow-sm">
                    <div class="pt-2 px-4 card-writings">
                      <h5>アメリカ文化事典（2018/1/25）</h5>
                      <p class="pt-1 book-p">アメリカ学会・編　丸善出版</p>
                      <p class="book-p">川上高司（編集委員）</p>
                    </div>
                    <img class="card-img-top d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/img20180211230733580141.png" alt="Card image cap">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="btn btn-sm btn-outline-secondary" href="https://www.amazon.co.jp/%E3%82%A2%E3%83%A1%E3%83%AA%E3%82%AB%E6%96%87%E5%8C%96%E4%BA%8B%E5%85%B8-%E3%82%A2%E3%83%A1%E3%83%AA%E3%82%AB%E5%AD%A6%E4%BC%9A/dp/4621302140/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=DV9Z3V3J6SOV&keywords=%E3%82%A2%E3%83%A1%E3%83%AA%E3%82%AB%E6%96%87%E5%8C%96%E4%BA%8B%E5%85%B8&qid=1641287284&s=books&sprefix=%E3%82%A2%E3%83%A1%E3%83%AA%E3%82%AB%E6%96%87%E5%8C%96%E4%BA%8B%E5%85%B8%2Cstripbooks%2C144&sr=1-1" target="_blank" rel="noopener noreferrer">
                            購入する
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-grid col-lg-3 col-md-4 col-sm-12">
                  <div class="card mb-4 shadow-sm">
                    <div class="pt-2 px-4 card-writings ">
                      <h5>核兵器の拡散　終わりなき論争　(2017/5）</h5>
                      <p class="pt-1 book-p">勁草書房</p>
                      <p class="book-p">（監訳）川上高司　</p>
                      <p class="book-p">（著）スコット・せーガン</p>
                      <p class="book-p">ケネス・ウォルツ（訳）齋藤　剛</p>
                    </div>
                    <img class="card-img-top1 d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/911QLFSFsKL._AC_UY327_FMwebp_QL65_.jpg" alt="Card image cap">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="btn btn-sm btn-outline-secondary" href="https://www.amazon.co.jp/%E6%A0%B8%E5%85%B5%E5%99%A8%E3%81%AE%E6%8B%A1%E6%95%A3-%E7%B5%82%E3%82%8F%E3%82%8A%E3%81%AA%E3%81%8D%E8%AB%96%E4%BA%89-%E3%82%B9%E3%82%B3%E3%83%83%E3%83%88-%E3%82%BB%E3%83%BC%E3%82%AC%E3%83%B3/dp/4326302577/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=HH1AD8VQVQ1M&keywords=%E6%A0%B8%E5%85%B5%E5%99%A8%E3%81%AE%E6%8B%A1%E6%95%A3+%E7%B5%82%E3%82%8F%E3%82%8A%E3%81%AA%E3%81%8D%E8%AB%96%E4%BA%89&qid=1641287512&s=books&sprefix=%E6%A0%B8%E5%85%B5%E5%99%A8%E3%81%AE%E6%8B%A1%E6%95%A3+%E7%B5%82%E3%82%8F%E3%82%8A%E3%81%AA%E3%81%8D%E8%AB%96%E4%BA%89%2Cstripbooks%2C169&sr=1-1" target="_blank" rel="noopener noreferrer">
                            購入する
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>  
                <div class="carousel-grid col-lg-3 col-md-4 col-sm-12">
                  <div class="card mb-4 shadow-sm">
                    <div class="pt-2 px-4 card-writings">
                      <h5>トランプ後の世界秩序　激変する軍事・外交・経済　(2017/4）</h5>
                      <p class="pt-1 book-p">東洋経済新報社</p>
                      <p class="book-p">共編著：石澤靖治・川上高司</p>
                    </div>
                    <img class="card-img-top1 d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/81yya1niI5L._AC_UY327_FMwebp_QL65_.jpg" alt="Card image cap">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <a class="btn btn-sm btn-outline-secondary" href="https://www.amazon.co.jp/%E3%83%88%E3%83%A9%E3%83%B3%E3%83%97%E5%BE%8C%E3%81%AE%E4%B8%96%E7%95%8C%E7%A7%A9%E5%BA%8F-%E5%B7%9D%E4%B8%8A-%E9%AB%98%E5%8F%B8/dp/4492212329/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=3H71ZIFWBHAM5&keywords=%E3%83%88%E3%83%A9%E3%83%B3%E3%83%97%E5%BE%8C%E3%81%AE%E4%B8%96%E7%95%8C%E7%A7%A9%E5%BA%8F+%E6%BF%80%E5%A4%89%E3%81%99%E3%82%8B%E8%BB%8D%E4%BA%8B%E3%83%BB%E5%A4%96%E4%BA%A4%E3%83%BB%E7%B5%8C%E6%B8%88&qid=1641287551&s=books&sprefix=%E3%83%88%E3%83%A9%E3%83%B3%E3%83%97%E5%BE%8C%E3%81%AE%E4%B8%96%E7%95%8C%E7%A7%A9%E5%BA%8F+%E6%BF%80%E5%A4%89%E3%81%99%E3%82%8B%E8%BB%8D%E4%BA%8B+%E5%A4%96%E4%BA%A4+%E7%B5%8C%E6%B8%88%2Cstripbooks%2C152&sr=1-1" target="_blank" rel="noopener noreferrer">
                          購入する
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-grid col-lg-3 col-md-4 col-sm-12">
                  <div class="card mb-4 shadow-sm">
                    <div class="pt-2 px-4 card-writings">
                      <h5>「無極化」時代の日米同盟　アメリカの対中宥和政策は日本の『危機の20年』の始まりか(2015/7)</h5>
                      <p class="pt-1 book-p">ミネルヴァ書房</p>
                      <p class="book-p">著：川上高司</p>
                    </div>
                    <img class="card-img-top1 d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/mukyokuka.jpg" alt="Card image cap">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="btn btn-sm btn-outline-secondary" href="https://www.amazon.co.jp/%E3%80%8C%E7%84%A1%E6%A5%B5%E5%8C%96%E3%80%8D%E6%99%82%E4%BB%A3%E3%81%AE%E6%97%A5%E7%B1%B3%E5%90%8C%E7%9B%9F%EF%BC%9A%E3%82%A2%E3%83%A1%E3%83%AA%E3%82%AB%E3%81%AE%E5%AF%BE%E4%B8%AD%E5%AE%A5%E5%92%8C%E6%94%BF%E7%AD%96%E3%81%AF%E6%97%A5%E6%9C%AC%E3%81%AE%E3%80%8C%E5%8D%B1%E6%A9%9F%E3%81%AE%E4%BA%8C%E3%80%87%E5%B9%B4%E3%80%8D%E3%81%AE%E5%A7%8B%E3%81%BE%E3%82%8A%E3%81%8B-%E5%B7%9D%E4%B8%8A%E9%AB%98%E5%8F%B8/dp/4623073378/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1XXFUW56B4U0I&keywords=%E3%80%8C%E7%84%A1%E6%A5%B5%E5%8C%96%E3%80%8D%E6%99%82%E4%BB%A3%E3%81%AE%E6%97%A5%E7%B1%B3%E5%90%8C%E7%9B%9F&qid=1641287823&s=books&sprefix=%E7%84%A1%E6%A5%B5%E5%8C%96+%E6%99%82%E4%BB%A3%E3%81%AE%E6%97%A5%E7%B1%B3%E5%90%8C%E7%9B%9F%2Cstripbooks%2C163&sr=1-1" target="_blank" rel="noopener noreferrer">
                            購入する
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-grid col-lg-3 col-md-4 col-sm-12">
                  <div class="card mb-4 shadow-sm">
                    <div class="pt-2 px-4 card-writings">
                      <h5>「国連における平和構築」(2011/12)（第5章）104-125頁</h5>
                      <p class="pt-1 book-p">有斐閣</p>
                      <p class="book-p">著：星野俊也</p>
                      <p class="book-p">編著：藤原帰一・大芝亮・山田哲也</p>
                    </div>
                    <img class="card-img-top1 d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/413kyvwhdbl._sx345_bo1,204,203,200_.jpg" alt="Card image cap">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="btn btn-sm btn-outline-secondary" href="https://www.amazon.co.jp/%E5%B9%B3%E5%92%8C%E6%A7%8B%E7%AF%89%E3%83%BB%E5%85%A5%E9%96%80-%E6%9C%89%E6%96%90%E9%96%A3%E3%82%B3%E3%83%B3%E3%83%91%E3%82%AF%E3%83%88-%E8%97%A4%E5%8E%9F-%E5%B8%B0%E4%B8%80/dp/4641049947/ref=sr_1_2?crid=NCHXG4WF99RS&keywords=%E5%B9%B3%E5%92%8C%E6%A7%8B%E7%AF%89%E5%85%A5%E9%96%80&qid=1641287907&s=books&sprefix=%E5%B9%B3%E5%92%8C%E6%A7%8B%E7%AF%89%2Cstripbooks%2C151&sr=1-2" target="_blank" rel="noopener noreferrer">
                            購入する
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-grid col-lg-3 col-md-4 col-sm-12">
                  <div class="card mb-4 shadow-sm">
                    <div class="pt-2 px-4 card-writings">
                      <h5>テキスト現代ジャーナリズム論(MINERVA TEXT LIBRARY)　(2008/1)</h5>
                      <p class="pt-1 book-p">ミネルヴァ書房</p>
                      <p class="book-p">著：石澤靖治</p>
                    </div>
                    <img class="card-img-top1 d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/41w12teNaEL._AC_UY327_FMwebp_QL65_.jpg" alt="Card image cap">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="btn btn-sm btn-outline-secondary" href="https://www.amazon.co.jp/%E3%83%86%E3%82%AD%E3%82%B9%E3%83%88%E7%8F%BE%E4%BB%A3%E3%82%B8%E3%83%A3%E3%83%BC%E3%83%8A%E3%83%AA%E3%82%BA%E3%83%A0%E8%AB%96-MINERVA-TEXT-LIBRARY-%E7%9F%B3%E6%BE%A4/dp/4623050327/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=R5QNLATDVBF8&keywords=%E3%83%86%E3%82%AD%E3%82%B9%E3%83%88%E7%8F%BE%E4%BB%A3%E3%82%B8%E3%83%A3%E3%83%BC%E3%83%8A%E3%83%AA%E3%82%BA%E3%83%A0%E8%AB%96&qid=1641287981&s=books&sprefix=%E3%83%86%E3%82%AD%E3%82%B9%E3%83%88%E7%8F%BE%E4%BB%A3%E3%82%B8%E3%83%A3%E3%83%BC%E3%83%8A%E3%83%AA%E3%82%BA%E3%83%A0%E8%AB%96%2Cstripbooks%2C144&sr=1-1" target="_blank" rel="noopener noreferrer">
                            購入する
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>  
              </div>
              <a class="carousel-control-prev contents-prev-next" href="#carouselPlus" role="button" data-bs-ride="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next contents-prev-next " href="#carouselPlus" role="button" data-bs-ride="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>      
            </div>
          </div>
          <div> 
            <a href="<?php echo get_template_directory_uri(); ?>/book-introduction.html" data-pid="257"><img src="<?php echo get_template_directory_uri(); ?>/img/flat_02_red.png" alt="LinkIcon" class="img-icon">過去の書籍情報はこちら</a> 
          </div>
        </div>
        <div id="lg" class="d-none d-lg-block"></div>
        <div id="md" class="d-none d-md-block d-lg-none"></div>
        <div id="sm" class="d-none d-sm-block d-md-none"></div>
        <script>
          var $origin = $("#carouselPlus .carousel-inner").prop("outerHTML");
          $(window).on( "load resize", function() {
            $( "#carouselPlus .carousel-inner" ).replaceWith( $origin );
            multiCarousel();
          });
          function multiCarousel(){
            if ( $( "#lg" ).is( ":visible" ) ) {
              do {
                $( "#carouselPlus .carousel-inner" ).children( ".carousel-grid:lt(4)" ).wrapAll( "<div class=\"carousel-item\"><div class=\"row\"></div></div>" );
                $( "#carouselPlus .carousel-inner .carousel-item:first" ).addClass("active");
              } while ( $( "#carouselPlus .carousel-inner" ).children( ".carousel-grid" ).length );
            } else if ( $( "#md" ).is( ":visible" ) ) {
              do {
                $( "#carouselPlus .carousel-inner" ).children( ".carousel-grid:lt(3)" ).wrapAll( "<div class=\"carousel-item\"><div class=\"row\"></div></div>" );
                $( "#carouselPlus .carousel-inner .carousel-item:first" ).addClass("active");
              } while ( $( "#carouselPlus .carousel-inner" ).children( ".carousel-grid" ).length );
            } else {
              do {
                $( "#carouselPlus .carousel-inner" ).children( ".carousel-grid:lt(1)" ).wrapAll( "<div class=\"carousel-item\"><div class=\"row\"></div></div>" );
                $( "#carouselPlus .carousel-inner .carousel-item:first" ).addClass("active");
              } while ( $( "#carouselPlus .carousel-inner" ).children( ".carousel-grid" ).length);
            }
          }
        </script>
        
      </secion>
      <!-- / おすすめコンテンツ -->
      <!-- 更新情報 -->
      <section class="bg-light">
        <div class="container">
          <h3 class="pt-5 mt-5 mb-4 fw-bold s-title update-information-h3">
            <a href="<?php echo get_template_directory_uri(); ?>/update-information.html" class="text-decoration-none">更新情報</a>
          </h3> 
          <table class="c-list_indent"> 
            <tbody> 
              <tr class="border-top border-bottom border-dark"> 
                <th>2021.11.28</th> 
                <td> 
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume18.pdf" data-pid="354" target="_blank" rel="noopener noreferrer">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/color_new.png" alt="LinkIcon" class="img-icon">FPCコメンタリーVol.18「中国先祖がえり」（蟹瀬誠一）
                    </a>
                  </p>
                </td> 
              </tr> 
              <tr class="border-bottom border-dark"> 
                <th>2021.11.22</th> 
                <td>
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume17.pdf" data-pid="354" target="_blank" rel="noopener noreferrer">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/color_new.png" alt="LinkIcon" class="img-icon">FPCコメンタリーVol.17「中欧から見る欧州情勢(１)：ロシアとの関係」（細田尚志）
                    </a>
                  </p>
                </td> 
              </tr> 
              <tr class="border-bottom border-dark"> 
                <th>2021.11.19</th> 
                <td>
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/column/FPC-newsletter-column14.pdf" data-pid="490" target="_blank" rel="noopener noreferrer">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/color_new.png" alt="LinkIcon" class="img-icon">コラム「急速に進行する『宇宙の混雑化』問題」（坂口滉季）
                    </a>
                  </p>
                </td> 
              </tr> 
              <tr class="border-bottom border-dark"> 
                <th>2021.10.20</th> 
                <td>
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume16.pdf" data-pid="354" target="_blank" rel="noopener noreferrer">
                      FPCコメンタリーVol.16「米カリフォルニア州知事リコール騒動とトランピズムの脅威」（蟹瀬誠一）
                    </a>
                  </p>
                </td> 
              </tr> 
              <tr class="border-bottom border-dark"> 
                <th>2021.10.03</th> 
                <td>
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume15.pdf" data-pid="354" target="_blank" rel="noopener noreferrer">
                      FPCコメンタリーVol.15「オリンピックと『多様な』『日本人』」（石澤靖治）
                    </a>
                  </p>
                </td> 
              </tr> 
              <tr class="border-bottom border-dark"> 
                <th>2021.09.11</th> 
                <td>
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/column/FPC-newsletter-column13.pdf" data-pid="490" target="_blank" rel="noopener noreferrer">
                      コラム「アフガニスタンの混乱：環状道路建設と経済・安全保障」（髙橋秀行）
                    </a>
                  </p>
                </td> 
              </tr>
              <tr class="border-bottom border-dark"> 
                <th>2021.09.10</th> 
                <td> 
                  <p>川上高司理事長のインタビュー記事「9.11同時多発テロは『神の国の民主主義の終わり』の始まりだった」が日経ビジネスに掲載されました。</p>
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/docx/20210910nikkeibp.docx" js-tracking data-download-mode="DownloadLinks" data-after-link="index.html" target="_blank" rel="noopener noreferrer">
                      →こちらから閲覧
                    </a>
                  </p>
                </td> 
              </tr>
              <tr class="border-bottom border-dark"> 
                <th>2021.03.24</th> 
                <td> 
                  <p>川上高司理事長のインタビュー記事「バイデン外交の対中強硬は言葉だけ、中国が足元見る融和への転換」が日経ビジネスに掲載されました（3月23日）</p>
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/https://business.nikkei.com/atcl/gen/19/00179/032200045/" target="_blank" rel="noopener noreferrer">
                      https://business.nikkei.com/atcl/gen/19/00179/032200045/
                    </a>
                  </p>
                </td> 
              </tr> 
              <tr class="border-bottom border-dark"> 
                <th>2020.09.25</th> 
                <td> 
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume14.pdf" data-pid="354" target="_blank" rel="noopener noreferrer">
                      FPCコメンタリーVol.14「トランプ暴露本」（蟹瀬誠一）
                    </a>
                  </p>
                </td> 
              </tr> 
              <tr class="border-bottom border-dark"> 
                <th>2020.08.17</th> 
                <td> 
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume13.pdf" data-pid="354" target="_blank" rel="noopener noreferrer">
                      FPCコメンタリーVol.13「アメリカの制裁外交－米中対立の行方－」（杉田弘毅）
                    </a>
                  </p>
                </td> 
              </tr> 
              <tr class="border-bottom border-dark"> 
                <th>2020.08.12</th> 
                <td>
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume12.pdf" data-pid="354" target="_blank" rel="noopener noreferrer">
                      FPCコメンタリーVol.12「国家安全保障会議の設立と今後の課題」（兼原信克）
                    </a>
                  </p>
                </td> 
              </tr> 
              <tr class="border-bottom border-dark"> 
                <th>2020.06.18</th> 
                <td> 
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume11.pdf" target="_blank" rel="noopener noreferrer">
                      FPCコメンタリーVol.11「北朝鮮の新型コロナウイルスとその展望」（宮本悟）（資料ページ参照）
                    </a>
                  </p>
                </td> 
              </tr> 
              <tr class="border-bottom border-dark"> 
                <th>2020.05.29</th> 
                <td>
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume10.pdf" target="_blank" rel="noopener noreferrer">
                      FPCコメンタリーVol.10「日本人の気質に由来する非常事態時の脆弱性－『空気』による支配の観点から（吉木誉絵）」（資料ページ参照）
                    </a>
                  </p>  
                </td> 
              </tr> 
              <tr class="border-bottom border-dark"> 
                <th>2020.05.19</th> 
                <td>
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume9.pdf" target="_blank" rel="noopener noreferrer">
                      FPCコメンタリーVol.9「コロナ後の世界は変わるのか？（石井貫太郎）」（資料ページ参照）
                    </a>
                  </p>
                </td> 
              </tr> 
              <tr class="border-bottom border-dark"> 
                <th>2020.05.12</th> 
                <td>
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume8.pdf" target="_blank" rel="noopener noreferrer">
                      FPCコメンタリーVol.8「再考：緊急事態法制（宇佐美正行）」（資料ページ参照）
                    </a>
                  </p>
                </td> 
              </tr> 
              <tr class="border-bottom border-dark"> 
                <th>2020.05.09</th> 
                <td>
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume7.pdf" target="_blank" rel="noopener noreferrer">
                      FPCコメンタリーVol.7「アメリカ政治ゲームとしての『経済再開』世論形成－コロナ禍で優先される私益（石澤靖治）」（資料ページ参照）
                    </a>
                  </p>
                </td> 
              </tr> 
              <tr class="border-bottom border-dark"> 
                <th>2020.04.28</th> 
                <td>
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume6.pdf" target="_blank" rel="noopener noreferrer">
                      FPCコメンタリーVol.6「中国の中・東欧諸国への浸透とそれに対する反発（細田尚志）」（資料ページ参照）
                    </a>
                  </p>
                </td> 
              </tr> 
              <tr class="border-bottom border-dark"> 
                <th>2020.04.22</th> 
                <td>
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume5.pdf" target="_blank" rel="noopener noreferrer">
                      FPCコメンタリーVol.5「新型コロナウイルスとインフォデミックの下での情報戦（山中祥三）」（資料ページ参照）
                    </a>
                    
                  </p>
                </td> 
              </tr> 
              <tr class="border-bottom border-dark"> 
                <th>2020.04.14</th> 
                <td>
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume4.pdf" target="_blank" rel="noopener noreferrer">
                      FPCコメンタリーVol.4「コロナ禍で変わる世界秩序－日本『台湾化』の恐れ－（川上高司）」（資料ページ参照）
                    </a>
                  </p>
                </td> 
              </tr> 
              <tr class="border-bottom border-dark"> 
                <th>2020.04.08</th> 
                <td>
                  <p>
                    <a href="<?php echo get_template_directory_uri(); ?>/commentary/FPC-commentary-volume3.pdf" target="_blank" rel="noopener noreferrer">
                      FPCコメンタリーVol.3「新型コロナで激化する米中宣伝合戦の焦点（石澤靖治）」（資料ページ参照）
                    </a>
                  </p>
                </td> 
              </tr> 
            </tbody> 
          </table> 
          
          <div class=" c-body c-right pt-3 pb-5"> 
            <a href="<?php echo get_template_directory_uri(); ?>/update-information.html" data-pid="257"><img src="<?php echo get_template_directory_uri(); ?>/img/flat_02_red.png" alt="LinkIcon" class="img-icon">過去の更新情報はこちら</a> 
          </div>
        </div>
      </section>
      <!-- / 更新情報 -->
      <!--  お知らせ -->
      <section>
        <div class="container">
          <h3 class="mt-5 mb-4 fw-bold s-title">
            ご案内・お知らせ
          </h3> 
          <h4 class="mb-3 fw-bold"><span>◎「FPCコメンタリー」発行のお知らせ</span></h4> 
          <p class=" c-body">
            <span>　外交政策センターでは、各専門家の方々の世界情勢分析について「FPCコメンタリー」という形で随時配信しております。期間限定で本ホームページに掲載していく予定ですので、この機会に是非ご一読ください。</span><br><span class=" d-underline"><a href="siryou.html" data-pid="354">
              <img src="<?php echo get_template_directory_uri(); ?>/img/square_gry_right.png" alt="LinkIcon" class="img-icon">こちらから閲覧できます</a>
            </span><br>
          </p> 
          <div class="row">
            <div class="col-6">
              <h4 class="mb-3 fw-bold"> 
                <div>
                  ◎<img src="<?php echo get_template_directory_uri(); ?>/img/color_new.png" alt="" class="img-icon"> 年鑑本の紹介 
                </div>
              </h4> 
              <p class=" c-body">
                <span class=" d-bold">
                  <span class=" d-large_font">「パワーポリティクスの時代－日本の外交・安全保障をどう動かすか－」</span>
                </span><br>
                <span class=" d-bold">
                  <span class="fw-bold">内容説明</span><br>
                  <span>世界はどこに向かうのか。尖閣諸島から宇宙・サイバー空間まで、危機の裏側を徹底分析！</span>
                </span>
              </p> 
            </div>
            <div class="col-6">
              <h4 style="font-family: Meiryo, 'MS PGothic', HiraKakuPro-W3, Osaka, 'MS PGothic', sans-serif; font-size: 13.3333px; background-image: url('../style/h4.png'); background-color: initial;" class=" c-small_headline"> 
                <div class="c-img c-fright  "> 
                  <img src="<?php echo get_template_directory_uri(); ?>/img/40860-c.jpg" alt="" id="imgsrc4797_1" class="img-book"> 
                </div>
              </h4>
            </div>
          </div>
          <p class=" c-body">
            <span class=" d-bold">
              <span class="fw-bold">目次</span><br>
              <span>第1部　地域別予測（トランプ現象は「熱病」だったのか；バイデン大統領にアメリカの分裂克服の秘策はあるか；「バイデンの若き懐刀」の世界観とは；「過剰な自信家」となった習近平；朝鮮半島の危機の構造　ほか）</span><br>
              <span>第2部　テーマ別予測（シャープパワー－自爆するアメリカ；先鋭化するサイバー安全保障；経済安全保障を脅かすサイバーと闇市場の動向；緊迫する尖閣諸島の最前線；スペース・ポリティクスの時代　ほか）</span><br><br>
              <span>外交政策センター【編】</span><br>
              <span>川上高司・星野俊也・石澤靖治【編著】</span><br>
              <span style="background-color:#ffffff; color:#1c1e21;">
                <a href="https://www.books-sosei.com/book/40860.html">→　こちらからご購入いただけます（外部サイト）</a>￼
              </span>
            </span>
          </p>
          <h3 class="mt-4 fw-bold"><span><span class="bindicon-pen2"></span></span>◎FPCの活動紹介</h3> 
          <p class=" c-body">※　新型コロナウイルス蔓延による現下の情勢に鑑み、しばらくの間、講演会などの活動を控えております。<br></p> 
          <h3 class="mb-5 fw-bold"><span class="bindicon-users2"></span>◎各理事の活動紹介</h3> 
        </div>
      </section>
      <!-- / お知らせ -->  
    </main>
    <?php get_footer(); ?>