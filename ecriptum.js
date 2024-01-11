const endDate = new Date();
endDate.setDate(endDate.getDate() + 40);

function updateCountdown() {
    const currentDate = new Date();
    const timeDifference = endDate - currentDate;

    const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

    document.getElementById('days').innerHTML = days + " дней";
    document.getElementById('hours').innerHTML = hours + " часов";
    document.getElementById('minutes').innerHTML = minutes + " минут";
    document.getElementById('seconds').innerHTML = seconds + " секунд";
}

setInterval(updateCountdown, 1000);
updateCountdown();