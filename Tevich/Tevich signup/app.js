let signupStep1 = document.getElementById("signup-step-1");
let signupStep2 = document.getElementById("signup-step-2");
let signupStep3 = document.getElementById("signup-step-3");
let stepFooter1 = document.getElementById("step-footer-1");
let stepFooter2 = document.getElementById("step-footer-2");
let stepFooter3 = document.getElementById("step-footer-3");
const buttons = document.getElementsByClassName("signup-nextstep-btn");
let currentStep = 1;
for (button of buttons) {
  button.addEventListener("click", () => {
    currentStep++;

    if (currentStep > 3) currentStep = 1;

    if (currentStep == 1) {
      signupStep1.style.display = "block";
      signupStep2.style.display = "none";
      signupStep3.style.display = "none";
      stepFooter1.style.display = "flex";
      stepFooter2.style.display = "none";
      stepFooter3.style.display = "none";
    } else if (currentStep == 2) {
      signupStep1.style.display = "none";
      signupStep2.style.display = "block";
      stepFooter1.style.display = "none";
      stepFooter2.style.display = "flex";
    } else if (currentStep == 3) {
      signupStep2.style.display = "none";
      signupStep3.style.display = "block";
      stepFooter2.style.display = "none";
      stepFooter3.style.display = "flex";
    }
  });
}
