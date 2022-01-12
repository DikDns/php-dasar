let menu = new bootstrap.Modal(document.getElementById('menu'));
let deleteBtn = document.querySelector("#delete-btn");
let editBtn =  document.querySelector("#edit-btn");
let tablebody = document.querySelector("tbody");

tablebody.addEventListener("click", function(e) {
    // GET ID OF ROWS
    const id = e.target.parentElement.querySelector("#data-id").innerHTML;
    // PUT ID IN THE HREF ATTRIBUTE
    deleteBtn.setAttribute("href", `delete.php?id=${id}`);
    editBtn.setAttribute("href", `edit.php?id=${id}`);
    // TOGGLE MODAL MENU
    menu.toggle();
});