let tabHeaderManufacturer = document.getElementsByClassName("tab-header-manufacturer")[0];
let tabIndicatorManufacturer = document.getElementsByClassName("tab-indicator-manufacturer")[0];
let tabBodyManufacturer = document.getElementsByClassName("tab-body-manufacturer")[0];
let tabsPaneManufacturer = tabHeaderManufacturer.getElementsByTagName("div");



//Add class active to first body of accessibility tab body
var j = 0;
var allDescriptionsManufacturer = tabBodyManufacturer.getElementsByTagName("div");
allDescriptionsManufacturer[j].classList.add("active");

//allDescriptionsManufacturer[j].classList.add("active-manufacturer");



// To change active tab
for(let i=0; i < tabsPaneManufacturer.length; i++) {
    tabsPaneManufacturer[i].addEventListener("click", function() {
        tabHeaderManufacturer.getElementsByClassName("active")[0].classList.remove("active");
        tabsPaneManufacturer[i].classList.add("active");

        tabBodyManufacturer.getElementsByClassName("active")[0].classList.remove("active");
        tabBodyManufacturer.getElementsByTagName("div")[i].classList.add("active");

        //tabHeaderManufacturer.getElementsByClassName("active-manufacturer")[0].classList.remove("active-manufacturer");
        //tabsPaneManufacturer[i].classList.add("active-manufacturer");

        //tabBodyManufacturer.getElementsByClassName("active-manufacturer")[0].classList.remove("active-manufacturer");
        //tabBodyManufacturer.getElementsByTagName("div")[i].classList.add("active-manufacturer");

        tabIndicatorManufacturer.style.left = `calc(calc(100% / 2) * ${i})`;
    });
}