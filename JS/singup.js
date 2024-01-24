
let infoElemN = $.querySelector('.info_en_n')
let infoElemRP = $.querySelector('.info_en_rps')
let inpSingUp = $.getElementById('singup')
let modal = $.getElementById('modal')
let unModal = $.getElementById('un_modal')
let errorc
let errorn
let errorp
let errorrp

inpLogin.forEach(function (event) {
    event.addEventListener('focus' , function () {
        let parentInp = event.parentElement
        parentInp.style.border = "1px solid #c8c8c9"
    })
    event.addEventListener('blur' , function () {
        let parentInp = event.parentElement
        parentInp.style.border = "1px solid #f3f4f6"
        if (event.name == "card-s") {
            if (event.value.length == 0) {
                parentInp.style.border = "1px solid #f3f4f6"
                infoElemC.classList.remove('d-flex')
                infoElemC.classList.add('d-none')
                errorc = true
            }else if(event.value.length == 10) {
                let parentInp = event.parentElement
                parentInp.style.border = "1px solid #2ed573"
                infoElemC.classList.remove('d-flex') 
                infoElemC.classList.add('d-none')
                errorc = false 
            } else {
                let parentInp = event.parentElement
                parentInp.style.border = "1px solid #EE384E"
                infoElemC.classList.remove('d-none')
                infoElemC.classList.add('d-flex')
                errorc = true 
            }

        }
        if (event.name == "number-s") {
            if (event.value.length == 0) {
                parentInp.style.border = "1px solid #f3f4f6"
                infoElemN.classList.remove('d-flex')
                infoElemN.classList.add('d-none') 
                errorn = true
            }else if(event.value.length == 11) {
                let parentInp = event.parentElement
                parentInp.style.border = "1px solid #2ed573"
                infoElemN.classList.remove('d-flex') 
                infoElemN.classList.add('d-none') 
                errorn = false
            } else {
                let parentInp = event.parentElement
                parentInp.style.border = "1px solid #EE384E"
                infoElemN.classList.remove('d-none')
                infoElemN.classList.add('d-flex') 
                errorn = true
            }

        }
        if (event.name == "pass-s") {
            if (event.value.length == 0) {
                parentInp.style.border = "1px solid #f3f4f6"
                infoElemP.classList.remove('d-flex')
                infoElemP.classList.add('d-none')
                errorp = true 
            }else if(event.value.length >= 8) {
                let parentInp = event.parentElement
                parentInp.style.border = "1px solid #2ed573" 
                infoElemP.classList.remove('d-flex') 
                infoElemP.classList.add('d-none') 
                errorp = false 
            } else {
                let parentInp = event.parentElement
                parentInp.style.border = "1px solid #EE384E" 
                infoElemP.classList.remove('d-none')
                infoElemP.classList.add('d-flex')
                errorp = true 
            }
        }
        if (event.name == "rpass-s") {
            if (event.value.length == 0) {
                parentInp.style.border = "1px solid #f3f4f6"
                infoElemRP.classList.remove('d-flex')
                infoElemRP.classList.add('d-none')
                errorrp = true
            }else if(event.value.length >= 8 && event.value == event.parentElement.previousElementSibling.previousElementSibling.children[0].value) {
                let parentInp = event.parentElement
                parentInp.style.border = "1px solid #2ed573" 
                infoElemRP.classList.remove('d-flex') 
                infoElemRP.classList.add('d-none') 
                errorrp = false
            } else {
                let parentInp = event.parentElement
                parentInp.style.border = "1px solid #EE384E" 
                infoElemRP.classList.remove('d-none')
                infoElemRP.classList.add('d-flex')
                errorrp = true
            }

        }
        
    })
})

inpSingUp.addEventListener('click' , function () {
    if (errorc == false && errorn == false && errorp == false && errorrp == false) {
        dataBase.forEach (function (event) {
            let inpPassValue
            let inpCardValue
            let inpNumValue
            inpLogin.forEach(function (event) {
                if (event.name == "card-s") {
                    inpCardValue = event.value
                }else if (event.name == "pass-s") {
                    if (event.value == event.parentElement.nextElementSibling.nextElementSibling.children[0].value) {
                        inpPassValue = event.value
                    }
                }else if (event.name == "number-s") {
                    inpNumValue = event.value
                }
            })
            let newObj = {card : Number(inpCardValue) , pass : inpPassValue , number : Number(inpNumValue) , state : false}
            dataBase.push(newObj)
            modal.classList.remove('d-none')
            unModal.addEventListener('click' , function () {
                window.location = '../index.htm'
            })
        });   
        
    } else {

    }
})
