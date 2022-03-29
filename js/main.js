const loginForm = document.querySelector("#loginForm")

loginForm.addEventListener("submit", (event) => {
    event.preventDefault();
    const userField = document.querySelector("#username").value;
    const passField = document.querySelector("#password").value;

    if(userField == "" || passField == ""){
        console.log("hoi")
        
    }
    else{
        return false;
    }
})

let limitFunc = function(){
    const x = document.getElementById("bg1");
    if (window.innerWidth<451){

        x.style.backgroundImage = "url(img/banner1-3.jpg)";
    }
    else{
        x.style.backgroundImage = "url(img/banner1-0.jpg)";
    }
}


limitFunc();
window.addEventListener("resize", limitFunc);
window.addEventListener("onload", limitFunc); 