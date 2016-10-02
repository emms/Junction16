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
            <div class="col-md-2 col-sm-2"><div class="partner-logo unity" style=""></div></div>
            <div class="col-md-2 col-sm-2"><div class="partner-logo deezer" style=""></div></div>
            <div class="col-md-4 col-sm-4"></div>
        </div>
        <div class="clear"></div>
        <h2 class="text-center"><span style="font-weight:700;">TRACK</span> SUMMARY</h2>
        <!--<h2 class="text-center" style="margin-top:100px;"><span style="font-weight:700;">CHALLENGE</span></h2>-->
        <p>Virtual reality is red hot right now, and this track is meant for those interested in building immersive, engaging experiences for real industry applications. There’s very few industries in the world that aren’t looking at VR with lustful eyes. </p>
        <p>From fashion and sports to architecture and film, data visualisation and engineering to education and healthcare, every sector will be impacted by the rise of VR. We want to turn that hype into reality, and that’s why we’re looking for VR enthusiasts and newbies to come to Junction and build something useful with the latest and greatest in VR tech and APIs. Does that sound like you? Sign up now!</p>
        <div class="text-center"><div class="button" style="margin: 0 auto;"><a href="https://register.hackjunction.com" style="color: rgb(91, 200, 215);">APPLY</a></div></div>
        <h2 class="text-center">CHALLENGES</h2>
           <div class="challenge-logo">
            <div class="col-md-4 col-sm-4"></div>
               <div class="col-md-4 col-sm-4"><div class="partner-logo unity" style="height: 150px; padding-bottom: 0px;"></div></div>
               <div class="col-md-4 col-sm-4"></div>
           </div>
           <div class="clear"></div>
           <p class="text-center" style="margin-top: 0px">Unexpected Virtuality</p>
           <h4 class="challenge-info unity-info text-center" style="padding-bottom: 50px;">READ MORE</h4>

           <div >
               <div class="col-md-4 col-sm-4"></div>
               <div class="col-md-4 col-sm-4"><div class="partner-logo deezer" style="height: 150px; padding-bottom: 0px;"></div></div>
               <div class="col-md-4 col-sm-4"></div>
           </div>
           <div class="clear"></div>
           <p class="text-center" style="margin-top: 0px">New Music Realities and Experiences</p>
           <h4 class="challenge-info deezer-info text-center">READ MORE</h4>

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

   <!-- unity-modal -->
   <div class="modal fade" id="unity-info-modal" tabindex="-1" role="dialog" aria-labelledby="trackmodal">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">
           <i class="fa fa-times-circle close-modal"></i>
           <div class="challenge-info unity"></div>
           <h2 class="track-heading">Unity: Unexpected virtuality</h2>
           <h4>Challenge</h4>
           <p>
              What hasn't the world of VR seen yet?<br /><br />
              With over a billion installs per month, Unity touches gamers and non-gamers alike. As well as video games, our software is used in industries as diverse as medicine, visualisation and shopping -democratizing game development while solving hard problems and enabling success for a huge range of developers worldwide. We dream big!<br /><br />
              We have seen the basics of VR already. Now it’s time to move beyond that and show how VR can surprise either with games or non-games.
           </p>
           <h4>Criteria for winning</h4>
           <p>
              We’re interested in seeing the next step for VR. In order to win you need to either use Unity or show how your project could be integrated with Unity. Show us how VR can be more realistic and exceptional.
           </p>
           <h4>Prize</h4>
           <p>
              Free Unity pro licenses for a year and/or tickets to Unite Europe.
           </p>
           <div class="text-center"><div class="button" style="margin: 0 auto;"><a href="https://register.hackjunction.com" style="color: rgb(91, 200, 215);">APPLY</a></div></div>

       </div>
     </div>
  </div>

   <!-- deezer-modal -->
   <div class="modal fade" id="deezer-info-modal" tabindex="-1" role="dialog" aria-labelledby="trackmodal">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">
           <i class="fa fa-times-circle close-modal"></i>
           <div class="challenge-info deezer"></div>
           <h2 class="track-heading">Deezer: New Music Realities and Experiences</h2>
           <h4>Challenge</h4>
           <p>
             At Deezer we believe that music is the essence of life. There are many ways to explore new music experiences and you may have some great ideas. Now that new Virtual and Augmented realities are opening up to us, there are even less boundaries. Maybe you can prove us right?<br /><br />
             We’ll bring the Deezer API and all our SDK (Native, Android, iOS, Web, etc.). All teams using the Deezer service in their project will be provided with Premium+ accounts so that they can access the full Deezer experience and enjoy unlimited music.
           </p>
           <h4>Criteria for winning</h4>
           <p>
             There must be a specific and original goal behind the integration of the Deezer API or SDK into your project. We believe music and technology have always been a perfect combination for an outstanding user experience: the creativity and effective use of the Deezer service is our most important criteria.

           </p>
           <h4>Prize</h4>
           <p>
             PLAY:5 and PLAY:1 Sonos Wireless Speakers, enjoy the purest and most precise sound experience!
           </p>
           <div class="text-center"><div class="button" style="margin: 0 auto;"><a href="https://register.hackjunction.com" style="color: rgb(91, 200, 215);">APPLY</a></div></div>

       </div>
     </div>
  </div></main>

<?php include '../tpl/junction-footer.php';?>
