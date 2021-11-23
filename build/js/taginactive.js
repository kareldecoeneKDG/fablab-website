const tagInactive = () => {
    const tag = document.getElementById("remove-tag");

    tag.addEventListener("click", () => {
        window.location.href = "http://localhost:4000/fablab-website/blog";
    })
}

tagInactive();