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
      <p><b>The Future of Building Maintenance</b></p>
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
      <h2 class="text-center" style="margin-top:100px;"><span style="font-weight:700;">CRITERIA &amp; PRIZES</span></h2>
      <p>We're looking for apps that can change the building maintenance business mode and make life easier for everyone. For example, can office cleaning routines be made more efficient through use of the data? And can staff be motivated to do extra tasks that are not in their job description?</p>
      <p>Main prize for winning concept: Tieto will finance the development of the most business-ready idea from proof of concept to production, with the final software to be released for all intelligent business customers with a joint business model.</p>
      <p>Additionally, there are cash prizes up for grabs for the three bestplaced teams.</p>
      <p>
        - <b>First prize: €2000</b><br>
        - <b>Second prize €1000</b><br>
        - <b>Third prize: €500</b><br>
      <p>The winner will be the concept that best takes advantage of all the data currently available from intelligent building sensors and will benefit the widest group of people. It should also be a viable, business-ready solution that can be developed into a production version in no more than three months.</p>
      <h2 class="text-center" style="margin-top:100px;"><span style="font-weight:700;">ABOUT THE COMPANY</span></h2>
      <p>In a rapidly changing world, every bit of information can be used to provide new value. Tieto aims to capture the significant opportunities of the datadriven world and turn them into lifelong value for people, business and society. Having a strong role in the ecosystems, we use our software and services capabilities to create tools and services that simplify everyday life of millions of people; to help our customers renew their businesses by capturing the opportunities of modernization, digitalization and innovation and to foster new opportunities based on openness, coinnovation and ecosystems.</p>
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
