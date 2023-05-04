window.addEventListener('load', function () {
  var preloader = document.querySelector('.preloader');
  setTimeout(function () {
      preloader.style.display = 'none';
  }, 300); 
});
  const images = document.querySelectorAll('.animate');

images.forEach((image) => {
  image.addEventListener('mouseover', () => {
    image.classList.add('animate-hover');
  });

  image.addEventListener('mouseout', () => {
    image.classList.remove('animate-hover');
  });
});