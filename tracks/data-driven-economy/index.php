<?php include '../tpl/junction-nav.php';?>
<?php include '../tpl/content.php';?>

<?php
    $track_name = 'data-driven-economy';
?>

<main id="barba-wrapper">
  <div class="barba-container">
      <header style="background-image: url(<?=$pic_prefix.$tracks[$track_name]['pic']?>);">
          <img style="top:100px;" src="<?=$icon_prefix.$tracks[$track_name]['page_icon']; ?>"/>
        <div><h1 style="font-size:51px;"><span style="font-weight:700;text-transform:uppercase;"><?=$tracks[$track_name]['title']; ?></span></h1></div>
      </header>

    <div class="text">
        <h2 class="text-center" style="margin-top:100px;"><span style="font-weight:700;">CHALLENGE</span></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad non minus porro. Rerum magnam ab, esse sunt nisi a praesentium pariatur quia unde architecto eveniet ipsum molestiae maxime sit, assumenda.</p>
      <p>Labore maiores ratione enim tenetur sequi, esse. Expedita necessitatibus et distinctio quas eum, magni dolorem similique, quod aut, ratione optio! Laudantium similique deleniti beatae facere reiciendis laboriosam nulla fugit illum.</p>
      <p>Atque iusto, sequi necessitatibus accusantium ipsum obcaecati. Deserunt, repudiandae, magnam fugit distinctio enim fuga excepturi incidunt eligendi nam officia accusantium id nemo omnis suscipit officiis doloremque, laboriosam tempora quas ullam.</p>
      <p>Quibusdam officia fugit modi repudiandae recusandae mollitia at aperiam. Quod sed, eos nam laudantium, debitis eligendi hic dolore tempore vitae sequi, natus consectetur numquam adipisci! Corporis nihil autem neque quisquam.</p>
      <p>Repellat non repudiandae illum possimus, amet cum blanditiis dolorem harum odit quibusdam accusantium nisi tempore, eos ratione soluta rerum aspernatur eligendi provident quas sunt. Quis odit dolores earum ullam perspiciatis!</p>
      <p>Quod voluptatem veniam, optio at praesentium, saepe incidunt quia? Culpa optio perspiciatis, odit quibusdam voluptatem esse ipsam doloremque rerum hic quas, ducimus, ab nobis quia ad unde vitae error accusamus?</p>
      <p>Impedit odit deserunt quos, vero delectus. Enim asperiores voluptatum, modi beatae! Beatae provident, minima quo dolore officiis fugiat corrupti excepturi nobis suscipit ullam nesciunt, voluptatem aliquid iure repellat atque repellendus!</p>
      <p>Optio voluptate, provident tenetur aut molestias quod itaque id facilis illum dignissimos, sequi quaerat! Vel cumque, labore iste quam velit veniam reiciendis id, alias, maxime illum necessitatibus dolore aliquid rem.</p>
      <p>Dolores illum similique recusandae, facilis eligendi tempore illo, necessitatibus eius ipsa magnam quae, excepturi veniam laboriosam reiciendis culpa est amet, quis? Expedita sequi, exercitationem possimus molestiae at sunt quisquam commodi.</p>
      <p>Corporis fuga, perspiciatis iste aspernatur debitis possimus odit sint aut, ratione officia sed id pariatur voluptatem dolores atque asperiores doloribus praesentium labore laudantium veritatis. Totam, recusandae mollitia dignissimos cupiditate! Voluptas!</p>
    </div>

    <?php
        include '../tpl/pagination.php';
    ?>

    <!--<a class="barba-nav next" href="<?=$url_prefix.$tracks[$tracks[$track_name]['next']]['url']?>"  style="background-image: url(<?=$pic_prefix.$tracks[$tracks[$track_name]['next']]['pic']?>);"></a>
        <a class="barba-nav prev" href="<?=$url_prefix.$tracks[$tracks[$track_name]['prev']]['url']?>"  style="background-image: url(<?=$pic_prefix.$tracks[$tracks[$track_name]['prev']]['pic']?>);"></a>
    -->

  </div>
</main>

<?php include '../tpl/junction-footer.php';?>
