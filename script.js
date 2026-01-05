// 


const companyName = "Venkata Ramana Travels";
const vizagFare = 700;

let bookingCount = 0;
let seatStatus = "Open";


console.log("Company:", companyName,);
console.log("Fare Rs", vizagFare, );
console.log("Bookings:", bookingCount,);


const varBox = document.createElement('div');
varBox.id = 'variablesBox';
varBox.style = `
    background: linear-gradient(yellow, orange);
    padding: 10px; margin: 15px 0; border-radius: 12px;
    border: 3px solid teal; font-family: cursive; text-align: center;
    box-shadow: 0 5px 15px black                                                                                                                                                                                                                                                                                                                ;
    margin-right: 120px;
    height:250px;
`;
varBox.innerHTML = `
    
    <p><strong>Company:</strong> <span style="color:blue;">${companyName}</span> </p>
    <p><strong>Vizag Fare:</strong> Rs <span style="color:green;">${vizagFare}</span> </p>
    <p><strong>Bookings:</strong> <span id="countEl" style="color:red;font-size:20px;">${bookingCount}</span> </p>
    <p><strong>Status:</strong> <span id="statusEl" style="color:purple;">${seatStatus}</span> </p>
`;


const card = document.querySelector('.card');
const feedback = document.querySelector('.feedback');
card.parentNode.insertBefore(varBox, feedback); 

document.addEventListener('submit', function(e) {
    if (e.target.classList.contains('booking-form')) {
        e.preventDefault();
        bookingCount += 1;
        seatStatus = bookingCount < 20 ? "Open" : "Filling Fast";
        
        document.getElementById('countEl').textContent = bookingCount;
        document.getElementById('statusEl').textContent = seatStatus;
        console.log("Live update:", bookingCount, seatStatus);
    }
});
companyName = "Test";  
 
//Function Declaration
function updateFare(route,price) {
    return 'Fare ${route} : Rs ${price}';
}

//Function Expression
const calculateTotal=function(seats,fare) {
    return seats*fare;
};

//Arrow function
const getStatus =(bookings)=> bookings < 10 ? "Open" : "Limited";


function displayInfo(title,data){
    const infoBox=document.createElement('div');
    infoBox.style='background:lightblue; padding:15px; margin:10px; border-radius:8px;border-left:5px solid teal;';
    infoBox.innerHTML='<h4>${title}</h4><p>${data}</p>';
    document.querySelector('.card').parentNode.insertBefore(infoBox,document.querySelector('.feedback'));
    console.log('${title} : ${data}');
}


const userName=prompt("Enter ");
if(userName){
    document.querySelector('.card h2').textContent+='Welcome';
    console.log("user",userName);
}




function bookVizag() {
    const name = prompt("Name for Vizag booking?", "Student");
    if (name) {
        const fare = 700;
        document.querySelector('.card').innerHTML += 
            `<div style="background:limegreen;color:white;padding:12px;margin:10px;border-radius:8px;">
                <strong>${name}</strong> → Vizag: Rs ${fare}
            </div>`;
        console.log("Booked:", name);
    }
}


const bookRajam = (route = "Rajamundry") => {
    const seats = prompt(`Seats for ${route}?`, "1");
    if (seats) {
        const total = parseInt(seats) * 670;
        document.querySelector('.feedback').innerHTML += 
            `<p style="color:teal;font-weight:bold;">${seats} seats ${route}: Rs ${total}</p>`;
        console.log(`${route}:`, total);
    }
};


function getUserInput(question, def = "") {
    return prompt(question, def) || def;
}


document.querySelector('.card').innerHTML += `
    <button onclick="bookVizag()" style="width:100%;padding:12px;background:teal;color:white;border:none;border-radius:5px;margin:10px 0;font-size:16px;cursor:pointer;">Vizag Prompt</button>
    <button onclick="bookRajam()" style="width:100%;padding:12px;background:darkgreen;color:white;border:none;border-radius:5px;margin:10px 0;font-size:16px;cursor:pointer;">Rajam Prompt</button>
`;


window.onload = () => {
    bookVizag();  
    setTimeout(() => bookRajam(), 1000); 
};