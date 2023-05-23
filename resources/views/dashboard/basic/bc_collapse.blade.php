@extends('layouts.base',
    ['breadcrumbTitle' => 'Dashboard sale',
    'to'               => '/mpa/home',
    'toName'           => 'Home'
    ]
)
@section('content')
		<!-- [ Main Content ] start -->
		<div class="row mb-3">
				<div class="col-md-8">
					<h3>Collapse</h3>
					<p class="lead">Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.</p>
					<p class="f-w-500">Check out <a href="http://html.phoenixcoded.net/nextro-new/docs/index-bc-package#page-collapse" target="_blank" class="badge bg-light-primary">Documentation</a></p>
				</div>
		</div>
		<div class="row">
			<!-- [ basic-collapse ] start -->
			<div class="col-sm-12">
				<h5 class="mb-3">Basic Collapse</h5>
				<hr>
				<div class="card">
					<div class="card-header">
						<a class="btn  btn-primary  m-t-5" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Link with href</a>
						<button class="btn btn-primary  m-t-5" type="button" data-bs-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Button with data-target</button>
					</div>
					<div class="collapse" id="collapseExample">
						<div class="card-body">
							<p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
								proident.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- [ basic-collapse ] end -->
			<!-- [ multiple-collapse ] start -->
			<div class="col-sm-12 mb-3">
				<h5 class="mb-3">Multiple Targets</h5>
				<hr>
				<a class="btn mb-1 btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
				<button class="btn mb-1 btn-primary" type="button" data-bs-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
				<button class="btn mb-1 btn-primary" type="button" data-bs-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
				<div class="row">
					<div class="col-sm-6">
						<div class="collapse multi-collapse mt-2" id="multiCollapseExample1">
							<div class="card">
								<div class="card-body">
									<p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
										sapiente ea
										proident.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="collapse multi-collapse mt-2" id="multiCollapseExample2">
							<div class="card">
								<div class="card-body">
									<p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
										sapiente ea
										proident.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ multiple-collapse ] end -->
			<!-- [ accordion-collapse ] start -->
			<div class="col-sm-12">
				<h5 class="mb-3">Accordion Example</h5>
				<hr>
				<div class="accordion" id="accordionExample">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h5 class="mb-0"><a href="#!" data-bs-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Collapsible Group Item #1</a></h5>
						</div>
						<div id="collapseOne" class=" card-body collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
							eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
							sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
							sustainable VHS.
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h5 class="mb-0"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Collapsible Group Item #2</a></h5>
						</div>
						<div id="collapseTwo" class="collapse card-body" aria-labelledby="headingTwo" data-parent="#accordionExample">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
							eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
							sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
							sustainable VHS.
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingThree">
							<h5 class="mb-0"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Collapsible Group Item #3</a></h5>
						</div>
						<div id="collapseThree" class="card-body collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
							eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
							sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
							sustainable VHS.
						</div>
					</div>
				</div>
			</div>
			<!-- [ accordion-collapse ] end -->
		</div>
		<!-- [ Main Content ] end -->
@endsection
