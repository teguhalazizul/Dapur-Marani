import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", function () {
    // Find all the clickable sections
    const clickableSections = document.querySelectorAll("a.block");

    clickableSections.forEach(section => {
        section.addEventListener("click", function (e) {
            // Add the animation class to the clicked section
            e.preventDefault();
            const sectionContent = this;

            // Add the animation class
            sectionContent.classList.add("animate-click");

            // After the animation ends, remove the class to reset it
            sectionContent.addEventListener("animationend", () => {
                sectionContent.classList.remove("animate-click");

                // Continue to the link after animation
                window.location.href = sectionContent.href;
            });
        });
    });
});
