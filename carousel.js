'use strict';

window.addEventListener('DOMContentLoaded', () => {
    //carousel始まり----------------------------------------------
    const next = document.getElementById('next');
    const prev = document.getElementById('prev');
    const ul = document.querySelector('.carousel-ul');
    const slides = ul.children;
    const dots = [];
    let currentIndex = 0;



    //右・左の矢印をスライドの場所に応じて表示

    function updateButton() {
        prev.classList.remove('hidden');
        next.classList.remove('hidden');
        if (currentIndex === 0) {
            prev.classList.add('hidden');
        }
        if (currentIndex === slides.length - 1) {
            next.classList.add('hidden');
        }
    }

    //下のボタン作成

    function setupDots() {
        for (let i = 0; i < slides.length; i++) {
            const button = document.createElement('button');
            button.addEventListener('click', () => {
                currentIndex = i;
                updateDots();
                moveSlides();
                updateButton();
            });
            dots.push(button);
            document.querySelector('.carousel-nav').appendChild(button);
        }
        dots[0].classList.add('current');
    };

    function updateDots() {
        dots.forEach((dot) => {
            dot.classList.remove('current');
        });
        dots[currentIndex].classList.add('current');
    };
    //最初の画面
    updateButton();
    setupDots();

    //スライドショ
    function moveSlides() {
        const slideWidth = slides[0].getBoundingClientRect().width;
        ul.style.transform = `translateX( ${- 1 * slideWidth * currentIndex}px)`;
    }

    //スライド作成
    //「次へ」と「前に戻る」

    next.addEventListener('click', () => {
        currentIndex++;
        updateButton();
        moveSlides();
        updateDots();

    });
    prev.addEventListener('click', () => {
        currentIndex--;
        updateButton();
        moveSlides();
        updateDots();

    });

    window.addEventListener('resize', () => {
        moveSlides();
    })

    //carousel終わり---------------------------------------------


});