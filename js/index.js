
document.addEventListener("DOMContentLoaded", () => {
    const accordions = document.querySelectorAll(".accordion");
    accordions.forEach(accordion => {
        accordion.addEventListener("click", () => {
            const icon = accordion.querySelector(".icon");
            const accordionContent = accordion.querySelector(".accordion__content");

            accordionContent.classList.toggle("active");
            icon.classList.toggle("active");
        });
    });
    const burgerMenu = document.querySelector(".burger-menu");
    const navMenu = document.getElementById("navMenu");

    // Обработчик для кнопки бургер-меню
    burgerMenu.addEventListener("click", () => {
        navMenu.classList.toggle("active");
    });

    // Прокрутка к аккордеону при нажатии на FAQ
    document.querySelector(".scroll-to-accordion").addEventListener("click", (event) => {
        event.preventDefault();
        const accordionSection = document.getElementById("accordion-section");
        if (accordionSection) {
            accordionSection.scrollIntoView({ behavior: "smooth" });
            navMenu.classList.remove("active"); // Закрыть меню после перехода
        }
    });

    // Модальные окна
    const modals = document.querySelectorAll(".modal");
    const openModalBtns = document.querySelectorAll(".openModalBtn");
    const closeBtns = document.querySelectorAll(".close-btn");

    openModalBtns.forEach(button => {
        button.addEventListener("click", (event) => {
            event.preventDefault();
            const modalId = button.getAttribute("data-modal");
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = "block";
                navMenu.classList.remove("active"); // Закрыть меню после открытия модального окна
            }
        });
    });

    closeBtns.forEach(button => {
        button.addEventListener("click", () => {
            const modal = button.closest(".modal");
            if (modal) {
                modal.style.display = "none";
            }
        });
    });

    window.addEventListener("click", (event) => {
        modals.forEach(modal => {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    });
});
