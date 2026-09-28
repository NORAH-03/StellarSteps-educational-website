<?php
$name = "Explorer";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Welcome</title>

    <!-- Norah Ballash Alhajri 441200195 -->


<style>
body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:'Segoe UI', sans-serif;
    background: linear-gradient(to bottom, #0b0c2a, #050618);
    color:white;
}

.box{
    background: rgba(255,255,255,0.05);
    padding:40px;
    border-radius:20px;
    text-align:center;
    backdrop-filter: blur(10px);
    border:1px solid rgba(255,255,255,0.1);
    width: 600px;
}

h1{
    color:#00d4ff;
    margin-bottom:20px;
}

p{
    color:#ccc;
    font-size:16px;
    line-height:1.6;
}

/* Button */
.btn{
    margin-top:25px;
    padding:12px 25px;
    border:none;
    border-radius:25px;
    background: linear-gradient(45deg, #00d4ff, #4facfe);
    color:black;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
    font-size:15px;
}

.btn:hover{
    transform: scale(1.05);
}
</style>
</head>

<body>

<div class="box">

    <h1>✨ Welcome to Stellar Steps ✨</h1>

    <p>
        <?php
        echo "Hello, $name! Ready to explore the universe?";
        ?>
    </p>

    <!-- Button -->
    <button onclick="goPlanets()" class="btn">
        Enter the Solar System 🌌
    </button>

</div>

<script>
function goPlanets(){
    window.location.href = "Planets.html";
}

</script>

</body>
</html>