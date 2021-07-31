'use strict';

window.onscroll = function () { stickHeader() };

// Get the header
let header = document.getElementById("wcd-header");

// Get the offset position of the navbar
let sticky = header.offsetTop;

//constants
const logoElement = document.getElementById("header-logo-image");
const toggleIcon = document.getElementById('toggle-icon');
const collapsibles = document.querySelectorAll('.collapsible');
const navLinks = document.querySelectorAll('.nav-link');
const mainNavigation = document.getElementById("main-navigation");
const accordions = document.querySelectorAll('.accordion');


// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickHeader() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        //logoElement.setAttribute('src', '/assets//images/logoankoa-dark.svg');

    } else {
        header.classList.remove("sticky");
        //logoElement.setAttribute('src', '/assets//images/logoankoa-white.svg');
    }
}

//set active links
navLinks.forEach(element => {
    element.addEventListener('click', function (element) {
        navLinks.forEach(element => {
            if (this !== element) {
                element.classList.remove('nav-active');
            }
        });
        this.classList.add('nav-active');
    })
    element.addEventListener('click', toggleMenuIcon)
});

//collapsibles

collapsibles.forEach((item) =>
    item.addEventListener('click', toggleCollapsible)
);

header.removeEventListener('click', toggleCollapsible, false);

function toggleCollapsible() {
    this.classList.toggle('collapsible-expanded');
}


//accordions

accordions.forEach((item) =>
    item.addEventListener('click', function () {
        this.classList.toggle('accordion-expanded')
    })
);



//active or inactive responsive menu
toggleIcon.addEventListener('click', toggleMenuIcon);

function toggleMenuIcon() {
    var closeIcon = document.getElementById('close-icon');
    var menuIcon = document.getElementById('menu-icon');


    closeIcon.classList.toggle('hide-icon');
    menuIcon.classList.toggle('show-icon');
    menuIcon.classList.toggle('hide-icon');

    header.classList.toggle('collapsible-expanded');
    mainNavigation.classList.toggle('collapsible-expanded');

}


// check media queries

if (checkMedia()) {
    var aosFade = document.querySelectorAll("[data-aos]");

    aosFade.forEach(function (object) {
        var aosValue = object.getAttribute('data-aos');
        if (aosValue === 'fade-right' || aosValue === 'fade-left') {
            object.setAttribute('data-aos', 'fade-down');
        }

    });
}

function checkMedia() {
    let mq = window.matchMedia("(max-width: 768px)");
    return mq.matches;
}


// intersection observer for active menu link

const sections = document.querySelectorAll('.section');


const observerOptions = {
    root: null,
    threshold: 0.20,
    rootMargin: '-20% 0% -30% 0%'
};

const observer = new IntersectionObserver(function (entries, observer) {
    entries.forEach(entry => {

        if (entry.isIntersecting) {

            navLinks.forEach(item => {
                if (item.dataset.section === entry.target.id) {
                    item.classList.add('nav-active');
                    return;
                }
                item.classList.remove('nav-active');
            });

        }

    });
}, observerOptions);


sections.forEach(section => {
    observer.observe(section);
});





