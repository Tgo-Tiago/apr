const contrastButton = document.getElementById("accessibility-contrast-button");

contrastButton.addEventListener("click", () => toggleContrast());

const toggleContrast = () => document.body.classList.toggle("contrast");

const getIsContrastActive = () => document.body.classList.contains("contrast");
