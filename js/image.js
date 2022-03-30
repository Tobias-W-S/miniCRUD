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