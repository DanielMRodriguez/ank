if($(".card-grid").flip({trigger:"manual"}),$("#corpo").show(),$("#carouselExampleIndicators").on("slide.bs.carousel",function(e){switch(e.to){case 0:$("#corpo").show(),$("#edu").hide(),$("#ind").hide();break;case 1:$("#corpo").hide(),$("#edu").show(),$("#ind").hide();break;case 2:$("#corpo").hide(),$("#edu").hide(),$("#ind").show()}}),$(".cta").on("click",function(){$(window).width()<768?$("html, body").animate({scrollTop:$("#form-movil").offset().top},2e3,function(){$("#form-movil").find("#nombre").focus()}):$("html, body").animate({scrollTop:0},2e3,function(){$("#form").find("#nombre").focus()})}),$(window).width()<768){$(".flip").click(function(){$(this).closest(".card-grid").flip(!0)}),$(".unflip").click(function(){$(this).closest(".card-grid").flip(!1)});const e=document.querySelector("#super");function callback(e,o){e[0].isIntersecting?($("#first").closest(".card-grid").flip(!0),console.log("arre")):$("#first").closest(".card-grid").flip(!1)}new IntersectionObserver(callback,{threshold:1}).observe(e)}else $(".flip").mouseover(function(){$(this).closest(".card-grid").flip(!0)}),$(".unflip").mouseleave(function(){$(this).closest(".card-grid").flip(!1)});var video_wrapper=$(".youtube-video-place");function onYouTubeIframeAPIReady(){player=new YT.Player("player",{height:"360",width:"300",videoId:"AoTl5VbGR54",events:{onReady:onPlayerReady}})}function onPlayerReady(e){e.target.playVideo()}$(document).ready(function(){}),video_wrapper.length&&$(".play-youtube-video").on("click",function(){video_wrapper.html('<div id="player"></div>'),onYouTubeIframeAPIReady()});