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
        <h2 class="text-center hostedby">HOSTED BY</h2>
        <div >
            <div class="col-xs-4 col-sm-4"><div class="partner-logo intel" style=""></div></div>
            <div class="col-xs-4 col-sm-4"><div class="partner-logo upm" style=""></div></div>
            <div class="col-xs-4 col-sm-4"><div class="partner-logo arrow" style=""></div></div>
        </div>
        <div class="clear"></div>
        <p>Everyday, we’re one step closer towards a more connected world. The cost of interconnected devices is falling fast and pretty soon anything with a power switch may be connected to the internet. From monitoring your home temperature, to automating manufacturing processes, saving up energy and environmental-friendly solutions to sensor augmented clothes, the Internet of Things is changing the way we live and do business.</p>
        <h2 class="text-center" style="margin-top:100px;"><span style="font-weight:700;">CHALLENGE</span></h2>
        <p>Large amounts of paper are produced daily and shipped from UPM paper mills to customers around the globe. On-time delivery requires careful planning and a clear view of the location of the cargo on its way to the customer. Mobility, IoT and Data Analytics are expected to offer a platform for new, innovative ways of working to improve efficiency and customer satisfaction.</p>
        <p>UPM Paper ENA is looking for new, innovative digitalized solutions for its Supply Chain. Participants are offered the challenge of creating new, innovative digitalized solutions, services and data analytics using relevant Supply Chain Data. The track is powered by IBM Bluemix and tools, supported by experts from Tieto and IBM together with UPM business representatives.</p>
        <p>We are looking for a solution that offers simple functionality and high value in an outstanding user experience enabling users to trace and/or re-label products when needed. You can also take the customer perspective and create a mobile solution for improved supply chain visibility, designed especially for B2B. Alternatively, you can use analytics to identify and showcase concrete and relevant improvement actions to increase production efficiency and enhance customer experience.</p>
        <p>Through the renewal of the bio and forest industries, UPM is building a sustainable future across six business areas: UPM Biorefining, UPM Energy, UPM Raflatac, UPM Paper Asia, UPM Paper ENA (Europe and North America) and UPM Plywood. <a href="http://www.upm.com">UPM – The Biofore Company</a>.</p>
        <p>UPM Paper ENA (Europe and North America) is the world’s leading producer of graphic papers, offering an extensive product range for advertising and publishing as well as home and office uses. UPM’s high-performing papers and service concepts add value to our customers’ businesses, while actively fulfilling high-level environmental and social responsibility criteria. Headquartered in Germany, UPM Paper ENA employs approximately 9,000 people. <a href="http://www.upmpaper.com">Read more about UPM Paper ENA and its products</a>.</p>
        <p><b>In order to win:</b> High business value, a well-scoped and applicable solution, easy to pilot and adopt. Innovativeness of approach, new ways of collecting, using and/or presenting information.</p>
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
