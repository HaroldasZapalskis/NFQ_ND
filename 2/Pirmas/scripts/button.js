window.onload = addListeners;

function addListeners() {
    if(window.addEventListener) {
        document.getElementById('button').addEventListener("click", buttonFunction, false);
    } else if (window.attachEvent) {
        //for old folks
    }

    function buttonFunction() {
        alert(this.id+": you clicked button")
    }
}