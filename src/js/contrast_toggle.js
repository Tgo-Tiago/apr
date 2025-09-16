const contrastButton = document.getElementById("accessibility-contrast-button");

contrastButton.addEventListener("click", () => {
  document.body.classList.toggle("contrast");
});
