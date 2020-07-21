<?php require base_url('Utils/header'); ?>
<?php require base_url('Utils/style') ?>
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

<div class="container">
	<span class="x-msg">Click <a id="link" data-auto-download href="<?=$file?>">here</a> if file doesn't start downloading ...</span>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		let x = $("#link").attr('href');
		window.location = x;
	});
</script>
<?php require base_url('Utils/footer'); ?>