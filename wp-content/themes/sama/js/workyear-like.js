$(document).on('change','#workyearr',function(){


	var wktype_id = $('#worktyp').val();	
   
    var wktheme_id = $('#workthemee').val();
    var wkyear_id = $(this).val();
    
    $.ajax({

    	type: "post",
        url: ajax_var.url,
        dataType: 'html',
        data: "action=workyear-like&nonce="+ajax_var.nonce+"&workyear_like=&wktype_id="+wktype_id+"&wktheme_id="+wktheme_id+"&wkyear_id="+wkyear_id,

           // dataType: 'json',

            success: function(response){              

            	
                $('#postshowdiv').html(response);
            }
      });


    })

