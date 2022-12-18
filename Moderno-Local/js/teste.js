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