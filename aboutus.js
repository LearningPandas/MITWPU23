// all profile images 
let images1 = ['/images/aboutus/Vansh1.jpeg', '/images/aboutus/Vansh2.jpg', '/images/aboutus/Vansh3.jpg'];
let images2 = ['/images/aboutus/Deepak1.jpeg', '/images/aboutus/Deepak2.jpeg', '/images/aboutus/Deepak3.jpeg'];
let images3 = ['/images/aboutus/Raj1.jpeg', '/images/aboutus/Raj2.jpeg', '/images/aboutus/Raj3.jpeg'];
let images4 = ['/images/aboutus/Abby1.jpg', '/images/aboutus/Abby2.jpg', '/images/aboutus/Abby3.jpg'];
let images5 = ['/images/aboutus/Shrushti1.jpg', '/images/aboutus/Shrushti2.jpg', '/images/aboutus/Shrushti3.jpg'];

// container
let index = 0;
const imgElement1 = document.querySelector('.mainPhoto1');
const imgElement2 = document.querySelector('.mainPhoto2');
const imgElement3 = document.querySelector('.mainPhoto3');
const imgElement4 = document.querySelector('.mainPhoto4');
const imgElement5 = document.querySelector('.mainPhoto5');

// function to change images url
function change1() {
    imgElement1.src = images1[index];
    index > 1 ? index = 0 : index++;
}
function change2() {
    imgElement2.src = images2[index];
    index > 1 ? index = 0 : index++;
}
function change3() {
    imgElement3.src = images3[index];
    index > 1 ? index = 0 : index++;
}
function change4() {
    imgElement4.src = images4[index];
    index > 1 ? index = 0 : index++;
}
function change5() {
    imgElement5.src = images5[index];
    index > 1 ? index = 0 : index++;
}

// image change after every 3 seconds
window.onload = function () {
    setInterval(change1, 3000);
    setInterval(change2, 3200);
    setInterval(change3, 2900);
    setInterval(change4, 2800);
    setInterval(change5, 2700);
};