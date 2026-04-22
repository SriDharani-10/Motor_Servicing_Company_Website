<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WhatsApp Floating Chat</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <style>
    /* WhatsApp floating icon */
    .whatsapp {
      width: 60px;
      height: 60px;
      position: fixed;
      bottom: 20px;
      right: 20px;
      cursor: pointer;
      z-index: 9999;
    }

    /* Message box styling */
    .messagebox {
      width: 300px;
      border-radius: 10px;
      position: fixed;
      bottom: 90px; /* just above the WhatsApp icon */
      right: 20px;
      background: #fff;
/*      box-shadow: 0px 4px 12px rgba(0,0,0,0.3);*/
      display: none; /* hidden by default */
      z-index: 9998;
      font-family: Arial, sans-serif;
    }

    .align1 {
      background-color: #135937;
      color: white;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    .align1 h3 {
      margin: 0;
      font-size: 16px;
    }
    .align1 p {
      margin: 0;
      font-size: 12px;
    }

    .align2 {
      text-align: center;
      background-color: beige;
      margin: 0;
      padding: 10px;
      font-size: 14px;
      text-align: left;
    }

    .align3 {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
    }

    .box-style {
      flex: 1;
      height: 30px;
      margin-right: 6px;
      border: none;
      padding-left: 5px;
      font-size: 14px;
      font-family: monospace;
      border-radius: 5px;
    }

    .send {
      width: 25px;
      height: 25px;
      cursor: pointer;
    }

    .close-icon {
      width: 15px;
      height: 15px;
      cursor: pointer;
      filter: brightness(0) invert(1); /* makes black icon → white */
    }
  </style>
</head>
<body>

  <!-- WhatsApp Floating Button -->
  <div onclick="toggleMessageBox()">
    <img src="starkmotors/images-starkmotors/whatsapp.png" 
         class="whatsapp animate__animated animate__heartBeat animate__infinite" />
  </div>

  <!-- Message Box -->
  <div class="messagebox" id="messageBox">
    <div class="align1">
      <div>
        <img src="starkmotors/images-starkmotors/Home/logonew.png" style="width:60px;height:40px;" />
      </div>
      <div style="flex:1; padding-left:10px;">
        <h3 style="margin-top:2px">Speed Motors</h3>
        <p  style="margin-top:4px">Get in touch with us</p>
      </div>
      <div>
        <img src="starkmotors/images-starkmotors/close.png" class="close-icon" onclick="toggleMessageBox()" />
      </div>
    </div>
    
    <p class="align2">Welcome to Speed Motors</p>
    
    <div class="align3">
      <input class="box-style" type="text" name="message" id="message" placeholder="Write a message here...">
      <a target="_blank" id="sending"><img src="starkmotors/images-starkmotors/sendicon.png" class="send" onclick="sendmessage()" /></a>
    </div>
  </div>

  <script>
    function toggleMessageBox() {
      const box = document.getElementById("messageBox");
      if (box.style.display === "block") {
        box.style.display = "none";
      } else {
        box.style.display = "block";
      }
    }

// SENDING MESSAGE WHEN USER ENTERS "ENTER" BUTTON
let msg = document.getElementById("message");
let a = document.getElementById("sending");

  msg.addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
      event.preventDefault(); // stop default Enter behaviour

      if (msg.value.trim() !== "") {
        let encoded = encodeURIComponent(msg.value);
        a.href = "https://wa.me/916380011966?text=" + encoded;
        window.open(a.href, "_blank");
        msg.value = ""; 
      }
    }
  });

    function sendmessage() {
      let msg=document.getElementById("message");
      let a=document.getElementById("sending");
      let encoded = encodeURIComponent(msg.value);
      a.href = "https://wa.me/916380011966?text=" + encoded;
      msg.value = ""; 
    }
  </script>
</body>
</html>
=======
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WhatsApp Floating Chat</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <style>
    /* WhatsApp floating icon */
    .whatsapp {
      width: 60px;
      height: 60px;
      position: fixed;
      bottom: 20px;
      right: 20px;
      cursor: pointer;
      z-index: 9999;
    }

    /* Message box styling */
    .messagebox {
      width: 300px;
      border-radius: 10px;
      position: fixed;
      bottom: 90px; /* just above the WhatsApp icon */
      right: 20px;
      background: #fff;
/*      box-shadow: 0px 4px 12px rgba(0,0,0,0.3);*/
      display: none; /* hidden by default */
      z-index: 9998;
      font-family: Arial, sans-serif;
    }

    .align1 {
      background-color: #135937;
      color: white;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    .align1 h3 {
      margin: 0;
      font-size: 16px;
    }
    .align1 p {
      margin: 0;
      font-size: 12px;
    }

    .align2 {
      text-align: center;
      background-color: beige;
      margin: 0;
      padding: 10px;
      font-size: 14px;
      text-align: left;
    }

    .align3 {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
    }

    .box-style {
      flex: 1;
      height: 30px;
      margin-right: 6px;
      border: none;
      padding-left: 5px;
      font-size: 14px;
      font-family: monospace;
      border-radius: 5px;
    }

    .send {
      width: 25px;
      height: 25px;
      cursor: pointer;
    }

    .close-icon {
      width: 15px;
      height: 15px;
      cursor: pointer;
      filter: brightness(0) invert(1); /* makes black icon → white */
    }
  </style>
</head>
<body>

  <!-- WhatsApp Floating Button -->
  <div onclick="toggleMessageBox()">
    <img src="starkmotors/images-starkmotors/whatsapp.png" 
         class="whatsapp animate__animated animate__heartBeat animate__infinite" />
  </div>

  <!-- Message Box -->
  <div class="messagebox" id="messageBox">
    <div class="align1">
      <div>
        <img src="starkmotors/images-starkmotors/Home/logonew.png" style="width:60px;height:40px;" />
      </div>
      <div style="flex:1; padding-left:10px;">
        <h3 style="margin-top:2px">Speed Motors</h3>
        <p  style="margin-top:4px">Get in touch with us</p>
      </div>
      <div>
        <img src="starkmotors/images-starkmotors/close.png" class="close-icon" onclick="toggleMessageBox()" />
      </div>
    </div>
    
    <p class="align2">Welcome to Speed Motors</p>
    
    <div class="align3">
      <input class="box-style" type="text" name="message" id="message" placeholder="Write a message here...">
      <a target="_blank" id="sending"><img src="starkmotors/images-starkmotors/sendicon.png" class="send" onclick="sendmessage()" /></a>
    </div>
  </div>

  <script>
    function toggleMessageBox() {
      const box = document.getElementById("messageBox");
      if (box.style.display === "block") {
        box.style.display = "none";
      } else {
        box.style.display = "block";
      }
    }

// SENDING MESSAGE WHEN USER ENTERS "ENTER" BUTTON
let msg = document.getElementById("message");
let a = document.getElementById("sending");

  msg.addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
      event.preventDefault(); // stop default Enter behaviour

      if (msg.value.trim() !== "") {
        let encoded = encodeURIComponent(msg.value);
        a.href = "https://wa.me/916380011966?text=" + encoded;
        window.open(a.href, "_blank");
        msg.value = ""; 
      }
    }
  });

    function sendmessage() {
      let msg=document.getElementById("message");
      let a=document.getElementById("sending");
      let encoded = encodeURIComponent(msg.value);
      a.href = "https://wa.me/916380011966?text=" + encoded;
      msg.value = ""; 
    }
  </script>
</body>
</html>
>>>>>>> 20b626fd5bf942b2ade2b5f4d8dc4f2afbe87b58
