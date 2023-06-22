
const ratio= .6;
  
const options={
  root:null,
  rootMargin:'0px',
  threshold:ratio,
}

const handleIntersect= function (entries,observer) {
  entries.forEach(function (entry){
    console.log(entry.intersectionRatio );
    if (entry.intersectionRatio > ratio){ 
      entry.target.classList.add('effect')
  
    }

    else   if (entry.intersectionRatio < ratio){ 
     entry.target.classList.remove('effect')
  
    }

    
  })
}
const observer= new IntersectionObserver(handleIntersect,options)
document.querySelectorAll('.hideshow').forEach(function(h){
observer.observe(h);
})




const bouton=document.querySelector('.button_inscription');
const sign=document.querySelector('.containInscription');
const connect=document.querySelector('.contain');
const retour=document.querySelector('.retour');
const cache=document.querySelector('.erreur');

bouton.addEventListener('click', ()=>{
 sign.classList.add('active');
  connect.classList.add('hide');
 cache.classList.add('ss');
});

retour.addEventListener('click', ()=>{
sign.classList.remove('active');
connect.classList.remove('hide');
 cache.classList.add('ss');

});



