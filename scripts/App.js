// Slider
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
const slider = document.querySelector('.slider');

        next.addEventListener('click', function(){
            const slides = document.querySelectorAll('.slides');
            slider.appendChild(slides[0]);
        })
        prev.addEventListener('click', function(){
            const slides = document.querySelectorAll('.slides');
            slider.prepend(slides[slides.length - 1]);
        })

// End slider






