(function() {
  function hidePreloader() {
    var preloader = document.querySelector('.preloader');
    preloader.style.display = 'none';
  }

  function addHoverClass() {
    const images = document.querySelectorAll('.animate');

    images.forEach((image) => {
      image.addEventListener('mouseover', () => {
        image.classList.add('animate-hover');
      });

      image.addEventListener('mouseout', () => {
        image.classList.remove('animate-hover');
      });
    });
  }

  window.myLibrary = {
    hidePreloader: hidePreloader,
    addHoverClass: addHoverClass
  };
})();
