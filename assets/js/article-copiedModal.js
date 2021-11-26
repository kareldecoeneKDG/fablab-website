const showCopiedMessage = () => {
    let modalBtn = document.getElementById("url");
    let modal = document.querySelector(".modal-copied");
    //let closeBtn = document.querySelector(".close-btn-copied");

    modalBtn.onclick = function () {
        modal.style.display = "block";
        setTimeout(function(){ modal.style.display = "none"; } , 1250);
    }

    /* window.onclick = function (e) {
        if (e.target == modal) {
            modal.style.display = "none";
        }
    } */
}

showCopiedMessage();