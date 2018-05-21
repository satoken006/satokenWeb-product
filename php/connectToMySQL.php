<?php

function showProducts( $_connection, $_year ){

    $nextYear = $_year + 1;
    $q = "SELECT * FROM product WHERE date >= '$_year-04-01' AND date <= '$nextYear-03-31' ORDER BY date DESC";

    $result = "";

    foreach( $_connection->query( $q ) as list($id, $date, $category, $title, $description, $thumbnail_url, $achievements) ){;

        $result .= "<div class='item'>";
        $result .= "<div class='item-heading'>";
        $result .= "<img class='symbol' src='https://satoken.nkmr.io/img/product/$category.png'>";
        $result .= "<div class='achievement-heading'>$title</div>";
        $result .= "</div>";
        $result .= "<div class='item-desc'>";
        $result .= $description;
        $result .= "</div>";
        $result .= "<div class='item-thumbnail'>";
        $result .= "<img src='https://satoken.nkmr.io/img/product/thumbnail/$thumbnail_url'>";
        $result .= "</div>";

        $achievements_json = json_decode($achievements);
        
        if( $achievements_json != null ){
            $result .= "<div class='achievement-list'>";

            foreach( $achievements_json as $obj ){
                $name  = $obj->{"name"};
                $label = $obj->{"label"};
                $url   = $obj->{"url"};

                $result .= "<div class='achievement-box'>";
                $result .= "<a href='$url'>";
                $result .= "<img src='../../../img/achievement/$name.jpg'>";
                $result .= "<p>$label</p>";
                $result .= "</a>";
                $result .= "</div>";
            }

            $result .= "</div>";
        }

        $result .= "</div>";
    }

    echo $result;

    $_connection = null;
}

?>