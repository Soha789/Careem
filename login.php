<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login | BlueRide</title>
<style>
body{
  background:linear-gradient(135deg,#001C3F,#006DFF);
  display:flex;justify-content:center;align-items:center;height:100vh;color:#fff;
  font-family:'Poppins',sans-serif;
}
.login-box{
  width:90%;max-width:380px;background:rgba(255,255,255,0.08);
  padding:40px;border-radius:18px;box-shadow:0 0 25px rgba(0,0,0,0.5);
  backdrop-filter:blur(8px);text-align:center;animation:pop 0.7s ease;
}
@keyframes pop{from{opacity:0;transform:scale(0.9);}to{opacity:1;transform:scale(1);}}
h2{margin-bottom:20px;}
input{
  width:100%;margin:10px 0;padding:12px;border:none;border-radius:8px;
  background:rgba(255,255,255,0.2);color:#fff;font-size:0.95em;
}
input::placeholder{color:#ccc;}
button{
  width:100%;padding:12px;margin-top:12px;border:none;border-radius:8px;
  background:#fff;color:#006DFF;font-weight:600;font-size:1em;cursor:pointer;
  transition:0.3s;box-shadow:0 0 10px rgba(255,255,255,0.2);
}
button:hover{background:#006DFF;color:#fff;box-shadow:0 0 20px #00aaff;}
a{color:#fff;text-decoration:underline;font-size:0.9em;}
</style>
</head>
<body>
<div class="login-box">
  <h2>Welcome Back</h2>
  <input type="email" id="email" placeholder="Email Address">
  <input type="password" id="password" placeholder="Password">
  <button onclick="login()">Login</button>
  <p style="margin-top:15px;">New here? <a href="#" onclick="goSignup()">Create Account</a></p>
</div>

<script>
function login(){
  const e=document.getElementById('email').value.trim();
  const p=document.getElementById('password').value.trim();
  if(!e||!p){alert("Please fill all fields!");return;}
  alert("Login successful! Redirecting...");
  setTimeout(()=>{window.location.href='ride.php';},700);
}
function goSignup(){
  document.body.style.opacity=0;
  setTimeout(()=>{window.location.href='signup.php';},400);
}
</script>
</body>
</html>
