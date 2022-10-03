const menuItems = document.querySelectorAll('.menu-item');
menuItems.forEach(menu => {
    console.log(menu);
    if (menu.classList.contains('active')) {
        menu.firstElementChild.firstElementChild.setAttribute('style', 'color:black');
    }
    menu.addEventListener('mouseover', function (e) {
        menu.firstElementChild.firstElementChild.setAttribute('style', 'color:black');
    })
    menu.addEventListener('mouseout', function (e) {
        menu.firstElementChild.firstElementChild.setAttribute('style', 'color:#666666');
    })
});