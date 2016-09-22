<?php include '../tpl/junction-nav.php';?>
<?php include '../tpl/content.php';?>

<?php
    $track_name = 'virtual-reality';
?>

<main id="barba-wrapper">
  <div class="barba-container">
      <header style="background-image: url(<?=$pic_prefix.$tracks[$track_name]['pic']?>);">
          <img src="<?=$icon_prefix.$tracks[$track_name]['page_icon']; ?>"/>
        <div><h1 style="font-size: 51px;padding: 20px 0;"><span style="font-weight:700;text-transform:uppercase;"><?=$tracks[$track_name]['title']; ?></span></h1></div>
      </header>

    <div class="text">
        <h2 class="text-center hostedby"><span style="font-weight:700;">HOSTED</span> BY</h2>
        <div >
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm-4"><div class="partner-logo unity" style=""></div></div>
            <div class="col-md-4 col-sm-4"></div>
        </div>
        <div class="clear"></div>
        <!--<h2 class="text-center" style="margin-top:100px;"><span style="font-weight:700;">CHALLENGE</span></h2>-->
        <p>Virtual reality is red hot right now, and this track is meant for those interested in building immersive, engaging experiences for real industry applications. There’s very few industries in the world that aren’t looking at VR with lustful eyes. </p>
        <p>From fashion and sports to architecture and film, data visualisation and engineering to education and healthcare, every sector will be impacted by the rise of VR. We want to turn that hype into reality, and that’s why we’re looking for VR enthusiasts and newbies to come to Junction and build something useful with the latest and greatest in VR tech and APIs. Does that sound like you? Sign up now!</p>
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
