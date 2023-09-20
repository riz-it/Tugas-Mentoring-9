<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>IDCARD Generator</title>

	<style type="text/css">
		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
			text-decoration: none;
		}

		a:hover {
			color: #97310e;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
			min-height: 96px;
		}

		p {
			margin: 0 0 10px;
			padding: 0;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
	</style>
</head>

<body>

	<div id="container" style="padding-bottom: 15px;">
		<h1>Daftar Mahasiswa</h1>
		<div id="body">
			<table style="border-collapse: collapse; border: 1px solid black; padding: 5px;">
				<tr style="border: 1px solid black; padding: 5px;">
					<th style="border: 1px solid black; padding: 5px;">No</th>
					<th style="border: 1px solid black; padding: 5px;">Nama</th>
					<th style="border: 1px solid black; padding: 5px;">Tanggal Lahir</th>
					<th style="border: 1px solid black; padding: 5px;">Tempat Lahir</th>
					<th style="border: 1px solid black; padding: 5px;">Alamat</th>
					<th style="border: 1px solid black; padding: 5px;">Opsi</th>
				</tr>
				<?php $no = 1; ?>
				<?php foreach ($users as $user) : ?>
					<tr style="border: 1px solid black; padding: 5px;">
						<td style="border: 1px solid black; padding: 5px;text-align: center;"><?= $no ?></td>
						<td style="border: 1px solid black; padding: 5px;"><?= $user->name ?></td>
						<td style="border: 1px solid black; padding: 5px;text-align: center;"><?= date('Y-m-d', strtotime($user->date_birth)) ?></td>
						<td style="border: 1px solid black; padding: 5px;text-align: center;"><?= $user->place_of_birth; ?></td>
						<td style="border: 1px solid black; padding: 5px;"><?= $user->address ?></td>
						<td style="border: 1px solid black; padding: 5px;">
							<button class="generate" data-key="<?= $user->id ?>">Generate IDCARD</button>
						</td>
					</tr>
					<?php $no++ ?>
				<?php endforeach; ?>
			</table>
		</div>

	</div>
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			$('.generate').click(function() {
				let id = $(this).data('key');
				let url = "<?= base_url('Welcome/generateIdCard/') ?>" + id;
				window.open(url, '_blank');
			});
		});
	</script>
</body>

</html>