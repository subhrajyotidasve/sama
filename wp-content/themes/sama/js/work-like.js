$(document).on('change','#worktyp',function(){


	var wktype_id = $(this).val();	
   
    var wktheme_id = $('#workthemee').val();
    var wkyear_id = $('#workyearr').val();

    $.ajax({

    	type: "post",
        url: ajax_var.url,
        dataType: 'html',
        data: "action=work-like&nonce="+ajax_var.nonce+"&work_like=&wktype_id="+wktype_id+"&wktheme_id="+wktheme_id+"&wkyear_id="+wkyear_id,

           // dataType: 'json',

            success: function(response){              

            	
                $('#postshowdiv').html(response);
            }
      });


    })

