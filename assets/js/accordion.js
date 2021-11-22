const accordion = () => {
    const faqs = document.querySelectorAll(".faq");
    const icon = document.querySelectorAll(".icon");

    faqs.forEach((faq) => {
        faq.addEventListener("click", () => {
            faq.classList.toggle("active");

            // tried changing plus to minus when faq is active (dropped-down)
            
            //icon.classList.toggle("fa-minus");
            //icon.classList.toggle("fa-plus");
        });
    });
}

accordion();