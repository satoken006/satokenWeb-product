$(function(){

    $(".item-body").each(function(){
        var h = $(this).find(".item-thumbnail > img").height();
        $(this).height(h+10);
    });

    $(".activity-box, .achievement-box").mouseover(function(){

        $(this).css("background-color","#4ECCBF");
        $(this).find("img").css("opacity", 0);
        $(this).find("p").css({"background-color":"#4ECCBF", "color":"white"});

    }).mouseout(function(){

        $(this).css("background-color","#F5D0A9");
        $(this).find("img").css("opacity", 0.5);
        $(this).find("p").css({"background-color":"white", "color":"black", "opacity":0.85});

    });

});