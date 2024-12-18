let update = document.querySelectorAll("#update");
let modal = document.getElementById("modal");
let closeModal = document.getElementById("closeModal");
let closeModalFooter = document.getElementById("closeModalFooter");
let hiddenId =  document.getElementById("hiddenId");

update.forEach(Element=>{
    Element.addEventListener("click",function(e){
        hiddenId.value = e.currentTarget.dataset.id
        modal.classList.remove("hidden");
        console.log("modal", modal);
        
    })
});

closeModal.addEventListener("click",function(){
    modal.classList.add("hidden");
})

closeModalFooter.addEventListener("click",function(){
    modal.classList.add("hidden");
})
