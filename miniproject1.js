function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

var timeMe25 = function () {
    var x = 25;
    var mins = 60 * x,
        display = document.querySelector('#time25');
    startTimer(mins, display);
};

var timeMe60 = function () {
    var x = 60;
    var mins = 60 * x,
        display = document.querySelector('#time60');
    startTimer(mins, display);
};