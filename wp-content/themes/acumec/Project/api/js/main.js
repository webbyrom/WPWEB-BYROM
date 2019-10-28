
  <script>  
        $(document).ready(function(){  
            $('#slider_val').change(function(){  
                var annee1 = $(this).val();  
                $("#val_slider").text("pour l'année " + annee1);  
                $.ajax({  
                    url:"fonction_slider.php",  
                    method:"POST",  
                    data:{annee1:annee1},  
                    success:function(data){  
                        $("#product_loading").fadeIn(500).html(data);  
                    }  
                });  
            });  
        });  
    </script>  