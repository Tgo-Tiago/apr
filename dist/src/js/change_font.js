const increaseFontButton = document.getElementById("increase-font-accessibility-button");
const decreaseFontButton = document.getElementById("decrease-font-accessibility-button");

const changeRootFontSize = (value) => {
  const actualFontSize = parseFloat(getComputedStyle(document.documentElement).fontSize);

  const newFontSize = actualFontSize + value;

  if (newFontSize > 35 || newFontSize < 10) return;

  document.documentElement.style.fontSize = `${newFontSize}px`;
};

increaseFontButton.addEventListener("click", () => {
  changeRootFontSize(4);
});

decreaseFontButton.addEventListener("click", () => {
  changeRootFontSize(-4);
});
