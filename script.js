// DECLARING THE VARIABLES
const loginForm = document.getElementById("login");
const RegisterForm = document.getElementById("register");
const goToRegister = document.getElementById("goToRegister");
const goToLogin = document.getElementById("goToLogin");
// ADDING AN EVENT LISTENER TO THE REGISTER REDIRECT
goToRegister.addEventListener("click", () => {
  loginForm.classList.replace("flex", "hidden");
  loginForm.setAttribute("aria-hidden", "true");
  RegisterForm.classList.replace("hidden", "flex");
  RegisterForm.removeAttribute("aria-hidden");
})
// ADDING AN EVENT LISTENER TO THE LOGIN REDIRECT
goToRegister.addEventListener("click", () => {
  loginForm.classList.replace("flex", "hidden");
  loginForm.setAttribute("aria-hidden", "true");
  RegisterForm.classList.replace("hidden", "flex");
  RegisterForm.removeAttribute("aria-hidden");
})