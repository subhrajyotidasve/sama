$(document).on('change','#countryname',function(){


    var country_id = $(this).val(); 
    //alert(country_id);
   
    var clienttype_id = $('#locationdt').val();
    //var wkyear_id = $('#workyearr').val();

    $.ajax({

        type: "post",
        url: ajax_var.url,
        dataType: 'html',
        data: "action=country-like&nonce="+ajax_var.nonce+"&country_like=&clienttype_id="+clienttype_id+"&country_id="+country_id,

           // dataType: 'json',

            success: function(response){              

                
                $('#postshowdiv').html(response);
            }
      });


    })

