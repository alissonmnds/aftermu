<div class="box">
<div class="s-header"><span>Chat {Server_Name}</span></div>
	<blockquote>
	<?php
	if(@Chat_Enable == false){
		exit("<div class=\"info-box\"> O Chat se encontra Desativado</div>");
	}else{
	?>
	<div align="center">{Chat_Scripts}</div>
	<? } ?>
	</blockquote>
</div>