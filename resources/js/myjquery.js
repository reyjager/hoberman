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
                    otherSubmenu.classList.remove('sidebar__submenu-visible');
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