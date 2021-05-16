const slider = document.getElementsByClassName("slider")[0];
const btnLeft = document.getElementsByClassName("slider__btn--left")[0];
const btnRight = document.getElementsByClassName("slider__btn--right")[0];

const slides = slider.getElementsByClassName("teammatebox");
let focusedSlide = 0;

let clock = 0;

// --------------------------------------------------------

setInterval(() => {
    clock += 250;
    if(clock >= _CHANGE_TIME_){
        ChangeSlide();
    }
}, 250);


_CHANGE_TIME_ = 5000;
function ChangeSlide(direction = "left"){
    clock = 0;
    if(focusedSlide < 0){
        focusedSlide = slides.length - focusedSlide%slides.length-2;
    }
    index = focusedSlide % slides.length;
    let cords = [,,];
    let lefts = [];
    let rights = [];

// ----------------------------------

    index - 1 < 0 ? cords[0] = slides.length-1 : cords[0] = index - 1;
    cords[1] = index;
    cords[2] = (index+1)%slides.length;

    let r=0, l=0;
    if((slides.length-3) % 2 == 0){
        r = l = (slides.length - 3)/2;
    }else{
        l = (slides.length - 4)/2;
        r = l+1;
    }

// ----------------------------------

    for(i = 0; i < r ;i++){
        rights.push((index+2+i)%slides.length);
    }
    for(i = 0; i < l ;i++){
        // console.log(index-2-i);
        if(index-2-i < 0){
            if(index - 1 < 0){
                lefts.push(slides.length-2-i);
            }else{
                lefts.push(slides.length-1-i);
            }
        }
        else{
            lefts.push(index-2-i);
        }
    }

// ----------------------------------
    for(slide of slides){
        slide.style.visibility = "hidden";
    }

    for(item of lefts){
        slides[item].style.left = "-30%";
    }
    slides[cords[0]].style.left = "25%";
    slides[cords[0]].style.visibility = "visible";
    slides[cords[1]].style.left = "50%";
    slides[cords[1]].style.visibility = "visible";
    slides[cords[2]].style.left = "75%";
    slides[cords[2]].style.visibility = "visible";
    for(item of rights){
        slides[item].style.left = "130%";
    }
    if(direction == "left"){
        slides[lefts[0]].style.visibility = "visible";
    }
    else{
        slides[rights[0]].style.visibility = "visible";
    }



    focusedSlide++;
}


// ---------------------------------------------------------
for(slide of slides){
    slide.style.position = "absolute";
}
ChangeSlide();

// ---------------------EVENTLISTENERS----------------------
btnLeft.addEventListener("click", ()=>{
    clock > 500 ? ChangeSlide() : "";
});
btnRight.addEventListener("click", ()=>{
    // focusedSlide++;
    if(clock > 500){ focusedSlide -= 2;ChangeSlide("right");}
});