<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Book a Ride | BlueRide</title>
<style>
body{
  background:linear-gradient(135deg,#002A5B,#007BFF);
  display:flex;justify-content:center;align-items:center;height:100vh;color:#fff;
  font-family:'Poppins',sans-serif;
}
.ride-box{
  width:90%;max-width:420px;background:rgba(255,255,255,0.1);
  padding:35px;border-radius:20px;box-shadow:0 0 25px rgba(0,0,0,0.4);
  backdrop-filter:blur(10px);animation:fadeIn 0.8s ease;
}
@keyframes fadeIn{from{opacity:0;transform:translateY(-20px);}to{opacity:1;transform:translateY(0);}}
h2{text-align:center;margin-bottom:15px;}
input{
  width:100%;margin:8px 0;padding:12px;border:none;border-radius:8px;
  background:rgba(255,255,255,0.2);color:#fff;font-size:0.95em;
}
button{
  width:100%;padding:12px;margin-top:10px;border:none;border-radius:8px;
  background:#fff;color:#007BFF;font-weight:600;font-size:1em;
  cursor:pointer;transition:0.3s;
}
button:hover{background:#007BFF;color:#fff;box-shadow:0 0 25px #00aaff;}
.fare{text-align:center;margin-top:10px;font-size:1em;}
a{color:#fff;text-decoration:underline;}
</style>
</head>
<body>
<div class="ride-box">
  <h2>Book Your Ride</h2>
  <input type="text" id="pickup" placeholder="Pickup Location">
  <input type="text" id="drop" placeholder="Drop-off Location">
  <input type="number" id="distance" placeholder="Estimated Distance (km)">
  <div class="fare" id="fareDisplay"></div>
  <button onclick="calcFare()">Calculate Fare</button>
  <button onclick="confirmRide()">Confirm Ride</button>
  <p style="text-align:center;margin-top:15px;">Back to <a href="#" onclick="goHome()">Home</a></p>
</div>

<script>
function calcFare(){
  const d=parseFloat(document.getElementById('distance').value);
  if(isNaN(d)||d<=0){alert("Enter valid distance.");return;}
  const fare=5+d*3;
  document.getElementById('fareDisplay').innerHTML="Estimated Fare: SAR "+fare.toFixed(2);
}
function confirmRide(){
  const p=document.getElementById('pickup').value.trim();
  const q=document.getElementById('drop').value.trim();
  if(!p||!q){alert("Please fill pickup and drop.");return;}
  alert("Ride confirmed from "+p+" to "+q+" 🚗");
  setTimeout(()=>{window.location.href='track.php';},800);
}
function goHome(){document.body.style.opacity=0;setTimeout(()=>{window.location.href='index.php';},400);}
</script>
</body>
</html>
