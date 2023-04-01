@component("header")
@endcomponent
<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
	<div class="wrapper">
	@component("menu")
	@endcomponent
		<div class="main">
		@component("switch-button")
		@endcomponent
			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3">Category Management</h1>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<p class="text-end">
									<a href="/admin-create-category" 
									class="btn btn-primary">
										Add Category
									</a>
								</p>
								<div class="card-header">
									<h5 class="card-title mb-0">Existing Category</h5>
								</div>
								<div class="card-body">
									<table class="table table-striped table-bordered">
										<thead>
											<tr>
												<td>Sr No</td>
												<td>Title</td>
												<td>Photo</td>
												<td width='50%'>Detail</td>
												<td>Edit</td>
												<td>Delete</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Laptop</td>
												<td>
	<img src="https://picsum.photos/100" class="img-fluid" srcset="">
												</td>
												<td>
													Lorem ipsum dolor sit amet consectetur, adipisicing elit. At accusamus eligendi sit quia doloremque sed voluptas reprehenderit mollitia soluta culpa?
												</td>
												<td>
	<a href="admin-edit-category"><i class="fa fa-edit fa-2x"></i></a>
												</td>
												<td>
	<a href="admin-delete-category"><i class="fa fa-trash fa-2x"></i></a>
												</td>
											</tr>
										</tbody>
									</table>
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