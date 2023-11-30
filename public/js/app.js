AOS.init()

// // Background image slider
// const sliderImage = ["1.jpeg", "3.jpeg", "4.jpeg", "maron2.jpg", "maron3.jpg", "maron6.jpg"];

// let slider = document.querySelector('.background-image');
// let sliderGridItems = [...document.querySelectorAll('.grid-item')];

// let currentImage = 0;

// setInterval(() => {
//     changeSliderImage();
// }, 5000)

// const changeSliderImage = () => {
//     sliderGridItems.map((gridItem, index) => {
//         setTimeout(() => {
//             gridItem.classList.remove('hide');
//             setTimeout(() => {
//                 if (index == sliderGridItems.length - 1) {
//                     if(currentImage >= sliderImage.length - 1) {
//                         currentImage = 0;
//                     } else {
//                         currentImage++;
//                     }

//                     slider.src = "img/" + sliderImage[currentImage];

//                     sliderGridItems.map((item, i) => {
//                         setTimeout(() => {
//                             item.classList.add('hide');
//                         }, i * 100)
//                     })
//                 }
//             }, 100);

//         }, index * 100);
//     })
// }

// navbar
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    if(screenY >= 188){
        navbar.classList.add('bg');
    } else{
        navbar.classList.remove('bg');
    }
})

// Scroll Down
document.addEventListener('DOMContentLoaded', function() {
    const scrollDownIcon = document.getElementById('scrollDownIcon');

    // Add a click event listener to the scroll down icon
    scrollDownIcon.addEventListener('click', function() {
        // Scroll to a specific section or a certain distance down the page
        window.scrollBy({
            top: window.innerHeight, // You can adjust this value as needed
            behavior: 'smooth' // Add smooth scrolling effect
        });
    });
});
