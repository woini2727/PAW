$(document).ready(function(){
    testLinks();
            function testLinks() { 
            $('a').each(function(i)  {
                var thisUrl = $(this).attr('href');

                var element = $(this); 

                $.ajax({
                    url: thisUrl, 
                    type: 'get',
                    method: 'head',
                    error: function() {
                        //element.addClass('linkFail');
                        element.remove();
                       
                    },

                    success: function() { 
                        element.addClass('linkSuccess');
                    }
                }); 

            });}
});