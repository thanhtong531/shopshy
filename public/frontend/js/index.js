const login = document.querySelector('.login');
const signup = document.querySelector('.signup');
const modal = document.querySelector('.modal')
const modalLogin = modal.querySelector('.modal-login')
const modalSignup = modal.querySelector('.modal-signup')
const modalClose = modal.querySelectorAll('.modal-close');
const formLogin = modal.querySelector('.form-login');
const formSignup = modal.querySelector('.form-signup');

// when user click in screen can't modal click

document.onclick = function(e){
        if(e.target === login){
            modal.classList.add('open');
            modalSignup.classList.remove('open');
            modalLogin.classList.add('open');
        }
        if(e.target === signup){
            modal.classList.add('open');
            modalLogin.classList.remove('open');

            modalSignup.classList.add('open');
        } 

}

modalClose.forEach(exit=>{

    exit.onclick = function(){
        modal.classList.remove('open');
    }
})

    
formLogin.onclick = function(){
    modalSignup.classList.remove('open');
    modalLogin.classList.add('open');
}
formSignup.onclick = function(){
    modalLogin.classList.remove('open');
    modalSignup.classList.add('open');
}