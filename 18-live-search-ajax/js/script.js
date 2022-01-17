let menu = new bootstrap.Modal(document.getElementById('menu'));
let deleteBtn = document.querySelector("#delete-btn");
let editBtn =  document.querySelector("#edit-btn");
let searchBtn = document.querySelector("#search-btn");
let keyword = document.querySelector("#keyword");
let containerTable = document.querySelector("#container-table");
let pagination = document.querySelector("#pagination");

//! MENU
containerTable.addEventListener("click", function(e) {
    // GET ID OF ROWS
    const id = e.target.parentElement.querySelector("#data-id").innerHTML;
    // PUT ID IN THE HREF ATTRIBUTE
    deleteBtn.setAttribute("href", `delete.php?id=${id}`);
    editBtn.setAttribute("href", `edit.php?id=${id}`);
    // TOGGLE MODAL MENU
    menu.toggle();
});

//! LIVE SEARCH
keyword.addEventListener("keyup", function(){
    getData(
        "data/videogames.php?keyword=" + keyword.value,
        // SUCCESS 
        (results) => {
            let elements = results.split("<br class=\"separator\">");

            containerTable.innerHTML = elements[0];
            pagination.innerHTML = elements[1];
            
        },
        // ERROR
        (error) => {
            console.log(error);
        }
    );
});

//! AJAX FUNCTION
function getData(url, success, error){
    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = () => {
        if(xhr.readyState === 4){
            if( xhr.status === 200 ){
                success(xhr.response);
            } else if ( xhr.status === 404 ){
                error(xhr.response);
            }
        }
    }

    xhr.open('get', url);
    xhr.send();
}