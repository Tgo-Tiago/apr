const accessibilityOptions = document.getElementById("accessibility-options");
const accessibilityButton = document.getElementById("accessibility-button");

accessibilityButton.addEventListener("click", () => {
  accessibilityOptions.classList.toggle("active");
});
