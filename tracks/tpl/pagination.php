<?php

$keys = array_keys($tracks);
$current_key = array_search($track_name, array_keys($tracks));

$tracks_length = count($tracks);


//4 prev
$prev = 0;
$i = $current_key;
$pagination = 2;
while ($prev < 1){
    if($i == 0){
        $i = $tracks_length;
    }
        $i--;
        //echo '<a class="barba-nav prev prev'.$pagination.'" href="'.$url_prefix.$tracks[$keys[$i]]['url'].'"><span>'.$tracks[$keys[$i]]['title'].'</span></a>';
        echo '<a class="barba-nav prev prev'.$pagination.'" href="'.$url_prefix.$tracks[$keys[$i]]['url'].'"><img src="'.$icon_prefix.$tracks[$keys[$i]]['icon'].'"/></a>';
        $prev++;
        $pagination++;
}

//5 next
$next = 0;
$i = $current_key;
$pagination = 2;
while ($next < 1){
    if($i == ($tracks_length-1)){
        $i = -1;
    }
    $i++;
    //echo '<a class="barba-nav next next'.$pagination.'" href="'.$url_prefix.$tracks[$keys[$i]]['url'].'"><span>'.$tracks[$keys[$i]]['title'].'<span></a>';
    echo '<a class="barba-nav next next'.$pagination.'" href="'.$url_prefix.$tracks[$keys[$i]]['url'].'"><img src="'.$icon_prefix.$tracks[$keys[$i]]['icon'].'"/></a>';
    $next++;
    $pagination++;
}


//echo '<h2 class="text-center" style="margin-top:100px;">OTHER TRACKS</h2>'

 ?>