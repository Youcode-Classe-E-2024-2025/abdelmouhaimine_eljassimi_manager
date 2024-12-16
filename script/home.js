
const modal = document.getElementById("modal");
const openModalButton = document.getElementById("openModal");
const closeModalButton = document.getElementById("closeModal");
const closeModalFooterButton = document.getElementById("closeModalFooter");
const submit = document.getElementById("submit");
const edit = document.getElementById("edit");
const hiddenInput = document.getElementById("hiddenInput");

openModalButton.addEventListener("click", () => {
  modal.classList.remove("hidden");
  submit.classList.remove("hidden");
  edit.classList.add("hidden");
});


const closeModal = () => {
  modal.classList.add("hidden");
};


closeModalButton.addEventListener("click", closeModal);
closeModalFooterButton.addEventListener("click", closeModal);
