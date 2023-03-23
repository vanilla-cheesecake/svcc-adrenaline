<!DOCTYPE html>
<html>
<head>
	<title>SVCC ADRENALINE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header>
		<h1>SVCC ADRENALINE</h1>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Classes</a></li>
				<li><a href="#">Attendance</a></li>
				<li><a href="#">Reports</a></li>
				<li><a href="#">Settings</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section>
			<h2>Welcome, Professor Lloyd</h2>
			<p>You are currently checked in to Class ABC123.</p>
			<form>
				<input type="submit" value="Check Out">
			</form>
		</section>
		<section>
        <h2>Today's Schedule</h2>
			<table>
				<thead>
					<tr>
						<th>Time</th>
						<th>Class</th>
						<th>Location</th>
						<th>Check In</th>
						<th>Check Out</th>
					</tr>
				</thead>
				<tbody>
                    <tr>
						<td>8:00 AM</td>
						<td>ABC123</td>
						<td>Room 101</td>
						<td><form><input type="submit" value="Check In"></form></td>
						<td><form><input type="submit" value="Check Out"></form></td>
					</tr>
                    <tr>
						<td>10:00 AM</td>
						<td>DEF456</td>
						<td>Room 202</td>
						<td><form><input type="submit" value="Check In"></form></td>
						<td><form><input type="submit" value="Check Out"></form></td>
					</tr>
				</tbody>
			</table>
		</section>
		<section>
			<h2>Attendance Report</h2>
			<p>You have attended 10 out of 12 classes this semester.</p>
			<table>
				<thead>
					<tr>
						<th>Class</th>
						<th>Date</th>
						<th>Time</th>
						<th>Status</th>
						<th>Location</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>ABC123</td>
						<td>January 15, 2023</td>
						<td>8:00 AM</td>
						<td>Present</td>
						<td>Room 101</td>
					</tr>
					<tr>
						<td>ABC123</td>
						<td>January 22, 2023</td>
						<td>8:00 AM</td>
						<td>Present</td>
						<td>Room 101</td>
					</tr>
					<!-- More rows for attendance records -->
				</tbody>
			</table>
		</section>
	</main>
</body>
</html>