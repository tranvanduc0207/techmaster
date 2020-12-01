<a href="#" id="back-to-top">
	<i class="fas fa-arrow-up"></i>
</a>
<script>//Back to top button
//Get the button
var mybutton = document.getElementById("back-to-top");

// When the user scrolls down 400px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > '400' || document.documentElement.scrollTop > '400') {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
</script>