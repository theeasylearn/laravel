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
					<h1 class="h3 mb-3">Blank Page</h1>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Empty card</h5>
								</div>
								<div class="card-body">
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