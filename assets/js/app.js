/*
 *   Copyright (c) 2019 
 *   All rights reserved.
 */

// Release Date

let releaseDate = new Date('July 1, 2020 12:00:00');

// Interval

function interval(){

    // current time in milliseconds
    let current = new Date().getTime(); 
    
    // time duration between release and current data
     let duration = releaseDate - current; 
     

    // get days, hours, minutes and seconds

    const days = Math.floor(duration/(24 * 60 * 60 * 1000));

    const hours = Math.floor(duration % (24 * 60 * 60 * 1000) / (60 * 60 * 1000));

    const minutes = Math.floor(duration % (60 * 60 * 1000) / (60 * 1000));

    const seconds = Math.floor(duration % (1000 * 60) / 1000);

    let countdown = document.querySelector('#countdown');  

    // Countdown code 

    countdown.innerHTML = `
    
    <div class="counter-box">
         <span class="counter-no">
           ${days}
         </span>
         <span class="counter-text">
           Days
         </span>
       </div>
       <div class="counter-box">
         <span class="counter-no">
         ${hours}
         </span>
         <span class="counter-text">
          Hours
         </span>
       </div>
       <div class="counter-box">
         <span class="counter-no">
         ${minutes}
         </span>
         <span class="counter-text">
           Minutes
         </span>
       </div>
       <div class="counter-box">
         <span class="counter-no">
         ${seconds}
         </span>
         <span class="counter-text">
          Seconds
         </span>
       </div>
    
    `;

    // If duration is over

    if (duration < 0) {
        closeInterval();
        countdown.style.color = '#ffffffde';
        countdown.style.fontSize = '18px';
        countdown.style.textAlign = 'center';
        countdown.style.padding = '5px 5px';
        countdown.style.border = '2px solid #ffffffde';
        countdown.style.borderRadius = '5px';
        countdown.innerHTML = 'Website will be launched soon, await OctaJobs';
    }
}

interval = setInterval(interval, 1000);

// If interval time ends, end the function
function closeInterval(){
  clearInterval(interval);
}