<?php get_header(); ?>
    </header>
    <main>
      <section class="album  pt-3 pb-5 bg-light">
        <div class="container">
          <h2 class="mt-8 fw-bold s-title">
            <a href="<?php echo get_post_type_archive_link('director_commentary'); ?>" class="text-decoration-none"><span class="fw-bold s-title">理事による時事解説</span></a> 
          </h2>
          <div class="row">
          <div class="col-lg-3 col-md-6">
              <a href="<?php echo get_post_type_archive_link('kawakami_commentary'); ?>">
                <div class="mb-4 shadow-sm director-card">
                  <div class="pt-2 px-4 ">
                    <h5>川上高司</h5>
                  </div>
                  <img class="card-img-top d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/kawakami_img.jpg" alt="Card image cap">
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6">
              <a href="<?php echo get_post_type_archive_link('hoshino_commentary'); ?>">
                <div class="mb-4 shadow-sm director-card"> 
                  <div class="pt-2 px-4 ">
                    <h5>星野俊也</h5>
                  </div>
                  <img class="card-img-top d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/hoshino.png" alt="Card image cap">
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mb-4 shadow-sm">
                <a href="<?php echo get_post_type_archive_link('ishizawa_commentary'); ?>" >
                  <div class="mb-4 shadow-sm director-card"> 
                    <div class="pt-2 px-4">
                      <h5>石澤靖治</h5>
                    </div>
                    <img class="card-img-top d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/ishizawa.jpg" alt="Card image cap">
                  </div>
                </a>
              </div>
            </div>    
            <div class="col-lg-3 col-md-6">
              <div class="mb-4 shadow-sm">
                <a href="<?php echo get_post_type_archive_link('kanise_commentary'); ?>" >
                  <div class="mb-4 shadow-sm director-card"> 
                    <div class="pt-2 px-4">
                      <h5>蟹瀬誠一</h5>
                    </div>
                    <img class="card-img-top d-block mx-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/kanise.jpg" alt="Card image cap">
                  </div>
                </a>
              </div>
            </div>
          </div>      
        </div>
      </section> 
    </main>
    <?php get_footer(); ?>