$(document).ready(function(){
 
				$('#noticia_uno').click(function(){
					$('.backdrop, .box1').animate({'opacity':'.80'}, 300, 'linear');
					$('.box1').animate({'opacity':'1.00'}, 300, 'linear');
					$('.backdrop, .box1').css('display', 'block');
				});
				$('#noticia_dos').click(function(){
					$('.backdrop, .box2').animate({'opacity':'.80'}, 300, 'linear');
					$('.box2').animate({'opacity':'1.00'}, 300, 'linear');
					$('.backdrop, .box2').css('display', 'block');
				});
				$('#noticia_tres').click(function(){
					$('.backdrop, .box3').animate({'opacity':'.80'}, 300, 'linear');
					$('.box3').animate({'opacity':'1.00'}, 300, 'linear');
					$('.backdrop, .box3').css('display', 'block');
				});
 
				$('.close1').click(function(){
					close_box1();
				});
				
				$('.close2').click(function(){
					close_box2();
				});
				
				$('.close3').click(function(){
					close_box3();
				});
 
				$('.backdrop').click(function(){
					close_box1(),close_box2(),close_box3();
				});
 
			});
 
			function close_box1()
			{
				$('.backdrop, .box1').animate({'opacity':'0'}, 300, 'linear', function(){
					$('.backdrop, .box1').css('display', 'none');
				});
			}
			function close_box2()
			{
				$('.backdrop, .box2').animate({'opacity':'0'}, 300, 'linear', function(){
					$('.backdrop, .box2').css('display', 'none');
				});
			}
			function close_box3()
			{
				$('.backdrop, .box3').animate({'opacity':'0'}, 300, 'linear', function(){
					$('.backdrop, .box3').css('display', 'none');
				});
			}