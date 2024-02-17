const showMoreBtn = document.getElementById("show-more-btn");
let showMoreContainer = document.getElementById("show-more-container");
let streamsSecRow = document.getElementById("streams-sec-row");
const sliderContainer = document.querySelector(".slider-container");
const sliderControlsContainer = document.querySelector(".main-slider");
const sliderControls = ["previous", "next"];
const sliderItems = document.querySelectorAll(".main-slider-slide");
const signupBtn = document.getElementById("signup-btn");
const signupContainer = document.getElementById("signup-container");

function disableScrolling() {
  scrollX = window.scrollX;
  scrollY = window.scrollY;

  window.onscroll = function () {
    window.scrollTo(scrollX, scrollY);
  };
}

function enableScrolling() {
  window.onscroll = null;
}

class Carousel {
  constructor(container, items, controls) {
    this.carouselContainer = container;
    this.carouselControls = controls;
    this.carouselArray = [...items];
  }

  updateSlider() {
    this.carouselArray.forEach((el) => {
      el.classList.remove("main-slider-slide-1");
      el.classList.remove("main-slider-slide-2");
      el.classList.remove("main-slider-slide-3");
      el.classList.remove("main-slider-slide-4");
      el.classList.remove("main-slider-slide-5");
    });

    this.carouselArray.slice(0, 5).forEach((el, i) => {
      el.classList.add(`main-slider-slide-${i + 1}`);
    });
  }

  setCurrentState(direction) {
    if (direction.className == "slider-controls-previous") {
      this.carouselArray.unshift(this.carouselArray.pop());
    } else {
      this.carouselArray.push(this.carouselArray.shift());
    }
    this.updateSlider();
  }

  setControls() {
    this.carouselControls.forEach((control) => {
      // sliderControlsContainer.appendChild(document.createElement('button')).className = `slider-controls-${control}`;
      // document.querySelector(`.slider-controls-${control}`).innerHTML = control;
    });
  }

  useControls() {
    const triggers = [...sliderControlsContainer.childNodes];
    triggers.forEach((control) => {
      control.addEventListener("click", (e) => {
        e.preventDefault();
        this.setCurrentState(control);
      });
    });
  }
}

const exampleCarousel = new Carousel(
  sliderContainer,
  sliderItems,
  sliderControls
);

exampleCarousel.setControls();
exampleCarousel.useControls();

showMoreBtn.addEventListener("click", () => {
  showMoreContainer.style.display = "none";
  streamsSecRow.style.display = "flex";
});

signupBtn.addEventListener("click", () => {
  signupModal.style.display = "block";
  disableScrolling();
});
