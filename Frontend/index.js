document.addEventListener("DOMContentLoaded", function () {
    const busImage = document.getElementById("bus-image");
  
    window.addEventListener("scroll", function () {
      const scrolled = window.scrollY;
      busImage.style.transform = "translateX(" + scrolled / 2 + "px)";
    });
  });
  
const form = document.getElementById("form");
const fname = document.getElementById("fname");
const lname = document.getElementById("lname");
const phone = document.getElementById("phone");
const nic = document.getElementById("nic");
const email = document.getElementById("email");
const from = document.getElementById("from");
const to = document.getElementById("to");
const routeno = document.getElementById("routeno");
const busmodel = document.getElementById("busmodel");
const busno = document.getElementById("busno");
const buscolor = document.getElementById("buscolor");
const buscapacity = document.getElementById("buscapacity");
const servicetype = document.getElementById("servicetype");
const password = document.getElementById("password");
const cpassword = document.getElementById("cpassword");

form.addEventListener('submit', e => {
    e.preventDefault();
    
    validateInputs();
});

const setError = (element, message) => {
  const inputField = element.parentElement;
  const errorDisplay = inputField.querySelector('.error');

  errorDisplay.textContent = message;
  inputField.classList.add('error');
  inputField.classList.remove('success');
}

const setSuccess = (element) => {
  const inputField = element.parentElement;
  const errorDisplay = inputField.querySelector('.error');

  errorDisplay.innerText = '';
  inputField.classList.remove('error');
  inputField.classList.add('success');
}

const isValidEmail = (email) => {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

const isValidPassword = (password) => {
  const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
  return re.test(String(password));
}

const validateInputs = () => {
  const fnameValue = fname.value.trim();
  const lnameValue = lname.value.trim();
  const phoneValue = phone.value.trim();
  const nicValue = nic.value.trim();
  const emailValue = email.value.trim();
  const fromValue = from.value.trim();
  const toValue = to.value.trim();
  const routenoValue = routeno.value.trim();
  const busmodelValue = busmodel.value.trim();
  const busnoValue = busno.value.trim();
  const buscolorValue = buscolor.value.trim();
  const buscapacityValue = buscapacity.value.trim();
  const servicetypeValue = servicetype.value.trim();
  const passwordValue = password.value.trim();
  const cpasswordValue = cpassword.value.trim();

  if(fnameValue === '') {
    setError(fname, 'First Name cannot be blank');
  } else {
    setSuccess(fname);
  }

  if(lnameValue === '') {
    setError(lname, 'Last Name cannot be blank');
  } else {
    setSuccess(lname);
  }

  if(phoneValue === '') {
    setError(phone, 'Phone Number cannot be blank');
  } else {
    setSuccess(phone);
  }

  if(nicValue === '') {
    setError(nic, 'NIC Number cannot be blank');
  } else {
    setSuccess(nic);
  }

  if(emailValue === '') {
    setError(email, 'Email cannot be blank');
  } else if (!isValidEmail(emailValue)) {
    setError(email, 'Email is not valid');
  } else {
    setSuccess(email);
  }

  if(fromValue === '') {
    setError(from, 'From cannot be blank');
  } else {
    setSuccess(from);
  }

  if(toValue === '') {
    setError(to, 'To cannot be blank');
  } else {
    setSuccess(to);
  }

  if(routenoValue === '') {
    setError(routeno, 'Route Number cannot be blank');
  } else {
    setSuccess(routeno);
  }

  if(busmodelValue === '') {
    setError(busmodel, 'Bus Model cannot be blank');
  } else {
    setSuccess(busmodel);
  }

  if(busnoValue === '') {
    setError(busno, 'Bus Number cannot be blank');
  } else {
    setSuccess(busno);
  }

  if(buscolorValue === '') {
    setError(buscolor, 'Bus Color cannot be blank');
  } else {
    setSuccess(buscolor);
  }

  if(buscapacityValue === '') {
    setError(buscapacity, 'Bus Capacity cannot be blank');
  } else {
    setSuccess(buscapacity);
  }

  if(servicetypeValue === '') {
    setError(servicetype, 'Service Type cannot be blank');
  } else {
    setSuccess(servicetype);
  }

  if(passwordValue === '') {
    setError(password, 'Password cannot be blank');
  } else if (!isValidPassword(passwordValue)) {
    setError(password, 'Password must contain at least 8 characters, one uppercase, one lowercase and one number');
  } else {
    setSuccess(password);
  }

  if(cpasswordValue === '') {
    setError(cpassword, 'Confirm Password cannot be blank');
  } else if (passwordValue !== cpasswordValue) {
    setError(cpassword, 'Passwords do not match');
  } else {
    setSuccess(cpassword);
  }

}

