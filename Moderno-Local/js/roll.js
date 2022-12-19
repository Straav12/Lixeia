document.getElementById("comoFunciona").style.display = "none";
document.getElementById("esconder").style.display = "none";

let abriu = false;


btn1.addEventListener('click', () => {
    if(abriu == false){
        document.getElementById("comoFunciona").style.display = "block";
        document.getElementById("btn1").style.transform = 'rotate(180deg)';
        document.getElementById("revelar").style.display = "none";
        document.getElementById("esconder").style.display = "block";
        abriu = true;
    }else if(abriu == true){
        document.getElementById("comoFunciona").style.display = "none";
        document.getElementById("btn1").style.transform = 'rotate(0deg)';
        document.getElementById("revelar").style.display = "block";
        document.getElementById("esconder").style.display = "none";
        abriu = false;
    }    
})

//TROCA DE PALAVRAS

let li = document.querySelectorAll(".list ul li");
let list = document.querySelector(".list");

let element = 0, count = 0;

setInterval(() => {
    if(element < li.length - 1){
        list.style.transform = `translateY(-${(count += 3.5)}vw)`
        element++;
    }else{
        element = 0;
        count = 0;
        list.style.transform = `translateY(-${(count)}vw)`
    }
}, 3000);