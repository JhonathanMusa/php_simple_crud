function confirmDelete(e){
    if (confirm("¿Are you sure to delete this record?")){
        return true
    } else {
        e.preventDefault();
    }
}

let linkDelete = document.querySelectorAll(".table_item_link");

for (var i = 0; i < linkDelete.length; i++){
    linkDelete[i].addEventListener("click", confirmDelete);
}