<?php include '../tpl/junction-nav.php';?>
<?php include '../tpl/content.php';?>

<?php
    $track_name = 'artificial-intelligence';
?>

<main id="barba-wrapper">
  <div class="barba-container">
      <header style="background-image: url(<?=$pic_prefix.$tracks[$track_name]['pic']?>);">
          <img src="<?=$icon_prefix.$tracks[$track_name]['page_icon']; ?>"/>
        <div><h1><span style="font-weight:700;text-transform:uppercase;"><?=$tracks[$track_name]['title']; ?></span></h1></div>
      </header>

    <div class="text">
        <!--<h2 class="text-center hostedby"><span style="font-weight:700;">HOSTED</span> BY</h2>
        <div >
            <div class="col-xs-4 col-sm-4"><div class="partner-logo" style=""></div></div>
            <div class="col-xs-4 col-sm-4"><div class="partner-logo" style=""></div></div>
            <div class="col-xs-4 col-sm-4"><div class="partner-logo" style=""></div></div>
        </div>
        <div class="clear"></div>-->

        <!--<h2 class="text-center" style="margin-top:100px;"><span style="font-weight:700;">CHALLENGE</span></h2>-->

      <p style="margin-top:100px;">From bots, to personal assistants, and shopping automation, what the future holds for artificial intelligence can be described for sure with at least one word; Exciting. Our machines and devices are getting faster, more efficient and slowly learning to do things on their own. Are you ready to be part of the next tech revolution?</p>
      <div class="text-center"><div class="button" style="margin: 0 auto;"><a href="https://register.hackjunction.com" style="color: rgb(91, 200, 215);">APPLY</a></div></div>
      <?php
          include '../tpl/pagination.php';
      ?>
    </div>

    <?php
        //include '../tpl/pagination.php';
    ?>

    <!--<a class="barba-nav next" href="<?=$url_prefix.$tracks[$tracks[$track_name]['next']]['url']?>"  style="background-image: url(<?=$pic_prefix.$tracks[$tracks[$track_name]['next']]['pic']?>);"></a>
        <a class="barba-nav prev" href="<?=$url_prefix.$tracks[$tracks[$track_name]['prev']]['url']?>"  style="background-image: url(<?=$pic_prefix.$tracks[$tracks[$track_name]['prev']]['pic']?>);"></a>
    -->

  </div>
</main>

<?php include '../tpl/junction-footer.php';?>
