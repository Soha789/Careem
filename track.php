<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tracking | BlueRide</title>
<style>
body{
  background:linear-gradient(135deg,#001C3F,#007BFF);
  color:#fff;font-family:'Poppins',sans-serif;
  height:100vh;display:flex;justify-content:center;align-items:center;flex-direction:column;
}
.map{
  position:relative;width:90%;max-width:400px;height:400px;
  background:rgba(255,255,255,0.1);border-radius:20px;overflow:hidden;
  box-shadow:0 0 30px rgba(0,0,0,0.5);backdrop-filter:blur(10px);
}
.marker{
  position:absolute;width:30px;height:30px;border-radius:50%;
  background:#00aaff;box-shadow:0 0 20px #00aaff;
  top:350px;left:20px;animation:move 12s linear infinite;
}
@keyframes move{
  0%{top:350px;left:20px;}
  25%{top:280px;left:150px;}
  50%{top:200px;left:250px;}
  75%{top:120px;left:120px;}
  100%{top:50px;left:350px;}
}
.info{text-align:center;margin-top:20px;}
button{
  padding:12px 25px;margin-top:15px;border:none;border-radius:8px;
  background:#fff;color:#007BFF;font-weight:600;font-size:1em;
  cursor:pointer;transition:0.3s;
}
button:hover{background:#007BFF;color:#fff;box-shadow:0 0 25px #00aaff;}
</style>
</head>
<body>
<h2>Live Ride Tracking</h2>
<div class="map">
  <div class="marker"></div>
</div>
<div class="info">
  <p id="statusText">Your driver is on the way 🚗</p>
  <button onclick="finish()">Finish Ride</button>
</div>

<script>
function finish(){
  document.getElementById("statusText").innerText="Arriving at destination...";
  setTimeout(()=>{window.location.href='track_status.php';},2000);
}
</script>
</body>
</html>
