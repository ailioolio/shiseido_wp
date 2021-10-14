<?php 
/**
 * Template Name: 1カラムテンプレート
 * Description: 1カラムレイアウト用のテンプレート
 */
?>

<?php get_template_part('templates/page','header'); ?>

  <main>

    <div class="top">
      <ul>
        <li>
          <a href="">トップ</a>
        </li>
        <li>
          <a href="">2F,1F ビューティースクエア</a>
        </li>
      </ul>
    </div>

    <!--メインのところここから-->
    <section>
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
    </section>

    <?php get_template_part('templates/recommend'); ?>

  </main>

  <?php get_footer(); ?>
