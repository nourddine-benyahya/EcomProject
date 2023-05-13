const slider = document.querySelector('.slider');
const images = document.querySelectorAll('.slider img');

let counter = 0;
const delay = 3000;

function showSlide() {
  // Hide all images
  for (let i = 0; i < images.length; i++) {
    images[i].style.display = 'none';
  }

  // Show current image
  images[counter].style.display = 'block';

  // Advance to next image
  counter++;
  if (counter >= images.length) {
    counter = 0;
  }

  // Wait and show next slide
  setTimeout(showSlide, delay);
}

// Start the slideshow
showSlide();