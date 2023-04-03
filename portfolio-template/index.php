<?php get_header();?> 
<section class="banner banner__page">
        <div class="banner__container">
          <div class="banner__contacts">
            <a href="https://t.me/vitalychopik" class="banner__contacts-link telegram">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/telegram.svg" alt="" class="banner__contacts-img">
            </a>
            <a href="https://www.linkedin.com/in/vitaly-chopik-3ab6891ba/" class="banner__contacts-link linkedin">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/linkedin.svg" alt="" class="banner__contacts-img">
            </a>
            <a href="https://www.upwork.com/freelancers/~01b80e80bcc63c6b65" class="banner__contacts-link upwork">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/upwork.svg" alt="" class="banner__contacts-img">
            </a>
          </div>
          <ul class="banner__nav-list" >
            <li class="banner__nav-item"><a href="#skills" class="banner__nav-link">&lt;skills&gt;</a></li>
            <li class="banner__nav-item"><a href="#projekts" class="banner__nav-link">&lt;projekts&gt;</a></li>
            <li class="banner__nav-item"><a href="#contacts" class="banner__nav-link">&lt;contacts&gt;</a></li>
          </ul>
          <h1 class="banner__title"><span class="banner__status">Full-stack</span> <span class="banner__position">web
              developer</span> <span class="banner__name">Vitaly Chopik</span></h1>
        </div>
        <picture>
          <source srcset="<?php echo get_template_directory_uri();?>/images/items/item-1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/images/items/item-1.png" alt=""
            class="banner__item item-1">
        </picture>
        <picture>
          <source srcset="<?php echo get_template_directory_uri();?>/images/items/item-2.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/images/items/item-2.png" alt=""
            class="banner__item item-2">
        </picture>
        <picture>
          <source srcset="<?php echo get_template_directory_uri();?>/images/items/item-3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/images/items/item-3.png" alt=""
            class="banner__item item-3">
        </picture>
        <picture>
          <source srcset="<?php echo get_template_directory_uri();?>/images/items/item-4.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/images/items/item-4.png" alt=""
            class="banner__item item-4">
        </picture>
        <picture>
          <source srcset="<?php echo get_template_directory_uri();?>/images/items/item-5.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/images/items/item-5.png" alt=""
            class="banner__item item-5" data-prlx-mouse>
        </picture>
      </section>
      <section class="about about__page" id="about">
        <div class="about__container">
          <div class="about__block">
            <h2 class="section__title about__title">About me</h2>
            <div class="about__picture" >
              <picture>
                <source srcset="<?php echo get_template_directory_uri();?>/images/about/about__main.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/images/about/about__main.png"
                  alt="" class="about__image" data-prlx-mouse>
              </picture>
              <picture>
                <source srcset="<?php echo get_template_directory_uri();?>/images/about/Sphere.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/images/about/Sphere.png" alt=""
                  class="about__item">
              </picture>
            </div>
            <div class="about__text" ><img src="<?php echo get_template_directory_uri();?>/images/icons/arrow.svg" alt=""
                class="about__arrow">
                <?php the_content();?>
                <a href="#contacts" class="about__button">Contact me</a>
            </div>
          </div>
        </div>
      </section>
      <?php if( have_rows('skills') ): ?>
          <?php while( have_rows('skills') ): the_row(); ?>
          <section class="skills skills__page" id="skills">
            <div class="skills__container">
              <h2 class="section__title skills__title"><?php the_sub_field('title')?></h2>
              <div class="skills__block">
              <?php if( have_rows('repeater_left') ): ?>
                <div class="skills__box">
                <?php while( have_rows('repeater_left') ): the_row(); ?>
                  <div class="skills__item">
                    <span class="skills__name"><?php the_sub_field('skill_title')?></span>
                    <div class="skills__circles">
                      <?php for ($i = 1; $i <= 10; $i++) {
                            if($i<=get_sub_field('skill_level')){
                              ?>
                              <span class="skills__circle active"></span>
                              <?php
                            } else {
                            ?>
                              <span class="skills__circle"></span>
                            <?php
                            }
                        }?>
                    </div>
                  </div>
                <?php endwhile; ?>
                </div>
              <?php endif; ?>
              <?php if( have_rows('repeater_right') ): ?>
                <div class="skills__box">
                <?php while( have_rows('repeater_right') ): the_row(); ?>
                  <div class="skills__item">
                    <span class="skills__name"><?php the_sub_field('skill_title')?></span>
                    <div class="skills__circles">
                      <?php for ($i = 1; $i <= 10; $i++) {
                            if($i<=get_sub_field('skill_level')){
                              ?>
                              <span class="skills__circle active"></span>
                              <?php
                            } else {
                            ?>
                              <span class="skills__circle"></span>
                            <?php
                            }
                        }?>
                    </div>
                  </div>
                <?php endwhile; ?>
                </div>
              <?php endif; ?>
              </div>
            </div>
          </section>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php		
          global $post;

          $query = new WP_Query( [
            'posts_per_page' => -1,
          ] );

          if ( $query->have_posts() ) {
            ?>
            <section class="project project__page" id="projekts">
              <div class="project__container">
                <h2 class="section__title project__title">My projects</h2>
                <div class="project__block">
            <?php
            while ( $query->have_posts() ) {
              $query->the_post();
              ?>
              <div class="project__element" >
                <div class="project__box">
                  <div class="project__box-image" style="background-color:<?php the_field('background');?>">
                    <a href="<?php the_field('project__link')?>" class="project__box-arrow">
                      <img src="<?php echo get_template_directory_uri();?>/images/icons/project__arrow.svg" alt="">
                    </a>
                    <?php the_post_thumbnail('full', ['class' => "project__box-thumbnail"]);?>
                  </div>
                  <a href="<?php the_field('project__link')?>" class="project__box-title"><?php the_title()?></a>
                  <p class="project__box-excerpt"><?php the_excerpt();?></p>
                </div>
              </div>
              <?php 
            }
            ?>
              </div>
            </div>
          </section>
            <?php
          }

          wp_reset_postdata(); // Сбрасываем $post
        ?>



      <section class="form form__page" id="contacts">
        <div class="form__container">
          <h2 class="section__title form__title">Contact me</h2>
          <div class="form__block">
            <?php echo do_shortcode('[contact-form-7 id="61" title="contact form"]')?>
          </div>
        </div>
      </section>
<?php get_footer();?>