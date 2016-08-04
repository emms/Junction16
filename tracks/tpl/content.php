<?php

$pic_prefix = "/img/tracks/";
$url_prefix = "/junction-tracks/junction-tracks/";
$icon_prefix = "/junction-tracks/junction-tracks/icons/";

$tracks = [
    "gaming" => [
        "title" => "Gaming",
        "pic" => "gaming.jpg",
        "next" => "virtual-reality",
        "prev" => "future-mobility",
        "url" => "gaming",
        "icon" => "gaming.png",
        "page_icon" => "gaming_page.png"

    ],
    "virtual-reality" => [
        "title" => "Virtual Reality",
        "pic" => "vr.jpg",
        "next" => "iot",
        "prev" => "gaming",
        "url" => "virtual-reality",
        "icon" => "vr.png",
        "page_icon" => "vr_page.png"
    ],
    "iot" => [
        "title" => "IOT",
        "pic" => "IOT.jpg",
        "next" => "data-driven-economy",
        "prev" => "virtual-reality",
        "url" => "iot",
        "icon" => "iot.png",
        "page_icon" => "iot_page.png"
    ],
    "data-driven-economy" => [
        "title" => "Data Driven Economy",
        "pic" => "dde.jpg",
        "next" => "fintech",
        "prev" => "iot",
        "url" => "data-driven-economy",
        "icon" => "dde.png",
        "page_icon" => "dde_page.png"
    ],
    "fintech" => [
        "title" => "Fintech",
        "pic" => "fintech.jpg",
        "next" => "adtech",
        "prev" => "data-driven-economy",
        "url" => "fintech",
        "icon" => "anchor.png"
    ],
    "adtech" => [
        "title" => "Adtech",
        "pic" => "adtech.jpg",
        "next" => "healthtech",
        "prev" => "fintech",
        "url" => "adtech",
        "icon" => "anchor.png"
    ],
    "healthtech" => [
        "title" => "Healthtech",
        "pic" => "healthtech.jpg",
        "next" => "intelligent-buildings",
        "prev" => "adtech",
        "url" => "healthtech",
        "icon" => "anchor.png"
    ],
    "intelligent-buildings" => [
        "title" => "Intelligent Buildings",
        "pic" => "intelligentbuildings.jpg",
        "next" => "ecommerce",
        "prev" => "healthtech",
        "url" => "intelligent-buildings",
        "icon" => "anchor.png"
    ],
    "ecommerce" => [
        "title" => "Ecommerce",
        "pic" => "ecommerce.jpg",
        "next" => "future-mobility",
        "prev" => "intelligent-buildings",
        "url" => "ecommerce",
        "icon" => "anchor.png"
    ],
    "future-mobility" => [
        "title" => "Future Mobility",
        "pic" => "futuremobility.jpg",
        "next" => "gaming",
        "prev" => "ecommerce",
        "url" => "future-mobility",
        "icon" => "anchor.png"
    ]
];



 ?>
