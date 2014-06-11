<?php
	require_once('../templates/header.php');
 ?>
 
 <div class="contents">
 <form method="post" action = "registered.php">
 <table>
	<tr>
	<td>
	Name <input type="text" name="name" <?php htmlspecialchars("name") ?> size="50" />
	</td>
	</tr>
	<tr>
	<td> Select One:
	<input name="year" type="radio">2<sup>nd</sup> year
	<input name="year" type="radio">3<sup>rd</sup> year
	<input name="year" type="radio">4<sup>th</sup> year
	</td>
	</tr>
	<tr>
	<td> CGPA<input type=""text" name="CG"> </td>
	</tr>
	<tr>
	<td><input type="submit"></td>
	</tr>
	</table>
</form>
</div>
<?php 
	require_once('../templates/footer.php');
 ?>