$(document).ready(function(){
   $('#contactform').submit(function(event){
      alert("medio clic")
		event.preventDefault();
      $.ajax({
			type: 'POST',
         data: $(this).serialize(),
         url: "./registro.php",
         success: function(data) {
            alert('AJAX call was successful!');
            alert('Data from the server' + data);
            $('#contactform').css('display',' none');
            $('.thanks').css('display','block');
          },    
			error: function(data){
            //Cuando la interacción retorne un error, se ejecutará esto.
            console.log('nos se puedo guardar ')

         }
      });
   })
});