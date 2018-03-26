<?php

require "../php/function.php";

$connection = connect_to_mysql( "satoken_web" );

if( $_POST["year"] != "" ){

    $thisYear = $_POST["year"];
    $nextYear = $thisYear + 1;
    $q = "SELECT * FROM product WHERE date >= '$thisYear-04-01' AND date <= '$nextYear-03-31' ORDER BY date DESC";
    $r = mysql_query( $q );

    // echo $q;

    $result = "";
    while( $c = mysql_fetch_array( $r ) ){
        $result .= date("Y-m", strtotime($c["date"])) .",";
        $result .= $c["category"] .",";
        $result .= $c["title"] .",";
        $result .= $c["description"] .",";
        $result .= $c["thumbnail_url"] .";";
    }

    echo $result;
}

mysql_close($connection);

?>