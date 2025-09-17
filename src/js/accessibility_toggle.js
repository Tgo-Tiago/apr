const accessibilityOptions = document.getElementById("accessibility-options");
const accessibilityButton = document.getElementById("accessibility-button");

accessibilityButton.addEventListener("click", () => toggleAccessibility());

const toggleAccessibility = () => accessibilityOptions.classList.toggle("active");
