window.addEventListener('scroll', ()=>{
    let text = document.querySelector('.heading');
    let textPosition = text.getBoundingClientRect().top;
    let screenPosition = window.innerHeight;

    if(textPosition < screenPosition){
       text.classList.add('active');}
       else{
           text.classList.remove('active');
       }
});
