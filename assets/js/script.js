let card = document.querySelectorAll('.card');
let cardFront = document.querySelector('.card__face--front');
console.log(cardFront);

let button = document.querySelectorAll('.cardButton');


for (let i = 0; i < button.length; i++) {
    button[i].addEventListener('click', function () {
        card[i].classList.toggle('is-flipped');

    })
}
// button.addEventListener('click', function () {
//     card.classList.toggle('is-flipped');
// });