<?php
/*
Template Name: 投稿試し
Template Post Type: post,news
*/
?>

<?php get_template_part('templates/single','header'); ?>

  <!--aside
　→　補足説明、リンクの集い、関連など？
-->
  <main>
    <div class="top">
      <ul>
        <li>
          <!--飛べるように-->
          <a href="index.html">トップ</a>
        </li>
        <li>
          <a href="">NEWS＆TOPICS</a>
        </li>
        <li>
          <!--飛ばない-->
          <a href="">ラベンダーピンクカラーでトーンアップ。薬用美白UVジェル｜アネッサ ブライトニングUV ジェル</a>
        </li>
      </ul>
    </div>
    <h2>NEWS & TOPICS</h2>
    <time class="time"><?php the_time('Y.n.j'); ?></time>
    <article class="main-art">
      <h3><?php the_title(); ?></h3>
      <div class="hashtag">
        <ul>
          <li><a href="">#BEAUTY SQUARE</a></li>
        </ul>
        <ul>
          <li><a href="">#Products</a></li>
          <li><a href="">#Make up</a></li>
        </ul>
        <ul>
          <li><a href="">#アネッサ</a></li>
          <li><a href="">＃化粧下地</a></li>
          <li><a href="">UVケア</a></li>
          <li><a href="">＃数量限定</a></li>
        </ul>
      </div>
      <?php the_content(); ?>
    </article>

    <div class="share">
      <svg>
        <use xlink:href="#share"></use>
      </svg>
      <ul>
        <li><a href=""><svg>
              <use xlink:href="#icon-share-fb"></use>
            </svg></a></li>
        <li><a href=""><svg>
              <use xlink:href="#icon-share-tw"></use>
            </svg></a></li>
        <li><a href=""><svg>
              <use xlink:href="#icon-share-line"></use>
            </svg></a></li>
      </ul>
    </div>

    <div class="hashtag">
      <ul>
        <li><a href="">#BEAUTY SQUARE</a></li>
      </ul>
      <ul>
        <li><a href="">#Products</a></li>
        <li><a href="">#Make up</a></li>
      </ul>
      <ul>
        <li><a href="">#アネッサ</a></li>
        <li><a href="">＃化粧下地</a></li>
        <li><a href="">UVケア</a></li>
        <li><a href="">＃数量限定</a></li>
      </ul>
    </div>

    <!--ここにトップへ戻る入れるの忘れない-->
    <a>
      <div class="gotop2">
        <svg>
          <use xlink:href=#icon-arrow-L></use>
        </svg>
        <p>NEWS & TOPICS トップへ戻る</p>
      </div>
    </a>


    <div class="news">
      <h2>関連記事</h2>
      <ul>
        <li>
          <article>
            <a class="news-block news-small">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/news-yui.jpg">
              <div class="news-text">
                <h3><time>2021.05.24</time></h3>
                <p>唯一無二の輝きで満たすはいパf－万スクリームの限定キット|呉・ド・ポーボーテ ラ・クレームキット</p>
              </div>
            </a>
          </article>
        </li>
        <li>
          <article>
            <a class="news-block news-small">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/news-itaria.jpg">
              <div class="news-text">
                <h3><time>2021.05.21</time></h3>
                <p>イタリアが東洋への扉を開いた物語を語りかけ、東西の香りの融合を称賛|ドルチェ&ガッバーナ ベルベット ブラックパチュリ オードパルファム</p>
              </div>
            </a>
          </article>
        </li>
        <li>
          <article>
            <a class="news-block news-small">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/news-shimi.jpg">
              <div class="news-text">
                <h3><time>2021.05.19</time></h3>
                <p>シミをカバーしながら、美白美容液の効果。明るく透明感のある肌へ。|HAKU ボタニック サイエンス 薬用 美容液クッションコンパクト</p>
              </div>
            </a>
          </article>
        </li>
        <li>
          <article>
            <a class="news-block news-small">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/news-kisetsu.jpg">
              <div class="news-text">
                <h3><time>2021.05.18</time></h3>
                <p>季節の一瞬を閉じ込めた涼やかなボタニカルソーダ|4F SHISEIDO THE TABLES</p>
              </div>
            </a>
          </article>
        </li>
      </ul>

    </div>

<?php get_template_part('templates/recommend'); ?>
  </main>

  <?php get_footer(); ?>
