let infoprices = document.querySelector(".infoprice");
let cards = document.querySelectorAll(".card")
console.log(infoprices)
infoprices.addEventListener('change',function(){
    console.log(this.options[this.selectedIndex].id)
    let price = this.options[this.selectedIndex].id
        for (let card of cards){
            card.classList.replace("active","inactive")

            if(price in card.dataset || price === "all"){
                card.classList.replace("inactive","active")
        }
}})

