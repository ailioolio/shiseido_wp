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
    <section class="BEAUTYSQUARE">
      <div class="floor-icon">
        <span>1-2F</span>
        <svg>
          <use xlink:href="#icon-floor-1-2"></use>
        </svg>
      </div>
      <h2>BEAUTY SQUARE
        <br><small>ビューティースクエア</small>
      </h2>
      <p class="sec-text">資生堂のさまざまなブランドをお試し、ご購入いただけます。
        <br>経験豊富なスタッフが、お客さま一人ひとりの肌に合わせてカウンセリングいたします。
      </p>
      <div class="info">
        <ul>
          <li>
            <time>2021.06.29</time>
            <a>夏のマスク蒸れによる肌悩みに|スタッフおすすめのアイテム</a>
          </li>
          <li>
            <time>2021.06.24</time>
            <a>「クレ・ド・ポー ボーテ」の美容液をご購入の方に。|特性サイズセット プレゼントのご案内</a>
          </li>
        </ul>
        <div>
          <p>VIEW MORE</p>
          <svg>
            <use xlink:href="#icon-down"></use>
          </svg>
        </div>
      </div>
      <a><img src="<?php echo get_template_directory_uri(); ?>/assets/youkoso-movie.png" alt=""></a>
    </section>

    <section class="BEAUTYSQUARE2">
      <div class="floor-icon">
        <span>2F</span>
        <svg>
          <use xlink:href="#icon-floor-2"></use>
        </svg>
      </div>
      <h2>BEAUTY SQUARE 2
        <br><small>化粧品・カウンセリング</small>
      </h2>
      <ul class="tag-list">
        <li class="shopping">SHOPPING</li>
        <li class="counseling">COUNSELING</li>
      </ul>
      <p class="sec-text">ゆったりとくつろげる環境で、一人ひとりの肌状態に合わせたスキンケア、
        <br>お顔立ちの美しさを引き立てるメイクや、フレグランスをご提案いたします。
      </p>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/beauty-square-2.jpg" alt="" class="img-big">
      <ul class="bland">
        <li>
          <p>お取り扱いブランド</p>
        </li>
      </ul>
    </section>

    <section class="BEAUTYSQUARE1">
      <div class="floor-icon">
        <span>1F</span>
        <svg>
          <use xlink:href="#icon-floor-1"></use>
        </svg>
      </div>
      <h2>BEAUTY SQUARE 1
        <br><small>化粧品</small>
      </h2>
      <ul class="tag-list">
        <li class="shopping">SHOPPING</li>
        <li class="counseling">COUNSELING</li>
      </ul>
      <p class="sec-text">資生堂の世界戦略ブランド「SHISEIDO」、
        <br>プレミアムライン「クレ・ド・ポー ボーテ」。
        <br>資生堂を代表する２つのブランドのスキンケアからメイクまでを、
        <br>ラグジュアリーな世界観の中でご体感いただけます。
      </p>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/beauty-square-1.jpg" alt="" class="img-big">
    </section>

    <section class="FAQ">
      <h2>FAQ</h2>
      <ul>
        <li>
          <h3>ラッピングについて</h3>
          <ul class="question">
            <li>
              <p>贈り物にしたいのですが、ギフト用のラッピングはしてもらえますか</p>
            </li>
            <li>
              <p>他のお店で買ったものと一緒にラッピングしてもらうことはできますか</p>
            </li>
            <li>
              <p>化粧品グッズや書籍等、 SHIESEIDO THE STORE内の別のフロアでの購入品を、一緒にラッピングしてもらうことはできますか</p>

            </li>
          </ul>
        </li>
        <li>
          <h3>商品のご購入について</h3>
          <ul class="question">
            <li>
              <p>サンプルやリーフレットを送ってもらうことはできますか</p>

            </li>
            <li>
              <p>通販はできますか</p>

            </li>
            <li>
              <p>お店で買ったものを送ってもらうことはできますか</p>

            </li>
          </ul>
        </li>
        <li>
          <h3>ポイントについて</h3>
          <ul class="question">
            <li>
              <p>ワタシプラスのポイントは付きますか？</p>

            </li>
          </ul>
        </li>
      </ul>
      <a href="" class="sonota">
        <p>その他の質問はこちらから</p>
        <svg>
          <use xlink:href=#icon-arrow></use>
        </svg>
      </a>
    </section>

    <?php get_template_part('templates/recommend'); ?>

  </main>

  <?php get_footer(); ?>
