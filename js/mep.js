document.addEventListener("DOMContentLoaded", function() {
  var currentUrl = window.location.href;
  var links = document.querySelectorAll(".nav__link");

  links.forEach(function(link) {
    var linkUrl = link.getAttribute("href");
    if (currentUrl.includes(linkUrl)) {
      link.classList.add("active__link");
    }
  });
});
