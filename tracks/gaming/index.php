<?php
    $track_name = 'gaming';
?>

<?php include '../tpl/junction-nav.php';?>
<?php include '../tpl/content.php';?>


<main id="barba-wrapper">
  <div class="barba-container">
    <header style="background-image: url(<?=$pic_prefix.$tracks[$track_name]['pic']?>);">
        <img src="<?=$icon_prefix.$tracks[$track_name]['page_icon']; ?>"/>
      <div><h1><span style="font-weight:700;text-transform:uppercase;"><?=$tracks[$track_name]['title']; ?></span></h1></div>
    </header>

    <div class="text">
        <h2 class="text-center hostedby" style="margin-top:100px;"><span style="font-weight:700;">HOSTED</span> BY</h2>
        <div >
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm-4"><div class="partner-logo supercell" style=""></div></div>
            <div class="col-md-4 col-sm-4"></div>
        </div>
        <div class="clear"></div>
        <!--<h2 class="text-center" style="margin-top:100px;"><span style="font-weight:700;">CHALLENGE</span></h2>-->
        <p>Do you love making games? Then a Game Jam is exactly what you need. A Game Jam is about bringing together passionate game developers to design, plan, and create games that are engaging and addictive. Simple and fun gameplay is key.</p>
        <p>Want to spend a weekend creating a game with other awesome people? Apply now!</p>
        <div class="text-center"><div class="button" style="margin: 0 auto;"><a href="https://register.hackjunction.com" style="color: rgb(91, 200, 215);">APPLY</a></div></div>
        <?php
        include '../tpl/pagination.php';
         ?>

    </div>
<!--
    <a class="barba-nav next" href="<?=$url_prefix.$tracks[$tracks[$track_name]['next']]['url']?>"  style="background-image: url(<?=$pic_prefix.$tracks[$tracks[$track_name]['next']]['pic']?>);"><?=$tracks[$tracks[$track_name]['next']]['title']?></a>
    <a class="barba-nav prev" href="<?=$url_prefix.$tracks[$tracks[$track_name]['prev']]['url']?>"  style="background-image: url(<?=$pic_prefix.$tracks[$tracks[$track_name]['prev']]['pic']?>);"><?=$tracks[$tracks[$track_name]['prev']]['title']?></a>
-->



    <?php
    //include '../tpl/pagination.php';
     ?>

  </div>
</main>

<?php include '../tpl/junction-footer.php';?>
