//Окомпании -> Отсветсвенность

const cardaddclass = document.querySelectorAll(".otvetstvennost-card-content")
const cardotvet = document.querySelectorAll(".otvetstvennost-card-container")
const vector = document.querySelectorAll('.chevron-up-icon')
function dropdownOtvet(){

    for(let i = 0; i< cardotvet.length; i++){
        cardotvet[i].addEventListener('click', function(){

            cardaddclass[i].classList.toggle("displayblock")
            vector[i].classList.toggle('rotatedefault')
            console.log("asdaa")
        })
    }

}
dropdownOtvet();

const cardaddclass1 = document.querySelectorAll(".drop-card-content")
const cardotvet1 = document.querySelectorAll(".drop-card-container")
const vector1 = document.querySelectorAll('.chevron-up-icon')
function dropdownOtvet1(){

    for(let i = 0; i< cardotvet1.length; i++){
        cardotvet1[i].addEventListener('click', function(){

            cardaddclass1[i].classList.toggle("displayblock")
            vector1[i].classList.toggle('rotatedefault')
        })
    }

}
dropdownOtvet1();


const zakupochnyyeprotsedurytTableBtn = document.querySelectorAll(".zakupochnyyeprotsedury-table-btn")
const zakupochnyyeprotsedurytBlock5  = document.querySelectorAll(".block5")
const zakupochnyyeprotsedurytIcon= document.querySelectorAll(".chevron-up__icons")

function hundleZakupochnyyeprotseduryt(){
    for (let i = 0; i < zakupochnyyeprotsedurytTableBtn.length; i++){
        zakupochnyyeprotsedurytTableBtn[i].addEventListener('click', ()=>{
            zakupochnyyeprotsedurytBlock5[i].classList.toggle('block5on')
            zakupochnyyeprotsedurytIcon[i].classList.toggle('chevron-up__icons__add')
        })
    }
}
hundleZakupochnyyeprotseduryt()