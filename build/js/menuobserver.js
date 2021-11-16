// chekcen for better code
const nav = document.querySelector(".nav-fade"); //nav
const sectionOne = document.querySelector(".sectionOne")

const sectionOneOptions = {
    rootMargin: "-700px 0px 0px 0px"
};

const sectionOneObserver = new IntersectionObserver(function(
    entries,
    sectionOneObserver
) {
    entries.forEach(entry => {
        if(!entry.isIntersecting){ //denk eraan = niet intersecting, dus niet meer in beeld? dus header pakken ofzo? box-shadow?
            nav.classList.add('nav-scrolled');
        } else {
            nav.classList.remove("nav-scrolled");
        }
    })
},
sectionOneOptions);

sectionOneObserver.observe(sectionOne);