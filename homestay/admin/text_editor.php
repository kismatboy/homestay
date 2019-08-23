
<html>
<head>
	<script src="text_editor/ckeditor.js"></script>
	<script src="text_editor/samples/js/sample.js"></script>
	
</head></head>
<body>

<div class="adjoined-bottom" id="test">
		<div class="grid-container">
			<div class="grid-width-100">

				<div id="editor">
					
				</div>
			</div>
		</div>
	</div>
	<script>
	initSample();
</script>


<button onclick="test();">send</button>


<script type="text/javascript">
	function test(){
		var x=document.getElementById("cke_1_contents").innerHTML;
		alert(x);
	}
</script>
<?php 

?>
</body></html>



	