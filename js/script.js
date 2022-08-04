// JavaScript Document
$(document).ready(function(e) {
   var r=0;
   var a=0;
   var an=0; 
   var f=0; 
	function slider(){
		var i=0;
r=r+100;
if(r==300){
	r=0;
	}
	a=a+100;
if(a==300){
	a=0;
	}
	an=an+100;
if(an==300){
	an=0;
	}
f=f+100;
if(f==300){
	f=0;
	}	
	
	setTimeout(function(){$("#in-slider").animate({right:r+"%"},400);$("#indivslider").animate({right:a+"%"},400);
	$("#f-slidermain").animate({right:an+"%"},400);$(".fea-slidermain").animate({right:f+"%"},400);slider();},i+=4000);
	
	
	}
slider();	



$("#right").click(function(e) {

	$("#in-slider").animate({right:r+"%"},400);
	
	if(r==300){
		r=0;
		}
		
});

$("#left").click(function(e) {

	if(r!=0){
r=r-100;
	$("#in-slider").animate({right:r+"%"},400);
			}
		
});
$("#newright").click(function(e) {

	$("#indivslider").animate({right:a+"%"},400);
	
	if(a==300){
		a=0;
		}
		
});

$("#newleft").click(function(e) {

	if(a!=0){
a=a-100;
	$("#indivslider").animate({right:a+"%"},400);
			}
		
});
$("#fright").click(function(e) {

	$("#f-slidermain").animate({right:an+"%"},400);
	
	if(an==300){
		an=0;
		}
		
});

$("#fleft").click(function(e) {

	if(an!=0){
an=an-100;
	$("#f-slidermain").animate({right:an+"%"},400);
			}
		
});
$("#fearight").click(function(e) {

	$(".fea-slidermain").animate({right:f+"%"},400);
	
	if(f==300){
		f=0;
		}
		
});

$("#fealeft").click(function(e) {

	if(f!=0){
f=f-100;
	$(".fea-slidermain").animate({right:f+"%"},400);
			}
		
});






	
setTimeout(function(){ $("#s1-d2").animate({top:"50%"},500); 
	
		},1100);
	
	
	
	$("#clickbtn").mouseenter(function(e) {
          $("#click-here").css("text-shadow","1px 1px 1px black");
		$("#btn-back").animate({left:"-5%"},300);
		
    });
	$("#clickbtn").mouseleave(function(e) {
      $("#click-here").css("text-shadow","0px 0px 0px black");
		$("#btn-back").animate({left:"-135%"},300);
		
    });
	$("#clickbtn2").mouseenter(function(e) {
		$("#btn-back2").animate({left:"-5%"},300);
		
    });
	$("#clickbtn2").mouseleave(function(e) {
		$("#btn-back2").animate({left:"-135%"},300);
		
    });
	
	
	var btn_click=0;
	$("#nav-btn").click(function(e) {
       
		
		$("#navbar").slideToggle(500);
		
		
    });
	$("#left").mouseenter(function(e) {
        
		$("#left img").attr("src","media/l2.png");
		
    });
	$("#left").mouseleave(function(e) {
        
		$("#left img").attr("src","media/l1.png");
		
    });
	$("#right").mouseenter(function(e) {
        
		$("#right img").attr("src","media/r2.png");
		
    });
	$("#right").mouseleave(function(e) {
        
		$("#right img").attr("src","media/r1.png");
		
    });
	
	
sessionStorage.position;	
	$("#slider").animate({right:sessionStorage.position+"%"},1);
	if(sessionStorage.position==undefined){$(".triangle img").css("display","none");}
	else if(sessionStorage.position==100){$(".triangle img").css("display","none");$("#a_st img").slideDown(1);}
	else if(sessionStorage.position==200){$(".triangle img").css("display","none");$("#a_cat img").slideDown(1);}
	else if(sessionStorage.position==300){$(".triangle img").css("display","none");$("#a_cot img").slideDown(1);}
	else if(sessionStorage.position==500){$(".triangle img").css("display","none");$("#d_st img").slideDown(1);}
	else if(sessionStorage.position==600){$(".triangle img").css("display","none");$("#d_ct img").slideDown(1);}
	else if(sessionStorage.position==700){$(".triangle img").css("display","none");$("#d_cot img").slideDown(1);}	
	else if(sessionStorage.position==800){$(".triangle img").css("display","none");$("#d_blog img").slideDown(1);}
	else if(sessionStorage.position==400){$(".triangle img").css("display","none");$("#a_blog img").slideDown(1);}	
	else if(sessionStorage.position==900){$(".triangle img").css("display","none");$("#e-st img").slideDown(1);}	
	else if(sessionStorage.position==1000){$(".triangle img").css("display","none");$("#sl img").slideDown(1);}	
		
		
	
	
	
	$("#add_store").click(function(e) {
    $(".triangle img").css("display","none");
	
	$("#a_st img").slideDown(400);
	sessionStorage.position=100;
	$("#slider").animate({right:sessionStorage.position+"%"},500);
	
});	

$("#add_category").click(function(e) {
    $(".triangle img").css("display","none");
	$("#a_cat img").slideDown(400);
	sessionStorage.position=200;
	$("#slider").animate({right:sessionStorage.position+"%"},500);
});	

$("#add_coupon").click(function(e) {
    $(".triangle img").css("display","none");
	$("#a_cot img").slideDown(400);
	sessionStorage.position=300;
	$("#slider").animate({right:sessionStorage.position+"%"},500);
});	


$("#add_blog").click(function(e) {
    $(".triangle img").css("display","none");
	$("#a_blog img").slideDown(400);
	sessionStorage.position=400;
	$("#slider").animate({right:sessionStorage.position+"%"},500);
});	

$("#del_store").click(function(e) {
    $(".triangle img").css("display","none");
	$("#d_st img").slideDown(400);
	sessionStorage.position=500;
	$("#slider").animate({right:sessionStorage.position+"%"},500);
});	

$("#del_category").click(function(e) {
    $(".triangle img").css("display","none");
	$("#d_ct img").slideDown(400);
	sessionStorage.position=600;
	$("#slider").animate({right:sessionStorage.position+"%"},500);
	
});	

$("#del_coupon").click(function(e) {
    $(".triangle img").css("display","none");
	$("#d_cot img").slideDown(400);
	sessionStorage.position=700;
	$("#slider").animate({right:sessionStorage.position+"%"},500);
	
});
$("#del_blog").click(function(e) {
    $(".triangle img").css("display","none");
	$("#d_blog img").slideDown(400);
	sessionStorage.position=800;
	$("#slider").animate({right:sessionStorage.position+"%"},500);
	
});
$("#ed-st").click(function(e) {
    $(".triangle img").css("display","none");
	$("#ed-st img").slideDown(400);
	sessionStorage.position=900;
	$("#slider").animate({right:sessionStorage.position+"%"},500);
	
});
$("#slide").click(function(e) {
    $(".triangle img").css("display","none");
	$("#sl img").slideDown(400);
	sessionStorage.position=1000;
	$("#slider").animate({right:sessionStorage.position+"%"},500);
	
});

	
	


$("#copy-btn").click(function(e) {
   var aux = document.createElement("input");

  // Assign it the value of the specified element
  aux.setAttribute("value", document.getElementById("copy-code").innerHTML);

  // Append it to the body
  document.body.appendChild(aux);

  // Highlight its content
  aux.select();

  // Copy the highlighted text
  document.execCommand("copy");

  // Remove it from the body
  document.body.removeChild(aux);

	 
});
   
   $("#cross").mouseenter(function(e) {
    $("#cross").attr("src","media/CROSS2.png");
	
});
 $("#cross").mouseleave(function(e) {
    $("#cross").attr("src","media/CROSS.png");
	
});
$("#cross").click(function(e) {
    $("#popup").css("display","none");
		$("#popup").animate({top:"-20%"},500);
		$("body").css("overflow","scroll");
		$("#bg").css("display","none");
});
$("#bg").click(function(e) {
    $("#popup").css("display","none");
		$("#popup").animate({top:"-20%"},500);
		$("body").css("overflow","scroll");
		$("#bg").css("display","none");
});

   $(document).keyup(function(e) {
     if (e.keyCode == 27) { 
	 $("#popup").css("display","none");
		$("#popup").animate({top:"-20%"},500);
		$("body").css("overflow","scroll");
		$("#bg").css("display","none");
		
    }
});

$(".reveal").click(function(e) {
    
	$("#optional").css("display","block");
	
});
$(".fshipping").click(function(e) {
    
	$("#optional").css("display","none");
	
});


$("#fblog").mouseenter(function(e) {
    
	$("#fblog img").animate({marginTop:"-10px"},300);
	
});
$("#fblog").mouseleave(function(e) {
    
	$("#fblog img").animate({marginTop:"0px"},300);
	
});
$("#twilog").mouseenter(function(e) {
    
	$("#twilog img").animate({marginTop:"-10px"},300);
	
});
$("#twilog").mouseleave(function(e) {
    
	$("#twilog img").animate({marginTop:"0px"},300);
	
});	
$("#instalog").mouseenter(function(e) {
    
	$("#instalog img").animate({marginTop:"-10px"},300);
	
});
$("#instalog").mouseleave(function(e) {
    
	$("#instalog img").animate({marginTop:"0px"},300);
	
});
$("#pinlog").mouseenter(function(e) {
    
	$("#pinlog img").animate({marginTop:"-10px"},300);
	
});
$("#pinlog").mouseleave(function(e) {
    
	$("#pinlog img").animate({marginTop:"0px"},300);
	
});
$("#inlog").mouseenter(function(e) {
    
	$("#inlog img").animate({marginTop:"-10px"},300);
	
});
$("#inlog").mouseleave(function(e) {
    
	$("#inlog img").animate({marginTop:"0px"},300);
	
});



	
});