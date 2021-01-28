const deleteall = document.getElementById("deleteall");

deleteall.addEventListener("click", (e) => {
  let comfirmation = confirm("Do you want to delete the entire list?");
  if (comfirmation) {
    window.location = "../app/index.php?deleteall=true";
  }
});