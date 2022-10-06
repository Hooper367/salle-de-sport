
const form = document.querySelector('#form'), inputNom = document.querySelector('#nom'), inputPrenom = document.querySelector('#prenom')
const inputTel = document.querySelector('#tel'),inputMail = document.querySelector('#mail'), inputSujet = document.querySelector('#sujet')
const inputMessage = document.querySelector('#message');
const inputs = document.querySelectorAll('input');


const toggleClass = (elm1,regex ) => {
    if($(elm1).val().match(regex) && $(elm1).val() != ''){
        $(elm1).removeClass("is-invalid");  
        $(elm1).addClass("is-valid");
    }else if($(elm1).val().match(!regex) || $(elm1).val() == ''){
        $(elm1).removeClass("is-valid");  
        $(elm1).addClass("is-invalid");

    }
}

function CheckInput(){
    if(this.id == 'nom') toggleClass(this, /^[A-Za-z]/g ,)
    else if(this.id == 'prenom') toggleClass(this, /[a-z]/g)
    else if(this.id == 'mail') toggleClass(this, /[^a-zA-Z0-9À-Ùà-ù]/i)
    else if(this.id == 'tel') toggleClass(this, /[0-9]/g)
    else if(this.id == 'sujet') toggleClass(this, /[a-z]/g)
    else if(this.id == 'message') toggleClass(this, /[a-z]/g)


}

$(inputs).on('input',CheckInput)
$(form).on('submit',(e)=>{
    e.preventdefault();
})


const test = document.querySelector('.toggler-container');
console.log(test);

// test.addEventListener('click',() =>{
//     test.classList.toggle('active');
// })



  $('.toggler-container').on('click', function(){
    $(this).toggleClass('active')
})


