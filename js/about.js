const typedTextSpan = document.querySelector("#rotating-subtitle");
const cursorSpan = document.querySelector(".cursor");

const rolesArray = [
    "comp sci student",
    "gym rat",
    "freelance developer",
    "retro tech fanatic",
    "programmer"
];

const typingDelay = 200; // 200ms typing delay
const erasingDelay = 100; // 100ms - erasing faster than typing
const newTextDelay = 2000; // 2s delay between current & next string

let rolesArrayIndex = 0;
let charIndex = 0;

// function to type chars 
function type() {
    if(charIndex < rolesArray[rolesArrayIndex].length){
        // type
        if(!cursorSpan.classList.contains("typing")){
            cursorSpan.classList.add("typing"); //remove binking while typing
        }
        typedTextSpan.textContent += rolesArray[rolesArrayIndex].charAt(charIndex);
        charIndex++;
        setTimeout(type, typingDelay); //recurrsively calls type() func after a delay (typingDelay/200ms)
    }else{
        // erase
        cursorSpan.classList.remove("typing"); // bring back blinking while not typing
        setTimeout(erase, newTextDelay);
    }
}

function erase() {
    if(charIndex > 0){
        if(!cursorSpan.classList.contains("typing")){
            cursorSpan.classList.add("typing"); //remove binking while typing
        }
        // erase if still chars left
        typedTextSpan.textContent = rolesArray[rolesArrayIndex].substring(0, charIndex - 1); //
        charIndex--;
        setTimeout(erase, erasingDelay); 
    }else{
        cursorSpan.classList.remove("typing");
        // type
        rolesArrayIndex++; // move onto next string
        if(rolesArrayIndex >= rolesArray.length){
            rolesArrayIndex = 0;
        }
        setTimeout(type, typingDelay + 1100);
    }
}

// call function when DOM content is loaded initially
document.addEventListener("DOMContentLoaded", function (){
    setTimeout(type, newTextDelay + 250);
});
