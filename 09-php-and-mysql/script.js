let menu = new bootstrap.Modal(document.getElementById('menu'))

let tablebody = document.querySelector("tbody");

tablebody.addEventListener("click", function(e) {
    menu.toggle();
});