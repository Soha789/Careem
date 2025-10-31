<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BlueRide – Smart Ride & Delivery</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}
body{
  background:linear-gradient(135deg,#001F3F,#0057FF);
  height:100vh;display:flex;justify-content:center;align-items:center;color:#fff;
}
.container{
  text-align:center;background:rgba(255,255,255,0.08);
  padding:40px;border-radius:20px;box-shadow:0 0 25px rgba(0,0,0,0.4);
  backdrop-filter:blur(8px);width:90%;max-width:420px;animation:fadeIn 1s ease;
}
@keyframes fadeIn{from{opacity:0;transform:translateY(-20px);}to{opacity:1;transform:translateY(0);}}
h1{font-size:2.2em;margin-bottom:10px;}
p{margin-bottom:25px;font-size:0.95em;opacity:0.85;}
.btn{
  display:block;width:100%;margin:10px 0;padding:14px 0;
  border:none;border-radius:10px;background:#fff;color:#0057FF;
  font-weight:600;font-size:1em;cursor:pointer;
  transition:all 0.3s ease;box-shadow:0 0 10px rgba(255,255,255,0.3);
}
.btn:hover{background:#0057FF;color:#fff;box-shadow:0 0 25px #00aaff;}
footer{margin-top:20px;font-size:0.8em;opacity:0.6;}
</style>
</head>
<body>
<div class="container">
  <h1>BlueRide</h1>
  <p>Your all-in-one ride & parcel service.</p>
  <button class="btn" onclick="go('login.php')">Book a Ride</button>
  <button class="btn" onclick="go('parcel.php')">Send a Parcel</button>
  <button class="btn" onclick="go('driver.php')">Driver Login</button>
  <button class="btn" onclick="go('signup.php')">Sign Up</button>
  <footer>© 2025 BlueRide Technologies</footer>
</div>

<script>
function go(page){ 
  document.body.style.opacity=0;
  setTimeout(()=>{ window.location.href=page; },400);
}
</script>
</body>
</html>
