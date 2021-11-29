const accordion = () => {
    const faqs = document.querySelectorAll(".faq");
    const icon = document.querySelectorAll(".icon");

    faqs.forEach((faq) => {
        faq.addEventListener("click", () => {
            faq.classList.toggle("active");
        });
    });
}

accordion();