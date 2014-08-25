<?php ?>
<!DOCTYPE html>
<html>
<head>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <title> We Da Best </title>
  <style>
    body {padding: 0; margin: 0; overflow: hidden; text-align:center;
      font-size: 40px;background-color:teal; color: white;
      cursor: url('anson.png'), auto;
    }
    
    
    #hm {z-index: 100000 !important;}
    img{
      width:15%;
    }
  </style>
</head>
<body>
  
  <div id="hm"><h1> We Da Best </h1>
  <marquee>Knew it when we started, know it when we leave.</marquee>
  <h3> We out, suckahs. </h2>
  <canvas id="canvas">

  <div style="color:green; background-color:red; height:900px; width: 900px; font-size:45px;"><h1 style="position:absolute;margin-left:450px;">WE LOVE YOU ANSON "THE TIGER" HAN!!!! and tom and dave and chris and drew and whoever</h1></div>

  </canvas>
  </div>
  <script>

   
    // RequestAnimFrame: a browser API for getting smooth animations
window.requestAnimFrame = (function(){
  return  window.requestAnimationFrame       || 
      window.webkitRequestAnimationFrame || 
      window.mozRequestAnimationFrame    || 
      window.oRequestAnimationFrame      || 
      window.msRequestAnimationFrame     ||  
      function( callback ){
      window.setTimeout(callback, 1000 / 60);
      };
})();

// Initialize the canvas first with 2d context like 
// we always do.
var canvas = document.getElementById("canvas"),
  ctx = canvas.getContext("2d"),
  
  // Now get the height and width of window so that
  // it works on every resolution. Yes! on mobiles too.
  W = window.innerWidth,
  H = window.innerHeight;

// Set the canvas to occupy FULL space. We want our creation
// to rule, don't we?
canvas.width = W;
canvas.height = H;

canvas.addEventListener("mousedown",mouseDown, false);
canvas.addEventListener("mousemove",mouseXY, false);
canvas.addEventListener("touchstart", touchDown, false);
canvas.addEventListener("touchmove", touchXY, true);
canvas.addEventListener("touchend", touchUp, false);


// Some variables for later use
var circles = [],
  circlesCount = 20,
  mouse = {},
  mouseIsDown = 0;

// Every basic and common thing is done. Now we'll create
// a function which will paint the canvas black.
function paintCanvas() {
  
  // Default fillStyle is also black but specifying it
  // won't hurt anyone and we can change it back later.
  // If you want more controle over colors, then declare
  // them in a variable.
  ctx.globalCompositeOperation = "source-over";
  //ctx.fillStyle = "black";
  ctx.fillRect(0, 0, W, H);
}

// This will act as a class which we will use to create
// circle objects. Also, remember that class names are
// generally started with a CAPITAL letter and are 
// singular
function Circle() {
  this.x = Math.random() * W;
  this.y = Math.random() * H;
  
  this.radius = 20;
  
  this.r = Math.floor(Math.random() * 255);
  this.g = Math.floor(Math.random() * 255);
  this.b = Math.floor(Math.random() * 255);
  
  this.color = "rgb("+ this.r +", "+ this.g +", "+ this.b +")";
  
  this.draw = function() {
    ctx.globalCompositeOperation = "lighter";
    ctx.beginPath();
    ctx.fillStyle = this.color;
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI*2, false);
    ctx.fill();
    ctx.closePath();
  }
}

// Insert a random circle to the circles array.
for(var i = 0; i < circlesCount; i++) {
  circles.push(new Circle());
}

// A function that will be called in the loop, so
// consider it as the `main` function
function draw() {
  paintCanvas();
  
  for(i = 0; i < circles.length; i++) {
    var c1 = circles[i],
      c2 = circles[i-1];
    
    circles[circles.length - 1].draw();
    
    if(mouse.x && mouse.y) {
      circles[circles.length - 1].x = mouse.x;
      circles[circles.length - 1].y = mouse.y;
      c1.draw();
    }
    
    if(i > 0) {
      c2.x += (c1.x - c2.x) * 0.6;
      c2.y += (c1.y - c2.y) * 0.6;
    }
  }
  var c=document.getElementById("canvas");
var ctx=c.getContext("2d");

ctx.font="80px Georgia";
ctx.fillText("WE LOVE YOU ANSON THE TIGER HAN!",120,250);

ctx.font="90px Verdana";
// Create gradient
var gradient=ctx.createLinearGradient(0,0,c.width,0);
//gradient.addColorStop("0","magenta");
//gradient.addColorStop("0.5","blue");
//gradient.addColorStop("1.0","red");
// Fill with gradient
//ctx.fillStyle=gradient;
ctx.fillText("aka Big smile!",450,400);
ctx.fillText("and ToM and D4v3420 and Chris and drew and whoever",120,500);


}
function mouseUp() {
    mouseIsDown = 0;
    mouseXY();
}
 
function touchUp() {
    mouseIsDown = 0;
}
 
function mouseDown() {
    mouseIsDown = 1;
    mouseXY();
}
 
function touchDown() {
    mouseIsDown = 1;
    touchXY();
}

function mouseXY(e) {
    e.preventDefault();
    mouse.x = e.pageX - canvas.offsetLeft;
    mouse.y = e.pageY - canvas.offsetTop;
}
 
function touchXY(e) {
    e.preventDefault();
    mouse.x = e.targetTouches[0].pageX - canvas.offsetLeft;
    mouse.y = e.targetTouches[0].pageY - canvas.offsetTop;
}

// The loop
function animloop() {
  draw();
  requestAnimFrame(animloop);
}

animloop();


  $(document).ready(function(){
    var h = $(window).height();      
      var w = $(window).width(); 
    var x1 = w-Math.floor(Math.random()*900), y1  = h-Math.floor(Math.random()*900);
    var x2 = w-Math.floor(Math.random()*500), y2  = h-Math.floor(Math.random()*500);
    var x3 = w-Math.floor(Math.random()*300), y3  = h-Math.floor(Math.random()*300);

    $('body').append("<img id='han' style='position:absolute;z-index:5000000;left:50%; top:50%' src='hanthetiger.jpg'/>").append("<img id='dave' style='position:absolute;z-index:5000000;left:10%; top:10%;' src='dave.jpg'/>").append("<img id='tom' style='position:absolute;z-index:5000000;left:75%;top:75%' src='tom.jpg'/>");

    setInterval(function(){      
      $('img').each(function(){  
       var originalOffset = $(this).position(), $this = $(this), tLeft = w-Math.floor(Math.random()*900), tTop  = h-Math.floor(Math.random()*900); 
       $(this).animate({"left": tLeft , "top": tTop},
          5000,
          function(){   
           $this.animate({  
            "left": originalOffset.left,
           "top": originalOffset.top    
           },3000); 
        }); 
    }); 
   }, 1000);   
  });
  </script>
</body>
</html>