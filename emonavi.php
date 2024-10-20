<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mood Tracker</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
<hr width="45%" align="left" size="4" color="#F0A8D0">
<font color="#AD88C6"><h1 align="center">EMONAVI</h1></font>
<hr width="45%" align="right" size="4" color="#F0A8D0">
</header>
<div class="calendar-container">
	<div class="calendar-header">
        	<button id="prev-month"><h1><</h1></button>
            	<h2 id="month-year"><font color= "#FFE6E6"></h2>
		<button id="next-month"><h1>></h1></button>
        </div>
<div class="calendar-grid highlight-row">
            <div class="weekday">Sun</div>
            <div class="weekday">Mon</div>
            <div class="weekday">Tue</div>
            <div class="weekday">Wed</div>
            <div class="weekday">Thu</div>
            <div class="weekday">Fri</div>
            <div class="weekday">Sat</div>
        </div>
        <div class="calendar-grid" id="calendar-grid"></div>
    </div>
    <script src="script.js"></script>
   <div class="mood-selector">
        <div class="mood" data-mood="terrible">&#128542; Terrible</div>
        <div class="mood" data-mood="bad">&#128530; Bad</div>
        <div class="mood" data-mood="okay">&#128528; Okay</div>
        <div class="mood" data-mood="good">&#128522; Good</div>
        <div class="mood" data-mood="excellent">&#128513; Excellent</div>
  </div>
    <div class="note">
        <textarea placeholder="Note"></textarea>
        <button><b>Add Note</b></button>
</div>
</body>
</html>
