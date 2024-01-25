const $ = document

let liMajor = $.querySelectorAll('.li_major')
let addMOdal = $.querySelectorAll('#btn_add_mod')
let decModal = $.querySelectorAll('#dec_mod')
let shadow = $.querySelectorAll('.shadow_modal')
let attNum 
let majorList = $.querySelectorAll('#majors_list')



liMajor.forEach(function (event) {
    event.addEventListener('click', function (event) {
        if (event.target.classList.contains('active_major')) {

        }else {
            liMajor.forEach(function (rem) {
                rem.children[0].classList.remove('active_major')
            })
            event.target.classList.add('active_major')
            attNum = event.target.attributes.item(2).value
            majorList.forEach (function (event) {
                if (event.attributes.item(1).value == attNum) {
                    majorList.forEach(function (event) {
                        event.classList.remove('d-flex')
                        event.classList.add('d-none')
                    })
                    event.classList.remove('d-none')
                    event.classList.add('d-flex')
                }
                
            })
        }
    })
})

addMOdal.forEach(function (event) {
    event.addEventListener('click' , function () {
        if (event.classList.contains('not_more')) {
            decModal.forEach(function (event) {
                event.style.overflow = 'visible'
                event.style.maxHeight = 'max-content'
            })
            // decModal.style.overflow = 'visible'
            // decModal.style.maxHeight = 'max-content'
            shadow.forEach(function (event) {
                event.style.background = 'none'
                event.style.display = 'none'
            })
            event.children[0].innerHTML = 'مشاهده کمتر'
            event.children[1].style.transform = 'rotate(180deg)'
            event.classList.replace('not_more' , 'more')
        }else {
            event.classList.replace('more' , 'not_more')
            event.style.overflow = 'hidden'
            decModal.forEach(function (event) {
                event.style.overflow = 'hidden'
                event.style.maxHeight = '50rem'
            })
            // decModal.style.maxHeight = '50rem'
            shadow.forEach(function (event) {
                event.style.background = 'linear-gradient(to top , #fff , rgba(255,255,255,0))'
                event.style.display = 'block'
            })
            event.children[0].innerHTML = 'مشاهده بیشتر'
            event.children[1].style.transform = 'rotate(0deg)'
        }
    })
})
console.log(addMOdal);
// if (addMOdal.classList.contains('not_more')) {
//     decModal.style.overflow = 'visible'
//     decModal.style.maxHeight = 'max-content'
//     shadow.style.background = 'none'
//     shadow.style.display = 'none'
//     addMOdal.children[0].innerHTML = 'مشاهده کمتر'
//     addMOdal.children[1].style.transform = 'rotate(180deg)'
//     addMOdal.classList.replace('not_more' , 'more')
// }else {
//     addMOdal.classList.replace('more' , 'not_more')
//     decModal.style.overflow = 'hidden'
//     decModal.style.maxHeight = '50rem'
//     shadow.style.background = 'linear-gradient(to top , #fff , rgba(255,255,255,0))'
//     addMOdal.children[0].innerHTML = 'مشاهده بیشتر'
//     addMOdal.children[1].style.transform = 'rotate(0deg)'
// }