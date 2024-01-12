document.addEventListener('DOMContentLoaded', function () {
    const burgerMenuIcon = document.querySelector('#burgermenu');
    const side = document.querySelector('.side-bar');
    burgerMenuIcon.addEventListener('click', function () {
        if(side.style.display == "block")
        {
            side.style.display = "none";
        }
        else
        {
            side.style.display = "block";
        }
    });

    burgerMenuIcon.style.cursor = 'pointer';
});