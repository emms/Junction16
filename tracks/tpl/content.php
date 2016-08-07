<?php

$pic_prefix = "/img/tracks/";
$url_prefix = "/tracks/";
$icon_prefix = "/tracks/icons/";

$tracks = [
    "gaming" => [
        "title" => "Game Jam",
        "pic" => "gaming.jpg",
        "next" => "virtual-reality",
        "prev" => "future-mobility",
        "url" => "gaming",
        "icon" => "gaming_icon.png",
        "page_icon" => "gaming_page.png"

    ],
    "virtual-reality" => [
        "title" => "Virtual Reality",
        "pic" => "vr.jpg",
        "next" => "iot",
        "prev" => "gaming",
        "url" => "virtual-reality",
        "icon" => "vr_icon.png",
        "page_icon" => "vr_page.png"
    ],
    "iot" => [
        "title" => "IOT",
        "pic" => "IOT.jpg",
        "next" => "data-driven-economy",
        "prev" => "virtual-reality",
        "url" => "iot",
        "icon" => "iot_icon.png",
        "page_icon" => "iot_page.png"
    ],
    "data-driven-economy" => [
        "title" => "Data Driven Economy",
        "pic" => "dde.jpg",
        "next" => "fintech",
        "prev" => "iot",
        "url" => "data-driven-economy",
        "icon" => "dde_icon.png",
        "page_icon" => "dde_page.png"
    ],
    "fintech" => [
        "title" => "Fintech",
        "pic" => "fintech.jpg",
        "next" => "adtech",
        "prev" => "data-driven-economy",
        "url" => "fintech",
        "icon" => "fintech_icon.png",
        "page_icon" => "fintech_page.png"
    ],
    "adtech" => [
        "title" => "Adtech",
        "pic" => "adtech.jpg",
        "next" => "healthtech",
        "prev" => "fintech",
        "url" => "adtech",
        "icon" => "ad_tech_icon.png",
        "page_icon" => "ad_tech_page.png"
    ],
    "healthtech" => [
        "title" => "Healthtech",
        "pic" => "healthtech.jpg",
        "next" => "intelligent-buildings",
        "prev" => "adtech",
        "url" => "healthtech",
        "icon" => "healthtech_icon.png",
        "page_icon" => "healthtech_page.png"
    ],
    "intelligent-buildings" => [
        "title" => "Intelligent Buildings",
        "pic" => "intelligentbuildings.jpg",
        "next" => "ecommerce",
        "prev" => "healthtech",
        "url" => "intelligent-buildings",
        "icon" => "ib_icon.png",
        "page_icon" => "ib_page.png"
    ],
    "ecommerce" => [
        "title" => "Ecommerce & Retail",
        "pic" => "ecommerce.jpg",
        "next" => "future-mobility",
        "prev" => "intelligent-buildings",
        "url" => "ecommerce",
        "icon" => "ecommerce_icon.png",
        "page_icon" => "ecommerce_page.png"
    ],
    "future-mobility" => [
        "title" => "Future Mobility",
        "pic" => "futuremobility.jpg",
        "next" => "gaming",
        "prev" => "ecommerce",
        "url" => "future-mobility",
        "icon" => "fm_icon.png",
        "page_icon" => "fm_page.png"
    ]
];



 ?>
