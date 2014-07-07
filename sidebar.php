<div class="span4 sidebar">
  <div class="sidebar-item">
    <div class="share">
      <h2>
        Share with the world
      </h2>
      <!-- AddThis Button BEGIN -->
      <div class="addthis_toolbox addthis_default_style addthis_32x32_style" style="display: inline-block;">
        <a class="addthis_button_facebook"></a>
        <a class="addthis_button_twitter"></a>
        <a class="addthis_button_google_plusone_share"></a>
        <a class="addthis_button_compact"></a>

      </div>
      <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
      <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4feb3b104c6a1370"></script>
      <!-- AddThis Button END -->
    </div>
    <div class="sidebar-item">
      <div class="bio-sidebar">
        <h2>
          About Paulo Rosado
        </h2>
        <img alt="Paulo Rosado, CEO of OutSystems" src="<?php echo get_template_directory_uri(); ?>/img/paulo-rosado.jpg" />
        <p>
          Besides my daily job as CEO of OutSystems,
          <br />
          I occasionally help entrepreneurs grow their businesses and avoid obvious mistakes.
        </p>
        <ul>
          <li>&nbsp;</li>
          <li>&nbsp;</li>
        </ul>
      </div>
    </div>
    <div class="sidebar-item">
      <div class="more">
        <h2>Featured articles</h2>
        <ul>
          <?php
          $catquery = new WP_Query( '&posts_per_page=7' );
          while ( $catquery->have_posts() ) : $catquery->the_post();
          ?>

          <li>
            <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
          </li>

        <?php endwhile; ?>
      </ul>
    </div>
  </div>
  <div class="sidebar-end">
    &nbsp;
  </div>
</div>
</div>
