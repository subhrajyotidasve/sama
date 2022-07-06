$(document).on('change','#workthemee',function(){


	var wktype_id = $('#worktyp').val();	
   
    var wktheme_id = $(this).val();
    var wkyear_id = $('#workyearr').val();
    
    $.ajax({

    	type: "post",
        url: ajax_var.url,
        dataType: 'html',
        data: "action=worktheme-like&nonce="+ajax_var.nonce+"&worktheme_like=&wktype_id="+wktype_id+"&wktheme_id="+wktheme_id+"&wkyear_id="+wkyear_id,

           // dataType: 'json',

            success: function(response){              

            	
                $('#postshowdiv').html(response);
            }
      });


    })

