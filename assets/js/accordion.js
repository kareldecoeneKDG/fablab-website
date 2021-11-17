
const elements = document.querySelectorAll('.faq');

elements.forEach((element) =>{
   element.addEventListner("click", () => {
        element.classList.add(".active");
   });
    
});

