const form=document.querySelector(".booking-form");
if(form){
    form.onsubmit=(e)=>{
        e.preventDefault();
        alert("Booking Successful!");
    };
}

const slides=document.querySelectorAll(".slide");
let index=0;
setInterval(()=>{
    slides[index].classList.remove("active");
    index=(index+1)%slides.length;
    slides[index].classList.add("active");
},3000);