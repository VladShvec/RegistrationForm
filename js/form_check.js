let name = document.getElementById('name');
let surname = document.getElementById('surname');
let email = document.getElementById('email');
let username = document.getElementById('username');
let password = document.getElementById('password');
let button = document.getElementById('submit');
let form = document.getElementById('form')


//finally examination




//name func validation
const nameFunc = (event) =>{
    if(name.value === ''){
        let warningName = document.getElementById('nameWar')
        name.classList.add('red-border')
        warningName.classList.add('d-block')


    }else{
        let warningName = document.getElementById('nameWar')
        warningName.classList.remove('d-block')
        name.classList.remove('red-border')

    }
}

//surname func validation with connect name func
const surnameFunc = (event) =>{
    //check name field
    if(name.value === '' ){
        nameFunc(event);
    }
    if(surname.value === '') {
        //surname check
            let warningSurname = document.getElementById('surnameWar')
            warningSurname.classList.add('d-block')
            surname.classList.add('red-border')
            // console.log(warningSurname)
        } else {
            let warningSurname = document.getElementById('surnameWar')
            warningSurname.classList.remove('d-block')
            surname.classList.remove('red-border')

        }

}

const emailFunc = (event , email,form) =>{
    //check email
    if(name.value === ''){
        nameFunc(event);
    }
    if(surname.value === '') {
        surnameFunc(event);
    }
    if(email.value === ''){
        let emailWar = document.getElementById('emailWar')
        emailWar.classList.add('d-block')
        email.classList.add('red-border')
        const reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        const address = document.forms[form].elements[email].value;

        if(reg.test(address) === false) {
            alert('Введите корректный e-mail');
            return false;
        }

        // console.log(emailWar)
    }else{
        let emailWar = document.getElementById('emailWar')
        emailWar.classList.remove('d-block')
        email.classList.remove('red-border')

    }

}
const userFunc = (event,email,form) =>{
    if(name.value === ''){
        nameFunc(event);

    }
    if(surname.value === '') {
        surnameFunc(event);
    }
    if(email.value === ''){
        emailFunc(event,email,form);
    }

    if(username.value === '' || username.value.length < 3){
        let userWar = document.getElementById('userWar')
        userWar.classList.add('d-block')
        username.classList.add('red-border')

    }
    if(username.value !== '' && username.value.length >= 4){
        let userWar = document.getElementById('userWar')
        userWar.classList.remove('d-block');
        username.classList.remove('red-border')

    }
}

const passwordFunc = (event,email,form) =>{
    if(name.value === ''){
        nameFunc(event);

    }
    if(surname.value === '') {
        surnameFunc(event);
    }
    if(email.value === ''){
        emailFunc(event,email,form);
    }
    if(username.value === '' || username.value.length < 3){
        userFunc(event);
    }
    if(password.value === '' || password < 5){
        let passwordWar = document.getElementById('passwordWar')
        passwordWar.classList.add('d-block')
        password.classList.add('red-border')

    }else{
        let passwordWar = document.getElementById('passwordWar')
        passwordWar.classList.remove('d-block');
        password.classList.remove('red-border')

    }
}

