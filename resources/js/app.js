import './bootstrap';
import 'bootstrap';
import '@fortawesome/fontawesome-free/css/all.min.css';
import '@fortawesome/fontawesome-free/css/all.css';
import 'bootstrap-icons/font/bootstrap-icons.css';

document.addEventListener('DOMContentLoaded', function () {
    const menuItems = document.querySelectorAll('.sidebar__menu');

    menuItems.forEach(item => {
        const menuItem = item.querySelector('.sidebar__menuItem');
        const submenu = item.querySelector('.sidebar__subMenu');

        // Initialize all submenus as hidden
        submenu.classList.add('sidebar__subMenu-hidden');

        menuItem.addEventListener('click', function (e) {
            if (e.target.tagName === 'A') {
                e.preventDefault();
            }

            // Close all other open submenus first
            document.querySelectorAll('.sidebar__subMenu').forEach(otherSubmenu => {
                if (otherSubmenu !== submenu) {
                    otherSubmenu.classList.remove('sidebar__subMenu-visible');
                    otherSubmenu.classList.add('sidebar__subMenu-hidden');
                    otherSubmenu.previousElementSibling.classList.remove('active');
                }
            });

            // Toggle the current submenu
            if (submenu.classList.contains('sidebar__subMenu-hidden')) {
                submenu.classList.remove('sidebar__subMenu-hidden');
                submenu.classList.add('sidebar__subMenu-visible');
                menuItem.classList.add('active');
            } else {
                submenu.classList.remove('sidebar__subMenu-visible');
                submenu.classList.add('sidebar__subMenu-hidden');
                menuItem.classList.remove('active');
            }
        });
    });
});

// Select all sidebar sub items
const subItems = document.querySelectorAll('.sidebar__subItem');

// Loop through each sub item and add click event listener
subItems.forEach(item => {
    item.addEventListener('click', function() {
        // Remove 'active' from all sub items
        subItems.forEach(i => i.classList.remove('active'));
        
        // Add 'active' to the clicked sub item
        this.classList.add('active');
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const caretIcon = document.querySelector('.mainHeader__right .fa-caret-down');
    const dropdown = document.querySelector('.mainHeader__right .dropdown');

    caretIcon.addEventListener('click', function () {
        dropdown.classList.toggle('dropdown-show');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Get the hamburger menu button (you'll need to add this to your HTML)
    const hamburger = document.querySelector('.fa-bars');
    
    // Get the sidebar element
    const sidebar = document.querySelector('.sidebar');
    const gridContent = document.querySelector('.grid-container');
    const mainHeader = document.querySelector('.mainHeader');
    
    // Add click event to hamburger menu
    hamburger.addEventListener('click', function() {
        // Toggle collapsed class on sidebar
        sidebar.classList.toggle('collapsed');
        gridContent.classList.toggle('collapsed');
        mainHeader.classList.toggle('collapsed');
    });
});