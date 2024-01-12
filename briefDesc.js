const boxes = document.querySelectorAll('.box');
let currentIndex = 0;

function zoomIn() {
  // Remove the 'zoomed' class from all boxes
  boxes.forEach(box => box.classList.remove('zoomed'));

  // Zoom in and invert colors for the current box
  boxes[currentIndex].classList.add('zoomed');

  currentIndex = (currentIndex + 1) % boxes.length; // Move to the next box or cycle back to the first.
  setTimeout(zoomIn, 2000); // Adjust the delay before the next zoom animation (3 seconds in this example).
}

setTimeout(zoomIn, 3000); // Start the animation loop.
// Get the button
const scrollToTopButton = document.getElementById("scrollToTopBtn");
      
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollToTopButton.style.display = "block";
  } else {
    scrollToTopButton.style.display = "none";
  }
};

// Scroll to the top of the document when the button is clicked
function scrollToTop() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0; 
}

