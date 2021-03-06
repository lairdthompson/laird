var colors = new Array(
  //[62,35,255],
  //[60,255,60],
  //[255,35,98],
  //[250, 255, 73],
  //[255,0,255],
  //[255,128,0]);
  [178, 29, 29],
  [137, 4, 158],
  [255, 35 ,98],
  [250, 255, 73],
  [255,0,255],
  [255,128,0]);

var step = 0;
//color table indices for: 
// current color left
// next color left
// current color right
// next color right
var colorIndices = [0,1,2,3];

//transition speed
var gradientSpeed = 0.002;

function updateGradient()
{
var c0_0 = colors[colorIndices[0]];
var c0_1 = colors[colorIndices[1]];
var c1_0 = colors[colorIndices[2]];
var c1_1 = colors[colorIndices[3]];

var istep = 1 - step;
var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
var color1 = "rgb("+r1+","+g1+","+b1+")";

var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
var color2 = "rgb("+r2+","+g2+","+b2+")";

 $('#gradient').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
  
  step += gradientSpeed;
  if ( step >= 1 )
  {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];
    
    //pick two new target color indices
    //do not pick the same as the current one
    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    
  }
}

setInterval(updateGradient,30);

//Tab box

$(document).ready(function() {

  $(".tab_content").hide();
  $(".tab_content:first").show(); 

  $("ul.tabs li").click(function() {
    $("ul.tabs li").removeClass("active");
    $(this).addClass("active");
    $(".tab_content").hide();
    var activeTab = $(this).attr("rel"); 
    $("#"+activeTab).fadeIn(); 
  });



  // get previous state and initiate the class
if($.cookie("state") == 1) {
    $("#tab-t").addClass("hide-top");
} else {
    $("#tab-t").removeClass("hide-top");
}


    $("#tab-t").toggleClass("hide-top");
    if($("nav").hasClass("hide-top")) {
        $.cookie("state", 1);
    } else {
        $.cookie("state", 0);
    }
    return false;
  });
  

//Masonary disabled

var container = document.querySelector('.masonry');
    var msnry;
    // initialize Masonry after all images have loaded
    imagesLoaded( container, function() {
    msnry = new Masonry( container );
    });
  var container = document.querySelector('.masonry');
    var msnry = new Masonry( container, {
      // options
      columnWidth: 200,
      itemSelector: '.masonry.item'
    });
















