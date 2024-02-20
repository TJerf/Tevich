let signupStep1 = document.getElementById("signup-step-1");
let signupStep2 = document.getElementById("signup-step-2");
let signupStep3 = document.getElementById("signup-step-3");
let stepFooter1 = document.getElementById("step-footer-1");
let stepFooter2 = document.getElementById("step-footer-2");
let stepFooter3 = document.getElementById("step-footer-3");
let signupModal = document.getElementById("signup-modal");
const buttons = document.getElementsByClassName("signup-nextstep-btn");
const backBtns = document.querySelectorAll(".back-btn button");
const closeBtn = document.getElementById("close-btn");

function changeCurrentStep(step) {
  if (step == 1) {
    signupStep1.style.display = "flex";
    signupStep2.style.display = "none";
    signupStep3.style.display = "none";
    stepFooter1.style.display = "flex";
    stepFooter2.style.display = "none";
    stepFooter3.style.display = "none";
  } else if (step == 2) {
    signupStep1.style.display = "none";
    signupStep2.style.display = "flex";
    signupStep3.style.display = "none";
    stepFooter1.style.display = "none";
    stepFooter2.style.display = "flex";
    stepFooter3.style.display = "none";
  } else if (step == 3) {
    signupStep2.style.display = "none";
    signupStep3.style.display = "flex";
    stepFooter2.style.display = "none";
    stepFooter3.style.display = "flex";
  }
}

let currentStep = 1;
for (button of buttons) {
  button.addEventListener("click", () => {
    currentStep++;

    if (currentStep > 3) currentStep = 1;

    changeCurrentStep(currentStep);
  });
}

for (button of backBtns) {
  button.addEventListener("click", () => {
    currentStep--;

    if (currentStep < 0) currentStep = 0;

    changeCurrentStep(currentStep);
  });
}

closeBtn.addEventListener("click", () => {
  signupModal.style.display = "none";
  enableScrolling();
});
