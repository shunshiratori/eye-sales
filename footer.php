        <!-- footer start -->
        <footer class="footer">
          <section class="footer-top">
            <div class="container-l">
              <div class="footer-top__inner">
                <div class="footer-top__left">
                  <a href="<?php echo home_url(); ?>" class="footer-top__link">
                    <img src="<?php echo esc_url(get_theme_file_uri('img/common/footer-logo.png')); ?>" alt=""
                      class="footer-top__img">
                  </a>
                </div>
                <div class="footer-top__right">
                  <ul class="footer-top__right-list">
                    <li class="footer-top__right-item">
                      <a tabindex="-1" class="footer-top__right-link cmn-button__slide cmn-button__slide-blue">
                        <span class="cmn-button__txt">お役立ち資料</span>
                      </a>
                    </li>
                    <li class="footer-top__right-item">
                      <a href="<?php echo esc_url(home_url('seminar/')); ?>"
                        class="footer-top__right-link cmn-button__slide cmn-button__slide-blue">
                        <span class="cmn-button__txt">セミナー情報</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section class="footer-bottom">
            <div class="container-l">
              <ul class="footer-bottom__inner">
                <li class="footer-bottom__list">
                  <div class="footer-bottom__item">
                    <a href="<?php echo esc_url(home_url('service/')); ?>" class="cmn-link__border">事業説明</a>
                  </div>
                  <div class="footer-bottom__item">
                    <a tabindex="-1" class="cmn-link__border">導入事例</a>
                  </div>
                  <!-- <div class="footer-bottom__item">
                    <a tabindex="-1" class="cmn-link__border">知見</a>
                  </div> -->
                  <div class="footer-bottom__item">
                    <a href="<?php echo esc_url(home_url('corporate/')); ?>" class="cmn-link__border">会社案内</a>
                  </div>

                  <div class="footer-bottom__item">
                    <a tabindex="-1" class="cmn-link__border">お役立ち資料</a>
                  </div>
                </li>

                <li class="footer-bottom__list">

                  <div class="footer-bottom__item">
                    <a href="<?php echo esc_url(home_url('seminar/')); ?>" class="cmn-link__border">セミナー情報</a>
                  </div>

                  <div class="footer-bottom__item">
                    <a href="https://www.wantedly.com/companies/x-opg" class="cmn-link__border" target="_blank"
                      rel="noopener noreferrer">採用情報</a>
                  </div>

                  <div class="footer-bottom__item">
                    <a href="https://www.wantedly.com/companies/x-opg" class="cmn-link__border" target="_blank"
                      rel="noopener noreferrer">コンサルタント登録</a>
                  </div>

                  <div class="footer-bottom__item">
                    <a href="https://x-opg.com/our_policy/" class="cmn-link__border">商談ポリシー</a>
                  </div>
                </li>

                <li class="footer-bottom__list">
                  <div class="footer-bottom__item">
                    <a href="https://x-opg.com/privacy/" class="cmn-link__border">個人情報保護方針</a>
                  </div>
                  <div class="footer-bottom__item">
                    <a href="https://x-opg.com/law/" class="cmn-link__border">特定商取引法に基づく表記</a>
                  </div>
                </li>
              </ul>
            </div>
          </section>
          <section class="footer-copy">
            <div class="container-l">
              <p class="footer-copy__txt">Copyright© xOperation Group. All Rights Reserved.</p>
            </div>
          </section>
        </footer>
        <!-- footer end -->
        <?php wp_footer(); ?>
        </body>

        </html>