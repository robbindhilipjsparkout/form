<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Count Down Timer</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<body class="col-lg-4 col-lg-offset-4">
	
    <h1 class="text-uppercase ">Countdown Timer</h1>
	
	<div>
<label>Days:</label>
<input type="number" id="days" min="0" value="0"><br></div><br>


<label>Hours:</label>
<input type="number" id="hours" min="0" max="23" value="0"><br><br>

<label>Minutes:</label>
<input type="number" id="minutes" min="0" max="59" value="0"><br><br>


<label>Seconds:</label>
<input type="number" id="seconds" min="0" max="59" value="0"><br><br>
</div>

<button onclick="startTimer()" class="btn btn-primary text-uppercase" >Start</button>

<div id="countdown" style="border:1px solid black ; margin-top:5px; "></div>


</body>
</html>


<script>

let countdownInterval;

function startTimer() {
  const daysInput = document.getElementById("days");
  const hoursInput = document.getElementById("hours");
  const minutesInput = document.getElementById("minutes");
  const secondsInput = document.getElementById("seconds");
  const countdownElement = document.getElementById("countdown");

  // Get the values of the input fields
  const days = parseInt(daysInput.value);
  const hours = parseInt(hoursInput.value);
  const minutes = parseInt(minutesInput.value);
  const seconds = parseInt(secondsInput.value);

  // Calculate the total number of seconds
  const totalSeconds = days * 24 * 60 * 60 + hours * 60 * 60 + minutes * 60 + seconds;

  // Start the countdown timer
  let remainingSeconds = totalSeconds;
  countdownInterval = setInterval(() => {
    remainingSeconds--;
    if (remainingSeconds < 0) {
      clearInterval(countdownInterval);
      countdownElement.textContent = "Time's up!";
    } else {
      const remainingDays = Math.floor(remainingSeconds / (24 * 60 * 60));
      const remainingHours = Math.floor((remainingSeconds % (24 * 60 * 60)) / (60 * 60));
      const remainingMinutes = Math.floor((remainingSeconds % (60 * 60)) / 60);
      const remainingSecondsMod = remainingSeconds % 60;
      countdownElement.textContent = ` Time Left: ${remainingDays}d ${remainingHours}h ${remainingMinutes}m ${remainingSecondsMod}s`;
    }
  }, 1000);
}


</script>