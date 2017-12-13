<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	<div class="nav-buar">
		<h2>Haru HomeSchooling</h2>
		<div class="lo-link">
			<button type="button" class="btn btn-link" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-user"></span></button>
		</div>
		<div class="gu">
			<img src="assets/img/hrhs-header.jpg">
		</div>
	</div>
	<div class="container con-cos">
	<button type="button" class="btn btn-link" data-toggle="modal" data-target="#tambahModal">
		<span class="glyphicon glyphicon-plus"></span> Registration
	</button>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>NO</th>
				<th>NIS</th>
				<th>NAME</th>
				<th>INSTRUCTION</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i = 1;
				foreach ($haruhs as $key => $value) {
			?>	
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $value['noinduk'];?></td>
				<td><?php echo $value['nama'];?></td>
				<td>
				<button type="button" class="btn btn-primary tombol"
					data-toggle="modal" data-target="#listModal">
					<span class="glyphicon glyphicon-education"></span></button>
				</td>
				<?php $session = $this->session->userdata('login_in');
				if ($session == TRUE) {?>
				<td><?php echo $value['userid'];?></td>
				<td>
					<button type="button" class="btn btn-success tombol"
					data-toggle="modal" data-target="#editModal"
					data-mapel1="<?php echo $value['mapel1'];?>"
					data-nilai1="<?php echo $value['nilai1'];?>"
					data-mapel2="<?php echo $value['mapel2'];?>"
					data-nilai2="<?php echo $value['nilai2'];?>"
					data-mapel3="<?php echo $value['mapel3'];?>"
					data-nilai3="<?php echo $value['nilai3'];?>"
					data-mapel4="<?php echo $value['mapel4'];?>"
					data-nilai4="<?php echo $value['nilai4'];?>"
					data-mapel5="<?php echo $value['mapel5'];?>"
					data-nilai5="<?php echo $value['nilai5'];?>">
					<span class="glyphicon glyphicon-edit"></span></button>

					<button type="button" class="btn btn-danger tombol"
					data-toggle="modal" data-target="#deleteModal"
					data-useridel="<?php echo $value['userid'];?>">
					<span class="glyphicon glyphicon-remove"></span></button>
				</td>
				<?php
					
				} ?>
			</tr>
			<?php
			$i++;
			}
			?>	
		</tbody>
	</table>
</div>