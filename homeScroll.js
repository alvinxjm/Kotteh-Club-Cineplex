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


window.addEventListener('load', ()=>{introduction(); introduction2(); add_img(); popUpCard()})

function introduction(){
    let introOne = document.querySelector('.btmRight');
    setTimeout(() => {
        introOne.classList.add('readyOne')
    }, 2000);
}
function introduction2(){
    let introOne = document.querySelector('.topLeft');
    setTimeout(() => {
        introOne.classList.add('readyTwo')
    }, 500);
}

function add_img() { 
	let img = document.querySelector('.ourLogo'); 
    setTimeout(()=> {
        img.classList.add('ourLogoReady')
    }, 1500);
	
}

const popUp = document.querySelector('.popUp');
const popUpClose = document.querySelector('.popUpCloseBtn');

function popUpCard(){
    setTimeout(() => {
        popUp.classList.add('popUpOpen');
    }, 7000);
}



popUpClose.addEventListener('click', ()=>{
    popUp.style.display='none';
});