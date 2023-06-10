//navbar Fixed
window.onscroll = function(){
    const header = document.querySelector('header');
    const text1 = document.querySelector('#text1');
    const text2 = document.querySelector('#text2');
    const text3 = document.querySelector('#text3');
    const text4 = document.querySelector('#text4');
    const FixedNav = header.offsetTop;

    if(window.pageYOffset > FixedNav){
        header.classList.add('navbar-fixed');
    }else{
        header.classList.remove('navbar-fixed');
    }

    if(window.pageYOffset > FixedNav){
        text1.classList.add('text1');
    }else{
        text1.classList.remove('text1');
    }

    if(window.pageYOffset > FixedNav){
        text2.classList.add('text2');
    }else{
        text2.classList.remove('text2');
    }

    if(window.pageYOffset > FixedNav){
        text3.classList.add('text3');
    }else{
        text3.classList.remove('text3');
    }

    if(window.pageYOffset > FixedNav){
        text4.classList.add('text4');
    }else{
        text4.classList.remove('text4');
    }
}



// dropdown navbar
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#navMenu');

hamburger.addEventListener('click', function(){
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});


