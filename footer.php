 </div> <!-- Chiudo page-wrapper -->

  <div class="footer">
    <div class="footer-wrapper">
      <div class="footer-section">
        <div class="footer-section-title">Link Utili</div>
        <?php // footer_menu_1(); ?>
      </div>
      <div class="footer-section">
        <div class="footer-section-title">Area Personale</div>
        <?php // footer_menu_2(); ?>
      </div>
      <div class="footer-section">
        <div class="footer-section-title">Legale</div>
        <?php // footer_menu_3(); ?>
      </div>
      <div class="footer-section">
        <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" alt="">
      </div>
    </div>
  </div>

 <!-- Questa funzione di Wordpress carica tutti i tag del footer impostati da Wordpress -->
  <?php wp_footer(); ?>
  </body>
</html>
