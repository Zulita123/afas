<script type="text/javascript">
	function car(c){
		if(event.keyCode == 13){
			var h = $("#"+c).val();
			document.location = '<?php echo base_url();?>admin/halad/'+c+"/"+h;
		}
	}
</script>