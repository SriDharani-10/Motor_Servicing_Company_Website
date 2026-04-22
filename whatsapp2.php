<!-- <div class="animate__animated animate__pulse animate__infinite" style="overflow: visible;--animate-duration:2s;z-index: 9999!important;">
    <img src="starkmotors/images-starkmotors/whatsapp.png" class="whatsapp" />
</div>
 -->


    <!-- // Construct the final WhatsApp URL -->
    <!-- let phone = number -->
    <!-- const whatsappURL = https://wa.me/912345678 ? text=${encodedMessage}; -->


<!-- WhatsApp Floating Button -->
<!-- <a href="https://wa.me/916380011966?text=Hello" target="_blank"> -->
    <!-- <div onclick="messagebox()">
  <img src="starkmotors/images-starkmotors/whatsapp.png" 
       class="whatsapp animate__animated animate__heartBeat animate__infinite" />
       </div> -->
<!-- </a> -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>whatsapp text box</title>
</head>
<style>
    .messagebox{
        width: 313px;
       /* border-radius: 10px;
        background-color: white;
        border: 10px solid grey;*/
        
    }
    .align1{
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
/*        border: 0px solid white;*/

        background-color: #135937;
        color: white;
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: flex-start;
        padding: 10px;
    }
    .align1 img.close-icon {
    filter: brightness(0) invert(1);  /* turns black → white */
}
    .align2{
        text-align:left;
        background-color: beige;
        /*        width: 20vw;*/
        margin-top: 0px;
        height: 30px;
        padding-left:5px;
        padding-top:11px;    
    }
    .align3{
        display: flex;
        flex-direction: row;
        justify-content: start;
        align-items: center;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
    }
    .box-style{
        height: 30px;
    width: 22vw;
    margin-right: 6px;
    margin-top: -20px;
/*    border-color: white;*/
    border: none;
    padding-left: 5px;
    font-size: 16px;
    font-family: monospace;
    }
    .send{
        position: relative;
        right: 9px;
        top: -6px;
    }
</style>
<body>
    

    <div class="messagebox">
        <div class="align1">
            <div>
                <img src="starkmotors/images-starkmotors/Home/logonew.png" style="width:100px;height:60px;" />
            </div>
            <div>
                <h3  style="margin-top: 4px;">Speed Motors</h3>
                <p  style="margin-top: -3px;">Get in touch with us</p>
            </div>
            <div>
                <img src="starkmotors/images-starkmotors/close.png" style="width:15px;height:15px;position:relative;left: 42px;top: 3px;cursor: pointer;" class="close-icon" />
            </div>
        </div>
        
        <p class="align2 text-center">Welcome to Speed Motors</p>
        
        <div class="align3">
            <input class="box-style" type="text" name="message"/ placeholder="write a message here...">
            <img src="starkmotors/images-starkmotors/sendicon.png" class="send" />
        </div>
    </div>



    <div onclick="messagebox()" style="cursor: pointer;">
      <img src="starkmotors/images-starkmotors/whatsapp.png" class="whatsapp animate__animated animate__heartBeat animate__infinite" />
    </div>


    <script src="starkmotors/file-starkmotors/js/whatsapp.js"></script>
</body>
</html>
