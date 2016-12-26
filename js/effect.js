$(function(){
$(".gnb li ul,.link,.m_gnb li ul").hide();
$(".gnb>li").hover(function(){
        $('ul',this).stop().slideToggle(100);
        });
});
$(function(){
$(".m_gnb>li").click(function(){
        $('ul',this).stop().slideToggle(100);
        });
});
$(function(){
$("article ul li").hover(function(){
$(".zoom",this).stop().css("transform","scale(1.2)").fadeTo(200,0.6)},function(){
$(".zoom",this).stop().css("transform","scale(1)").fadeTo(200,0.8)});
});
$(function(){
$("article ul li").hover(function(){
$(".link",this).stop().fadeTo(200,1)},function(){
$(".link",this).stop().fadeTo(200,0)});
});
$(function(){
    var hamburger = $('.toggle');
    hamburger.stop().click(function(event) {
        $(this).toggleClass('on');
        $(".m_gnb_wrap").toggleClass('on');
    });
});
// var ww = $(window).width();
// $(function(){
//     if(ww>=1024){
//         $(".gnb>li").hover(function(){
//         $('ul',this).stop().slideToggle(100);
//         });
//     }
// });