
<footer> 
	Rodapé 
</footer>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


<script type="text/javascript">
	$(document).ready(function(){
		var checkfade = true;
		$('.navbar-toggler').click(function(){
			if(checkfade == true){
			$('#topbar').css("background-color", "#000");
			checkfade = false;
			} else {
				$('#topbar').css("background-color", "rgba(0, 0, 0, 0.75)");
				checkfade = true;
			}
		});

	});
</script>

</body>
</html>