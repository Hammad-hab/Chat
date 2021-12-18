Skip to content Search or jump to… Pull requests Issues Marketplace Explore @Hammad-hab Hammad-hab / Chat Public Code Issues Pull requests Actions Projects Wiki Security Insights Settings Chat/Chat App.html @Hammad-hab Hammad-hab Add files via upload Latest commit 2774fa3 3 days ago History 1 contributor 75 lines (62 sloc) 2.04 KB         #Control\_Holder { margin-top: 38%; } textarea { width: 90%; padding: 10px; margin-left: 75px; resize: none; /\* overflow: scroll; \*/ height: 90%; } body { margin: 0px; background: grey; } p { font-family: arial; }  

  ![](paper-plane.png)Send 

// Sender $("#Send").click(function () { $.ajax({ url: 'Php.php', data: { 'Mess': $("#Message").val(), 'client': $("#User").val()}, type: 'POST', success: function (data) { $("#After").html(data) } }) }) setInterval(() => { document.getElementById("Send").click() }, 1000); © 2021 GitHub, Inc. Terms Privacy Security Status Docs Contact GitHub Pricing API Training Blog About Loading complete
