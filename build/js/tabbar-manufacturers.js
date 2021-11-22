const tabbarManufacturers = () => {
    let tabHeaderManufacturer = document.querySelector(".tab-header-manufacturer");
    let tabIndicatorManufacturer = document.querySelector(".tab-indicator-manufacturer");
    let tabBodyManufacturer = document.querySelector(".tab-body-manufacturer");
    let tabsPaneManufacturer = tabHeaderManufacturer.getElementsByTagName("div");

    var activeClass = "active";



    //Add class active to first body of accessibility tab body
    var j = 0;

    var allDescriptionsManufacturer = document.querySelectorAll(".home-container__tabscontainer-manufacturer__tabs__tabbody__item");
    allDescriptionsManufacturer[j].classList.add(activeClass);



    // To change active tab
    for(let i=0; i < tabsPaneManufacturer.length; i++) {
        tabsPaneManufacturer[i].addEventListener("click", function() {
            tabHeaderManufacturer.querySelector("." + activeClass).classList.remove(activeClass);
            tabsPaneManufacturer[i].classList.add(activeClass);

            tabBodyManufacturer.querySelector("." + activeClass).classList.remove(activeClass);
            tabBodyManufacturer.getElementsByClassName("home-container__tabscontainer-manufacturer__tabs__tabbody__item")[i].classList.add(activeClass);

            // divide by how many tabs
            tabIndicatorManufacturer.style.left = `calc(calc(100% / 2) * ${i})`;
        });
    }
}

tabbarManufacturers();