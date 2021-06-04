<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
</head>

<body>
	<div class="container">
		<br />
		<form class="user" method="post" action="<?= base_url('index.php/setup/create_kolom'); ?>">
			<div class="form-group">
				<label for="exampleInputEmail1">Tambah tabel</label>
				<input type="text" class="form-control" id="kar" name="kar" placeholder="tambah tabel">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Tambah option</label>
				<input type="text" class="form-control" id="option_1" name="option_1" placeholder="tambah tabel">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Tambah option</label>
				<input type="text" class="form-control" id="option_2" name="option_2" placeholder="tambah tabel">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<?php echo $this->session->flashdata('msg'); ?>
		<h2>Setup Database</h2>
		<a href="<?php echo base_url() . 'index.php/setup/create_table_user' ?>" class="btn btn-success">Create Table User</a>
		<a href="<?php echo base_url() . 'index.php/setup/create_table_blog' ?>" class="btn btn-success">Create Table Blog</a>
		<form class="user" method="post" action="<?= base_url('index.php/setup/add'); ?>">
			<div class="form-group">
				
				//lets see something diffrent bruh
				
				<?php foreach ($data as $dat) { ?>
					<?php if ($dat->kar == 'kar_01') { ?>
						<label class="input-group-text" for="kar_01">Options</label>
						<select class="form-select" id="kar_01" name="kar_01">
							<option selected><?php echo $dat->kar ?></option>
							<option value="1"><?php echo $dat->option_1 ?></option>
							<?php if ($dat->option_2 > 1) { ?>
								<option value="3"><?php echo $dat->option_2 ?></option>
							<?php } ?>
							<?php if ($dat->option_3 > 1) { ?>
								<option value="3"><?php echo $dat->option_3 ?></option>
							<?php } ?>

						</select>
					<?php } ?>
					<?php if ($dat->kar == 'kar_02') { ?>
						<label class="input-group-text" for="kar_01">Options</label>
						<select class="form-select" id="kar_02" name="kar_02">
							<option selected><?php echo $dat->kar ?></option>
							<option value="1"><?php echo $dat->option_1 ?></option>
							<option value="2"><?php echo $dat->option_2 ?></option>
							<?php if ($dat->option_3 > 1) { ?>
								<option value="3"><?php echo $dat->option_3 ?></option>
							<?php } ?>

						</select>
					<?php } ?>
					<?php if ($dat->kar == 'kar_03') { ?>
						<label class="input-group-text" for="kar_03">Options</label>
						<select class="form-select" id="kar_03" name="kar_03">
							<option selected><?php echo $dat->kar ?></option>
							<option value="1"><?php echo $dat->option_1 ?></option>
							<option value="2"><?php echo $dat->option_2 ?></option>
							<?php if ($dat->option_3 > 1) { ?>
								<option value="3"><?php echo $dat->option_3 ?></option>
							<?php } ?>

						</select>
					<?php } ?>
					<?php if ($dat->kar == 'kar_04') { ?>
						<label class="input-group-text" for="kar_04">Options</label>
						<select class="form-select" id="kar_04" name="kar_04">
							<option selected><?php echo $dat->kar ?></option>
							<option value="1"><?php echo $dat->option_1 ?></option>
							<option value="2"><?php echo $dat->option_2 ?></option>
							<?php if ($dat->option_3 > 1) { ?>
								<option value="3"><?php echo $dat->option_3 ?></option>
							<?php } ?>

						</select>
					<?php } ?>
					<?php if ($dat->kar == 'kar_05') { ?>
						<label class="input-group-text" for="kar_05">Options</label>
						<select class="form-select" id="kar_05" name="kar_05">
							<option selected><?php echo $dat->kar ?></option>
							<option value="1"><?php echo $dat->option_1 ?></option>
							<option value="2"><?php echo $dat->option_2 ?></option>
							<?php if ($dat->option_3 > 1) { ?>
								<option value="3"><?php echo $dat->option_3 ?></option>
							<?php } ?>

						</select>
					<?php } ?>
					<?php if ($dat->kar == 'kar_06') { ?>
						<label class="input-group-text" for="kar_06">Options</label>
						<select class="form-select" id="kar_06" name="kar_06">
							<option selected><?php echo $dat->kar ?></option>
							<option value="1"><?php echo $dat->option_1 ?></option>
							<option value="2"><?php echo $dat->option_2 ?></option>
							<?php if ($dat->option_3 > 1) { ?>
								<option value="3"><?php echo $dat->option_3 ?></option>
							<?php } ?>

						</select>
					<?php } ?>
					<?php if ($dat->kar == 'kar_07') { ?>
						<label class="input-group-text" for="kar_07">Options</label>
						<select class="form-select" id="kar_07" name="kar_07">
							<option selected><?php echo $dat->kar ?></option>
							<option value="1"><?php echo $dat->option_1 ?></option>
							<option value="2"><?php echo $dat->option_2 ?></option>
							<?php if ($dat->option_3 > 1) { ?>
								<option value="3"><?php echo $dat->option_3 ?></option>
							<?php } ?>

						</select>
					<?php } ?>
					<?php if ($dat->kar == 'kar_08') { ?>
						<label class="input-group-text" for="kar_08">Options</label>
						<select class="form-select" id="kar_08" name="kar_08">
							<option selected><?php echo $dat->kar ?></option>
							<option value="1"><?php echo $dat->option_1 ?></option>
							<option value="2"><?php echo $dat->option_2 ?></option>
							<?php if ($dat->option_3 > 1) { ?>
								<option value="3"><?php echo $dat->option_3 ?></option>
							<?php } ?>

						</select>
					<?php } ?>
				<?php } ?>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>

		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

			<thead>

				<tr>
					<th>No</th>
					<th>blog_author</th>
					<th>blog_description</th>
					<?php
					foreach ($data as $sa) {
						for ($i = 0; $i < 99; $i++) { ?>
							<?php if ($sa->kar == "kar_$i") { ?>
								<th>
									<?php echo $sa->kar; ?>
								</th>
							<?php } ?>
						<?php } ?>
					<?php } ?>
				</tr>

			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($dataa as $aaa) { ?>
					<tr>

						<td><?php echo $no++ ?></td>
						<td><?php echo $aaa->blog_author ?></td>
						<td><?php echo $aaa->blog_description ?></td>
						<?php if ($aaa->kar_01 != null) { ?>
							<td><?php if ($aaa->kar_01 > 0) {
									echo $aaa->kar_01;
								?></td>
						<?php } else if ($aaa->kar_01 == null) { ?>
							<td><?php echo null;
								} ?></td>
						<?php } ?>
						<?php if ($aaa->kar_02 != null) { ?>
							<td><?php if ($aaa->kar_02 > 0) {
									echo $aaa->kar_02;
								?></td>
						<?php } else if ($aaa->kar_02 == null) { ?>
							<td><?php echo null;
								} ?></td>
						<?php } ?>
						<?php if ($aaa->kar_03 != null) { ?>
							<td><?php if ($aaa->kar_03 > 0) {
									echo $aaa->kar_03;
								?></td>
						<?php } else if ($aaa->kar_03 == null) { ?>
							<td><?php echo null;
								} ?></td>
						<?php } ?>
						<?php if ($aaa->kar_04 != null) { ?>
							<td><?php if ($aaa->kar_04 > 0) {
									echo $aaa->kar_04;
								?></td>
						<?php } else if ($aaa->kar_04 == null) { ?>
							<td><?php echo null;
								} ?></td>
						<?php } ?>
						<?php if ($aaa->kar_05 != null) { ?>
							<td><?php if ($aaa->kar_05 > 0) {
									echo $aaa->kar_05;
								?></td>
						<?php } else if ($aaa->kar_05 == null) { ?>
							<td><?php echo null;
								} ?></td>
						<?php } ?>
						<?php if ($aaa->kar_06 != null) { ?>
							<td><?php if ($aaa->kar_06 > 0) {
									echo $aaa->kar_06;
								?></td>
						<?php } else if ($aaa->kar_06 == null) { ?>
							<td><?php echo null;
								} ?></td>
						<?php } ?>
						<?php if ($aaa->kar_07 != null) { ?>
							<td><?php if ($aaa->kar_07 > 0) {
									echo $aaa->kar_07;
								?></td>
						<?php } else if ($aaa->kar_07 == null) { ?>
							<td><?php echo null;
								} ?></td>
						<?php } ?>
						<?php if ($aaa->kar_08 != null) { ?>
							<td><?php if ($aaa->kar_08 > 0) {
									echo $aaa->kar_08;
								?></td>
						<?php } else if ($aaa->kar_08 == null) { ?>
							<td><?php echo null;
								} ?></td>
						<?php } ?>


					</tr>
				<?php } ?>

			</tbody>

		</table>

	</div>
	<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
</body>

</html>
