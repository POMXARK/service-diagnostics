<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts/head')
	@include('layouts/head-bottom-link')
</head>

<!-- [ Main Content ] start -->
<div class="pc-container">
	<div class="pcoded-content">
		<!-- [ Main Content ] start -->
		<div class="row mb-3">
				<div class="col-md-8">
					<h3>Breadcrumb & Pagination</h3>
					<p class="lead">Breadcrumb indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS. Showing pagination to indicate a series of related content exists across multiple pages.</p>
					<p class="f-w-500">Check out <a href="http://html.phoenixcoded.net/nextro-new/docs/index-bc-package#page-breadcrumb" target="_blank" class="badge bg-light-primary">Documentation</a></p>
				</div>
		</div>
		<div class="row">
			<!-- [ Breadcrumbs & Pagination ] start -->
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">
						<h5>Breadcrumb</h5>
					</div>
					<div class="card-body">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item active" aria-current="page">Home</li>
							</ol>
						</nav>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#!">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Library</li>
							</ol>
						</nav>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#!">Home</a></li>
								<li class="breadcrumb-item"><a href="#!">Library</a></li>
								<li class="breadcrumb-item active" aria-current="page">Data</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">
						<h5>Breadcrumb Icon</h5>
					</div>
					<div class="card-body">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item active" aria-current="page"><i data-feather="home"></i></li>
							</ol>
						</nav>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#!">
									<i data-feather="home"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Library</li>
							</ol>
						</nav>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#!"><i data-feather="home"></i></a></li>
								<li class="breadcrumb-item"><a href="#!">Library</a></li>
								<li class="breadcrumb-item active" aria-current="page">Data</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Pagination</h5>
					</div>
					<div class="card-body">
						<nav aria-label="Page navigation example">
							<ul class="pagination">
								<li class="page-item"><a class="page-link" href="#!">Previous</a></li>
								<li class="page-item"><a class="page-link" href="#!">1</a></li>
								<li class="page-item"><a class="page-link" href="#!">2</a></li>
								<li class="page-item"><a class="page-link" href="#!">3</a></li>
								<li class="page-item"><a class="page-link" href="#!">Next</a></li>
							</ul>
						</nav>
						<h5 class="mt-5">Working with Icons</h5>
						<hr>
						<nav aria-label="Page navigation example">
							<ul class="pagination">
								<li class="page-item"><a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
								<li class="page-item"><a class="page-link" href="#!">1</a></li>
								<li class="page-item"><a class="page-link" href="#!">2</a></li>
								<li class="page-item"><a class="page-link" href="#!">3</a></li>
								<li class="page-item"><a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
							</ul>
						</nav>
						<h5 class="mt-5">Disabled and Active States</h5>
						<hr>
						<nav aria-label="...">
							<ul class="pagination">
								<li class="page-item disabled"><span class="page-link">Previous</span></li>
								<li class="page-item"><a class="page-link" href="#!">1</a></li>
								<li class="page-item active"><span class="page-link">2<span class="sr-only">(current)</span></span>
								</li>
								<li class="page-item"><a class="page-link" href="#!">3</a></li>
								<li class="page-item"><a class="page-link" href="#!">Next</a></li>
							</ul>
						</nav>
						<h5 class="mt-5">Sizing</h5>
						<hr>
						<nav class="mb-4" aria-label="...">
							<ul class="pagination pagination-lg">
								<li class="page-item disabled">
									<a class="page-link" href="#!" tabindex="-1">1</a>
								</li>
								<li class="page-item"><a class="page-link" href="#!">2</a></li>
								<li class="page-item"><a class="page-link" href="#!">3</a></li>
							</ul>
						</nav>
						<nav aria-label="...">
							<ul class="pagination pagination-sm">
								<li class="page-item disabled">
									<a class="page-link" href="#!" tabindex="-1">1</a>
								</li>
								<li class="page-item"><a class="page-link" href="#!">2</a></li>
								<li class="page-item"><a class="page-link" href="#!">3</a></li>
							</ul>
						</nav>
						<h5 class="mt-5">Alignment</h5>
						<hr>
						<nav aria-label="Page navigation example">
							<ul class="pagination justify-content-center">
								<li class="page-item disabled">
									<a class="page-link" href="#!" tabindex="-1">Previous</a>
								</li>
								<li class="page-item"><a class="page-link" href="#!">1</a></li>
								<li class="page-item"><a class="page-link" href="#!">2</a></li>
								<li class="page-item"><a class="page-link" href="#!">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#!">Next</a>
								</li>
							</ul>
						</nav>
						<nav aria-label="Page navigation example">
							<ul class="pagination justify-content-end">
								<li class="page-item disabled">
									<a class="page-link" href="#!" tabindex="-1">Previous</a>
								</li>
								<li class="page-item"><a class="page-link" href="#!">1</a></li>
								<li class="page-item"><a class="page-link" href="#!">2</a></li>
								<li class="page-item"><a class="page-link" href="#!">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#!">Next</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- [ Breadcrumbs & Pagination ] end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>
<!-- [ Main Content ] end -->
@include('layouts/footer')

</body>

</html>
