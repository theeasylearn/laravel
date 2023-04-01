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
								<div class="card-header bg-warning">
									<h5 class="card-title mb-0 text-white">Account Recovery (admin)</h5>
								</div>
								<div class="card-body">
									<div class="form-floating mb-3">
										<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
										<label for="floatingInput">Email address</label>
									</div>
									<div class="mt-2 mb-2">
										<p class="text-end">
										<button type="submit" class="btn btn-warning">Recover my account</button>
										</p>
									</div>
									<a href="/admin-login">Login</a>
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