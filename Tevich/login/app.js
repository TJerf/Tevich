let loginModal = document.getElementById("login-modal");
const loginCloseBtn = document.querySelectorAll("#close-btn")[1];

loginCloseBtn.addEventListener("click", () => {
  loginModal.style.display = "none";
  enableScrolling();
});
