<!--
Template Name: セミナーテンプレート
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

@media (max-width: 780px) {
  body .seminar_lp_template {
    font-size: 3.73333vw !important;
  }
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
}

main .wrapper .speakers .speakers_wrap+.speakers_wrap {
  margin-top: 0;
}
</style>
<?php endif; ?>

<link href="<?php bloginfo('template_url'); ?>/css/seminar_single.css?<?php echo date('Ymd-Hi'); ?>" rel="stylesheet"
  type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/seminar_lp_template.css?<?php echo date('Ymd-Hi'); ?>"
  rel="stylesheet" type="text/css">

<main id="site-content" role="main">

  <?php
  remove_filter('the_content', 'wpautop');
  while (have_posts()) : the_post(); // Start the Loop
  ?>
  <?php the_content(); ?>
  <?php
  endwhile; // End of the loop.
  ?>

</main>

<?php get_footer('seminar'); ?>