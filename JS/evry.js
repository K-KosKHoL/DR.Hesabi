$(".option").click(function(){
    $(".option").removeClass("active");
    $(this).addClass("active");
    
});


let getLocal = localStorage.getItem("login")
let a 
let notLogin = document.getElementById('notLogin')
let loginTrue = document.getElementById('loginTrue')
let imgLogin = document.querySelector('.img_login')
let dashboard = document.querySelector('.dashboard')
let exit = document.getElementById('logEx')
let body = document.getElementsByTagName('body')
let stuName = document.getElementById('stuName')
let dropMh = document.getElementById('dropmenu_mh')
let dropMhUl = document.getElementById('dropMhUL')
let closHead = document.getElementById('clos_head_m')
let openHead = document.getElementById('open_head')
let headMo = document.getElementById('head_m')
let darkH = document.getElementById('dark_h')
let stateHeader = document.getElementById('head_m_stat')
let stateHeaderLi = document.getElementById('head_m_stat_li')

if (getLocal) {
    loginTrue.classList.add('d-none')
    loginTrue.classList.add('d-sm-block')
    stateHeaderLi.classList.add('d-sm-none')
    stateHeader.innerHTML = 'حساب کاربری'
    stateHeader.style.color = '#2ed573'
    stateHeader.addEventListener('click' , function () {
        
    })
}else {
    notLogin.classList.add('d-sm-flex')
    notLogin.classList.add('d-none')
    stateHeaderLi.classList.add('d-sm-none')
    stateHeader.innerHTML = 'ورود | ثبت نام'
    stateHeader.style.color = '#2ed573'
    stateHeader.addEventListener('click' , function () {
        window.location = './web-page/login.php'
    })
}

imgLogin.addEventListener('click' , function () {
    if (dashboard.classList.contains('d-none')) {
        stuName.innerHTML = localStorage.getItem('stuName')
        dashboard.classList.remove('d-none')
    }else {
        dashboard.classList.add('d-none')
    }
})
exit.addEventListener('click' , function () {
    loginTrue.classList.add('d-none')
    loginTrue.classList.remove('d-sm-block')
    notLogin.classList.add('d-none')
    notLogin.classList.add('d-sm-block')
    localStorage.removeItem('login')
})

dropMh.addEventListener('click' , function () {
    if (dropMhUl.classList.contains('d-none')) {
        dropMhUl.classList.remove('d-none')
    }else {
        dropMhUl.classList.add('d-none')
    }
})

openHead.addEventListener('click' , function () {
        headMo.style.right = '0'
        darkH.style.display = "block"
})
closHead.addEventListener('click' , function () {
    headMo.style.right = '-230px'
    darkH.style.display = "none"
})