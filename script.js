$( function() {
    $( "#datepicker" ).datepicker();
  } );
  $( function() {
    $( "#slider" ).slider({
		min: 1000;
		max:3000000;
	});
  } );
$('#submit').click(function(){
$.post('calc.php',{
	'summ': $('#summ').val(),
	'summadd': $('#summadd').val(),
	'daysn': $('#datepicker').val(),
},
function(data){
	data = JSON.parse(data);
	$('#summn').html(data.summn);
});
});