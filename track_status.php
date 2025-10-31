<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Status | BlueRide</title>
<style>
body{
  background:linear-gradient(135deg,#00245B,#00A3FF);
  color:#fff;font-family:'Poppins',sans-serif;
  height:100vh;display:flex;justify-content:center;align-items:center;flex-direction:column;text-align:center;
}
.status-box{
  width:90%;max-width:400px;background:rgba(255,255,255,0.1);
  padding:35px;border-radius:20px;box-shadow:0 0 30px rgba(0,0,0,0.4);
  backdrop-filter:blur(10px);animation:fadeIn 0.7s ease;
}
@keyframes fadeIn{from{opacity:0;transform:translateY(-20px);}to{opacity:1;transform:translateY(0);}}
.progress{
  width:100%;background:rgba(255,255,255,0.2);border-radius:10px;margin:20px 0;
  overflow:hidden;height:14px;
}
.bar{
  width:0%;height:100%;background:#00ffcc;border-radius:10px;
  box-shadow:0 0 20px #00ffcc;animation:load 8s forwards;
}
@keyframes load{from{width:0%;}to{width:100%;}}
button{
  padding:12px 25px;border:none;border-radius:8px;
  background:#fff;color:#007BFF;font-weight:600;font-size:1em;
  cursor:pointer;transition:0.3s;
}
button:hover{background:#007BFF;color:#fff;box-shadow:0 0 25px #00aaff;}
</style>
</head>
<body>
<div class="status-box">
  <h2>Ride Status</h2>
  <p id="msg">Completing your trip...</p>
  <div class="progress"><div class="bar"></div></div>
  <button onclick="goHome()">Back to Home</button>
</div>

<script>
setTimeout(()=>{document.getElementById('msg').innerText='Ride Completed ✅';},8000);
function goHome(){
  document.body.style.opacity=0;
  setTimeout(()=>{window.location.href='index.php';},400);
}
</script>
</body>
</html>
