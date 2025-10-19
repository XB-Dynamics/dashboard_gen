"use strict";

//Opening or closing side bar

const elementToggleFunc = function (elem) {
  elem.classList.toggle("active");
};

const sidebar = document.querySelector("[data-sidebar]");
const sidebarBtn = document.querySelector("[data-sidebar-btn]");

sidebarBtn.addEventListener("click", function () {
  elementToggleFunc(sidebar);
});

//Activating Modal-testimonial

const testimonialsItem = document.querySelectorAll("[data-testimonials-item]");
const modalContainer = document.querySelector("[data-modal-container]");
const modalCloseBtn = document.querySelector("[data-modal-close-btn]");
const overlay = document.querySelector("[data-overlay]");

const modalImg = document.querySelector("[data-modal-img]");
const modalTitle = document.querySelector("[data-modal-title]");
const modalText = document.querySelector("[data-modal-text]");

const testimonialsModalFunc = function () {
  modalContainer.classList.toggle("active");
  overlay.classList.toggle("active");
};

for (let i = 0; i < testimonialsItem.length; i++) {
  testimonialsItem[i].addEventListener("click", function () {
    modalImg.src = this.querySelector("[data-testimonials-avatar]").src;
    modalImg.alt = this.querySelector("[data-testimonials-avatar]").alt;
    modalTitle.innerHTML = this.querySelector(
      "[data-testimonials-title]"
    ).innerHTML;
    modalText.innerHTML = this.querySelector(
      "[data-testimonials-text]"
    ).innerHTML;

    testimonialsModalFunc();
  });
}

//Activating close button in modal-testimonial
const filterBtn = document.querySelectorAll("[data-filter-btn]");
const filterItems = document.querySelectorAll("[data-filter-item]");

// Activating Filter Select and filtering options
const select = document.querySelector("[data-select]");
const selectItems = document.querySelectorAll("[data-select-item]");
const selectValue = document.querySelector("[data-select-value]");

select.addEventListener("click", function () {
  elementToggleFunc(this);
});

for (let i = 0; i < selectItems.length; i++) {
  selectItems[i].addEventListener("click", function () {
    let selectedValue = this.innerText.toLowerCase();
    selectValue.innerText = this.innerText;
    elementToggleFunc(select);
    filterFunc(selectedValue);
  });
}

const filterFunc = function (selectedValue) {
  for (let i = 0; i < filterItems.length; i++) {
    // Remove 'active' class from all filter items
    filterItems[i].classList.remove("active");
    // Check if the category matches and add 'active' class accordingly
    if (selectedValue === "all" || selectedValue === filterItems[i].dataset.category.toLowerCase()) {
      filterItems[i].classList.add("active");
    }
  }
};

// Enabling filter button for larger screens and activating category filtering
let lastClickedBtn = filterBtn[0];

for (let i = 0; i < filterBtn.length; i++) {
  filterBtn[i].addEventListener("click", function () {
    let selectedValue = this.innerText.toLowerCase();

    // Set the select value to the clicked button's text
    selectValue.innerText = this.innerText;

    // Add active class to the clicked button and remove it from the previous button
    lastClickedBtn.classList.remove("active");
    this.classList.add("active");

    // Filter the items based on the selected category
    filterFunc(selectedValue);

    lastClickedBtn = this;
  });
}


// Enabling Contact Form

const form = document.querySelector("[data-form]");
const formInputs = document.querySelectorAll("[data-form-input]");
const formBtn = document.querySelector("[data-form-btn]");

for (let i = 0; i < formInputs.length; i++) {
  formInputs[i].addEventListener("input", function () {
    if (form.checkValidity()) {
      formBtn.removeAttribute("disabled");
    } else {
      formBtn.setAttribute("disabled", "");
    }
  });
}

// Enabling Page Navigation

// Select all the navbar links
const navLinks = document.querySelectorAll('[data-nav-link]');

// Select all articles (pages)
const articles = document.querySelectorAll('article');

// Add click event listener to each navbar link
navLinks.forEach(link => {
  link.addEventListener('click', () => {
    // Remove the 'active' class from all navbar links
    navLinks.forEach(link => link.classList.remove('active'));

    // Add the 'active' class to the clicked navbar link
    link.classList.add('active');

    // Get the data-page value of the clicked link
    const targetPage = link.innerText.trim().toLowerCase();

    // Hide all articles
    articles.forEach(article => article.classList.remove('active'));

    // Show the corresponding article
    const activeArticle = document.querySelector(`article[data-page="${targetPage}"]`);
    if (activeArticle) {
      activeArticle.classList.add('active');
    }
  });
});



// Handle the opening and closing of the custom select
const customSelect = document.querySelector('.custom-select');
const selectOptions = document.querySelector('.select-options');
const selectedItems = document.querySelectorAll('[data-select-item]');
const selectedValue = document.querySelector('.select-value');

// Toggle the open state of the select
customSelect.addEventListener('click', () => {
  customSelect.classList.toggle('open');
  selectOptions.classList.toggle('open');
});

// Update the selected value when an option is clicked
selectedItems.forEach(item => {
  item.addEventListener('click', () => {
    selectedValue.textContent = item.textContent;
    customSelect.classList.remove('open');
    selectOptions.classList.remove('open');
  });
});

// Close the dropdown if clicked outside
document.addEventListener('click', (e) => {
  if (!customSelect.contains(e.target)) {
    customSelect.classList.remove('open');
    selectOptions.classList.remove('open');
  }
});
