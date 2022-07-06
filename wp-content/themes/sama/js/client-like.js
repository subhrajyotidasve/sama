$(document).on('change','#locationdt',function(){


	var clienttype_id = $(this).val();	
    //alert(clienttype_id);
   
    var country_id = $('#countryname').val();
    //var wkyear_id = $('#workyearr').val();

    $.ajax({

    	type: "post",
        url: ajax_var.url,
        dataType: 'html',
        data: "action=client-like&nonce="+ajax_var.nonce+"&client_like=&clienttype_id="+clienttype_id+"&country_id="+country_id,

           // dataType: 'json',

            success: function(response){              

            	
                $('#postshowdiv').html(response);
            }
      });


    })

