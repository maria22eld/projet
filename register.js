// the animation between the patient mode and the doctor mode
const to_patient = document.querySelector("#to-patient");
const to_doctor = document.querySelector("#to-doctor");
const container = document.querySelector(".container");



to_patient.addEventListener("click", () => {
  container.classList.add("patient-mode"); // patient-mode
});

to_doctor.addEventListener("click", () => {
  container.classList.remove("patient-mode");
});


// the connection window display
let windPatient = document.querySelector("#window-patient-container");
let windDoctor = document.querySelector("#window-doctor-container");

const linkPatient = document.querySelector("#content-block-patient");
const linkDoctor = document.querySelector("#content-block-doctor");

const theFormPatient = document.querySelector(".connectionFormPatient");
const theFormDoctor = document.querySelector(".connectionFormDoctor");

outer = document.querySelector(".outerContainer");


linkPatient.addEventListener("click", function (event) {
  event.preventDefault();
  windPatient.classList.add("active");
  outer.style.display = "block";
  windPatient.style.display = "block";
});


linkDoctor.addEventListener("click", function (event) {
  event.preventDefault();
  windDoctor.classList.add("active");
  outer.style.display = "block";
  windDoctor.style.display = "block";
});


// the connection window removal
outer.addEventListener("click", () => {
  outer.style.display = "none";
  windPatient.style.display = "none";
  windDoctor.style.display = "none";
  doctorSuccess.style.display = "none";
  patientSucces.style.display = "none";
})



// the form validation

// validate the usernames
const username = document.querySelectorAll(".username");

for (i = 0; i < username.length; i++) {
  username[i].addEventListener('input', function () {
    validateUsername(this);
  })
}

function validateUsername(obj) {
  const usernameValue = obj.value.trim();
  if (usernameValue === "") {
    setError(obj, "remplissez ce champ");
  }
  else {
    setSuccess(obj);
  }
}


// validate the phone numbers
const phone = document.querySelectorAll(".phone");
for (i = 0; i < phone.length; i++) {
  phone[i].addEventListener('input', function () {
    validatePhone(this);
  })
}

function validatePhone(obj) {
  const phoneNumber = obj.value.trim();
  if (phoneNumber === "") {
    setError(obj, "remplissez ce champ");
  }
  else {
    var correctFormat = /^(?:\+213|00213|0)(5|6|7)([0-9]{8})$/;
    if (correctFormat.test(phoneNumber)) {
      setSuccess(obj);
    }
    else {
      setError(obj, "numéro invalid");
    }
  }
}


// validate the emails
const email = document.querySelectorAll(".email");
for (i = 0; i < email.length; i++) {
  email[i].addEventListener('input', function () {
    validateEmail(this);
  })
}

function validateEmail(obj) {
  const emailValue = obj.value.trim();
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/

  if (emailValue === "") {
    setError(obj, "remplissez ce champ");
  }
  else {
    if (emailRegex.test(emailValue)) {
      setSuccess(obj);
    }
    else {
      setError(obj, "email invalid");
    }
  }
}


// validate the speciality
const speciality = document.querySelector(".speciality");
speciality.addEventListener('input', function () {
  validateUsername(this);
})


// validate the addresses
const address = document.querySelectorAll(".address");
for (i = 0; i < address.length; i++) {
  address[i].addEventListener('input', function () {
    validateUsername(this);
  })
}

function validateAddress(obj) {
  const addressValue = obj.value.trim();
  if (addressValue === "") {
    setError(obj, "remplissez ce champ");
  }
  else {
    setSuccess(obj);
  }
}

// validate the files
const fileInputs = document.querySelectorAll('.file');

fileInputs.forEach(function (fileInput) {
  fileInput.addEventListener('change', function (event) {
    const files = event.target.files;

    if (files.length === 0) {
      setError(event.target, 'Please select a file.');
    } else {
      setSuccess(event.target);
    }
  });
});



// validate the password
const mdp = document.querySelectorAll(".mdp")
for (i = 0; i < mdp.length; i++) {
  mdp[i].addEventListener('input', function () {
    validatePassword(this);
  });
}

function validatePassword(obj) {
  const password = obj.value.trim();
  if (password === "") {
    setError(obj, "remplissez ce champ");
  }
  else if (password.length < 8) {
    setError(obj, "mot de passe court")
  }
  else {
    setSuccess(obj);
  }
}



// setError and setSuccess
function setError(element, message) {
  const elementParent = element.parentElement;
  const errorDisplay = elementParent.querySelector(".error");
  errorDisplay.innerText = message;
  elementParent.classList.add("error");
  elementParent.classList.remove("success");
}


function setSuccess(element) {
  const elementParent = element.parentElement;
  const errorDisplay = elementParent.querySelector(".error");
  errorDisplay.innerText = "";
  elementParent.classList.add("success");
  elementParent.classList.remove("error");
}


// event listener for the submit button
const doctorSuccess = document.querySelector(".outerDoctorSuccess")
const patientSucces = document.querySelector(".outerPatientSuccess")

// first form
const firstBtn = document.querySelector("#btn1");
firstBtn.addEventListener('click', function (event) {
  event.preventDefault();
  if (username[0].parentElement.classList.contains("success") && email[0].parentElement.classList.contains("success") && speciality.parentElement.classList.contains("success") && fileInputs[0].parentElement.classList.contains("success") && fileInputs[1].parentElement.classList.contains("success") && address[0].parentElement.classList.contains("success") && mdp[0].parentElement.classList.contains("success")) {
    doctorSuccess.classList.add("activeDoctor");
    doctorSuccess.children[0].children[1].innerText = "your information has been sent";
    doctorSuccess.children[0].children[2].innerText = "we are checking and validating it";
    doctorSuccess.children[0].children[3].innerText = "we will inform you via email soon";

    doctorSuccess.style.display = "block";
    outer.style.display = "block";
  }
  else {
    alert("verifier vos données");
  }
})


// second form
const outerPatientForm = document.querySelector(".outerPatientForm");

const secondBtn = document.querySelector("#btn2");
secondBtn.addEventListener('click', function (event) {
  event.preventDefault();
  if (username[1].parentElement.classList.contains("success") && email[1].parentElement.classList.contains("success") && phone[0].parentElement.classList.contains("success") && address[1].parentElement.classList.contains("success") && mdp[1].parentElement.classList.contains("success")) {
    patientSucces.classList.add("activePatient");
    patientSucces.children[0].children[1].innerText = "account created";
    patientSucces.children[0].children[2].innerText = "a verification email will be sent";
    patientSucces.children[0].children[3].innerText = "";

    patientSucces.style.display = "block";
    outerPatientForm.style.display = "block";
  }
  else {
    alert("verifier vos données");
  }
})

outerPatientForm.addEventListener("click", function (event) {
  event.preventDefault();
  outerPatientForm.style.display = "none";
  patientSucces.style.display = "none";
});


// third form
const thirdBtn = document.querySelector("#btn3");
thirdBtn.addEventListener('click', function (event) {
  event.preventDefault();
  if (username[2].parentElement.classList.contains("success") && mdp[2].parentElement.classList.contains("success")) {
    doctorSuccess.classList.add("activeDoctor");
    doctorSuccess.children[0].children[1].innerText = "checking your information";
    doctorSuccess.children[0].children[2].innerText = "wait a bit";
    doctorSuccess.children[0].children[3].innerText = "";

    doctorSuccess.style.display = "block";
    outer.style.display = "block";
  }
  else {
    alert("verifier vos données");
  }
})


