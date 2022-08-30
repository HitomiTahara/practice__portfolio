'use strict';

window.addEventListener('DOMContentLoaded', () => {

    // loading-------------------------------

    window.onload = function () {
        const spinner = document.getElementById('loading');

        setTimeout(() => {
            spinner.classList.add('loaded');
        }, 2000); //2000が最適

        const loadingDisplay = function () { //非表示にする関数を定義
            loading.classList.add('is-hide');
        }


    }
    // ハンバーガーメニュー始まり--------------------------------------
    const open = document.getElementById('open');
    const overlay = document.querySelector('.overlay');
    const close = document.getElementById('close');
    const aside = document.querySelector('.aside');
    const asideCopyright = document.querySelector('.aside_copyright');

    open.addEventListener('click', () => {
        overlay.classList.add('show');
        open.classList.add('hide');
        aside.classList.add('asideoverlay');
        asideCopyright.classList.add('asideoverlay');
    });

    close.addEventListener('click', () => {
        overlay.classList.remove('show');
        open.classList.remove('hide');
        aside.classList.remove('asideoverlay');
        asideCopyright.classList.remove('asideoverlay');
    });


    // 上下スライド pagepiling.js使用-----------------------------

    jQuery(function ($) {
        $('#pagepiling').pagepiling({
            menu: '#menu',
            sectionSelector: '.section',
            anchors: ['page1', 'page2', 'page3', 'page4'],
            sectionsColor: ['#fff', '#fff', '#fff', '#000'],
            scrollingSpeed: 300, //スクロールの早さ
            // loopBottom: true, // 上スクロール→下へ
            // loopTop: true, // 下スクロール→TOPに戻る
            easing: 'swing', //スクロールの緩急
            touchSensitivity: 201,
            navigation: {
                'textColor': '#F5B2AD',
                'bulletsColor': '#F5B2AD',
                'position': 'right',
                'tooltips': ['Home', 'Work', 'About', 'Blog']
            },

            afterLoad: function (anchorLink, index) {
                const workTtl = document.querySelector('.work-ttl');
                const aboutTtl = document.querySelector('.about-ttl');
                const blogTtl = document.querySelector('.blog-ttl');
                //using anchorLink

                if (anchorLink == 'page2') {
                    workTtl.classList.add('appear');
                } else if (anchorLink == 'page3') {
                    aboutTtl.classList.add('appear');
                } else if (anchorLink == 'page4') {
                    blogTtl.classList.add('appear');
                }

            }

        });

    });


    // //無理やり背景をグラデに！！
    // document.getElementById('section2').style.backgroundImage = '../assets/img/logos/01.png';
    // document.getElementById('section3').style.background = 'linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 100%)';
    // document.getElementById('section4').style.background = 'linear-gradient(180deg, #FFDEE9 0%, #ffffff 30%)';


    //blog フワッとする-------------------------------------------

    function blogbox() {
        const targets = document.querySelectorAll('.blog_box');


        function callback(entries, obs) {
            console.log(entries);

            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }
                entry.target.classList.add('appear');
                obs.unobserve(entry.target);

            })
        }
        const options = {
            threshold: 0.2,
        };

        const observer = new IntersectionObserver(callback, options);

        targets.forEach((target) => {
            observer.observe(target) //監視を宣言
        });
    };
    blogbox();



    //work フワッとする-------------------------------------------

    function archivebox() {
        const targets = document.querySelectorAll('.archive_box');


        function callback(entries, obs) {
            console.log(entries);

            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }
                entry.target.classList.add('appear');
                obs.unobserve(entry.target);

            })
        }
        const options = {
            threshold: 0.2,
        };

        const observer = new IntersectionObserver(callback, options);

        targets.forEach((target) => {
            observer.observe(target) //監視を宣言
        });
    }

    archivebox();



    // accodion---------------------------------------------
    const dts = document.querySelectorAll('.about-accordion_parts');

    dts.forEach(dt => {
        dt.addEventListener('click', () => {
            dt.parentNode.classList.toggle('appear');
            dts.forEach(el => {
                if (dt !== el) {
                    el.parentNode.classList.remove('appear');
                }
            })

        })
    })




});