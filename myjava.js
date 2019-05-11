
var image=document.getElementById("myImage")
var imageArray=["images/bannerr1.jpg","images/banner3.png","images/aloe.jpg","images/brain.png"];
var imageIndex=0;
function changeImage(){
image.setAttribute("src",imageArray[imageIndex]);
imageIndex++;
if(imageIndex >= imageArray.length){
imageIndex=0;
}
}
setInterval(changeImage,3000);

var lefttext=document.getElementById(text1);
document.change.bgColor("red")

