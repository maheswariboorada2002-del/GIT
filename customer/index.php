<!DOCTYPE html>
<html>
<head>
<title>Customer Support - Dharani</title>

<script src="https://accounts.google.com/gsi/client" async defer></script>

<style>
body {
    margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
}

/* Watermark */
.watermark {
    position: fixed;
    font-size: 120px;
    opacity: 0.05;
    top: 40%;
    left: 20%;
    color: white;
    text-align:center;
    justify-content:center;
}

/* Login Card */
.card {
    position: relative;
    width: 320px;
    padding: 60px 30px 30px;
    background: #1f2a38;
    border-radius: 15px;
    box-shadow: 0 15px 30px rgba(0,0,0,0.4);
    text-align: center;
}

/* Circle Logo */
.circle {
    position: absolute;
    top: -40px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: linear-gradient(135deg, #9D50BB, #6E48AA, #00C9A7);
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 10px 20px rgba(0,0,0,0.5);
    font-size: 28px;
    color: white;
    font-weight: bold;
}

/* Title */
h2 {
    color: white;
    margin-bottom: 20px;
}

.brand {
    color: #00C9A7;
    font-size: 14px;
    margin-bottom: 20px;
}
</style>
</head>

<body>

<div class="watermark">Maheswari</div>

<div class="card">
    <div class="circle">MS26</div>
    <h2>Customer Support</h2>
    <div class="brand">Brand: MS2026</div>

    <div id="g_id_onload"
         data-client_id="305289859820-856orc6ah31mg67msn8jdhom7bvsai0v.apps.googleusercontent.com"
         data-callback="handleCredentialResponse">
    </div>

    <div class="g_id_signin"
         data-type="standard"
         data-size="large"
         data-theme="outline"
         data-text="sign_in_with"
         data-shape="pill"
         data-logo_alignment="left">
    </div>

    <form id="loginForm" method="POST" action="callback.php">
        <input type="hidden" name="credential" id="credential">
    </form>
</div>

<script>
function handleCredentialResponse(response) {
    document.getElementById("credential").value = response.credential;
    document.getElementById("loginForm").submit();
}
</script>

</body>
</html>