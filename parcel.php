<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Send Parcel | BlueRide</title>
<style>
body{
  background:linear-gradient(135deg,#001F4F,#0090FF);
  display:flex;justify-content:center;align-items:center;height:100vh;color:#fff;
  font-family:'Poppins',sans-serif;
}
.parcel-box{
  width:90%;max-width:420px;background:rgba(255,255,255,0.1);
  padding:35px;border-radius:20px;box-shadow:0 0 25px rgba(0,0,0,0.4);
  backdrop-filter:blur(10px);animation:slideIn 0.8s ease;
}
@keyframes slideIn{from{opacity:0;transform:translateY(25px);}to{opacity:1;transform:translateY(0);}}
h2{text-align:center;margin-bottom:20px;}
input{
  width:100%;margin:8px 0;padding:12px;border:none;border-radius:8px;
  background:rgba(255,255,255,0.2);color:#fff;font-size:0.95em;
}
textarea{
  width:100%;margin:8px 0;padding:12px;border:none;border-radius:8px;
  background:rgba(255,255,255,0.2);color:#fff;font-size:0.95em;height:80px;
}
button{
  width:100%;padding:12px;margin-top:10px;border:none;border-radius:8px;
  background:#fff;color:#0090FF;font-weight:600;font-size:1em;
  cursor:pointer;transition:0.3s;
}
button:hover{background:#0090FF;color:#fff;box-shadow:0 0 25px #00aaff;}
a{color:#fff;text-decoration:underline;}
</style>
</head>
<body>
<div class="parcel-box">
  <h2>Send a Parcel</h2>
  <input type="text" id="sender" placeholder="Sender Name">
  <input type="text" id="receiver" placeholder="Receiver Name">
  <input type="text" id="pickup" placeholder="Pickup Address">
  <input type="text" id="drop" placeholder="Drop Address">
  <textarea id="details" placeholder="Parcel details..."></textarea>
  <button onclick="bookParcel()">Book Delivery</button>
  <p style="text-align:center;margin-top:15px;">Back to <a href="#" onclick="goHome()">Home</a></p>
</div>

<script>
function bookParcel(){
  const s=document.getElementById('sender').value.trim();
  const r=document.getElementById('receiver').value.trim();
  if(!s||!r){alert("Please fill sender & receiver.");return;}
  alert("Parcel booked successfully 🚚");
  setTimeout(()=>{window.location.href='track_status.php';},800);
}
function goHome(){document.body.style.opacity=0;setTimeout(()=>{window.location.href='index.php';},400);}
</script>
</body>
</html>
