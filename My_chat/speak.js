$(document).ready(function(){
	$('body').css('background', 'url(space.jpg) no-repeat center fixed').css('height', '100%').css('margin', '0px').css('padding','0');
	$('body').css('background-size', 'cover').css('-webkit-background-size', 'cover').css('display','block');
	
	$('#page').css('left', '50%').css('top', '50%').css('position', 'absolute')
	$('#page').css('margin-left', '-500px').css('margin-top','-275px').css('overflow', 'auto');
	
	$('#menu').css('left', '0').css('background-color', 'red').css('width','10em').css('top', '0').css('font-size', 'inherit').css('position', 'absolute');
	
	$('#chat').css('border-width', '3px').css('border-style', 'solid').css('height', '550px').css('width', '1000px')
	$('#chat').css('overflow', 'auto').css('background-color', '#D3D3D3').css('border-radius', '5px');

	$('#speak').css('text-align','center');
	
	$('h1').css('border-style', 'double').css('background', 'black').css('border-radius', '3px').css('border-color', 'black');
	
	$("#title").css('text-align', 'center').css('font-family', 'Comic Sans MS, Comic Sans, cursive').css('font-weight','1000').css('color', 'white');
	
	var $container = $("#chat");
    $container.load("chat.php");
    var refreshId = setInterval(function()
    {
        $container.load('chat.php');
    }, 1000);
 });