
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Simple Chatbot in PHP</title>
    <link rel="stylesheet" href="chatstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<div style="margin-left:-800px;">
    <a href=<?php if(isset($_GET['prev'])){
       $prev=$_GET['prev'];
       echo $prev;
        }?>><img style="width:15%"src="../images/close.png" alt=""></a>
    </div>
    <div class="wrapper">
    
        <div class="title">JustGo Tech Online Chatbot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there, how can I help you?</p>
                  
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox" style="width:auto"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
        
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox" style="width:auto"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        if(($value=="TT")||($value=="tt")){
                            $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div></br><div><a href="../screening/cov.php"><button style="color:#007bff;background:white;width:170px;height:40px;font-size:15px;margin-left:80px">TAKE TEST</button></a></div>';
                }
                        if($value=="VR"){
                            $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div></br><div><a href="../screening/results.php"><button style="color:#007bff;background:white;width:170px;height:40px;font-size:15px">VIEW MORE</button></a></div>';
                }
                        if($value=="BA"){
                            $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div></br><div><a href="../booking2/booking.php"><button style="color:#007bff;background:white;width:170px;height:40px;font-size:15px">VIEW MORE</button></a></div>';
                }
                        if($value=="MB"){
                            $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div></br><div><a href="../booking2/viewbooking.php"><button style="color:#007bff;background:white;width:170px;height:40px;font-size:15px">VIEW MORE</button></a></div>';
                }
                if($value=="SD"){
                            $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div></br><div><a href="../pharmacy/ph_store.php"><button style="color:#007bff;background:white;width:170px;height:40px;font-size:15px">VIEW MORE</button></a></div>';
                }
                if($value=="VP"){
                            $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div></br><div><a href="../pharmacy/ph_records.php"><button style="color:#007bff;background:white;width:170px;height:40px;font-size:15px">VIEW MORE</button></a></div>';
                }
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
    
</body>
</html>

