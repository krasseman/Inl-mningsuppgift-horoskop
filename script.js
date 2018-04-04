$(document).ready(function(){
    printHoroscope();
   
    function printHoroscope(){
        $.ajax({
            type: 'GET',
            url: "viewHoroscope.php",
           
        })
        .done(function(data){
          
            $('#getMyHoroscope').html(data);
            $('#getMyHoroscope').hide();
            $('#getMyHoroscope').fadeIn();
            
            
        })

    }
 

    saveHoroscope = function() {
        var birthDate = $('#birthDate').val();
       if(birthDate !== "") { 
        $.ajax({
            type: 'POST',
            url: "addHoroscope.php",
            data: {
                birthDate: birthDate
              }
        })
        .done(function(data){
            $('#trueOrFalse').append(data + "</br>")
            printHoroscope();
        })
        }
         
        }

      
        updateHoroscope = function() {
            var birthDate = $('#birthDate').val();
            if(birthDate !== "") { 
            $.ajax({
                type: 'PUT',
                url: "updateHoroscope.php",
                data: {
                    birthDate: birthDate
                  }
            })
            .done(function(data){
                $('#trueOrFalse').append(data + "</br>")
                printHoroscope();
            })
        }else{
            $('#trueOrFalse').append("Du har inte skrivit in personNR" + "</br>");
        }
                
        }
            
            
     
            deleteHoroscope = function() {
                var birthDate = $('#birthDate').val();
               
                $.ajax({
                    type: 'DELETE',
                    url: "deleteHoroscope.php",
                    data: {
                        birthDate: birthDate
                      }
                })
                .done(function(data){
                    $('#trueOrFalse').append(data + "</br>");
                })
                printHoroscope();
                }



    });




 
      





