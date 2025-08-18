// Seleciona o botão
const themeToggle = document.getElementById("theme-toggle");

// Verifica se já existe preferência salva
const currentTheme = localStorage.getItem("theme");
if (currentTheme === "dark") {
  document.body.classList.add("dark-mode");
  themeToggle.textContent = "☀️ Alternar tema";
}

// Alterna tema ao clicar no botão
themeToggle.addEventListener("click", () => {
  document.body.classList.toggle("dark-mode");

  // Salva preferência
  if (document.body.classList.contains("dark-mode")) {
    localStorage.setItem("theme", "dark");
    themeToggle.textContent = "☀️ Alternar tema";
  } else {
    localStorage.setItem("theme", "light");
    themeToggle.textContent = "🌙 Alternar tema";
  }
});
