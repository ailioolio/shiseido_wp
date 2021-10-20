<h2 >お問い合わせフォーム</h2>
  <p class="width direction">SHISEIDO THE STOREへのお問い合わせをメールにて承ります。<br>※がついている項目は必ずご入力ください。
  </p>
  <dl class="width wrap contact_up">
      <dt class="subject require">ご連絡先<br>メールアドレス</dt>
      <dd>[email* mail id:mail class:input]
        <p class="attention">半角英数でご入力ください。</p>
        <p class="attention">メールドレスが正確でない場合、お返事を差し上げられなくなりますのでご注意ください。</p>
        <p class="ex">例：hanako@shiseido.co.jp</p>
      </dd>
      <dt class="subject require">お名前（漢字）</dt>
      <dd>
        <ul>
            <li class="kanji"><span>姓</span>[text* family-name id:family-name class:input-name akismet:author]</li>
            <li class="kanji"><span>名</span>[text* first-name id:first-name class:input-name akismet:author]</li>
        </ul>
        <p class="ex">例：資生　花子</p>
      </dd>
      <dt class="subject require">お名前（かな）</dt>
      <dd>
        <ul>
          <li class="hiragana"><span>せい</span>[text* kana-family-name id:kana-family-name class:input-name akismet:author]</li>
          <li class="hiragana"><span>めい</span>[text* kana-first-name id:kana-first-name class:input-name akismet:author]</li>
        </ul>
        <p class="ex">例：しせい　はなこ</p>
      </dd>
      <dt class="subject require">ご意見・ご感想</dt>
      <dd>[textarea* textara id:textarea class:textarea]</dd>
  </dl>
  <p class="width direction">差し支えなければ以下の欄にもご記入ください。</p>
  <dl class="width wrap contact_under">
      <dt class="subject">ご住所</dt>
      <dd>
        <dl>
          <dt>郵便番号</dt>
          <dd>[text text-44 id:adress class:small-input]
            <p class="attention">半角英数でご入力ください。</p>
            <p class="ex">例：104-8010</p>
          </dd>
          <dt>都道府県</dt>
          <dd>[select* prefecture id:pref class:small-input "" "北海道" "青森県" "岩手県" "宮城県" "秋田県" "山形県" "福島県" "茨城県" "栃木県" "群馬県" "埼玉県" "千葉県" "東京都" "神奈川県" "新潟県" "富山県" "石川県" "福井県" "山梨県" "長野県" "岐阜県" "静岡県" "愛知県" "三重県" "滋賀県" "京都府" "大阪府" "兵庫県" "奈良県" "和歌山県" "鳥取県" "島根県" "岡山県" "広島県" "山口県" "徳島県" "香川県" "愛媛県" "高知県" "福岡県" "佐賀県" "長崎県" "熊本県" "大分県" "宮崎県" "鹿児島県" "沖縄県"]</dd>
          <dt>市区郡</dt>
          <dd class="no-margin">[text text-44 id:city class:input]</dd>
          <dt>町村・番地</dt>
          <dd class="no-margin">[text text-44 id:town class:input]</dd>
          <dt>マンション、アパート　号室</dt>
          <dd class="no-margin">[text text-44 id:apart class:input]</dd>
      </dl>
    </dd>
      <dt class="subject">電話番号</dt>
      <dd>
        [text text-44 id:phone class:input]
        <p class="attention">市外局番から半角でご記入ください。</p>
        <p class="ex">例：03-0000-0000</p>
      </dd>
  </dl>
  <div class="width button">
    [submit id:submit class:submit "▸確認する"]
    <input type="reset" class="reset" value="▸リセット">
  </div>
