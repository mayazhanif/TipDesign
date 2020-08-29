$(document).ready(function(){
  $(".btn-tip").click(function(){
    $(".send-a-tip").fadeIn();
  });
  $(".tip-close").click(function(){
    $(".send-a-tip").fadeOut();
  });
   $(".send-a-tip ul li span").click(function(){
    $(".send-a-tip").fadeOut();
	$(".tip-visa").fadeIn();
  });
  $(".tip-back-arrow").click(function(){
	$(".tip-visa").fadeOut();
	$(".send-a-tip").fadeIn();
  });
   $(".btn-send").click(function(){
	$(".tip-visa").fadeOut();
	 $('.success-check').fadeIn('slow', function(){
               $('.success-check').delay(1000).fadeOut(); 
            })
  });
   $(".success-check .tip-close").click(function(){
	$(".success-check").fadeOut();
  });
  
});
function ani() {
        const element = document.querySelector('.my-element');

		const picture = document.querySelector('.picture');
		const picture2 = document.querySelector('.picture2');
		const picture3 = document.querySelector('.picture3');
		
		var RandomWidth=Math.floor((Math.random() * 90) + 20);
		picture.style.width = RandomWidth+"px";
		picture.style.height = RandomWidth+"px";
		RandomWidth=Math.floor((Math.random() * 90) + 20);
		picture2.style.width = RandomWidth+"px";
		picture2.style.height = RandomWidth+"px";
		RandomWidth=Math.floor((Math.random() * 90) + 20);
		picture3.style.width = RandomWidth+"px";
		picture3.style.height = RandomWidth+"px";
		
		
		
		picture.classList.add("animatedDiv");
		picture2.classList.add("animatedDiv");
		picture3.classList.add("animatedDiv");  
        element.style.setProperty('animation-iteration-count', '1');
				element.classList.add("animate");

        element.style.setProperty('--animate-duration', '2s');
        element.classList.add('animate__animated', 'animate__pulse');
        element.addEventListener('animationend', () => {
            element.classList.remove('animate__pulse');
					picture.classList.remove('animatedDiv');
					picture2.classList.remove("animatedDiv");
					picture3.classList.remove("animatedDiv"); 
										element.classList.remove("animate");

        });
    }
    function ani1() {
        const element = document.querySelector('.my-element1');
		const picture4 = document.querySelector('.picture4');
		const picture5 = document.querySelector('.picture5');
		const picture6 = document.querySelector('.picture6');
		

		var RandomWidth=Math.floor((Math.random() * 90) + 20);
		picture4.style.width = RandomWidth+"px";
		picture4.style.height = RandomWidth+"px";
		RandomWidth=Math.floor((Math.random() * 90) + 30);
		picture5.style.width = RandomWidth+"px";
		picture5.style.height = RandomWidth+"px";
		RandomWidth=Math.floor((Math.random() * 90) + 40);
		picture6.style.width = RandomWidth+"px";
		picture6.style.height = RandomWidth+"px";
		
		
		picture4.classList.add("animatedDiv");
		picture5.classList.add("animatedDiv");
		picture6.classList.add("animatedDiv"); 
        element.style.setProperty('animation-iteration-count', '1');
				element.classList.add("animate");

        element.style.setProperty('--animate-duration', '2s');
        element.classList.add('animate__animated', 'animate__pulse');
        element.addEventListener('animationend', () => {
		            element.classList.remove('animate__pulse');

					picture4.classList.remove('animatedDiv');
					picture5.classList.remove("animatedDiv");
					picture6.classList.remove("animatedDiv");
					element.classList.remove("animate");
					

        });
    }
    function ani2() {
        const element = document.querySelector('.my-element2');
		const picture7 = document.querySelector('.picture7');
		const picture8 = document.querySelector('.picture8');
		const picture9 = document.querySelector('.picture9');
		
		
		var RandomWidth=Math.floor((Math.random() * 90) + 20);
		picture7.style.width = RandomWidth+"px";
		picture7.style.height = RandomWidth+"px";
		RandomWidth=Math.floor((Math.random() * 90) + 30);
		picture8.style.width = RandomWidth+"px";
		picture8.style.height = RandomWidth+"px";
		RandomWidth=Math.floor((Math.random() * 90) + 40);
		picture9.style.width = RandomWidth+"px";
		picture9.style.height = RandomWidth+"px";
		
		
		
		picture7.classList.add("animatedDiv");
		picture8.classList.add("animatedDiv");
		picture9.classList.add("animatedDiv"); 
        element.style.setProperty('animation-iteration-count', '1');
		element.classList.add("animate");
        element.style.setProperty('--animate-duration', '2s');
        element.classList.add('animate__animated', 'animate__pulse');
        element.addEventListener('animationend', () => {
            element.classList.remove('animate__pulse');
					picture7.classList.remove('animatedDiv');
					picture8.classList.remove("animatedDiv");
					picture9.classList.remove("animatedDiv");
					element.classList.remove("animate");
        });
    }
    function ani3() {
        const element = document.querySelector('.my-element3');
		const picture10 = document.querySelector('.picture10');
		const picture11 = document.querySelector('.picture11');
		const picture12 = document.querySelector('.picture12');
		            element.classList.remove('animate__pulse');
			picture10.classList.remove("animatedDiv");
		picture11.classList.remove("animatedDiv");
		picture12.classList.remove("animatedDiv"); 
		var RandomWidth=Math.floor((Math.random() * 90) + 20);
		picture10.style.width = RandomWidth+"px";
		picture10.style.height = RandomWidth+"px";
		RandomWidth=Math.floor((Math.random() * 90) + 30);
		picture11.style.width = RandomWidth+"px";
		picture11.style.height = RandomWidth+"px";
		RandomWidth=Math.floor((Math.random() * 90) + 40);
		picture12.style.width = RandomWidth+"px";
		picture12.style.height = RandomWidth+"px";		
		
		
		
		picture10.classList.add("animatedDiv");
		picture11.classList.add("animatedDiv");
		picture12.classList.add("animatedDiv"); 
        element.style.setProperty('animation-iteration-count', '1');
				element.classList.add("animate");

        element.style.setProperty('--animate-duration', '2s');
        element.classList.add('animate__animated', 'animate__pulse');
        element.addEventListener('animationend', () => {
            element.classList.remove('animate__pulse');
			picture10.classList.remove("animatedDiv");
		picture11.classList.remove("animatedDiv");
		picture12.classList.remove("animatedDiv");
					element.classList.remove("animate");
		
			
        });
    }
function  InsertFunction(emojiid){
    $.ajax({
url: "  query/request.php?function=1&emojiID="+emojiid+"",
type: "GET",
success: function(Response) {
if (Response.match(/true/)) {
console.log("Success");
} else if (Response.match(/Invalid Request/)){
console.log("Invalid Request");
}
else if (Response.match(/Parameters Missing./)){
console.log ("Parameters Missing.");
}
else {
console.log("Unknown");
}
},
error: function () {
}
});
}
function SetCount(emojiid){
    $.ajax({
url: "query/request.php?function=2&emojiID="+emojiid+"",
dataType: "json",
type: "GET",
success: function(Response) {
    //return Response.result;
    console.log(Response.result);
},
error: function () {
}
});
}


    function displaycount() {
        document.getElementById('carrier').innerHTML = count();
    }
    function displaycount1() {
        document.getElementById('carrier1').innerHTML = count1();
    }
    function displaycount2() {
        document.getElementById('carrier2').innerHTML = count2();
    }
    function displaycount3() {
        document.getElementById('carrier3').innerHTML = count3();
    }