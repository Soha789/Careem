<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signup | BlueRide</title>
<style>
body{
  background:linear-gradient(135deg,#002B5B,#007BFF);
  display:flex;justify-content:center;align-items:center;height:100vh;color:#fff;
  font-family:'Poppins',sans-serif;
}
.form-box{
  width:90%;max-width:400px;background:rgba(255,255,255,0.1);
  padding:35px;border-radius:20px;box-shadow:0 0 25px rgba(0,0,0,0.4);
  backdrop-filter:blur(10px);animation:slideIn 0.7s ease;
}
@keyframes slideIn{from{opacity:0;transform:translateY(-25px);}to{opacity:1;transform:translateY(0);}}
h2{text-align:center;margin-bottom:20px;}
input{
  width:100%;margin:8px 0;padding:12px;border:none;border-radius:8px;
  background:rgba(255,255,255,0.2);color:#fff;font-size:0.95em;
}
input::placeholder{color:#ddd;}
button{
  width:100%;padding:12px;margin-top:10px;border:none;border-radius:8px;
  background:#fff;color:#007BFF;font-weight:600;font-size:1em;
  cursor:pointer;transition:0.3s;
}
button:hover{background:#007BFF;color:#fff;box-shadow:0 0 20px #00aaff;}
.link{text-align:center;margin-top:15px;font-size:0.9em;}
.link a{color:#fff;text-decoration:underline;}
</style>
</head>
<body>
<div class="form-box">
  <h2>Create Account</h2>
  <input type="text" id="name" placeholder="Full Name">
  <input type="email" id="email" placeholder="Email Address">
  <input type="password" id="password" placeholder="Password">
  <button onclick="signup()">Sign Up</button>
  <div class="link">Already have an account? <a href="#" onclick="goLogin()">Login</a></div>
</div>

<script>
function signup(){
  const n=document.getElementById('name').value.trim();
  const e=document.getElementById('email').value.trim();
  const p=document.getElementById('password').value.trim();
  if(!n||!e||!p){alert("Please fill all fields!");return;}
  alert("Welcome "+n+" 🎉 Redirecting to ride booking...");
  setTimeout(()=>{window.location.href='ride.php';},800);
}
function goLogin(){
  document.body.style.opacity=0;
  setTimeout(()=>{window.location.href='login.php';},400);
}
</script>
</body>
</html>
