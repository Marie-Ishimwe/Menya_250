const startingMinutes = 3;
let time = startingMinutes * 60;

const countdownEl = document.getElementById("countdown");

setInterval(updateCountdown, 1000);

function updateCountdown(){
    const minutes = Math.floor(time/60);
    let seconds = time % 60;
    seconds = seconds < 10 ? '0'+ seconds :seconds;

    if(minutes == 1 && seconds == 0)
    {
        alert("You have one minute left");
        // location.reload();
        countdownEl.style.background = "#FB1B30";
        countdownEl.style.borderRadius ="35px";
    }
    else if(minutes == 0 && seconds == 0)
    {   
        location.replace("failed.php");
    }
    else
    {
        countdownEl.innerHTML = `${minutes}:${seconds}`;
    }
    
    time--;
    
}