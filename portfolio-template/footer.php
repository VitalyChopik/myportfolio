  </main>
    <footer class="footer">
      <div class="footer__container">
        <div class="footer__block">
          <div class="footer__contacts">
            <a href="https://t.me/vitalychopik" class="banner__contacts-link telegram">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/telegram.svg" alt="" class="banner__contacts-img">
            </a>
            <a href="https://www.linkedin.com/in/vitaly-chopik-3ab6891ba/"class="banner__contacts-link linkedin">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/linkedin.svg" alt="" class="banner__contacts-img">
            </a>
            <a href="https://www.upwork.com/freelancers/~01b80e80bcc63c6b65" class="banner__contacts-link upwork">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/upwork.svg" alt="" class="banner__contacts-img">
            </a>
          </div>
          <ul class="footer__nav-list">
            <li class="footer__nav-item"><a href="#about" class="footer__nav-link">about</a></li>
            <li class="footer__nav-item"><a href="#skills" class="footer__nav-link">skills</a></li>
            <li class="footer__nav-item"><a href="#projekts" class="footer__nav-link">projekts</a></li>
            <li class="footer__nav-item"><a href="#contacts" class="footer__nav-link">contacts</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
  <?php wp_footer();?>
  <?php if( have_rows('footer__script', 'option') ): ?>
    <?php while( have_rows('footer__script', 'option') ): the_row(); ?>
        <?php the_sub_field('script'); ?>
    <?php endwhile; ?>
  <?php endif; ?>
</body>

</html>