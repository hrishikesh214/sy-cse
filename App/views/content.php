<?php require base_url('Utils/header'); ?>
<?php require base_url('Utils/style') ?>

<div class="container">
	<div class="folder-path">
		<input class="back-btn" type="button" value="Back" onclick="history.back(-1)" />
		<br>
		<small class="path"><?=$folder_path?></small>
	</div>
	<hr>
	<div class="blocks">
	<?php $i=0; foreach($files as $file):?>
		<div id="folder_view" class="element" style="flex-direction: column;" onclick="goto('<?=$links[$i]?>')">
			<div><i id="info_icon" class="info_icon fas fa-<?=$check_dirs[$i]?> "></i></div>
			<div class="info_name"><?=$file?></div>
		</div>
		<?php if(($i+1)%4 == 0 && $i != 0){ echo '</div><div class="blocks">';} ?>
		<?php $i++; ?>
	<?php endforeach ?>


</div>
</div>
<script type="text/javascript">
	function goto(e){
		window.location = e;
	}
	
	var w = screen.width;
	let elements = document.querySelectorAll("#info_icon");
	let _xa ;
	if(w<700){ _xa += " fa-3x" }
	else{ _xa += " fa-5x" }
	for(var i = 0; i< elements.length; i++){
		elements[i].className += _xa;
	}

</script>

<?php require base_url('Utils/footer'); ?>