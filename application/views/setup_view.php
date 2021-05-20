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
				<input type="text" class="form-control" id="karakter" name="karakter" placeholder="tambah tabel">
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
				<?php foreach ($data as $dat) { ?>
					<?php if ($dat->karakter == 'kar_01') { ?>
						<label class="input-group-text" for="kar_01">Options</label>
						<select class="form-select" id="kar_01" name="kar_01">
							<option selected><?php echo $dat->karakter ?></option>
							<option value="1"><?php echo $dat->option_1 ?></option>
							<option value="2"><?php echo $dat->option_2 ?></option>
							<?php if ($dat->option_3 > 1) { ?>
								<option value="3"><?php echo $dat->option_3 ?></option>
							<?php } ?>

						</select>
					<?php } ?>
					<?php if ($dat->karakter == 'kar_02') { ?>
						<label class="input-group-text" for="kar_02">Options</label>
						<select class="form-select" id="kar_02" name="kar_02">
							<option selected><?php echo $dat->karakter ?></option>
							<option value="1"><?php echo $dat->option_1 ?></option>
							<option value="2"><?php echo $dat->option_2 ?></option>
							<?php if ($dat->option_3 > 1) { ?>
								<option value="3"><?php echo $dat->option_3 ?></option>
							<?php } ?>

						</select>
					<?php } ?>
					<?php if ($dat->karakter == 'kar_03') { ?>
						<label class="input-group-text" for="kar_03">Options</label>
						<select class="form-select" id="kar_03" name="kar_03">
							<option selected><?php echo $dat->karakter ?></option>
							<option value="1"><?php echo $dat->option_1 ?></option>
							<option value="2"><?php echo $dat->option_2 ?></option>
							<?php if ($dat->option_3 > 1) { ?>
								<option value="3"><?php echo $dat->option_3 ?></option>
							<?php } ?>

						</select>
					<?php } ?>
					<?php if ($dat->karakter == 'kar_04') { ?>
						<label class="input-group-text" for="kar_04">Options</label>
						<select class="form-select" id="kar_04" name="kar_04">
							<option selected><?php echo $dat->karakter ?></option>
							<option value="1"><?php echo $dat->option_1 ?></option>
							<option value="2"><?php echo $dat->option_2 ?></option>
							<?php if ($dat->option_3 > 1) { ?>
								<option value="3"><?php echo $dat->option_3 ?></option>
							<?php } ?>

						</select>
					<?php } ?>
					<?php if ($dat->karakter == 'kar_05') { ?>
						<label class="input-group-text" for="kar_05">Options</label>
						<select class="form-select" id="kar_05" name="kar_05">
							<option selected><?php echo $dat->karakter ?></option>
							<option value="1"><?php echo $dat->option_1 ?></option>
							<option value="2"><?php echo $dat->option_2 ?></option>
							<?php if ($dat->option_3 > 1) { ?>
								<option value="3"><?php echo $dat->option_3 ?></option>
							<?php } ?>

						</select>
					<?php } ?>
					<?php if ($dat->karakter == 'kar_06') { ?>
						<label class="input-group-text" for="kar_06">Options</label>
						<select class="form-select" id="kar_06" name="kar_06">
							<option selected><?php echo $dat->karakter ?></option>
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
				<?php $no = 1;
				foreach ($sam as $aa) { ?>
					<tr>

						<th>No</th>
						<th>blog_author</th>
						<th>blog_description</th>
						<th>kar_01</th>
						<th>kar_02</th>
						<th>kar_03</th>
						<th>kar_04</th>
						<?php if (!empty($aa->kar == 'kar_05')) { ?>
							<th>kar_05</th>
						<?php } ?>
						<?php if (!empty($aa->kar == 'kar_06')) { ?>
							<th>kar_06</th>
						<?php } ?>

					</tr>
				<?php } ?>

			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($dataa as $aaa) { ?>
					<tr>

						<td><?php echo $no++ ?></td>
						<td><?php echo $aaa->blog_author ?></td>
						<td><?php echo $aaa->blog_description ?></td>
						<td><?php echo $aaa->kar_01 ?></td>
						<td><?php echo $aaa->kar_02 ?></td>
						<td><?php echo $aaa->kar_03 ?></td>
						<td><?php echo $aaa->kar_04 ?></td>
						<?php if ($aaa->kar_05 != null) { ?>
							<td><?php if ($aaa->kar_05 > 0) {
									echo $aaa->kar_05;
								}  ?></td>
						<?php } else if ($aaa->kar_05 == null) { ?>
							<td><?php echo null;
							} ?></td>
							<?php if ($aaa->kar_06 != null) { ?>
								<td><?php if ($aaa->kar_06 > 0) {
										echo $aaa->kar_06;
									}  ?></td>
							<?php } else if ($aaa->kar_06 == null) { ?>
								<td><?php echo null;
								} ?></td>

					</tr>
				<?php } ?>

			</tbody>

		</table>

	</div>
	<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
</body>

</html>