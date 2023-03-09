let video = Array.from(document.querySelector(".fullscreen-bg").children)[0]; // Background Video
let main = document.querySelector("main");
let waitRequest = document.querySelector(".wait-request");
let form = Array.from(document.forms[0].children) // Login Form Inputs Array
let emailInput = Array.from(form[0].children) // Email Input Box
let passwordInput = Array.from(form[1].children) // Password Input Box
let submitButton = form[2]; // Submit Button

video.playbackRate = 0.8; // Adjusting background video speed a bit slower


// Submit Functions
submitButton.addEventListener("click",(event)=> {

  event.preventDefault(); // Preventing Default Behavior

  if (emailInput[0].value.length > 0 && passwordInput[0].value.length > 0) { // If neither of the inputs are empty
    validate(emailInput[0].value,passwordInput[0].value) // Send a request to to validate

  }else{ // Else do an animation in the empty inputs
    if (!emailInput[0].value.length > 0) {
      emailInput[1].style.animationName = "inputError";
      setTimeout(() => {
        emailInput[1].style.animationName = "";
      },600)
    }

    if (!passwordInput[0].value.length > 0) {
      passwordInput[1].style.animationName = "inputError";
      setTimeout(() => {
        passwordInput[1].style.animationName = "";
      },600)

    }
  }
});

function validate(email,password){
  main.style.backdropFilter = "none";
  waitRequest.style.zIndex = 5;
  waitRequest.style.opacity = 1;

  $.ajax({
    url: "request.php",
    type: "POST",
    dataType: "JSON",
    data: {status: "validate", data: {"email": email, "password": password}},
    success: (data) => {
      // alert(data);
      if (data) {
        notification("success");
      }else{
        notification("error");
      }
    },
    error: (request, status, error) => {
        alert(request.responseText);
    },
    complete: () => {
      main.style.backdropFilter = "blur(4px) opacity(1)";
      waitRequest.style.zIndex = -1;
      waitRequest.style.opacity = 0;
    }
  })
}

function notification(status){
  let div = document.createElement("div");
  let h5 = document.createElement("h5");
  let p = document.createElement("p");

  div.appendChild(h5);
  div.appendChild(p);
  div.classList.add("notification");
  div.style.opacity = "0";
  div.style.top = "0";

  if (status == "success") {
    h5.textContent = "Success";
    p.textContent = "You are logged in";
    div.classList.add("success");
  }else if (status == "error") {
    h5.textContent = "Fail";
    p.textContent = "Not in database";
    div.classList.add("error");
  }

  document.body.appendChild(div);
  setTimeout(() => {
    div.style.opacity = "1"
    div.style.top = "55px";
  }, 100)

  setTimeout(() => {
    div.style.opacity = "0"
    div.style.top = "0";
  }, 2000)

}
