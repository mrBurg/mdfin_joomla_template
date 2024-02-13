jQuery(document).ready(function () {
	jQuery('.mod-languages form').mfs();
	
	const windowWidth = window.innerWidth;

	//insert footer text
	const menuFooter = document.querySelector('footer .nav.menu.menu-footer.mod-list');
	if(menuFooter != null){
		insertAfter(menuFooter);
	}

	//mob menu handle
	new mobMenu();

	//smoothscroll
	const link = document.querySelector('a[href="#form-7"]');
	const dest = document.querySelector('#form-7');
	if(link != null && dest != null){
		smoothScroll(link, dest);
	}

    //hide fixed bar
    const form = document.querySelector('#form-7')
    const bar = document.querySelector('.req-demo');
    if(form && bar) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                bar.classList.toggle('hide', entry.isIntersecting)
            })
        }, {threshold: 0.3});
        
        // element to observe
        observer.observe(form);
    }

});

const insertAfter = (obj) => {
    if(obj == null) { return; }

    const elem = obj;
    const html = document.createElement('div')
    html.classList.add('contact-title');
    html.innerText = 'Global business development';
    elem.after(html);
}

const mobReplace = (obj) => {
    if(obj == null){ return; }
    
    const copy = obj.cloneNode(true);
    const moveTo = obj.previousElementSibling;
    
    obj.remove();
    
    moveTo.children[0].after(copy);
}

const smoothScroll = (link, dest) => {
    if(link == null || dest == null){ return; }

    link.addEventListener('click', (e) => {
        e.preventDefault();

        const elmntToView = dest;
        elmntToView.scrollIntoView(); 
    })
}

class mobMenu{
    constructor(){
        this.menu = document.querySelector('.menu-mob');
        this.menuBtn = document.querySelector('.menu-mob-bars');
        this.closeBtn = this.menu.querySelector('.close');
        this.body = document.body;

        if(this.menu == null){
            return;
        }

        this.menuBtn.addEventListener('click', () => {
            this.openMenu();
        })

        this.closeBtn.addEventListener('click', () => {
            this.close();
        })
    }

    openMenu(){
        this.body.classList.add('backdrop');
        this.menu.classList.add('menu-active');
        
        setTimeout(() => {
            this.menu.classList.add('menu-animate-in');
        }, 200);
    }

    close(){
        this.body.classList.remove('backdrop');
        this.menu.classList.remove('menu-animate-in');
        this.menu.classList.add('menu-animate-out');
        setTimeout(() => {
            this.menu.classList.remove('menu-active');
        }, 200);
        setTimeout(() => {
            this.menu.classList.remove('menu-animate-out');
        }, 350);
    }
}