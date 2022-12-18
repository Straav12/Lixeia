document.getElementById("comoFunciona").style.display = "none";
document.getElementById("esconder").style.display = "none";

let abriu = false;


btn1.addEventListener('click', () => {
    if(abriu == false){
        document.getElementById("comoFunciona").style.display = "block";
        document.getElementById("comoFunciona").style.transition = "2s";
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

