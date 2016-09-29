<?php include '../tpl/junction-nav.php';?>
<?php include '../tpl/content.php';?>

<?php
    $track_name = 'intelligent-buildings';
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
              <div class="col-md-4 col-sm-4 col-lg4"></div>
              <div class="col-md-2 col-sm-2 col-lg2"><div class="partner-logo tieto" style=""></div></div>
              <div class="col-md-2 col-sm-2 col-lg2"><div class="partner-logo ge" style=""></div></div>
              <div class="col-md-4 col-sm-4 col-lg4"></div>
          </div>
          <div class="clear"></div>
          <h2 class="text-center"><span style="font-weight:700;">TRACK</span> SUMMARY</h2>
          <!--<h2 class="text-center" style="margin-top:100px;"><span style="font-weight:700;">CHALLENGE</span></h2>-->
          <p>Our buildings are getting smarter. The last few years have been focused on smart cars but buildings are not far behind. With various sensors such as temperature, ultrasound, video, and indoor positioning many processes can be automated and consumables reduced. Want to help take buildings into the digital age? Join now!</p>
          <div class="text-center"><div class="button" style="margin: 0 auto;"><a href="https://register.hackjunction.com" style="color: rgb(91, 200, 215);">APPLY</a></div></div>
          <h2 class="text-center">CHALLENGES</h2>
             <div class="challenge-logo">
                <div class="col-md-4 col-sm-4"></div>
                 <div class="col-md-4 col-sm-4"><div class="partner-logo tieto" style="height: 100px; padding-bottom: 0px;"></div></div>
                 <div class="col-md-4 col-sm-4"></div>
             </div>
             <div class="clear"></div>
             <p class="text-center" style="margin-top: 20px">The Future of Building Maintenance</p>
             <h4 class="challenge-info tieto-info text-center" style="padding-bottom: 50px;">READ MORE</h4>

             <div class="challenge-logo">
                <div class="col-md-4 col-sm-4"></div>
                 <div class="col-md-4 col-sm-4"><div class="partner-logo ge" style="height: 100px; padding-bottom: 0px;"></div></div>
                 <div class="col-md-4 col-sm-4"></div>
             </div>
             <div class="clear"></div>
             <p class="text-center" style="margin-top: 20px">Energy Challenge</p>
             <h4 class="challenge-info ge-info text-center" style="padding-bottom: 50px;">READ MORE</h4>


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

  <!-- tieto-modal -->
  <div class="modal fade" id="tieto-info-modal" tabindex="-1" role="dialog" aria-labelledby="trackmodal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <i class="fa fa-times-circle close-modal"></i>
          <div class="challenge-info tieto"></div>
          <h2 class="track-heading">Tieto: The Future of Building Maintenance</h2>
          <h4>Challenge</h4>
          <p><i>Create a kickass mobile app that supports building operators and maintenance in their daily tasks</i></p>
          <p>Maintaining and keeping offices running smoothly is changing radically. In the future, the same person may deal with security issues, replace broken light sources, add some paper into the restroom, clean a soiled floor in lobby and put some more beans to the coffee machine, all without a single supervisor assigning and overseeing each task. But none of this will be possible without good sensor data and seamlessly integrated intelligent ecosystem of suppliers.</p>
          <p>Participants will have access to data gathered from 6000 sensors at Tieto HQ building in Keilalahti, including:</p>
          <p>
            - Air Quality (temperature, relative humidity, CO2, VOC, PM)<br>
            - Video sensor (face recognition, people’s direction and routes)<br>
            - Quuppa Indoor Positioning (accurate position of employees, visitors, externals, assets,
          equipments)<br>
            - Ultrasound (measuring consumables: toilet paper, hand tissue, waste bins, parking spots, office supplies)<br>
            - Infrared sensors (desk usage, meeting room usage, office space usage, light, heating and AC-usage)<br>
            - Energy consumption (real time energy consumption of every building floor)<br>
            - Building Automation (technical data from building hardware; AC, heating, ventilation, smoke detection, thermostats, water consumption, etc.)<br>
          </p>
          <h4>Criteria for winning</h4>
          <p>We're looking for apps that can change the building maintenance business mode and make life easier for everyone. For example, can office cleaning routines be made more efficient through use of the data? And can staff be motivated to do extra tasks that are not in their job description?</p>
          <h4>Prize</h4>
          <p>
            - <b>First prize: €2000</b><br>
            - <b>Second prize €1000</b><br>
            - <b>Third prize: €500</b><br>
          <p>The winner will be the concept that best takes advantage of all the data currently available from intelligent building sensors and will benefit the widest group of people. It should also be a viable, business-ready solution that can be developed into a production version in no more than three months.</p>
          <div class="text-center"><div class="button" style="margin: 0 auto;"><a href="https://register.hackjunction.com" style="color: rgb(91, 200, 215);">APPLY</a></div></div>

      </div>
    </div>
 </div>

 <!-- ge-modal -->
 <div class="modal fade" id="ge-info-modal" tabindex="-1" role="dialog" aria-labelledby="trackmodal">
   <div class="modal-dialog modal-lg">
     <div class="modal-content">
         <i class="fa fa-times-circle close-modal"></i>
         <div class="challenge-info ge"></div>
         <h2 class="track-heading">General Electric: Energy Challenge</h2>
         <h4>Challenge</h4>
         <p>Are you interested in helping people’s lives through more visibility in energy issues? This track is made for you! People generally don’t know much about their energy use at home. Every now and then they receive a bill and they pay it without knowing what type of energy they’ve got or where all this electricity in their homes went.</p>
         <p>This challenge is all about making people more aware of energy issues. There is a wealth of information both for households and huge companies that could be turned into insight on global energy problems. At home you could combine public information such as weather forecasts or energy price data, all sorts of sensors and your own energy usage information to draw data on which to build applications or devices that make every day at least a little bit more energy efficient.</p>
         <p>Here are some of examples of solutions to get your creative minds going. First, a user friendly way to give information about energy usage to households that makes living easier in this world full of carbon intensive energy and volatile energy prices. Second, dishwasher suggesting you the best time of the day to use it. Third, your heated towel rack knowing to stop heating when the towel is dry and only warm it up just before you take your shower.</p>
         <p>Think about pieces of information that would combine into something interesting for households or businesses. We provide you with some helpful sources to familiarize you with the complex world of energy:<br>
          -<a href="http://www.nordpoolspot.com/Market-data1/#/nordic/table" style="color: rgb(91, 200, 215);">Market data</a><br>
          -<a href="https://services.greenbuttondata.org/sample-data-new.html" style="color: rgb(91, 200, 215);">Sample datasets and information</a></p>
         <h4>Criteria for winning</h4>
         <p>Judging criterias are novelty of the solution, catchiness for patient engagement, completeness of communication between all stakeholders, and overall quality of the design.</p>
         <h4>Prize</h4>
         <p>For the winner of this track GE provides 2500€ cash prize and all facilities at GE energy village for six months! In total the value of this prize adds up to 10 000€.</p>
         <div class="text-center"><div class="button" style="margin: 0 auto;"><a href="https://register.hackjunction.com" style="color: rgb(91, 200, 215);">APPLY</a></div></div>

     </div>
   </div>
</div>

</main>

<?php include '../tpl/junction-footer.php';?>
