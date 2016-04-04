

function addtoorder(x){
if(document.getElementById("l1").innerHTML==null){
document.getElementById("l1").innerHTML=x;}
else {
var y=document.getElementById("l1").innerHTML; 
var yy=Number(y.trim());
var total=(x+yy);
var vat=0.125*total;
var amt=vat+total;
document.getElementById("l1").innerHTML=total;
document.getElementById("l2").innerHTML=vat;
document.getElementById("l3").innerHTML=amt;
document.getElementById("amount").innerHTML=amt;
}

        }
function delorder(x){
var y=document.getElementById("l1").innerHTML; 
var yy=Number(y.trim());
var total=yy-x;
var vat=0.125*total;
var amt=total+vat;
document.getElementById("l1").innerHTML=total;
document.getElementById("l2").innerHTML=vat;
document.getElementById("l3").innerHTML=amt;
document.getElementById("amount").innerHTML=amt;

}	


	




