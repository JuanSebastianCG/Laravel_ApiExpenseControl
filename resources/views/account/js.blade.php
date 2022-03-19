<script type="text/javascript">
	$(document).ready(function(){

    // cuando el usuario modifica el dropDown
		$(document).on('change','.movement',function(){

            //el valor que puso en el dropdown
			var cat_id=$(this).val();
			// el div padre del dropdown
			var div=$(this).parent();
            var op="";
            //permite llamar funciones de controlodares sin recargar la pagina
			$.ajax({
				type:'get',
				url:'{!!URL::to('findProductName')!!}',
				data:{'id':cat_id},
				success:function(data){


                    if (data!==null) {
                        op+='<option value="0" selected disabled>Elija una categoria</option>';
                        for(var i=0;i<data.length;i++){
                        op+='<option value="'+data[i].id+'">'+data[i].categoryName+'</option>';



                    }
                    div.find('.category').html(" ");
                    div.find('.category').append(op);



                    }

				},
				error:function(){

				}
			});
		});

	});
</script>

