var Enterprenurs = setInterval(Enterprenurscount, 0.05)
var Campaigns = setInterval(Campaignscount, 0.01)
var Cities = setInterval(Citiescount, 1000)
let count1 = 1;
let count2 = 1;
let count4 = 1;

function Enterprenurscount(){
    count1++;
    document.querySelector("#number1").innerHTML = count1;
   if(count1 == 2600){
    clearInterval(Enterprenurs)
   }
}
function Campaignscount(){
    count2++;
    document.querySelector("#number2").innerHTML = count2;
   if(count2 == 7000){
    clearInterval(Campaigns)
   }
}
function Citiescount(){
    count4++;
    document.querySelector("#number4").innerHTML = count4;
   if(count4 == 26){
    clearInterval(Cities)
   }
 
}