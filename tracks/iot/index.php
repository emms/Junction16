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
          <div>
              <div class="col-md-3 col-sm-3 col-lg3"></div>
              <div class="col-md-2 col-sm-2 col-lg2"><div class="partner-logo upm" style=""></div></div>
              <div class="col-md-2 col-sm-2 col-lg2"><div class="partner-logo jcd" style=""></div></div>
              <div class="col-md-2 col-sm-2 col-lg2"><div class="partner-logo futurice" style=""></div></div>
              <div class="col-md-3 col-sm-3 col-lg3"></div>
          </div>
          <div class="clear"></div>
          <h2 class="text-center"><span style="font-weight:700;">TRACK</span> SUMMARY</h2>
          <!--<h2 class="text-center" style="margin-top:100px;"><span style="font-weight:700;">CHALLENGE</span></h2>-->
          <p>Everyday, we’re one step closer towards a more connected world. The cost of interconnected devices is falling fast and pretty soon anything with a power switch may be connected to the internet. From monitoring your home temperature, to automating manufacturing processes, saving up energy and environmental-friendly solutions to sensor augmented clothes, the Internet of Things is changing the way we live and do business.</p>
          <div class="text-center"><div class="button" style="margin: 0 auto;"><a href="https://register.hackjunction.com" style="color: rgb(91, 200, 215);">APPLY</a></div></div>
          <h2 class="text-center">CHALLENGES</h2>
             <div class="challenge-logo">
                <div class="col-md-4 col-sm-4"></div>
                 <div class="col-md-4 col-sm-4"><div class="partner-logo upm" style="height: 100px; padding-bottom: 0px;"></div></div>
                 <div class="col-md-4 col-sm-4"></div>
             </div>
             <div class="clear"></div>
             <p class="text-center" style="margin-top: 20px">Reframe the Supply Chain</p>
             <h4 class="challenge-info upm-info text-center" style="padding-bottom: 50px;">READ MORE</h4>

             <div class="challenge-logo">
                <div class="col-md-4 col-sm-4"></div>
                 <div class="col-md-2 col-sm-2"><div class="partner-logo jcd" style="height: 100px; padding-bottom: 0px;"></div></div>
                 <div class="col-md-2 col-sm-2"><div class="partner-logo futurice" style="height: 100px; padding-bottom: 0px;"></div></div>
                 <div class="col-md-4 col-sm-4"></div>
             </div>
             <div class="clear"></div>
             <p class="text-center" style="margin-top: 0px">The bus stop of the Future</p>
             <h4 class="challenge-info jcd-info text-center" style="padding-bottom: 50px;">READ MORE</h4>


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

  <!-- UPM-modal -->
  <div class="modal fade" id="upm-info-modal" tabindex="-1" role="dialog" aria-labelledby="trackmodal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <i class="fa fa-times-circle close-modal"></i>
          <div class="challenge-info upm"></div>
          <h2 class="track-heading">UPM: Reframe the Supply Chain</h2>
          <h4>Challenge</h4>
          <p>Large amounts of paper are produced daily and shipped from UPM paper mills to customers around the globe. On-time delivery requires careful planning and a clear view of the location of the cargo on its way to the customer. Mobility, IoT and Data Analytics are expected to offer a platform for new, innovative ways of working to improve efficiency and customer satisfaction.</p>
          <p>UPM Paper ENA is looking for new, innovative digitalized solutions for its Supply Chain. Participants are offered the challenge of creating new, innovative digitalized solutions, services and data analytics using relevant Supply Chain Data. The track is powered by IBM Bluemix and tools, supported by experts from Tieto and IBM together with UPM business representatives.</p>
          <p>We are looking for a solution that offers simple functionality and high value in an outstanding user experience enabling users to trace and/or re-label products when needed. You can also take the customer perspective and create a mobile solution for improved supply chain visibility, designed especially for B2B. Alternatively, you can use analytics to identify and showcase concrete and relevant improvement actions to increase production efficiency and enhance customer experience.</p>
          <h4>Criteria for winning</h4>
          <p>High business value, a well-scoped and applicable solution, easy to pilot and adopt. Innovativeness of approach, new ways of collecting, using and/or presenting information.</p>
          <h4>Prize</h4>
          <p>Groundbreaking pairs of Genelec M030 studio monitors for winning team members. Monitors are made from sustainable and recyclable natural composite – UPM Formi. The members of the winning team will also be offered a chance to participate UPM’s Slush pre-event at UPM Biofore House and present their winning solution for UPM and its stakeholders.</p>
          <div class="text-center"><div class="button" style="margin: 0 auto;"><a href="https://register.hackjunction.com" style="color: rgb(91, 200, 215);">APPLY</a></div></div>

      </div>
    </div>
 </div>

 <!-- JCDECAUX-modal -->
 <div class="modal fade" id="jcd-info-modal" tabindex="-1" role="dialog" aria-labelledby="trackmodal">
   <div class="modal-dialog modal-lg">
     <div class="modal-content">
         <i class="fa fa-times-circle close-modal"></i>
         <div class="challenge-info jcd"></div>
         <h2 class="track-heading">JCDecaux</h2>
         <h4>Challenge</h4>
         <p>Did you know that you probably spend about a month of your life waiting for public transport at a stop of some sort? At present, that time is, for most people, a period of involuntary idleness.
           What can we do to change it? Till now, bus stops have been platforms for advertisement, but what else could a bus stop be?
         </p>
         <p>One answer is to change the bus stop – rethink the whole concept and what it can entail. Could it be a tool for empowerment? A way for citizens to control their environment? Or interact with the city? Is it a potential community hub? Could it function as a marketing tech platform? How could it best provide people with the info they need, when they need it?
         </p>
         <p>A bus stop is ubiquitous in any modern city around the world, but a detail we rarely pay close attention to outside its basic utility. Let’s change that. Make people stand up and take notice.</p>
         <p>Our bus stop will be your playground, so we’ll bring that.</p>
         <h4>Criteria for winning</h4>
         <p>The winning entry will help us see the bus stop from a fresh perspective - a vibrant part of the city that empowers both citizens and visitors and potentially makes it easier for the rich variety of people who wait for public transport every day to access digital services.</p>
         <p>It could be an easy solution for a small everyday challenge “Lost in the city”, “Where is the party out?”, “The bus is late”, “I’m hungry, where could I have lunch?” or it could be something bigger, something revolutionary, for example a way to empower people to make a difference in the city and in the society.</p>
        <!-- <h4>Prize</h4>
         <p></p>-->
         <div class="text-center"><div class="button" style="margin: 0 auto;"><a href="https://register.hackjunction.com" style="color: rgb(91, 200, 215);">APPLY</a></div></div>

     </div>
   </div>
</div>

</main>

<?php include '../tpl/junction-footer.php';?>
