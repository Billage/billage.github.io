$(function(){
$(".gnb li ul,.link,.m_gnb li ul").hide();
$(".gnb>li").hover(function(){
        $('ul',this).stop().slideToggle(100);
        });

$(".m_gnb>li").click(function(){
        $('ul',this).stop().slideToggle(100);
        });

$(".section1 article ul li").hover(function(){
$(".zoom",this).stop().css("transform","scale(1.2)").fadeTo(200,0.6)},function(){
$(".zoom",this).stop().css("transform","scale(1)").fadeTo(200,0.8)});

$(".section1 article ul li,.bread article").hover(function(){
$(".link",this).stop().fadeTo(200,1)},function(){
$(".link",this).stop().fadeTo(200,0)});

    var hamburger = $('.toggle');
    hamburger.stop().click(function(event) {
        $(this).toggleClass('on');
        $(".m_gnb_wrap").toggleClass('on');
    });

    $(window).resize(function (){
	var width = window.outerWidth;
	if (width > 1024) {
		$(".m_gnb_wrap,.toggle").removeClass('on');
	}
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