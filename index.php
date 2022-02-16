<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AJAX Long Polling</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>WST Chatting</h1>
        <br>
        <div id="response"></div>
    
        <div class="message-area">
	        <form method="post" class="form">
                <input type="hidden"  name="id" id="id"  />
                <input type="text" name="nama" id="nama"  placeholder="Your name here" value="" />
	        	<input type="text" name="isi" id="isi" placeholder="Type message here" />
	        	<input type="hidden" name="tgl" id="tgl" value="<?= date('Y-m-d') ?>" />
                 <td> <input type="submit" id="display" value="kirim" /> </td>
	    	</form>
	    </div>
        <script>
            // function getContent(timestamp){
            //     var queryString = {'timestamp' : timestamp};

            //     $.ajax(
            //         {
            //             type: 'GET',
            //             url: 'server.php',
            //             data: queryString,
            //             success: function(data){
            //                 var obj = jQuery.parseJSON(data);
            //                  $('#response').append(data);
                           
            //             }
            //         }
            //     );
            // }
            
            // initialize jQuery
            $(function() {
               
                $("#display").click(function() {      
                    // eve.preventDefault();
                    $.ajax({
                            type: 'POST',
                            url: 'insert.php',
                            data: $('form').serialize(),
                            success: function(data){                    
                            }
                        }
                    );
                });

                $(document).on('click', 'input', function(eve){
                  if (eve.which == 13) {
                    $('form').submit();
                    $(this).val("");
                    return false;    
                  }
                });    
            });

        </script>
<script type="text/javascript">

                $(document).ready(function() {

                    

                    $.ajax({    //create an ajax request to display.php
                    type: "GET",
                    url: "GetMahasiswa.php",             
                    dataType: "html",   //expect html to be returned                
                    success: function(response){                    
                        $("#response").html(response); 
                        //alert(response);
                    }

                
                });
                });

</script>
    </body>
</html>
