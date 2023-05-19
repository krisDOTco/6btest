// Get references to the targeted items
const buttons = document.querySelectorAll('.menu-parent');
const toggles = document.querySelectorAll('.menu-toggle');

// Add a click event listener to each main menu item
buttons.forEach((button) => {
    button.addEventListener('click', function () {

        // Find the sibling content element
        const dropdown = this.nextElementSibling;

        if (dropdown.style.display === "none") {
            dropdown.style.display = "block";
        } else {
            dropdown.style.display = "none";
        }
    });
});

// Add a click event listener to each main menu item
toggles.forEach((toggle) => {
    toggle.addEventListener('click', function () {

        // Find the sibling content element
        const menu = document.querySelectorAll('.mobile-menu')[0];

        if (menu.style.display === "none") {
            menu.style.display = "block";
        } else {
            menu.style.display = "none";
        }
    });
});