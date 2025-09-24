const accessibilityOptions = document.getElementById("accessibility-options");
const accessibilityButton = document.getElementById("accessibility-button");

accessibilityButton.addEventListener("click", () => toggleAccessibility());
document.addEventListener("keydown", (e) => e.code === "Escape" && closeAccessibilityOptions());

const toggleAccessibility = () => accessibilityOptions.classList.toggle("active");
const closeAccessibilityOptions = () => accessibilityOptions.classList.remove("active");
