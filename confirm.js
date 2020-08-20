const confirmDelete = (e) => {
  if (confirm("¿Are you sure to delete this record?")) {
    return true;
  } else {
    e.preventDefault();
  }
};

let linkDelete = document.querySelectorAll(".table_item_link");

for (var i = 0; i < linkDelete.length; i++) {
  linkDelete[i].addEventListener("click", confirmDelete);
}

// INSERT

const insertForm = document.getElementsByName("insertForm")[0];
const boton = document.getElementById("btn");

const check = (e) => {
  let firstName = insertForm.fname.value;
  let lastName = insertForm.lname.value;
  let address = insertForm.address.value;
  let telephone = insertForm.telephone.value;

  if (firstName == "") {
    alert("Please introduce your First Name");
    e.preventDefault();
  }

  if (lastName == "") {
    alert("Please introduce your last Name");
    e.preventDefault();
  }

  if (address == "") {
    alert("Please introduce your Address");
    e.preventDefault();
  }

  if (telephone == "") {
    alert("Please introduce your telephone");
    e.preventDefault();
  }

};

insertForm.addEventListener("submit", check);
