const btn= document.querySelectorAll('#button');
const Containers = document.querySelectorAll('.contain');

const wind = document.querySelector(".window");
const out = document.querySelector('.windowout');

btn.forEach(button => button.addEventListener("click", (event)=>{

  event.preventDefault();

    document.querySelector(".window").style.display= "block";
    Containers.forEach(container => container.classList.add('blur'));
    out.style.display="block";

}));






// Get the button
const scrollToTopButton = document.getElementById("scrollToTopBtn");
      
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollToTopButton.style.display = "block";
  } else {
    scrollToTopButton.style.display = "none";
  }
};

// Scroll to the top of the document when the button is clicked
function scrollToTop() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0; 
}


//form validation

let submitBtn =document.querySelector('#submitBtn'),
resetBtn = document.querySelector('#resetBtn'),
Email = document.querySelector('#email'),
phone_number  = document.querySelector('#phone'),
small = document.querySelector("small");
submitBtn.addEventListener("click",(event)=> {
    event.preventDefault();
  small.textContent="";
    checkInputs();
    
},
resetBtn.addEventListener("click",()=> {
  Email.classList.remove("success");
  Email.classList.remove("error");
   phone_number.classList.remove("success");
   phone_number.classList.remove("error");
   small.textContent="";

} )

);


function checkInputs()
{
    const Emailvalue = Email.value.trim();
const phone_number_value = phone_number.value.trim();



if(Emailvalue === ""){
    setErrorFor(Email, "Email cannot be blank");}
else if (!isEmail(Emailvalue)){
    setErrorFor(Email,"Email is not valid");
}
else {
    setSuccessFor(Email);
}
if (phone_number_value === "") {
    setErrorFor(phone_number, "Phone Number cannot be blank");
  } else if (!isPhone_Number(phone_number_value)) {
    setErrorFor(phone_number, "Phone Number is not valid");
  } else {
    setSuccessFor(phone_number);
  
}
}
function setSuccessFor(input) {
    
    if (input.classList.contains("error")) input.classList.remove("error");
    input.classList.add("success");
  }
function setErrorFor(input, message) {
    small.innerText += "\n" + message;
    if (input.classList.contains("success")) input.classList.remove("success");
    input.classList.add("error");
  }
  
  


function isEmail(Email) {

  return /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/.test(Email);
}

function isPhone_Number(Phone_Number) {
  return /^([0]{1}[5-7]{1}[0-9]{8})$/.test(Phone_Number);
}


out.addEventListener("click", ()=> {
  out.style.display="none";
  wind.style.display="none";
  Containers.forEach(container => container.classList.remove('blur'));
  Email.classList.remove("success");
  Email.classList.remove("error");
   phone_number.classList.remove("success");
   phone_number.classList.remove("error");
   small.textContent="";

   Email.value="";
   phone_number.value ="";

})


  














      
        
     
