<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Driver Portal | BlueRide</title>
<style>
body{
  background:linear-gradient(135deg,#001F3F,#006BFF);
  display:flex;justify-content:center;align-items:center;height:100vh;color:#fff;
  font-family:'Poppins',sans-serif;
}
.box{
  width:90%;max-width:400px;background:rgba(255,255,255,0.08);
  padding:35px;border-radius:20px;text-align:center;
  backdrop-filter:blur(10px);box-shadow:0 0 30px rgba(0,0,0,0.5);
  animation:slideUp 0.7s ease;
}
@keyframes slideUp{from{opacity:0;transform:translateY(30px);}to{opacity:1;transform:translateY(0);}}
h2{margin-bottom:20px;}
input{
  width:100%;margin:8px 0;padding:12px;border:none;border-radius:8px;
  background:rgba(255,255,255,0.2);color:#fff;font-size:0.95em;
}
button{
  width:100%;padding:12px;margin-top:10px;border:none;border-radius:8px;
  background:#fff;color:#006BFF;font-weight:600;font-size:1em;
  cursor:pointer;transition:0.3s;
}
button:hover{background:#006BFF;color:#fff;box-shadow:0 0 20px #00aaff;}
a{color:#fff;text-decoration:underline;}
</style>
</head>
<body>
<div class="box">
  <h2>Driver Login / Register</h2>
  <input type="text" id="name" placeholder="Full Name">
  <input type="text" id="vehicle" placeholder="Vehicle Model">
  <input type="text" id="license" placeholder="License Number">
  <button onclick="register()">Register</button>
  <p style="margin-top:15px;">Back to <a href="#" onclick="goHome()">Home</a></p>
</div>

<script>
function register(){
  const n=document.getElementById('name').value.trim();
  const v=document.getElementById('vehicle').value.trim();
  const l=document.getElementById('license').value.trim();
  if(!n||!v||!l){alert("Please fill all fields.");return;}
  alert("Welcome Driver "+n+"! Redirecting to Ride Requests...");
  setTimeout(()=>{window.location.href='track_status.php';},800);
}
function goHome(){document.body.style.opacity=0;setTimeout(()=>{window.location.href='index.php';},400);}
</script>
</body>
</html>
