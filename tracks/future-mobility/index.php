<?php include '../tpl/junction-nav.php';?>
<?php include '../tpl/content.php';?>

<?php
    $track_name = 'future-mobility';
?>

<main id="barba-wrapper">
  <div class="barba-container">
      <header style="background-image: url(<?=$pic_prefix.$tracks[$track_name]['pic']?>);">
          <img src="<?=$icon_prefix.$tracks[$track_name]['page_icon']; ?>"/>
        <div><h1 style="font-size: 70px;"><span style="font-weight:700;text-transform:uppercase;"><?=$tracks[$track_name]['title']; ?></span></h1></div>
      </header>

    <div class="text">
        <h2 class="text-center hostedby">HOSTED BY</h2>
        <div >
            <div class="col-xs-4 col-sm-4"><div class="partner-logo" style=""></div></div>
            <div class="col-xs-4 col-sm-4"><div class="partner-logo embers" style=""></div></div>
            <div class="col-xs-4 col-sm-4"><div class="partner-logo" style=""></div></div>
        </div>
        <div class="clear"></div>
      <p>From self driving cars to smart cities software and sensor technology is changing the way we move around. Hate traffic? Us too. Hate pollution? Same. Hate finding a parking spot? Yep. Join the Future Mobility track and solve these problems. Apply now!</p>
      <h2 class="text-center" style="margin-top:100px;"><span style="font-weight:700;">CHALLENGE</span></h2>
      <p>Connect your devices and applications to your city! EMBERS paves the way for innovative solutions that answer the mobility challenges of the future. Using the Mobility Platform and its open APIs, any developer is capable of seamlessly connecting the physical world with new services and applications. Help people planning their journeys and moving around with their smartphone, improve the quality of life or enrich the context around us with more information and events from new devices; the possibilities are infinite!</p>
      <p>Participants will have access to the EMBERS infrastructure which consists of hundreds of sensor nodes, tools for sensor emulation, real city data and historical data sets. All available data both EMBERS or your own can be feed to the platform, which provides the information through open and well documented APIs.</p>
      <p>Integration of data is the key to success! Show us how you would use EMBERS infrastructure to connect the physical world with innovative services and applications that improves the mobility experiences of people in smart cities, improving their quality of life.</p>
      <p>EMBERS is a European project that aims to stimulate the smart city ecosystem in Europa. While providing a IoT middleware with open APIs, we’re seeking for developers that reveal the strong potential of the platform and integrate new data sets as well as to design innovative applications and solutions.</p>
      <p>Judging criteria for winning the prize are the creativity of using the EMBERS APIs to solve technical complex challenges that  addressing the mobility and transport sector.</p>
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
