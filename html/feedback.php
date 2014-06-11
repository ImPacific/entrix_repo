<?php
	require_once('../templates/header.php');
?>
		<link rel="stylesheet" type="text/css" href="feedback.css"> </link>

			<div style="text-align: center">
			<h1 class="h1"> Your Feedback Here </h1>
			
				<div class="form-main">
					<form action="process.php" method="POST">
					
						<table class="table" style="border: 0; margin-left: auto; margin-right: auto; text-align: left">
						<tr>
						<td>Name: <input type="text" name="username" <?php htmlspecialchars("username") ?> size="50" /></td>
						</tr>
						<tr>
						<td>Select One:
						<input name="one" type="radio" value="TA"  /> TA
						<input name="one" type="radio" value="Participant" /> Participant <!-- see what has to be selected for name field -->
						</td>
						</tr>
						<tr>
						<td>
						1) On a scale of 1-5 with 1 being poor & 5 being excellent how informative was this workshop?
						<br />
						<input name="q1" type="radio" value="1" /> 1
						<input name="q1" type="radio" value="2" /> 2
						<input name="q1" type="radio" value="3" /> 3
						<input name="q1" type="radio" value="4" /> 4
						<input name="q1" type="radio" value="5" /> 5
						
						</td>
						</tr>
						<tr>
						<td> 
						2) How much useful do you think was this workshop in context with your syllabus?
						<br />
						<input name="q2" type="radio" value="1" /> 1
						<input name="q2" type="radio" value="2" /> 2
						<input name="q2" type="radio" value="3" /> 3
						<input name="q2" type="radio" value="4" /> 4
						<input name="q2" type="radio" value="5" /> 5
						<br />
						</td>
						</tr>
						<br />
						<tr align="center">
						<td>
						<input type="submit" name="submit" value="submit" />
						</td>
						</tr>
		
						</table>
					</form>
				</div>
			</div>
<?php 
	require_once('../templates/footer.php');
?>