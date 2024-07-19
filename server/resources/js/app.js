import "./bootstrap";

const wrapper = document.querySelector(".sliderWrapper");
const products = document.querySelectorAll(".sliderItem");

const currentProductImg = document.querySelector(".productImg");
const currentProductTitle = document.querySelector(".productTitle");
const currentProductPrice = document.querySelector(".productPrice");
const currentProductSizes = document.querySelectorAll(".size");

let currentIndex = 0;
let forward = true;

const updateProductDisplay = (index) => {
    const chosenProduct = products[index];
    currentProductTitle.textContent =
        chosenProduct.querySelector(".sliderTitle").textContent;
    currentProductPrice.textContent =
        chosenProduct.querySelector(".sliderPrice").textContent;
    currentProductImg.src = chosenProduct.querySelector(".sliderImg").src;
};

const slideShow = setInterval(() => {
    // Change the current slide
    wrapper.style.transform = `translateX(${-100 * currentIndex}vw)`;
    updateProductDisplay(currentIndex);

    // Update index and check direction
    if (forward) {
        currentIndex++;
        if (currentIndex >= products.length) {
            currentIndex = products.length - 1;
            forward = false;
        }
    } else {
        currentIndex--;
        if (currentIndex < 0) {
            currentIndex = 0;
            forward = true;
        }
    }
}, 2000);

currentProductSizes.forEach((size) => {
    size.addEventListener("click", () => {
        currentProductSizes.forEach((s) => {
            s.style.backgroundColor = "white";
            s.style.color = "black";
        });
        size.style.backgroundColor = "black";
        size.style.color = "white";
    });
});

const productButton = document.querySelector(".productButton");
const payment = document.querySelector(".payment");
const close = document.querySelector(".close");

productButton.addEventListener("click", () => {
    payment.style.display = "flex";
});

close.addEventListener("click", () => {
    payment.style.display = "none";
});


document.getElementById("menu-button").addEventListener("click", function () {
    const menuContent = document.getElementById("menu-content");
    menuContent.classList.toggle("hidden");
});
