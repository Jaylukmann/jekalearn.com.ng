<script type="text/javascript">
  var image=document.getElementById("bgpix")
var imageArray=["images.jpg","banner.jpg","whitestudents.jpg","mer.jpg"];
var imageIndex=0;
function changeImage(){
image.setAttribute("src",imageArray[imageIndex]);
imageIndex++;
if(imageIndex >= imageArray.length){
imageIndex=0;
}
}
setInterval(changeImage,3000);
