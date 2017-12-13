<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title" id="loginModalLabel">Login Form</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="session/do_login">
					<div class="form-group">
						<input class="form-control" type="text" name="username" id="nama" placeholder="Username" minlength="3" placeholder="Username" required>
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="password" id="password" placeholder="Password" placeholder="Password" required>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>
</div>