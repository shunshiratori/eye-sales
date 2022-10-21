<?php get_header(); ?>

<main class="company-profile">
  <section class="cmn-eyecatch">
    <div class="container-l">
      <div class="cmn-eyecatch__inner">
        <h2 class="cmn-eyecatch__ttl">会社概要</h2>
        <p class="cmn-eyecatch__txt">company Profile</p>
      </div>
    </div>
  </section>

  <section class="company-profile-content">
    <div class="container-m">
      <div class="company-profile-content__inner">
        <table class="company-profile-content__table">
          <tbody class="company-profile-content__tbody">
            <tr class="company-profile-content__tr">
              <th class="company-profile-content__th">会社名</th>
              <td class="company-profile-content__td">株式会社クロス・オペレーショングループ（xOperation Group, Inc.）</td>
            </tr>
            <tr class="company-profile-content__tr">
              <th class="company-profile-content__th">設 立</th>
              <td class="company-profile-content__td">2016年9月</td>
            </tr>
            <tr class="company-profile-content__tr">
              <th class="company-profile-content__th">所在地</th>
              <td class="company-profile-content__td">
                <p class="company-profile-content__txt">〒102-0083 東京都千代田区麹町 5-3-23 WeWork日テレ四谷ビル 04-103</p>
                <p class="company-profile-content__txt"><a href="<?php echo esc_url(home_url('access-map/')); ?>"
                    class="company-profile-content__link cmn-link__border" target="_blank" rel="noopener noreferrer">>
                    アクセスマップ</a></p>
              </td>
            </tr>
            <tr class="company-profile-content__tr">
              <th class="company-profile-content__th">資本金</th>
              <td class="company-profile-content__td">
                <p class="company-profile-content__txt">20,000,000円(資本準備金含む)</p>
              </td>
            </tr>
            <tr class="company-profile-content__tr">
              <th class="company-profile-content__th">株 主</th>
              <td class="company-profile-content__td">
                <p class="company-profile-content__txt">経営陣</p>
                <p class="company-profile-content__txt">DIP Labor Force Solution Fund</p>
                <p class="company-profile-content__txt">BSP第6号投資事業有限責任組合</p>
                <p class="company-profile-content__txt">株式会社ベクトル（東証PRM6058）</p>
                <p class="company-profile-content__txt">株式会社エアトリ（東証PRM6191）</p>
                <p class="company-profile-content__txt">株式会社Sun Asterisk（東証GRT4053）　他</p>
              </td>
            </tr>
            <tr class="company-profile-content__tr">
              <th class="company-profile-content__th">役 員</th>
              <td class="company-profile-content__td">
                <p class="company-profile-content__txt">代表取締役　田中亮大</p>
                <p class="company-profile-content__txt">取締役COO　紙屋類</p>
                <p class="company-profile-content__txt">取締役　三浦日出樹（ディップ㈱執行役員DX事業本部長）</p>
                <p class="company-profile-content__txt">監査役　長田大徳（弁護士）</p>
              </td>
            </tr>
            <tr class="company-profile-content__tr">
              <th class="company-profile-content__th">事業内容</th>
              <td class="company-profile-content__td">
                <p class="company-profile-content__txt">SaaS事業（デジタル営業システム「i:Sales」の開発）</p>
                <p class="company-profile-content__txt">xOperations事業（DX実現のための業務改革における伴走支援）</p>
              </td>
            </tr>
            <tr class="company-profile-content__tr">
              <th class="company-profile-content__th">連絡先</th>
              <td class="company-profile-content__td">
                <!-- <p class="company-profile-content__txt">電話番号 ： 03-4405-6609（代表）</p> -->
                <p class="company-profile-content__txt">メール ： info@eye-sales.com</p>
              </td>
            </tr>
            <tr class="company-profile-content__tr">
              <th class="company-profile-content__th">資 格</th>
              <td class="company-profile-content__td">
                <div class="company-profile-content__td-inner">
                  <div class="company-profile-content__txt-wrap">
                    <p class="company-profile-content__txt">Pマーク（17003399(02)）</p>
                    <p class="company-profile-content__txt">ISO（ISO/IEC 27001:2013&amp;JIS Q 27001:2014）</p>
                    <p class="company-profile-content__txt">登録番号「IA180202」</p>
                  </div>
                  <div class="company-profile-content__img-wrap">
                    <img src="<?php echo esc_url(get_theme_file_uri('img/company-profile/privacy.png')); ?>"
                      alt="プライバシーマーク" class="company-profile-content__img">
                    <img src="<?php echo esc_url(get_theme_file_uri('img/company-profile/iso.png')); ?>" alt="isoマーク"
                      class="company-profile-content__img">
                  </div>
                </div>
              </td>
            </tr>
            <tr class="company-profile-content__tr">
              <th class="company-profile-content__th">登録商標</th>
              <td class="company-profile-content__td">
                <p class="company-profile-content__txt">サステイナブルカンパニー（登録6342406）</p>
                <p class="company-profile-content__txt">LR（リードリレーションズ）（登録6260618）</p>
                <p class="company-profile-content__txt">LRM（登録6256068）</p>
                <p class="company-profile-content__txt">リードローテーション（登録6256069）</p>
                <p class="company-profile-content__txt">リードキーピング（登録6260681）</p>
                <p class="company-profile-content__txt">リードファインディング（登録6260680）</p>
                <p class="company-profile-content__txt">インサイドセールス（登録6290706）</p>
                <p class="company-profile-content__txt">フィールドセールス（登録5994543）</p>
                <p class="company-profile-content__txt">アナログセールス（登録6256067）</p>
                <p class="company-profile-content__txt">BRANT情報（登録6260614）</p>
                <p class="company-profile-content__txt">マーケテック（登録6256057）</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</main>

<?php get_footer('lower'); ?>
<?php get_footer(''); ?>