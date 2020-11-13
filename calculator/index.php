<?php
if (isset($_POST['input'])) {
	$input = $_POST['input'];
	try {
		$result = eval('return ' . $input . ';');
	} catch (ParseError $e) {
		$result = 'Invalid input';
	}
} else {
	$input = 0;
	$result = 0;
}
?>
<!doctype html>
<html>

<head>
	<style>
		label,
		#input {
			width: 100%;
			font-size: 35px;
		}

		#input {
			text-align: right;
		}

		td {
			width: 70px;
			height: 70px;
		}

		button {
			display: inline-block;
			width: 100%;
			height: 100%;
			font-size: 35px;
		}

		#maindiv {
			width: 298px;
			margin: 0 auto;
		}

		#inputdiv {
			width: 100%;
			text-align: right;
		}

		#divequal {
			float: left;
			width: 20px;
			padding-left: 5px;
		}

		#divresult {
			width: 278px;
			margin-left: 20px;
			text-align: right;
		}
	</style>
</head>

<body>
	<form action="#" method="post">
		<div id="maindiv">
			<div id="inputdiv">
				<input type="text" id="input" name="input" readonly value="<?php echo $input; ?>" />
			</div>
			<div>
				<div id="divequal"><label>=</label></div>
				<div id="divresult"><label id="result"><?php echo $result; ?></label></div>
			</div>
			<div>
				<table>
					<tr>
						<td><button type="button" onclick="press('7')">7</button></td>
						<td><button type="button" onclick="press('8')">8</button></td>
						<td><button type="button" onclick="press('9')">9</button></td>
						<td><button type="button" onclick="press('+')">+</button></td>
					</tr>
					<tr>
						<td><button type="button" onclick="press('4')">4</button></td>
						<td><button type="button" onclick="press('5')">5</button></td>
						<td><button type="button" onclick="press('6')">6</button></td>
						<td><button type="button" onclick="press('-')">-</button></td>
					</tr>
					<tr>
						<td><button type="button" onclick="press('1')">1</button></td>
						<td><button type="button" onclick="press('2')">2</button></td>
						<td><button type="button" onclick="press('3')">3</button></td>
						<td><button type="button" onclick="press('*')">*</button></td>
					</tr>
					<tr>
						<td><button type="button" onclick="press('.')">.</button></td>
						<td><button type="button" onclick="press('0')">0</button></td>
						<td><button type="button" onclick="press('%')">%</button></td>
						<td><button type="button" onclick="press('/')">/</button></td>
					</tr>
					<tr>
						<td><button type="button" onclick="ac()">AC</button></td>
						<td><button type="button" onclick="del()">Del</button></td>
						<td colspan="2"><button type="submit" value="Cal">=</button></td>
					</tr>
				</table>
			</div>
		</div>
	</form>
	<script>
		input = document.getElementById("input");

		function press(value) {
			if (input.value == 0)
				input.value = value;
			else
				input.value += value;
		}

		function del() {
			var newStr = input.value.slice(0, -1);
			if (newStr == "")
				newStr = 0;
			input.value = newStr;
		}

		function ac() {
			input.value = 0;
			document.getElementById('result').innerText = 0;
		}
	</script>
</body>

</html>