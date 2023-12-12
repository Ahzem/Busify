document.addEventListener("DOMContentLoaded", function () {
    const busImage = document.getElementById("bus-image");
  
    window.addEventListener("scroll", function () {
      const scrolled = window.scrollY;
      busImage.style.transform = "translateX(" + scrolled / 2 + "px)";
    });
  });
  