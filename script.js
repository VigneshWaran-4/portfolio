let burger = document.querySelector(.burger);
let links = document.querySelector(.nav-links);
let TextArea =document.querySelector(.text-center)
burger.addEventListener('ckick',()=>{
    links.classList.toggle("nav-show");
    TextArea.classList.toggle("textareahide")
})