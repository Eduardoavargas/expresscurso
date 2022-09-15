const usernameEl = document.querySelector('#nome');
const emailEl = document.querySelector('#email');
const codigoEl = document.querySelector('#codigo');
const cpfEl = document.querySelector('#cpf');
const nascimentoEl = document.querySelector('#nascimento');
const telefoneEl = document.querySelector('#telefone');
const cursoEl = document.querySelector('#curso');

const form = document.querySelector('#cadastroAluno');

const checkCpf = () => {
    var maskOptions = {
        mask: '000.000.000-00'
      };
       let mask = IMask(cpfEl, maskOptions);
      
          let valid = false;
      
          const cpf = cpfEl.value.trim();
      
          if (!isRequired(cpf)) {
              showError(cpfEl, 'codigo cannot be blank.');
          } else if (!validarCPF(cpf)) {
              showError(cpfEl, `O CPF não é valido.`);
          } else {
              showSuccess(cpfEl);
              valid = true;
          }
          return valid;
}


const checkUsername = () => {

    let valid = false;

    const min = 3

    let username = usernameEl.value.trim();
    username = username.split(' ')
     console.log(username)
    if (!isRequired(username)) {
        showError(usernameEl, 'Nome é obrigatório.');
    } else if (username.length < 2 ) {
        showError(usernameEl, `Nome tem que ser completo.`)
    } else {
        showSuccess(usernameEl);
        valid = true;
    }
    return valid;
};


const checkCodigo = () => {
    
var maskOptions = {
  mask: '0000-0000-0000'
};
 let mask = IMask(codigoEl, maskOptions);

    let valid = false;

    const codigo = codigoEl.value.trim();

    if (!isRequired(codigo)) {
        showError(codigoEl, 'codigo cannot be blank.');
    } else if (mask.unmaskedValue.length !== 12) {
        showError(codigoEl, `O Codigo deve ter 12 caracteres.`);
    } else {
        showSuccess(codigoEl);
        valid = true;
    }
    return valid;
};


const checkEmail = () => {
    let valid = false;
    const email = emailEl.value.trim();
    if (!isRequired(email)) {
        showError(emailEl, 'Email é obrigatório.');
    } else if (!isEmailValid(email)) {
        showError(emailEl, 'Email não é valido.')
    } else {
        showSuccess(emailEl);
        valid = true;
    }
    return valid;
};

const checkPassword = () => {
    let valid = false;


    const password = passwordEl.value.trim();

    if (!isRequired(password)) {
        showError(passwordEl, 'Password cannot be blank.');
    } else if (!isPasswordSecure(password)) {
        showError(passwordEl, 'Password must has at least 8 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number, and 1 special character in (!@#$%^&*)');
    } else {
        showSuccess(passwordEl);
        valid = true;
    }

    return valid;
};

const checkConfirmPassword = () => {
    let valid = false;
    // check confirm password
    const confirmPassword = confirmPasswordEl.value.trim();
    const password = passwordEl.value.trim();

    if (!isRequired(confirmPassword)) {
        showError(confirmPasswordEl, 'Please enter the password again');
    } else if (password !== confirmPassword) {
        showError(confirmPasswordEl, 'The password does not match');
    } else {
        showSuccess(confirmPasswordEl);
        valid = true;
    }

    return valid;
};

const isEmailValid = (email) => {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
};

const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(password);
};

const isRequired = value => value === '' ? false : true;
const isBetween = (length, min, max) => length < min || length > max ? false : true;

const validarCPF = cpf =>  {	
	cpf = cpf.replace(/[^\d]+/g,'');	
	if(cpf == '') return false;	
	// Elimina CPFs invalidos conhecidos	
	if (cpf.length != 11 || 
		cpf == "00000000000" || 
		cpf == "11111111111" || 
		cpf == "22222222222" || 
		cpf == "33333333333" || 
		cpf == "44444444444" || 
		cpf == "55555555555" || 
		cpf == "66666666666" || 
		cpf == "77777777777" || 
		cpf == "88888888888" || 
		cpf == "99999999999")
			return false;		
	// Valida 1o digito	
	let add = 0;	
	for (let i=0; i < 9; i ++)		
		add += parseInt(cpf.charAt(i)) * (10 - i);	
		let rev = 11 - (add % 11);	
		if (rev == 10 || rev == 11)		
			rev = 0;	
		if (rev != parseInt(cpf.charAt(9)))		
			return false;		
	// Valida 2o digito	
	add = 0;	
	for (let i = 0; i < 10; i ++)		
		add += parseInt(cpf.charAt(i)) * (11 - i);	
	rev = 11 - (add % 11);	
	if (rev == 10 || rev == 11)	
		rev = 0;	
	if (rev != parseInt(cpf.charAt(10)))
		return false;		
	return true;   
}

const showError = (input, message) => {
    // get the form-field element
    const formField = input.parentElement;
    // add the error class
    formField.classList.remove('success');
    formField.classList.add('error');

    // show the error message
    const error = formField.querySelector('small') || document.createElement('small');
    console.log(error);
    error.textContent = message;
};

const showSuccess = (input) => {
    // get the form-field element
    const formField = input.parentElement;

    // remove the error class
    formField.classList.remove('error');
    formField.classList.add('success');

    // hide the error message
    const error = formField.querySelector('small') || document.createElement('small');
    error.textContent = '';
}


form.addEventListener('submit', function (e) {
    // prevent the form from submitting
    e.preventDefault();

    // validate fields
    let isUsernameValid = checkUsername(),
        isEmailValid = checkEmail(),
        isPasswordValid = checkPassword(),
        isConfirmPasswordValid = checkConfirmPassword();

    let isFormValid = isUsernameValid &&
        isEmailValid &&
        isPasswordValid &&
        isConfirmPasswordValid;

    // submit to the server if the form is valid
    if (isFormValid) {

    }
});


const debounce = (fn, delay = 500) => {
    let timeoutId;
    return (...args) => {
        // cancel the previous timer
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        // setup a new timer
        timeoutId = setTimeout(() => {
            fn.apply(null, args)
        }, delay);
    };
};

form.addEventListener('input', debounce(function (e) {
    
    switch (e.target.id) {
        case 'codigo':
            checkCodigo();
            break;
        case 'nome':
            checkUsername();
            break;
        case 'cpf':
            checkCpf();
            break;
        case 'email':
            checkEmail();
            break;
        case 'password':
            checkPassword();
            break;
        case 'confirm-password':
            checkConfirmPassword();
            break;
    }
}));
