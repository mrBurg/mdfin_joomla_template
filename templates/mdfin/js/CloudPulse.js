jQuery(document).ready(function () {
    const slider = document.querySelector('.swiper');
    const windowWidth = window.innerWidth;
    
    if (slider != null && windowWidth <= 768) {
        new Swiper(slider, {
            slidesPerView: 3,
            spaceBetween: 30,
            freeMode: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    }

    //section service mobile view
    if (windowWidth <= 768) {
        const deal = document.querySelector('#deal'),
            app = document.querySelector('#app'),
            lead = document.querySelector('#lead');

        if (deal != null && app != null && lead != null) {

            document.body.addEventListener('click', (e) => {
                const target = e.target;


                if ([deal.id, app.id, lead.id].includes(target.id) && target.tagName == 'path') {
                    openTooltip(target);
                } else {
                    closeTooltip();
                }
            }, true)
        }
    }

        //move block on mob
    if (windowWidth <= 768) {
        const replace = document.querySelector('.mob-replace');
        if(replace != null) {
            mobReplace(replace);
        }
    }

});

const openTooltip = (target) => {

    closeTooltip();

    let tooltip = document.querySelector('.tooltip-' + target.id);

    if (tooltip != null) {
        tooltip.classList.add('active');
    }
}

const closeTooltip = () => {
    const tooltips = Array.from(document.querySelectorAll('[class*=tooltip-]'));

    if (tooltips.length) {
        tooltips.forEach(elem => {
            elem.classList.remove('active');
        })
    }
}