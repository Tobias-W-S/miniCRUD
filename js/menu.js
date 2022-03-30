const imgDiv = document.querySelectorAll(".menu > div > img");
console.log(imgDiv);

let rect = imgDiv.getBoundingClientRect();
console.log("x: "+ rect.x);
console.log("y: "+ rect.y);