var x;
var em1;
var em2;
var q;
var i;
var pn
function evl()
{
	x = document.getElementById("Uname").value;
    em1 = document.getElementById("eid").value;
    em2 = document.getElementById("emailError");
    pn = document.getElementById("pho").value;
    pe = document.getElementById("phoErr");
	q=em1[0];
	
	if(em1.indexOf(".")<=1 || em1.indexOf(".")<em1.indexOf("@"))
	{
		
         em2.innerHTML="<p style='background-color:white'>Dot missing or misplaced</p><br> ";
	 return false; 
	}
  if(pn.length<10 || pn.length>10)
  {
	// alert("10");
  phoErr.innerHTML="<p style='background-color:white; height:30px; width:300px; '>Number should contain 10 digits</p> ";
	   return false;
  }

 if(isNaN(pn))
 {
	  phoErr.innerHTML="<p style='background-color:white; height:30px; width:200px; '>Enter Number</p> ";
	  return false;
 }
   if(pn.charAt(0)!=9 && pn.charAt(0)!=8 && pn.charAt(0)!=7)
 {
	// alert("10");
  phoErr.innerHTML="<p style='background-color:white; height:30px; width:350px; '>Number should start with 9, 8 or 7</p> ";
	   return false;
 }
}
//window.onload=evl;