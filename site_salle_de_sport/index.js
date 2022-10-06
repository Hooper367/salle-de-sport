// const form = document.querySelector('#form'), inputNom = document.querySelector('#nom'), inputPrenom = document.querySelector('#prenom')
// const inputTel = document.querySelector('#tel'),inputMail = document.querySelector('#mail'), inputSujet = document.querySelector('#sujet')
// const inputMessage = document.querySelector('#message');
// const inputs = document.querySelectorAll('input');


// const toggleClass = (elm1,regex ) => {
//     if(elm1.value.match(regex) && elm1.value != ''){
//         elm1.classList.remove("is-invalid");  
//         elm1.classList.add("is-valid");
//     }else if(elm1.value.match(!regex)|| elm1.value == ''){
//         elm1.classList.remove("is-valid");  
//         elm1.classList.add("is-invalid");

//     }
// }

// function CheckInput(target){
//     if(target.id == 'nom') toggleClass(target, /^[A-Za-z]/g ,)
//     else if(target.id == 'prenom') toggleClass(target, /[a-z]/g)
//     else if(target.id == 'mail') toggleClass(target, /[^a-zA-Z0-9À-Ùà-ù]/i)
//     else if(target.id == 'tel') toggleClass(target, /[0-9]/g)
//     else if(target.id == 'sujet') toggleClass(target, /[a-z]/g)
//     else if(target.id == 'message') toggleClass(target, /[a-z]/g)


// }


// inputs.forEach(input => input.addEventListener('input',e => CheckInput(e.target)))

// form.addEventListener('submit', (e) => {

//     e.preventDefault();

// })