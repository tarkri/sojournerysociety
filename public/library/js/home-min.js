var detectMobile=function(){return/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)?!0:!1};detectMobile()?$(".banner.homepage").addClass("mobile"):(setTimeout(function(){$(".start-block").fadeOut(1e3)},2e3),setTimeout(function(){$("video")[0].play(),setTimeout(function(){$(".banner.homepage").css("height","inherit"),setTimeout(function(){$(".start-block h1").text("Let's Tell It Together"),$(".start-block").fadeIn(1e3),setTimeout(function(){$(".start-block").fadeOut(1e3)},5e3)},5e3)},100)},3e3),$(document).ready(function(){setTimeout(function(){var e=$(window).scrollTop(),t=parseInt($("section.banner").css("height"))-10;0==e&&$("body, html").animate({scrollTop:t},2e3),$(".progress-bar").fadeOut()},48e3),$(".progress-bar").animate({width:"100%"},48e3),setTimeout(function(){$(".progress-bar").animate({height:"700px",opacity:0},1e3)},47e3)}));