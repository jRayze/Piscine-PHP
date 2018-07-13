$(document).ready(function(){
	$('body').css('background', 'url(space.jpg) no-repeat center fixed').css('height', '100%').css('margin', '0px').css('padding','0');
	$('body').css('background-size', 'cover').css('-webkit-background-size', 'cover').css('display','block');
	
	$('#page').css('left', '50%').css('top', '50%').css('position', 'absolute')
	$('#page').css('margin-left', '-500px').css('margin-top','-275px').css('overflow', 'auto');
	
	$('#msg').css('border-radius', '5px');
	
	$('#submit').css('border-radius', '5px').css('background-color', '#b3dced');
	$('#submit').css('background','-moz-linear-gradient(top, #b3dced 0%, #29b8e5 50%, #bce0ee 100%)');
	$('#submit').css('background','-webkit-linear-gradient(top, #b3dced 0%,#29b8e5 50%,#bce0ee 100%)');
	$('#submit').css('background','linear-gradient(to bottom, #b3dced 0%,#29b8e5 50%,#bce0ee 100%)');
	$('#submit').css('filter',' progid:DXImageTransform.Microsoft.gradient(startColorstr="#b3dced", endColorstr="#bce0ee",GradientType=0)');
	
	$('#entete').css('background', 'black').css('border-color', 'black').css('margin', '0px');
	
	$('.txtEntet').css('font-family', 'Comic Sans MS, Comic Sans, cursive').css('color', 'white').css('background', 'grey').css('font-weight', '500')
	$('.txtEntet').css('box-shadow', '2px 2px 10px gray').css('-moz-box-shadow' ,'2px 2px 10px gray').css('-webkit-box-shadow','2px 2px 10px gray');
	
	$('#chmdp').css('float','left').css('width', '10%').css('margin', '0px').css('height', '50px').css('border', 'none').css('border-left', 'dotted').css('border-color', 'black');
	$("#acceuil").css('float','left' ).css('width', '10%').css('margin', '0px').css('height', '50px').css('border-style', 'none');
	$('#button').css('float','right').css('width', '10%').css('margin', '0px').css('height', '50px').css('border-style', 'none');
	
	$("#title").css('font-family', 'Comic Sans MS, Comic Sans, cursive').css('font-weight','1000').css('color', 'white').css('height', '50px').css('font-size', '30px');
	$('#title').css('width', '100%').css('text-align','center');
	
	$('#nameTitle').css('font-family', 'Comic Sans MS, Comic Sans, cursive').css('font-weight','1000').css('color', 'white').css('height', '50px').css('text-align', 'center').css('width', '80%');
	
	$('#chat').css('border-width', '3px').css('border-style', 'solid').css('height', '550px').css('width', '1000px')
	$('#chat').css('overflow', 'auto').css('background-color', '#D3D3D3').css('border-radius', '5px').css('opacity','0.75');

	$('#speak').css('text-align','center');
	
	var $container = $("#chat");
    $container.load("chat.php");
    var refreshId = setInterval(function()
    {
        $container.load('chat.php', function() {
        	 //  gestion de la scrollbar
        	$("#chat").scrollTop($("#chat").height());
        });
    }, 1000);
 });