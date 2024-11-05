// Slider
let prev = document.querySelector('.prev');
        let next = document.querySelector('.next');
        let slider = document.querySelector('.slider');

        next.addEventListener('click', function(){
            let slides = document.querySelectorAll('.slides');
            slider.appendChild(slides[0]);
        })
        prev.addEventListener('click', function(){
            let slides = document.querySelectorAll('.slides');
            slider.prepend(slides[slides.length - 1]);
        })

// End slider




//accordion

const accordion = document.getElementsByClassName('contentBx');

for(i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener('click', function(){
        this.classList.toggle('active')
    })
}

//accordion end