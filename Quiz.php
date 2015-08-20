<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<?php include 'HeadTag.php'; ?>
	<link rel="stylesheet" href="css/style.assignment.css">
	<link rel="stylesheet" href="css/style.course.css">
	<title>Course Finder | OCW Tel-U</title>
	<style>
		h3 {
			color: #3b3b3b;
		}
	</style>
</head>
<body>
<?php include 'NavHeader.php' ?>
	<div class="container_12">
		<div class="grid_10 wrapper">
			<div class="breadcumbs">
				<a href="">Home</a> > 
				<a href="">Course</a> >
				<a href="">Engineering Lorem</a> >
				<a href="">Quiz</a>
			</div>
			<br><hr>
			<h1>Engineering Lorem</h1>
			<div class="clear"></div>
			<div class="grid_2 leftMenu">
				<ul>
					<?php include 'leftMenu.php'; ?>
				</ul>
			</div>
			<div class="grid_8 centerContent">
				<h3>Quiz</h3>
				<table id="assignment">
					<tr>
						<th width="80px">#Week</th>
						<th width="250px">Subject</th>
						<th width="200px">Assignment</th>
					</tr>
					<tr>
						<td>1</td>
						<td>Aturan Perkuliahan</td>
						<td></td>
					</tr>
					<tr>
						<td>2</td>
						<td>Pengenalan DSS</td>
						<td>
						</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Data Ware Housing</td>
						<td>
							<a href="">quiz_3_1.pdf</a>
						</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Decision Analysis Introduction</td>
						<td></td>
					</tr>
					<tr>
						<td>5</td>
						<td>Forecasting</td>
						<td></td>
					</tr>
					<tr>
						<td>6</td>
						<td>Simulaiton</td>
						<td>
							<a href="">quiz_6_1.pdf</a><br>
							<a href="">quiz_6_2.pdf</a>
						</td>
					</tr>
					<tr>
						<td>7</td>
						<td>AHP part 1</td>
						<td></td>
					</tr>
					<tr>
						<td>8</td>
						<td>AHP part 2</td>
						<td></td>
					</tr>
					<tr>
						<td>9</td>
						<td>Intelligent DSS</td>
						<td></td>
					</tr>
				</table>
			</div>

		</div>
		<div class="grid_2"></div>
	</div>
<?php include 'NavFooter.php'; ?>
</body>
</html>