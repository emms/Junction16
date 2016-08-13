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
        <h2 class="text-center hostedby">HOSTED BY</h2>
        <div >
            <div class="col-xs-4 col-sm-4"><div class="partner-logo" style=""></div></div>
            <div class="col-xs-4 col-sm-4"><div class="partner-logo tieto" style=""></div></div>
            <div class="col-xs-4 col-sm-4"><div class="partner-logo" style=""></div></div>
        </div>
        <div class="clear"></div>

      <p>Our buildings are getting smarter. The last few years have been focused on smart cars but buildings are not far behind. With various sensors such as temperature, ultrasound, video, and motion many processes can be automated and consumables reduced. Want to help take buildings into the digital age? Join now!</p>
      <h2 class="text-center" style="margin-top:100px;"><span style="font-weight:700;">CHALLENGE</span></h2>
      <p>Maintaining and keeping offices running smoothly is changing radically. With the help of sensor data, the same person may in the future deal with security issues, replace broken light sources, add some paper into the rest room, clean a soiled floor in lobby and put some more beans to the coffee machine – without a single supervisor assigning and overseeing each task.</p>
      <p>Using data from 6000 sensors at Tieto HQ building in Keilalahti, create a kick-ass mobile app that supports the maintenance staff in their daily workflow – one that will send their supervisors to early retirement.</p>
      <p>The sensors relevant for maintenance work at Tieto HQ include:</p>
      <p>
        -Air Quality (temperature, relative humidity, CO2, VOC, PM)<br>
        -Video (face recognition, people’s direction and routes)<br>
        -Indoor Positioning (all people, assets, access control, equipment)<br>
        -Ultrasound (measuring consumables: toilet paper, hand tissue, waste bins, parking spots, office supplies)<br>
        -Motion (desk usage, meeting room usage, office space usage, light, heating and AC-usage)<br>
        -Energy consumption (real time energy consumption of every building floor)<br>
        -Building Automation (technical data from building hardware; AC, heating, ventilation, smoke detection, thermostats, water consumption, etc.)<br>
      </p>
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
