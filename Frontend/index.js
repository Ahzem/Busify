const form = document.getElementById("form");

form.addEventListener('submit', (e) => {
    e.preventDefault();
    validateInputs();
});

const setError = (element, message) => {
    const inputField = element.parentElement;
    const errorDisplay = inputField.querySelector('.error');

    errorDisplay.textContent = message;
    inputField.classList.add('error');
    inputField.classList.remove('success');
};

const setSuccess = (element) => {
    const inputField = element.parentElement;

    inputField.querySelector('.error').innerText = '';
    inputField.classList.remove('error');
    inputField.classList.add('success');
};

const isValidEmail = (email) => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
};

const isValidPassword = (password) => {
    const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    return re.test(String(password));
};

const validateInputs = () => {
    const inputs = document.querySelectorAll('.input__fields input');

    let isValidForm = true;

    inputs.forEach((input) => {
        const value = input.value.trim();
        const id = input.id;
        const label = input.parentElement.querySelector('label');

        if (value === '') {
            setError(input, `${label.textContent} cannot be blank`);
            isValidForm = false;
        } else {
            setSuccess(input);
        }
    });

    const email = document.getElementById('email');
    const emailValue = email.value.trim();

    if (!isValidEmail(emailValue)) {
        setError(email, 'Email is not valid');
        isValidForm = false;
    }

    const password = document.getElementById('password');
    const passwordValue = password.value.trim();

    if (!isValidPassword(passwordValue)) {
        setError(password, 'Password must contain at least 8 characters,\n one uppercase, one lowercase, one number and one special character');
        isValidForm = false;
    }

    const cpassword = document.getElementById('cpassword');
    const cpasswordValue = cpassword.value.trim();

    if (passwordValue !== cpasswordValue) {
        setError(cpassword, 'Passwords do not match');
        isValidForm = false;
    }

    const formErrors = document.getElementById('form-errors');

    if (!isValidForm) {
        formErrors.textContent = 'Please correct the errors in the form.';
    } else {
        formErrors.textContent = '';
        // Uncomment the line below if you want to submit the form when it's valid
        // form.submit();
    }
};
