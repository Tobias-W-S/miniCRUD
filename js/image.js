let limitFunc = function(){
    const x =  document.getElementById("banner1");
    if (window.innerWidth<451){

        x.src="img/mbanner1.jpg";
    }
    else{
        x.src="img/banner2.jpg"
    }
}


limitFunc();
window.addEventListener("resize", limitFunc);
window.addEventListener("onload", limitFunc);