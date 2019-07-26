var image=document.getElementById("slideimages")
var imageArray=["images/piano.jpg","images/computer.jpg.jpg"];
var imageIndex=0;
function changeImage(){
image.setAttribute("src",imageArray[imageIndex]);
imageIndex++;
if(imageIndex >= imageArray.length){
imageIndex=0;
}
}
setInterval(changeImage,5000);
