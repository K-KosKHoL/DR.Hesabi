const $ = document  
let login = false


let inpLogin = $.querySelectorAll('.inp_login')
let inpCon = $.getElementsByClassName('inp_login_con')
let infoElemC = $.querySelector('.info_en_c')
let infoElemP = $.querySelector('.info_en_ps')
let inpBtn = $.querySelector('.inp_login_btn')
let modalLog = $.getElementById('modal_log')
let unModalL = $.getElementById('un_modal_log')


inpLogin.forEach(function (event) {
    event.addEventListener('focus' , function () {
        let parentInp = event.parentElement
        parentInp.style.border = "1px solid #c8c8c9"
    })
    event.addEventListener('blur' , function () {
        let parentInp = event.parentElement
        parentInp.style.border = "1px solid #f3f4f6"
        if (event.name == "card") {
            if (event.value.length == 0) {
                parentInp.style.border = "1px solid #f3f4f6"
                infoElemC.classList.remove('d-flex')
                infoElemC.classList.add('d-none') 
            }else if(event.value.length == 10) {
                let parentInp = event.parentElement
                parentInp.style.border = "1px solid #2ed573"
                infoElemC.classList.remove('d-flex') 
                infoElemC.classList.add('d-none') 
            } else {
                let parentInp = event.parentElement
                parentInp.style.border = "1px solid #EE384E"
                infoElemC.classList.remove('d-none')
                infoElemC.classList.add('d-flex') 
            }

        }
        if (event.name == "pass") {
            if (event.value.length == 0) {
                parentInp.style.border = "1px solid #f3f4f6"
                infoElemP.classList.remove('d-flex')
                infoElemP.classList.add('d-none') 
            }else
            if(event.value.length >= 8) {
                let parentInp = event.parentElement
                parentInp.style.border = "1px solid #2ed573" 
                infoElemP.classList.remove('d-flex') 
                infoElemP.classList.add('d-none') 
            } else {
                let parentInp = event.parentElement
                parentInp.style.border = "1px solid #EE384E" 
                infoElemP.classList.remove('d-none')
                infoElemP.classList.add('d-flex')
            }
        }
    })
})

inpBtn.addEventListener('click' , function () {
    dataBase.forEach (function (event) {
        let inpPassValue
        let inpCardValue
        if (event.state) {
            localStorage.setItem('stuName' , event.Name)
            inpLogin.forEach(function (event) {
                if (event.name == "card") {
                    inpCardValue = event.value
                }else if (event.name == "pass") {
                    inpPassValue = event.value
                }else {
                }
    
                //
                
            })
        }else {
            modalLog.classList.remove('d-none')
            unModalL.addEventListener('click' , function () {
                modalLog.classList.add('d-none')
            })
        }

        if (event.card == inpCardValue && event.pass == inpPassValue) {
            window.location = '../index.htm'
            localStorage.setItem("login" , true)
        }else {
            login = false
            localStorage.setItem("login" , false)
        }
    });
})
