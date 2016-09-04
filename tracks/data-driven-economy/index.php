<?php include '../tpl/junction-nav.php';?>
<?php include '../tpl/content.php';?>

<?php
    $track_name = 'data-driven-economy';
?>

<main id="barba-wrapper">
  <div class="barba-container">
      <header style="background-image: url(<?=$pic_prefix.$tracks[$track_name]['pic']?>);">
          <img src="<?=$icon_prefix.$tracks[$track_name]['page_icon']; ?>"/>
        <div><h1 style="font-size:60px;"><span style="font-weight:700;text-transform:uppercase;"><?=$tracks[$track_name]['title']; ?></span></h1></div>
      </header>

    <div class="text">
        <h2 class="text-center hostedby">HOSTED BY</h2>
        <div >
            <div class="col-xs-4 col-sm-4"><div class="partner-logo" style=""></div></div>
            <div class="col-xs-4 col-sm-4"><div class="partner-logo nokia" style=""></div></div>
            <div class="col-xs-4 col-sm-4"><div class="partner-logo" style=""></div></div>
        </div>
        <div class="clear"></div>


        <p>Today’s sensors can get tiny enough to be sandwiched between molecules. Thus, it’s no surprise that we’re generating data every time we walk, talk or eat outside (and quite often, inside) our homes. When anonymised and aggregated, this data can be used to gather unique insights and answer questions about how crowds move, think and make decisions. This track is all about using these new streams of data to improve profitability and efficiency of businesses, and improving the user experience of their services and products.</p>
        <h2 class="text-center" style="margin-top:100px;"><span style="font-weight:700;">CHALLENGE</span></h2>
        <p>Wireless networks are continuously connecting us with our digital world wherever we are. Network data knows how people move through time, and provides a valuable source of information that can help many types of businesses improve their efficiency and profitability, as well as improve our living environment.</p>
        <p>Nokia’s “Data Driven Economy“ track will expose brand-new types of data related to crowd movements. This is provided by <a href="http://networks.nokia.com/innovation/nokia-crowd-analytics">Nokia Crowd Analytics</a>, a new data-centric service that shows where masses of people come from, how long they stay and where they are going next. This real-world dynamic data combined with other socio-economic behavior is of great value to real estate, retail, transportation, finance, marketing, and travel &amp; tourism industries.</p>
        <p>Hack participants are invited to prototype data-driven application ideas by combining people movement related datasets with other data sources, and come up with new solutions that improve everyday life. Nokia provides access to anonymized movement data, and our partners will support the hack by bringing strong data &amp; business assets as well as real life smart city expertise.</p>
        <h2 class="text-center" style="margin-top:100px;"><span style="font-weight:700;">Prizes</span></h2>
        <p>Create exciting, new data applications or use cases that utilize the aggregated, anonymized movement data together with other data sources. We expect to see applications and use cases that help to improve people’s lives and living environment, and make world a better place.</p>
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
