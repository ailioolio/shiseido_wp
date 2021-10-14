<?php get_header(); ?>

    <main>
        <!-- <div class="top"> -->
        <section class="main-top">
            <article class="news width">
                <ul>
                  <?php
                    if (have_posts()):
                      query_posts('posts_per_page=6');
                      while(have_posts()):the_post();
                  ?>
                  <?php if(($wp_query->current_post)<2): ?>
                    <li>
                        <article>
                            <a class="news-block news-big" href="<?php echo get_permalink(); ?>">
                                <?php if(has_post_thumbnail()): ?>　
                                  <?php the_post_thumbnail('thumbnail'); ?>
                                <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/news.logo.jpg">
                                <?php endif; ?>
                                <div class="news-text">
                                    <h3><time><?php the_time('Y.n.j'); ?></time></h3>
                                    <p><?php the_title(); ?></p>
                                </div>
                            </a>
                        </article>
                    </li>
                    <?php else: ?>
                    <li>
                        <article>
                            <a class="news-block news-small" href="<?php echo get_permalink(); ?>">
                                <?php if(has_post_thumbnail()): ?>　
                                  <?php the_post_thumbnail('thumbnail'); ?>
                                <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/news.logo.jpg">
                                <?php endif; ?>
                                <div class="news-text">
                                    <h3><time><?php the_time('Y.n.j'); ?></time></h3>
                                    <p><?php the_title(); ?></p>
                                </div>
                            </a>
                        </article>
                    </li>
                    <?php
                      endif;
                      endwhile;
                      endif;
                    ?>
                </ul>
                <a class="more">

                    <p>MORE</p>
                    <svg>
                        <use xlink:href=#icon-arrow></use>
                    </svg>

                </a>
            </article>

            <!-- </div> -->

            <!-- <div class="naka"> -->
            <a class="korona">※新型肺炎に関する店頭対応、<br>予約受付休止および営業時間短縮について</a>
            <ul class="naka-img width">
                <li><a><img src="<?php echo get_template_directory_uri(); ?>/assets/window-gallery.png"></a></li>
                <li><a><img src="<?php echo get_template_directory_uri(); ?>/assets/youkoso-movie.png"></a></li>
                <li><a><img src="<?php echo get_template_directory_uri(); ?>/assets/photo-gallery.png"></a></li>
            </ul>
            <!-- </div> -->
        </section>
        <section class="service">
          <h2>SERVICE</h2>
          <?php 
          $services = [
            [//4f
              ['PERSONAL BEAUTY SESSION','/assets/personal-beauty-session.jpg','ビューティカウンセラーによる、個室での美容レッスン。機器を使った分析をもとに、美しくなるためのテクニックを学びながら、 身につけることができます。',
              ['<li class="lesson">LESSON</li>','<li class="counseling">COUNSELING</li>']],
              ['SHISEIDO THE TABLES','/assets/shiseido-the-tables.jpg','食や知を通し、内側からの美を探求するカフェ＆イベントスペース。資生堂の精神を結集し、お客さまと一緒につくるコミュニティエリアです。',
              ['<li class="event">EVENT & SEMINAR</li>','<li class="shopping">SHOPPING</li>','<li class="cafe">CAFE</li>']]
            ],
            [//3F
              ['BEAUTY BOOST BAR <br>& PHOTO STUDIO','/assets/beauty-boost-bar.jpg','ファッションショーでも活躍するアーティストが、お客さまの魅力を引き出すスタイルをご提案。ヘアメイクと合わせて、プロのフォトグラファーによる撮影も可能です。',
              ['<li class="hair">HAIR & MAKEUP</li>','<li class="photo">PHOTO STUDIO</li>']],
              ['ESPACE CLÉ DE PEAU BEAUTÉ','/assets/espace.jpg','クレ・ド・ポーボーテを使ったオールハンドのプレミアムエステティックサロン。心と体を解放する至福の時間をお過ごしください。',
              ['<li class="photo">PHOTO STUDIO</li>','<li class="counseling">COUNSELING</li>']]
            ],
            [//2F
              ['BEAUTY SQUARE 2','/assets/beauty-square-2.jpg','資生堂の化粧品ラインナップをお試し・ご購入いただけるフロア。肌チェックやタッチアップなど、経験豊富なスタッフがご対応します。',
              ['<li class="shopping">SHOPPING</li>','<li class="counseling">COUNSELING</li>']],
              ['BEAUTY UP CABIN','/assets/beauty-up-cabin.jpg','メンバープログラム会員さま限定。肌分析とカウンセリングで、より本格的な施術を受けられるプライベートサロンです。',
              ['<li class="esthetic">ESTHETIC</li>','<li class="counseling">COUNSELING</li>']]
            ],
            [//1F
              ['BEAUTY SQUARE 1','/assets/beauty-square-1.jpg','資生堂を代表するブランド「SHISEIDO」「クレ・ド・ポー ボーテ」。２つのプレミアムラインをお試し、ご購入いただけます。',
              ['<li class="shopping">SHOPPING</li>','<li class="counseling">COUNSELING</li>']],
              ['STYLING BAR','/assets/styling-bar.jpg','３階BEAUTY BOOST BAR & PHOTO STUDIOのメニューを一部体験できるカウンター。サロン専用のヘア商品「資生堂プロフェッショナル」のご紹介もしています。',
              ['<li class="hair">HAIR & MAKEUP</li>','<li class="counseling">COUNSELING</li>']]
            ]
            ]; ?>

          <ul>
            <?php foreach ($services as $index1 => $service) : ?>
              <span class="floor width"><?php  //ここに階数?></span>
              <ul>
                <?php $floor_count = count($service); //階ごとの個数のカウント, forだったら必要になってくる ?>
                <?php foreach ($service as $index2 => $test1) : ?>
                  <?php $tags = count($test1[3]); ?>
                  <li class="floor-li width">
                    <article class="intro">
                      <h3><?php echo $test1[0]; ?></h3>
                      <ul>
                        <?php for ($test2 = 0; $test2 < $tags; $test2++) : ?>
                          <?php echo $test1[3][$test2]; ?>
                        <?php endfor; ?>
                      </ul>
                      <img src="<?php echo get_template_directory_uri(); echo $test1[1]; ?>">
                      <p class="intro-text"><?php echo $test1[2]; ?></p>
                      <a class="intro-detail">
                        <p>詳しく見る</p>
                          <svg>
                            <use xlink:href=#icon-arrow></use>
                          </svg>
                      </a>
                    </article>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endforeach; ?>
          </ul>
        </section>
    </main>
    
    <?php get_footer(); ?>
