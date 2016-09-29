<?php include '../tpl/junction-nav.php';?>
<?php include '../tpl/content.php';?>

<?php
    $track_name = 'healthtech';
?>

<main id="barba-wrapper">
  <div class="barba-container">
      <header style="background-image: url(<?=$pic_prefix.$tracks[$track_name]['pic']?>);">
          <img src="<?=$icon_prefix.$tracks[$track_name]['page_icon']; ?>"/>
        <div><h1 style="font-size: 70px;"><span style="font-weight:700;text-transform:uppercase;"><?=$tracks[$track_name]['title']; ?></span></h1></div>
      </header>

    <div class="text">
        <h2 class="text-center hostedby"><span style="font-weight:700;">HOSTED</span> BY</h2>
        <div >
            <div class="col-xs-4 col-sm-4"><div class="partner-logo" style=""></div></div>
            <div class="col-xs-4 col-sm-4"><div class="partner-logo ge" style=""></div></div>
            <div class="col-xs-4 col-sm-4"><div class="partner-logo" style=""></div></div>
        </div>
        <div class="clear"></div>

      <h2 class="text-center"><span style="font-weight:700;">TRACK</span> SUMMARY</h2>
      <p>Two things in life are certain: death and taxes. We can’t fix the latter, but recent technological advances have been pushing the former back by decades. This track welcomes all hackers who want to join this fight. If you’re interested in biohacking, medical devices, biotech, augmentation and other solutions, sign up now!</p>

      <div class="challenge-logo">
         <div class="col-md-4 col-sm-4"></div>
          <div class="col-md-4 col-sm-4"><div class="partner-logo ge" style="height: 100px; padding-bottom: 0px;"></div></div>
          <div class="col-md-4 col-sm-4"></div>
      </div>
      <div class="clear"></div>
      <p class="text-center" style="margin-top: 20px">Energy Challenge</p>
      <h4 class="challenge-info ge-info text-center" style="padding-bottom: 50px;">READ MORE</h4>

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

  <!-- ge-modal -->
  <div class="modal fade" id="ge-info-modal" tabindex="-1" role="dialog" aria-labelledby="trackmodal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <i class="fa fa-times-circle close-modal"></i>
          <div class="challenge-info ge"></div>
          <h2 class="track-heading">General Electric: Health Challenge</h2>
          <h4>Challenge</h4>
          <p>Have you ever been scared at the hospital? Chances are you have been at least when you were too young to understand what’s happening around you. Going to the hospital is a stressful experience for many young patients and families, and making it easier and more pleasant is paramount.</p>
          <p>GE has been on the cutting edge of healthcare innovation and technology, creating such products as <a href="http://www3.gehealthcare.com/en/products/categories/accessories_and_supplies#tabs/tab6F6ACF93E9D74787A22A3182063ABC89" style="color: rgb(91, 200, 215);">Adventure Series</a> to ease children’s anxiety at the hospital. Creative MRI and CT scanning devices are a good start but we want to take this even further. Now your task is to make the patient experience more pleasant for kids regarding other parts of the hospital journey, especially surgery and anesthesia.</p>
          <p>Healthcare is largely event-based. There are few solutions out there that offer healthcare providers tools to connect the child, parents, and hospital between the events. Technology helps all these to connect, communicate, motivate, and reduce anxiety between, before, and/or after the events like surgery.</p>
          <p>Remember to take all stakeholders into account: kids, their parents, and the hospital. Explore the use of gamification in your implementation to make the process easier for young patients. Try to think of the whole process rather than just one part: surgery, preparation for that surgery, pre-surgery appointments, post check-ups and potentially physiotherapy. Keep in mind that your solution should help patients and be hospital agnostic; think of how this solution may be scaled and customized across the globe.</p>
          <h4>Criteria for winning</h4>
          <p>Novelty of the solution, catchiness for patient engagement, completeness of communication between all stakeholders and overall quality of the design.</p>
          <h4>Prize</h4>
          <p>For the winner team GE provides a 2500€ cash prize and free office facilities at Health Innovation Village at GE for 6 months. In total the value of this prize adds up to over 10 000€.</p>
          <div class="text-center"><div class="button" style="margin: 0 auto;"><a href="https://register.hackjunction.com" style="color: rgb(91, 200, 215);">APPLY</a></div></div>

      </div>
    </div>
 </div>

</main>

<?php include '../tpl/junction-footer.php';?>
