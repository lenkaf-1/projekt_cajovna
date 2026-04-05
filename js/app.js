const accordion = document.getElementsByClassName("accordion");
for (a of accordion) {
  a.addEventListener("click", function () {
    this.classList.toggle("active");
  });
}
let slides = document.querySelectorAll(".slide");
let current = 0;

function showSlide(index) {
  slides.forEach((slide) => slide.classList.remove("active"));
  slides[index].classList.add("active");
}

function nextSlide() {
  current = (current + 1) % slides.length;
  showSlide(current);
}

setInterval(nextSlide, 3000);

window.addEventListener("load", function () {
  alert("Vitaj na stránke!");
});

if (document.cookie.includes("cookiesAccepted=true")) {
  document.getElementById("cookie-banner").style.display = "none";
}

document.getElementById("cookie-accept").addEventListener("click", function () {
  document.cookie =
    "cookiesAccepted=true; path=/; max-age=" + 60 * 60 * 24 * 30;
  document.getElementById("cookie-banner").style.display = "none";
});
