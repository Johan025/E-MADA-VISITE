const menu=document.querySelector('.icone_menu');
const nav=document.querySelector('.header_contain');
const header=document.querySelector('#header');

menu.addEventListener('click', ()=>{
nav.classList.toggle('hideshow');
header.style.zIndex='100';
header.classList.toggle('zIndex');
menu.classList.add('changecolor');
});