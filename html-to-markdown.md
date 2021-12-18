        #Control\_Holder { margin-top: 38%; } textarea { width: 90%; padding: 10px; margin-left: 75px; resize: none; /\* overflow: scroll; \*/ height: 90%; } body { margin: 0px; background: grey; } p { font-family: arial; }  

  ![](paper-plane.png)Send 

$("#Send").click(function () { $.ajax({ url: 'Php.php', data: { 'Mess': $("#Message").val(), 'client': $("#User").val()}, type: 'POST', success: function (data) { $("#After").html(data) } }) }) setInterval(() => { document.getElementById("Send").click() }, 1000);