let tabHeader = document.querySelector(".tab-header");
let tabIndicator = document.querySelector(".tab-indicator");
let tabBody = document.querySelector(".tab-body");
let tabsPane = tabHeader.getElementsByTagName("div");

var activeClass = "active";



//Add class active to first body of accessibility tab body
var j = 0;
var allDescriptions = tabBody.getElementsByTagName("div");
allDescriptions[j].classList.add(activeClass);



// To change active tab
for(let i=0; i < tabsPane.length; i++) {
    tabsPane[i].addEventListener("click", function() {
        tabHeader.querySelector("." + activeClass).classList.remove(activeClass);
        tabsPane[i].classList.add(activeClass);

        tabBody.querySelector("." + activeClass).classList.remove(activeClass);
        tabBody.getElementsByTagName("div")[i].classList.add(activeClass);

        // divide by how many tabs
        tabIndicator.style.left = `calc(calc(100% / 4) * ${i})`;
    });
}