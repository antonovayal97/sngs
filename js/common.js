function activeClassHeader(){
    const headerItem = document.querySelectorAll('.middle__links li a')
    const leftLinks = document.querySelectorAll('.left-menu-main-link a')
    const path = window.location.pathname

    if(path === '/'){
        document.querySelector('section').classList.add('paddingtop80px')
        return
    }
    else{
        document.querySelector('section').classList.add('paddingtop80px')
        headerItem.forEach(i=>{
            if(i.href.includes(path)){
                i.classList.add('activeHeader-item')
    
            }
        })
        leftLinks.forEach(i=>{
            if(i.href.includes(path)){
                i.classList.add('activeHeader-item--left')
    
            }
        })
    }
}
activeClassHeader()
//Поиск с Хедера
function hundleSearchFromheader(){
    const BTN_search = document.querySelector('.header__search')
    if(BTN_search){
        BTN_search.addEventListener('click', ()=>{
            document.querySelector('.custommodalheadersearch#appSearch').classList.toggle('displayFlex1')
        })
    }
    else return
}
hundleSearchFromheader()
//header mobile
const headerBurger = document.querySelector('.mobile--header')
const headerBurgerBtn = document.querySelector('.header__burger')
const btnopen = document.querySelector('.burgermenu__link')
const btnclose = document.querySelector('.btnclose__link')
const btnclose1 = document.querySelector('.burgermenu__link__btn')
let mainContainer = document.querySelector('.container')

function hundleHeaderBurger(){
    if(headerBurger || headerBurgerBtn){
        headerBurgerBtn.addEventListener("click", () => {
            headerBurger.classList.toggle('topnull')
            btnopen.classList.toggle('displayNone')
            headerBurger.classList.toggle('displayFlex')
            btnclose.classList.toggle('displayGrid')
            //btnclose1.classList.toggle('displayGrid')
        })
        // btnclose.addEventListener("click", () => {
        //     headerBurger.classList.toggle('topnull')
        //     btnopen.classList.toggle('displayNone')
        //     headerBurger.classList.toggle('displayFlex')
        //     btnclose.classList.toggle('displayGrid')
        //     //btnclose1.classList.toggle('displayGrid')
        // })
    }
    else return
}
hundleHeaderBurger()

function updateSize(){
    window.addEventListener("resize",()=>{
        if(innerWidth < 1200){
            headerBurger.classList.remove('topnull')
            btnopen.classList.remove('displayNone')
            headerBurger.classList.remove('displayFlex')
            btnclose.classList.remove('displayGrid')
            btnclose1.classList.remove('displayGrid')
        }
        else return
    });
}
updateSize()

//вакансия фильтрация
function GetVakInput(){
    const selectVak = document.querySelectorAll(".valansii-form-selects-block select")
    //селект 1
    const vakInp1 = document.getElementById('vakFil')
    //селект 2
    const vakInp2 = document.getElementById('vakSft')
    if(vakInp1 || vakInp2){
        vakInp1.addEventListener('change', ()=>{
            let index = vakInp1.selectedIndex;
            if(index !== 0){
                vakInp1.classList.remove('modal-font-color')
                vakInp1.style.color = "black"
            }
            else{
                vakInp1.style.color = "#B8B8B8"

                vakInp1.classList.add('modal-font-color')
            }
        })
        vakInp2.addEventListener('change', ()=>{
            let index = vakInp2.selectedIndex;
            if(index !== 0){
                vakInp2.style.color = "black"
            }
            else vakInp2.style.color = "#B8B8B8"
        })
    }
    else return

}
GetVakInput()
const vakansiya= document.querySelectorAll('.valansii-card--bottom--link')
for (let i = 0; i< vakansiya.length; i++){
    vakansiya[i].onclick = ()=>{
        document.querySelectorAll('.valansii-card--bottom-content')[i].classList.toggle('displayblock')
        document.querySelectorAll('.valansii-card--bottom--link')[i].classList.toggle('displaynone')
        console.log("1")
    }
}
for (let i = 0; i< document.querySelectorAll('.valansii-card').length; i++){
        document.querySelectorAll('.valansii-card')[i].onmouseleave = ()=>{
            setTimeout(()=>{
                document.querySelectorAll('.valansii-card--bottom-content')[i].classList.remove('displayblock')
                document.querySelectorAll('.valansii-card--bottom--link')[i].classList.remove('displaynone')
            }, 500)
        }
}

function functionHystModal(){
    if(HystModal){
        const myModal = new HystModal({
            // for dynamic init() of modals
            // linkAttributeName: false,
            catchFocus: true,
            closeOnEsc: true,
            backscroll: true,
            beforeOpen: function(modal){
                console.log('Message before opening the modal');
                console.log(modal); //modal window object
            },
            afterClose: function(modal){
                console.log('Message after modal has closed');
                console.log(modal); //modal window object
        
                //If Youtube video inside Modal, close it on modal closing
                let videoframe = modal.openedWindow.querySelector('iframe');
                if(videoframe){
                    videoframe.contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
                }
            },
        });
    }
    else return
}
functionHystModal()


const cuselect = document.querySelector('.vakansii--modat--custom-celect1')
const text= document.querySelector('.vakansii--modat--custom-celect1 span')
const cuselect2 = document.querySelector('.vakansii--modat--custom-celect2')
const text2= document.querySelector('.vakansii--modat--custom-celect2 span')
const modalvakul1 = document.querySelector('.vakansii--modat--custom-celect1 ul')
const modalvakul2 = document.querySelector('.vakansii--modat--custom-celect2 ul')


///вакансия модалка селект 1 и 2
function functionCustomSelect(){

    // 1
    if(cuselect){
        if(text.innerHTML === "Выберите филиал"){
            text.classList.add('modal-font-color')
        }
        cuselect.addEventListener('click', ()=>{
            cuselect.children[1].classList.toggle('vakansii--modat--custom-celect-display')
                let ch = cuselect.children[1].children
                for(let i = 0; i< ch.length; i++){
                    ch[i].addEventListener('click', ()=>{

                        text.innerHTML = ch[i].innerHTML
                        text.classList.remove('modal-font-color')

                    })
                }
        })

        text.addEventListener('change', ()=>{
            if(text.innerHTML === "Выберите филиал"){
                text.classList.toggle("modal-font-color")
            }
            else text.classList.remove("modal-font-color")
            
        })
        cuselect.onmouseleave = () =>{
            cuselect.children[1].classList.remove('vakansii--modat--custom-celect-display')
        }
    }
    // 2
    if(cuselect2){
        if(text2.innerHTML === "Выберите вакансию"){
            text2.classList.add('modal-font-color')
        }
        cuselect2.addEventListener('click', ()=>{
            cuselect2.children[1].classList.toggle('vakansii--modat--custom-celect-display')
                let ch = cuselect2.children[1].children
                for(let i = 0; i< ch.length; i++){
                    ch[i].addEventListener('click', ()=>{
                        text2.innerHTML = ch[i].innerHTML
                        text2.classList.remove('modal-font-color')

                    })
                }
        })
        cuselect2.onmouseleave = () =>{
            cuselect2.children[1].classList.remove('vakansii--modat--custom-celect-display')
        }
    }
    else return
}
functionCustomSelect()

//modal input placeholder
let inputsModal = document.querySelectorAll('.vakansii--modat--custom-celect.vakansii--modat--custom--input input')
let inputsModalPlaceholder = document.querySelectorAll('.vakansii--modat--custom-celect.vakansii--modat--custom--input  span')
function hundleFocusInput(){
    if(inputsModal || inputsModalPlaceholder){
        for(let i = 0; i < inputsModal.length; i++){
            inputsModal[i].addEventListener('click', ()=>{
                inputsModalPlaceholder[i].style.display = "none"
            })
            inputsModal[i].addEventListener('blur', ()=>{
                if(inputsModal[i].value) return
                else inputsModalPlaceholder[i].style.display = ""
            })
        }
    }
    else return

}
hundleFocusInput()

