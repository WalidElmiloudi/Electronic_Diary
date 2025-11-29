// DECLARING THE VARIABLES
const LoginForm = document.getElementById("login");
const RegisterForm = document.getElementById("register");
const goToRegister = document.getElementById("goToRegister");
const goToLogin = document.getElementById("goToLogin");
// ADDING AN EVENT LISTENER TO THE REGISTER REDIRECT
goToRegister.addEventListener("click", () => {
  LoginForm.classList.replace("flex", "hidden");
  LoginForm.setAttribute("aria-hidden", "true");
  RegisterForm.classList.replace("hidden", "flex");
  RegisterForm.removeAttribute("aria-hidden");
})
// ADDING AN EVENT LISTENER TO THE LOGIN REDIRECT
goToLogin.addEventListener("click", () => {
  RegisterForm.classList.replace("flex", "hidden");
  RegisterForm.setAttribute("aria-hidden", "true");
  LoginForm.classList.replace("hidden", "flex");
  LoginForm.removeAttribute("aria-hidden");
})