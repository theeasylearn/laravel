@component("header")
@endcomponent

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
	<div class="wrapper">
		<div class="main">
			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-8 offset-2">
							<div class="card">
								<div class="card-header bg-primary">
									<h5 class="card-title mb-0 text-white">Admin Login</h5>
								</div>
								<div class="card-body">
									<div class="form-floating mb-3">
										<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
										<label for="floatingInput">Email address</label>
									</div>
									<div class="form-floating">
										<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
										<label for="floatingPassword">Password</label>
									</div>
									<div class="mt-2 mb-2">
										<p class="text-end">
										<button type="submit" class="btn btn-primary">Login</button>
										</p>
									</div>
									<a href="#">Forgot password? Click here</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>
	@component("script")
	@endcomponent
</body>

</html>