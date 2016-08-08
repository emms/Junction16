<?php include '../tpl/junction-nav.php';?>
<?php include '../tpl/content.php';?>

<?php
    $track_name = 'iot';
?>

<main id="barba-wrapper">
  <div class="barba-container">
      <header style="background-image: url(<?=$pic_prefix.$tracks[$track_name]['pic']?>);">
          <img src="<?=$icon_prefix.$tracks[$track_name]['page_icon']; ?>"/>
        <div><h1><span style="font-weight:700;text-transform:uppercase;"><?=$tracks[$track_name]['title']; ?></span></h1></div>
      </header>

    <div class="text">
        <h2 class="text-center hostedby"><span style="font-weight:700;">HOSTED</span> BY</h2>
        <div >
            <div class="col-xs-4 col-sm-4"><div class="partner-logo intel" style=""></div></div>
            <div class="col-xs-4 col-sm-4"><div class="partner-logo upm" style=""></div></div>
            <div class="col-xs-4 col-sm-4"><div class="partner-logo arrow" style=""></div></div>
        </div>
        <div class="clear"></div>

        <!--<h2 class="text-center" style="margin-top:100px;"><span style="font-weight:700;">CHALLENGE</span></h2>-->
        <p>Everyday, we’re one step closer towards a more connected world. The cost of interconnected devices is falling fast and pretty soon anything with a power switch may be connected to the internet. From monitoring your home temperature, to automating manufacturing processes, saving up energy and environmental-friendly solutions to sensor augmented clothes, the Internet of Things is changing the way we live and do business.</p>
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
