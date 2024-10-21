'use strict';

/**
 * Add event listener on multiple elements
 */
const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
}

/**
 * NAVBAR TOGGLE FOR MOBILE
 */
const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
  document.body.classList.toggle("nav-active");
}

addEventOnElements(navTogglers, "click", toggleNavbar);

/**
 * HEADER
 * Active header when window scroll down to 100px
 */
const header = document.querySelector("[data-header]");

window.addEventListener("scroll", function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
});

/**
 * FOOTER
 * Active footer when window scroll up to 100px from bottom
 */
const footer = document.querySelector("[data-footer]");

window.addEventListener("scroll", function () {
  if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 100) {
    footer.classList.add("active");
  } else {
    footer.classList.remove("active");
  }
});

/**
 * SCROLL REVEAL
 */
const revealElements = document.querySelectorAll("[data-reveal]");
const revealDelayElements = document.querySelectorAll("[data-reveal-delay]");

const reveal = function () {
  for (let i = 0, len = revealElements.length; i < len; i++) {
    if (revealElements[i].getBoundingClientRect().top < window.innerHeight / 1.2) {
      revealElements[i].classList.add("revealed");
    }
  }
}

for (let i = 0, len = revealDelayElements.length; i < len; i++) {
  revealDelayElements[i].style.transitionDelay = revealDelayElements[i].dataset.revealDelay;
}

window.addEventListener("scroll", reveal);
window.addEventListener("load", reveal);

/**
 * SCROLL REVEAL FOR FOOTER
 */
const revealFooterElements = document.querySelectorAll("[data-footer-reveal]");
const revealFooterDelayElements = document.querySelectorAll("[data-footer-reveal-delay]");

const revealFooter = function () {
  for (let i = 0, len = revealFooterElements.length; i < len; i++) {
    if (revealFooterElements[i].getBoundingClientRect().top < window.innerHeight / 1.2) {
      revealFooterElements[i].classList.add("revealed");
    }
  }
}

for (let i = 0, len = revealFooterDelayElements.length; i < len; i++) {
  revealFooterDelayElements[i].style.transitionDelay = revealFooterDelayElements[i].dataset.revealDelay;
}

window.addEventListener("scroll", revealFooter);
window.addEventListener("load", revealFooter);

/**
 * Change Text Function
 */
function changeText() {
  const textElement = document.getElementById('changingText');
  const texts = ["Back-End", "Cyber Security"];
  let index = 0;

  setInterval(() => {
    textElement.textContent = texts[index];
    index = (index + 1) % texts.length;
  }, 2000);
}

window.onload = function() {
  changeText();
  changeFooterText();
};

/**
 * Change Footer Text Function
 */
function changeFooterText() {
  const textElement = document.getElementById('changingFooterText');
  const texts = ["Contact Us", "Follow Us"];
  let index = 0;

  setInterval(() => {
    textElement.textContent = texts[index];
    index = (index + 1) % texts.length;
  }, 2000);
}

/**
 * Loading Indicator
 */
document.addEventListener('DOMContentLoaded', function () {
  const loadingIndicator = document.getElementById('loadingIndicator');
  const mainContent = document.querySelector('main');

  loadingIndicator.style.display = 'flex';
  mainContent.style.display = 'none';

  const links = document.querySelectorAll('a');
  links.forEach(function (link) {
    link.addEventListener('click', function (event) {
      event.preventDefault();
      const href = this.getAttribute('href');
      loadingIndicator.style.display = 'flex';
      setTimeout(function () {
        window.location.href = href;
      }, 500);
    });
  });
});

window.addEventListener('load', function () {
  const loadingIndicator = document.getElementById('loadingIndicator');
  const mainContent = document.querySelector('main');
  loadingIndicator.style.display = 'none';
  mainContent.style.display = 'block';
});

/**
 * Footer Loading Indicator
 */
document.addEventListener('DOMContentLoaded', function () {
  const loadingFooterIndicator = document.getElementById('loadingFooterIndicator');
  const mainFooterContent = document.querySelector('footer');

  loadingFooterIndicator.style.display = 'flex';
  mainFooterContent.style.display = 'none';

  const footerLinks = document.querySelectorAll('footer a');
  footerLinks.forEach(function (link) {
    link.addEventListener('click', function (event) {
      event.preventDefault();
      const href = this.getAttribute('href');
      loadingFooterIndicator.style.display = 'flex';
      setTimeout(function () {
        window.location.href = href;
      }, 500);
    });
  });
});

window.addEventListener('load', function () {
  const loadingFooterIndicator = document.getElementById('loadingFooterIndicator');
  const mainFooterContent = document.querySelector('footer');
  loadingFooterIndicator.style.display = 'none';
  mainFooterContent.style.display = 'block';
});

/**
 * Responsive Button for 'See More' and 'See More' in Footer
 */
window.addEventListener('DOMContentLoaded', function() {
  const btnContact = document.getElementById('btn-contact');
  const btnFooterContact = document.getElementById('btn-footer-contact');

  function adjustButtonSize() {
    const screenWidth = window.innerWidth;

    if (screenWidth < 768) {
      btnContact.style.fontSize = '1.4rem';
      btnContact.style.padding = '10px 20px';
      btnFooterContact.style.fontSize = '1.4rem';
      btnFooterContact.style.padding = '10px 20px';
    } else {
      btnContact.style.fontSize = '1.6rem';
      btnContact.style.padding = '12px 24px';
      btnFooterContact.style.fontSize = '1.6rem';
      btnFooterContact.style.padding = '12px 24px';
    }
  }

  adjustButtonSize();
  window.addEventListener('resize', adjustButtonSize);
});

