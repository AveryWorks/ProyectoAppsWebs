var ImageSlider = document.querySelectorAll('.resume__slider img');
var currentImage=0;
function changeImage(){
    ImageSlider[currentImage].style.display = 'none';
    currentImage = (currentImage+1) % currentImage.length;
    ImageSlider[currentImage].style.display = 'block';
}
setInterval(changeImage, 5000)