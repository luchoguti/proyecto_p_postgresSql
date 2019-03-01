        <script type="text/javascript" src="<?php echo $ruta_public; ?>public/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="<?php echo $ruta_public; ?>public/js/bootstrap.js"></script>
        <script>
        	
        	function eliminarIttem(controller,action,id){

        			if(confirm("Realmente desea eliminar?")){
        				window.location = "index.php?controller="+controller+"&action="+action+"&_id="+id+"";
					}

        	}
        </script>
    </body>
</html>