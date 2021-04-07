 $(function(){
             $('.increment').click(function() {
                var key = $(this).attr('key'); 
                if($(this).hasClass('plus')) 
                {
                  var data = $('#'+key).val();
                  var nil = Math.max(parseInt(data) + 1);
                   $('#'+key).val(nil );
                } 
                else if ($('#'+key).val() > 0)
                {
                   var data = $('#'+key).val();
                  var nil = Math.max(parseInt(data) - 1);
                   $('#'+key).val(nil );
                } 

             return false;
        });

        });