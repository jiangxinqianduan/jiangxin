/**
 * Created by zhao.ren on 2016/4/14.
 */
$(".hot").mouseover(function(){
    $(this).animate({
        height:'225px',
        width:'329px'
    },"fast");
});

$(".hot").mouseout(function(){
    $(this).animate({
        height:'218px',
        width:'313px'
    },"fast");
});

$(".feature").mouseover(function () {
    $(this).animate({
        opacity:0.7
    });
});

$(".feature").mouseout(function () {
    $(this).animate({
        opacity:1
    });
});

$(".latest").mouseover(function () {
    $(this).animate({
        opacity:0.7
    });
});

$(".latest").mouseout(function () {
    $(this).animate({
        opacity:1
    });
});

$('.picture').click(function(){
       if ($(this).attr("src") == "images/greyheart.PNG"){
           $(this).attr("src","images/redheart.PNG");
       } else {
           $(this).attr("src","images/greyheart.PNG");
       }

});