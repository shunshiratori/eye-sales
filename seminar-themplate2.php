<!--
Template Name: ノーコードテンプレートv2
Template Post Type: page, seminar
-->

<?php get_header(); ?>

<style type="text/css">
.telework_conference_timetable thead td {
  background: #c3272e;
}

.telework_conference_timetable tbody th {
  background: #e87e83;
}

.section_01 {
  padding: 0 0 60px !important;
}

main section {
  padding: 50px 0 !important;
}

.seminar_lp_template {
  font-size: initial !important;
}

/* button */
main .button.red {
  width: 224px;
  margin: 50px auto 50px;
  text-decoration: none;
}

main .speakers_wrap .image_wrap {
  /* margin: 0 auto; */
}

main .speakers_wrap+.speakers_wrap {
  margin-top: 0;
}

@media (max-width: 780px) {
  body .seminar_lp_template {
    font-size: 3.73333vw !important;
  }

  main .wrapper {
    padding: 0 10px;
  }

  main .button.red {
    max-width: 100%;
    padding: 0;
    height: 3em;
    width: 12em;
    font-size: 1.68rem;
  }

  main .speakers .speakers_wrap {
    padding: 50px 20px;
    grid-template-columns: repeat(1, 1fr);
    display: grid;
  }

  main .speakers .speakers_wrap .image_wrap {
    margin: 0 auto;
    width: 200px;
  }

  main .speakers .speakers_wrap .name {
    text-align: center;
    margin-top: 20px;
  }

  main .speakers .wrapper {
    grid-template-columns: repeat(1, 1fr);
  }
}
</style>

<?php
$status = get_field('css_style'); //フィールド名が「img_orientation」のフィールドを取得
if ($status == 'one') :
?>
<style>
.speakers .wrapper {
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  gap: 0px;
}

main .speakers_wrap .name {
  text-align: left;
}

main .speakers_wrap {
  display: flex;
  padding: 50px 70px;
  margin: unset;
}
</style>

<?php else : ?>
<style>
.speakers .wrapper {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 90px;
}

main .speakers .speakers_wrap .name {
  text-align: center;
  margin-top: 20px;
}

main .speakers .speakers_wrap {
  display: block;
  padding: 20px 30px;
  margin: unset;
}

main .speakers .speakers_wrap .image_wrap {
  margin: 0 auto;
  width: 200px;
}
</style>
<?php endif; ?>

<link href="<?php bloginfo('template_url'); ?>/css/seminar_single.css?<?php echo date('Ymd-Hi'); ?>" rel="stylesheet"
  type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/seminar_lp_template.css?<?php echo date('Ymd-Hi'); ?>"
  rel="stylesheet" type="text/css">


<main id="site-content" role="main">
  <div class="seminar_lp_template _wrapper">

    <section class="section_01">

      <!-- pc用アイキャッチ -->
      <div class="eyecatch_image text-center pc" id="event_banner">
        <img src="<?php the_field('seminar_fv'); ?>" alt="">
      </div>

      <!-- sp用アイキャッチ -->
      <div class="eyecatch_image text-center sp" id="event_banner">
        <img src="<?php the_field('seminar_fv_sp'); ?>" alt="">
      </div>

      <!-- button -->
      <div class="wrapper">
        <?php
        $status = get_field('form_css');
        if ($status == 'in') :
        ?>

        <div class="cmn-button cmn-button__blue">
          <a href="#contact"
            class="cmn-button__link cmn-button__link-white cmn-button__link-m cmn-button__slide cmn-button__slide-white"
            target="_blank" rel="noopener noreferrer">
            <span class="cmn-button__txt">セミナーに申し込む</span>
          </a>
        </div>

        <?php else : ?>

        <div class="cmn-button cmn-button__blue">
          <a href="<?php the_field('from_txt'); ?>"
            class="cmn-button__link cmn-button__link-white cmn-button__link-m cmn-button__slide cmn-button__slide-white"
            target="_blank" rel="noopener noreferrer">
            <span class="cmn-button__txt">セミナーに申し込む</span>
          </a>
        </div>

        <?php endif; ?>
      </div>

      <div class="wrapper">
        <div class="text">
          <p><?php the_field('seminar_text'); ?></p>
        </div>

    </section>


    <?php
    $status = get_field('osusume_none'); //フィールド名が「img_orientation」のフィールドを取得
    if ($status == 'one') :
    ?>
    <section class="recommendation">
      <div class="heading underline">
        <h1>こんな方におすすめ</h1>
      </div>

      <div class="wrapper">
        <div class="recommendation-wrapper">
          <p class="">
            <?php while (have_rows('recommendation')) : the_row(); ?>
            <?php if (get_sub_field('recommendation_list')) : ?>
            <strong>
              <img loading="lazy" width="20" height="14" class="wp-image-18573" style="width: 20.4px"
                src="https://x-opg.com/wp-content/uploads/2022/09/checkmark.svg" alt="" />
              <?php the_sub_field('recommendation_list'); ?>
            </strong>
            <br />
            <?php endif; ?>
            <?php endwhile; ?>
          </p>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- プログラム -->
    <?php
    $status = get_field('program_none'); //フィールド名が「img_orientation」のフィールドを取得
    if ($status == 'one') :
    ?>
    <section class="section_02">
      <div class="heading underline">
        <h1>プログラム</h1>
      </div>

      <div class="wrapper">

        <table class="telework_conference_timetable">
          <thead>
            <tr>
              <td colspan="2">
                <div class="d-flex"><strong>当日のトークテーマ</strong></div>
              </td>
            </tr>
          </thead>

          <tbody>
            <?php while (have_rows('program')) : the_row(); ?>
            <tr>
              <th>
                <?php the_sub_field('program_title'); ?>
              </th>
              <td>
                <?php the_sub_field('nomber_txt'); ?>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>

        </table>
      </div>
    </section>
    <?php endif; ?>


    <?php
    $status = get_field('personal_none'); //フィールド名が「img_orientation」のフィールドを取得
    if ($status == 'one') :
    ?>
    <?php if (have_rows('member_')) : ?>
    <section class="speakers">
      <div class="heading underline">
        <h1>登壇者の紹介</h1>
      </div>

      <div class="wrapper">

        <?php while (have_rows('member_')) : the_row(); ?>
        <div class="speakers_wrap">
          <div class="image_wrap">
            <img src="<?php the_sub_field('member_img'); ?>" alt="" width="200">
          </div>
          <div class="text_wrap">
            <p class="name">
              <?php the_sub_field('company_name'); ?><br>
              <?php the_sub_field('member_role'); ?><br>
              <?php the_sub_field('name'); ?>
            </p>
            <hr>
            <p>
              <?php the_sub_field('member_career'); ?>
            </p>
          </div>
        </div>
        <?php endwhile; ?>
    </section>
    <?php endif; ?>
    <?php endif; ?>


    <?php
    $status = get_field('seminar_none'); //フィールド名が「img_orientation」のフィールドを取得
    if ($status == 'one') :
    ?>
    <section class="details bgcolor">
      <div class="heading underline">
        <h1>セミナー詳細</h1>
      </div>

      <div class="wrapper">

        <?php while (have_rows('seminar_details')) : the_row(); ?>
        <div class="details_wrap">
          <dl>
            <dt>
              開催日時
            </dt>
            <dd>
              <?php the_sub_field('time'); ?>
            </dd>
          </dl>
          <dl>
            <dt>
              参加費
            </dt>
            <dd>
              <?php the_sub_field('fee'); ?>
            </dd>
          </dl>
          <dl>
            <dt>
              参加方法
            </dt>
            <dd>
              <?php the_sub_field('how_to'); ?>
            </dd>
          </dl>
          <dl>
            <dt>
              主催
            </dt>
            <dd>
              <?php the_sub_field('Detail'); ?>

            </dd>
          </dl>
          <dl>
            <dt>
              お問い合わせ
            </dt>
            <dd>
              代表電話：<a href="tel:<?php the_sub_field('tell'); ?>"><?php the_sub_field('tell'); ?></a><br
                class="sp">（祝日を除く月〜金9:00〜18:00）<br>メール：<a
                href="mailto:<?php the_sub_field('mail'); ?>"><?php the_sub_field('mail'); ?></a>
            </dd>
          </dl>

          <?php if (get_sub_field('other')) : ?>
          <dl>
            <dt>
              備考
            </dt>
            <dd>
              <?php the_sub_field('other'); ?>
            </dd>
          </dl>
          <?php else : ?>
          <?php endif; ?>
        </div>
        <?php endwhile; ?>

      </div>
    </section>
    <?php endif; ?>

    <!-- <div id="contact"></div> -->
    <!-- お申し込みフォーム -->
    <section id="contact" class="contact-form">
      <div class="heading underline">
        <h1>お申し込み</h1>
      </div>
      <div class="wrapper">

        <?php
        $status = get_field('form_css'); //フィールド名が「img_orientation」のフィールドを取得
        if ($status == 'in') :
        ?>

        <?php the_field('from_txt'); ?>

        <?php else : ?>

        <div class="wrapper" style="text-align: center;">
          お手数ですが、以下専用URLより<br class="sp">お申し込みください。
        </div>

        <div class="wrapper form-style">
          <div class="cmn-button cmn-button__blue">
            <a href="<?php the_field('from_txt'); ?>"
              class="cmn-button__link cmn-button__link-white cmn-button__link-m cmn-button__slide cmn-button__slide-white"
              target="_blank" rel="noopener noreferrer">
              <span class="cmn-button__txt">セミナーに申し込む</span>
            </a>
          </div>
        </div>

        <?php endif; ?>

      </div>
    </section>
  </div>
</main>

<?php get_footer('seminar'); ?>