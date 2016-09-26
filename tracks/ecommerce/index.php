<?php include '../tpl/junction-nav.php';?>
<?php include '../tpl/content.php';?>

<?php
    $track_name = 'ecommerce';
?>

<main id="barba-wrapper">
  <div class="barba-container">
      <header style="background-image: url(<?=$pic_prefix.$tracks[$track_name]['pic']?>);">
          <img src="<?=$icon_prefix.$tracks[$track_name]['page_icon']; ?>"/>
        <div><h1 style="font-size:60px;"><span style="font-weight:700;text-transform:uppercase;"><?=$tracks[$track_name]['title']; ?></span></h1></div>
      </header>

      <div class="text">
          <h2 class="text-center hostedby"><span style="font-weight:700;">HOSTED</span> BY</h2>
          <div>
              <div class="col-md-3 col-sm-3 col-lg3"></div>
              <div class="col-md-2 col-sm-2 col-lg2"></div>
              <div class="col-md-2 col-sm-2 col-lg2"><div class="partner-logo zalando" style=""></div></div>
              <div class="col-md-2 col-sm-2 col-lg2"></div>
              <div class="col-md-3 col-sm-3 col-lg3"></div>
          </div>
          <div class="clear"></div>
          <h2 class="text-center"><span style="font-weight:700;">TRACK</span> SUMMARY</h2>
          <!--<h2 class="text-center" style="margin-top:100px;"><span style="font-weight:700;">CHALLENGE</span></h2>-->
          <p>Apple Pay. Google Wallet. New methods of buying products are constantly emerging and the gap between online and brick and mortar sales is decreasing. Businesses are constantly looking for innovations both at the point of sale and all along the sales funnel. How can e-commerce penetrate mobile? How can retail get smarter? Apply now!</p>
          <div class="text-center"><div class="button" style="margin: 0 auto;"><a href="https://register.hackjunction.com" style="color: rgb(91, 200, 215);">APPLY</a></div></div>
          <h2 class="text-center">CHALLENGES</h2>
             <div class="challenge-logo">
                <div class="col-md-4 col-sm-4"></div>
                 <div class="col-md-4 col-sm-4"><div class="partner-logo zalando" style="height: 100px; padding-bottom: 0px;"></div></div>
                 <div class="col-md-4 col-sm-4"></div>
             </div>
             <div class="clear"></div>
             <p class="text-center" style="margin-top: 20px">Fashion as a service</p>
             <h4 class="challenge-info zalando-info text-center" style="padding-bottom: 50px;">READ MORE</h4>

          <!-- <h2 class="text-center hostedby" style="margin-bottom: 50px;">DEVELOPER TOOLKIT</h2> -->
          <!-- <div class="text-center"><div class="button" style="margin-top: 100px;"><a href="https://register.hackjunction.com" style="color: rgb(91, 200, 215);">APPLY</a></div></div> -->
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

  <!-- zalando-modal -->
  <div class="modal fade" id="zalando-info-modal" tabindex="-1" role="dialog" aria-labelledby="trackmodal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <i class="fa fa-times-circle close-modal"></i>
          <div class="challenge-info zalando"></div>
          <h2 class="track-heading">Zalando: Fashion as a service</h2>
          <h4>Challenge</h4>
          <p>The call is out there for all you creative and talented hackers to develop something amazing over the Junction weekend! Work with our <a href="https://github.com/zalando/shop-api-documentation">Shop API</a>,  which gives you access to the Zalando web shop and allows a number of operations, such as searching for articles, categories, filters or brands on offer, and access to details about them. Use your imagination and combine it with some other available services to create a unique experience.</p>
          <p>Some examples we’ve seen in the past are: combining weather API & Zalando Shop API to provide outfits for different types of weather, or the creation of Fashion Tinder. This time you could e.g. use APIs from the other tracks together with ours, or just go wild and create something (fashion) e-commerce related! For inspiration, check <a href="https://annual-report.zalando.com/2015/#en/platform">here</a> to see where we are taking the future of fashion retail.</p>
          <p>Details of our <a href="https://api.zalando.com/">API</a> are available here. You will find more info on demos and documentation.</p>
          <h4>Criteria for winning</h4>
          <p>The use of Zalando Shop API, imagination, and creativity!</p>
          <!--<h4>Prize</h4>
          <p>
            PLAY:5 and PLAY:1 Sonos Wireless Speakers, enjoy the purest and most precise sound experience!
          </p>-->
          <div class="text-center"><div class="button" style="margin: 0 auto;"><a href="https://register.hackjunction.com" style="color: rgb(91, 200, 215);">APPLY</a></div></div>

      </div>
    </div>
 </div>

</main>

<?php include '../tpl/junction-footer.php';?>
