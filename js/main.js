const loginForm = document.querySelector("#loginForm")

loginForm.addEventListener("submit", (event) => {

    const userField = document.querySelector("#username");
    const passField = document.querySelector("#password");

    if(userField.value == ""){

        userField.style.border = "solid";
        userField.style.borderWidth = "5px";
        userField.style.borderColor = "red";
        event.preventDefault();
        
    }
    if(passField.value == ""){

        passField.style.border = "solid";
        passField.style.borderWidth = "5px";
        passField.style.borderColor = "red";
        event.preventDefault();
    }
    else{
        userField.style.border = "none";
        passField.style.border = "none";
        return true;
    }
})
