<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script src="../javascripts/main.js"></script>
    <title>制作物</title>
</head>
<body>
    <div class="nav fixed">
        <ul id="menubar">
            <li><a href="https://satoken.nkmr.io/">HOME</a></li>
            <li><a href="https://satoken.nkmr.io/profile/">PROFILE</a></li>
            <li><a href="https://satoken.nkmr.io/research/">RESEARCH</a></li>
            <li><a href="https://satoken.nkmr.io/product/">PRODUCT</a></li>
            <li><a href="https://satoken.nkmr.io/activity/">ACTIVITY</a></li>
            <li><a href="https://satoken.nkmr.io/link/">LINK</a></li>
        </ul>
    </div>
    <img id="header" src="https://satoken.nkmr.io/img/header.jpg">

    <div id="content">
        <div class="heading">
            講義・個人での制作 2015
        </div>

        <div class="achievement-list">
            <div class="activity-box">
                <a href="../2014/">
                    <img src="../../img/activity/calendar.jpg">
                    <p>2014</p>
                </a>
            </div>
            <div class="activity-box">
                <a href="./">
                    <img src="../../img/activity/calendar.jpg">
                    <p>2015</p>
                </a>
            </div>
            <div class="activity-box">
                <a href="../2016/">
                    <img src="../../img/activity/calendar.jpg">
                    <p>2016</p>
                </a>
            </div>
            <div class="activity-box">
                <a href="../">
                    <img src="../../img/activity/calendar.jpg">
                    <p>2017</p>
                </a>
            </div>
        </div>

        <div id="item-list">
            <?php

            require "../../php/function.php";
            require "../php/connectToMySQL.php";

            showProducts($connection, 2015);

            ?>
        </div>

    </div>
</body>
</html>