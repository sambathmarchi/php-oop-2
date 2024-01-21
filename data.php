<?php 

    require_once __DIR__ . '/Models/products.php';


    $products = [
        $guinzaglio=new $prodotto(
        "guinzaglio",
        "https://baronihome.it/upload/baronihome.it/articoli/zoom/Guinzaglio-per-Cani-1%2C5-m---Blu-Baroni-Home_4590_1656342392_zoom.jpg",
        "15€",
        "guinzaglio per cani"),

        $cuccia=new $prodotto(
        "cuccia",
        "https://m.media-amazon.com/images/I/71EcMOqPgLL._AC_UF894,1000_QL80_.jpg",
        "30€",
        "cuccia in materiale sintetico",
        ),

        $croccantini= new $prodotto(
            "croccantini",
            "https://fratellifarella.it/wp-content/uploads/2019/03/VitadayGatto20kgN.jpg",
            "5€",
            "cani",
            "croccantini al pollo",
        ),
        $sabbia= new $prodotto(
            "sabbia",
            "https://professionalpet.it/45-medium_default/gatto-sabbia-lettiera-no-odori-alto-assorbimento.jpg",
            "9€",
            "gatti",
            "sabbia per lettiera",
        ),


    ];