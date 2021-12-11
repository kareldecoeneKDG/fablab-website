const showShareModal = () => {
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var close = document.getElementsByClassName("close")[0];
    
    var copyButton = document.getElementById("url");

    // When the user clicks on the share link, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    close.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // To copy the url
    function copyToClipboard() {
        /*var inputc = document.body.appendChild(document.createElement("input"));
        inputc.value = window.location.href;
        inputc.focus();
        inputc.select();
        document.execCommand('copy');
        inputc.parentNode.removeChild(inputc);*/



        /*var dummy = document.createElement('input'),
        text = window.location.href;

        document.body.appendChild(dummy);
        dummy.value = text;
        dummy.select();
        document.execCommand('copy');
        document.body.removeChild(dummy);*/

        

        var input = document.body.appendChild(document.createElement("input"));
        input.value = text;
        input.focus();
        input.select();
        document.execCommand('copy');
        input.parentNode.removeChild(input);
    }

    copyButton.addEventListener("click", copyToClipboard());
}

showShareModal();