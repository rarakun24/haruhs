<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title" id="tambahModalLabel">Registration</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="crud/insert_data">
					<div class="form-group">
						<input type="text" name="userid" class="form-control" id="userid" placeholder="User ID">
					</div>
					<div class="form-group">
						<input type="text" name="noinduk" class="form-control" id="noinduk" placeholder="No. Induk"></input>
					</div>
					<div class="form-group">
						<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama"></input>
					</div>
					<div class="form-group">
						<input type="text" name="namaw" class="form-control" id="namaw" placeholder="Nama Wali"></input>
					</div>
					<div class="form-group">
						<input type="text" name="notlp" class="form-control" id="notlp" placeholder="Nomor Telp."></input>
					</div>
					<div class="form-group">
						<input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat"></input>
					</div>				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button class="btn btn-primary">Add</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title edit" id="editModalLabel">Update Score</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="crud/edit_data">
					<div class="form-group">
						<input type="text" name="mapel1" class="form-control mapel1" id="mapel1" placeholder="Lesson Schedule 1">
					</div>
					<div class="form-group">
						<input type="text" name="nilai1" class="form-control nilai1" id="nilai1" placeholder="Score 1">
					</div>
					<div class="form-group">
						<input type="text" name="mapel2" class="form-control mapel2" id="mapel2" placeholder="Lesson Schedule 2"></input>
					</div>
					<div class="form-group">
						<input type="text" name="nilai2" class="form-control nilai2" id="nilai2" placeholder="Score 2"></input>
					</div>
					<div class="form-group">
						<input type="text" name="mapel3" class="form-control mapel3" id="mapel3" placeholder="Lesson Schedule 3"></input>
					</div>
					<div class="form-group">
						<input type="text" name="nilai3" class="form-control nilai3" id="nilai3" placeholder="Score 3"></input>
					</div>
					<div class="form-group">
						<input type="text" name="mapel4" class="form-control mapel4" id="mapel4" placeholder="Lesson Schedule 4"></input>
					</div>
					<div class="form-group">
						<input type="text" name="nilai4" class="form-control nilai4" id="nilai4" placeholder="Score 4"></input>
					</div>
					<div class="form-group">
						<input type="text" name="mapel5" class="form-control mapel5" id="mapel5" placeholder="Lesson Schedule 5"></input>
					</div>
					<div class="form-group">
						<input type="text" name="nilai5" class="form-control nilai5" id="nilai5" placeholder="Score Schedule 5"></input>
					</div>
					<div class="form-group">
						<input type="hidden" name="userid" class="form-control userid" id="userid" placeholder="User ID"></input>
						<input type="text" class="form-control userid" id="userid" placeholder="User ID" disabled></input>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button class="btn btn-primary">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="buttton" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title" id="deleteModalLabel">Delete Data</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="crud/delete_data">
				<input type="hidden" name="userid" class="form-control userid" id="userid">
				<input type="text" class="form-control userid" id="userid" disabled>
			</div>
			<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button class="btn btn-danger">DELETE</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="listModal" tabindex="-1" role="dialog" aria-labelledby="listModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title" id="listModalLabel">Student's Raport</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="crud/s_list">
				<input type="text" name="userid" class="form-control userid" id="userid" placeholder="Enter Your User ID">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary tombol" data-toggle="modal" data-target="#listModal">OK</button>
				</form>
			</div>
		</div>
	</div>
</div>