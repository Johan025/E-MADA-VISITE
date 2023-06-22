class carousel{

    /**
 * @param element
 * @param {Object} options
* @param {Object} options.slidesToScroll 
* @param {Object} options.slidesVisible
 */
    constructor(element, options={}){
this.element=element;
this.options=Object.assign({},{
slidesToScroll: 1,
slidesVisible:1,
}, options) 
this.children=[].slice(element.children)
let root = this.createDivWithClass('carousel')
let container=this.createDivWithClass('carousel__container')
root.appendChild(container)
this.element.appendChild(root)
this.children.forEach(function (child){
  container.appendChild(child)
})
}

/**
 * 
 * @param {string} className 
 * @returns {HTMLElement}
 */
createDivWithClass (className){
let div=document.createElement('div')
div.setAttribute('class',className)
return div
}
    }



document.addEventListener('DOMContentLoaded', function(){
    new carousel(document.querySelector('.carousel'),{
        slidesToScroll:6,
        slidesVisible: 4,
   
   })
})
