
<div class="slideshow-container"> 

  <div class="mySlides fade">
    <img src="image/banner/1.jpg" style="width:100%; height: 700px;">
    
  </div>

  <div class="mySlides fade">
    <img src="image/banner/2.jpg" style="width:100%; height: 700px;">
    
  </div>

  <div class="mySlides fade">
    <img src="image/banner/3.jpg" style="width:100%; height: 700px;">
    
  </div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
  var slideIndex = 1;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>

