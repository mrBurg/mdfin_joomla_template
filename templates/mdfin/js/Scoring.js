jQuery(document).ready(function () {
    const windowWidth = window.innerWidth;

    if (windowWidth <= 768) {
        const replace = document.querySelector('.ready-use-img');
        if(replace != null) {
            mobReplace(replace);
        }
    }
});