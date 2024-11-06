// Header slider
let nextBtn = document.querySelector('.nextBtn');
let prevBtn = document.querySelector('.prevBtn');
let carousel = document.querySelector('.carousel');
let list = document.querySelector('.list');
let item = document.querySelector('.item');
let runningTime = document.querySelector('.timeRunning');

let timeRunning = 3000
let timeAutoNext = 5000

nextBtn.onclick = function(){
    showSlider('nextBtn')
}

prevBtn.onclick = function(){
    showSlider('prevBtn')
}

let runTimeOut
let runNextAuto = setTimeout(() => {
    nextBtn.click()
}, timeAutoNext)



function showSlider(type) {
    let sliderItemsDom = list.querySelectorAll('.carousel .list .item')
    if(type === 'nextBtn') {
        list.appendChild(sliderItemsDom[0])
        carousel.classList.add('nextBtn')
    } else {
        list.prepend(sliderItemsDom[sliderItemsDom.length - 1])
        carousel.classList.add('prevBtn')
    }

    clearTimeout(runTimeOut)

    runTimeOut = setTimeout(() => {
        carousel.classList.remove('nextBtn')
        carousel.classList.remove('prevBtn')
    }, timeRunning)

    clearTimeout(runNextAuto)
    runNextAuto = setTimeout(() => {
        nextBtn.click()
    }, timeAutoNext)
}
// Header slider end

//accordion

const accordion = document.getElementsByClassName('contentBx');

for(i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener('click', function(){
        this.classList.toggle('active')
    })
}

//accordion end