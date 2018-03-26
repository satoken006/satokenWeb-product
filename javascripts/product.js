$(function(){

    $(".activity-box").click(function(){
        var year = $(this).find("p").text();
        $(".heading b").text( year );

        $.ajax({
            type: "POST",
            url: "./connect.php",
            dataType: "text",
            timeout: 1000,
            data: {
                year: year
            }

        }).done(function(result){
            // console.log("successed");
            var item = result.split(";");

            $("#item-list").empty();
            // それぞれのitemに対する処理
            for(let i = 0; i < item.length-1; i ++){
                var item_info = item[i].split(",");

                $item = $("<div class='item'></div>");
                $itemHeading = $("<div class='item-heading'></div>");
                $itemDesc = $("<div class='item-desc'></div>");
                $itemThumbnail = $("<div class='item-thumbnail'></div>");

                $itemHeading.append("<img class='symbol' src='../img/product/"+ item_info[1] +".png'>");
                $itemHeading.append("<div class='achievement-heading'>"+ item_info[2]+"<div class='achievement-heading-date'>"+ item_info[0] +"</div></div>");
                $itemDesc.append( item_info[3] );
                $itemThumbnail.append( "<img src='"+ item_info[4] +"'>" );

                $item.append($itemHeading);
                $item.append($itemDesc);
                $item.append($itemThumbnail);

                $("#item-list").append( $item );
            }
        }).fail(function(result){
            // console.log("failed");
        });
    });

});