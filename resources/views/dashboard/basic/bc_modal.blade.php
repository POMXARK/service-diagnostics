@extends('layouts.base',
    ['breadcrumbTitle' => 'Dashboard sale',
    'to'               => '/mpa/home',
    'toName'           => 'Home'
    ]
)
@section('content')
		<!-- [ Main Content ] start -->
		<div class="row">
			<!-- [ demo-modal ] start -->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Demo Modal</h5>
					</div>
					<div class="card-body">
						<div class="bd-example-modal mb-4">
							<div class="modal" tabindex="-1" role="dialog">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Modal Title</h5>
											<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<p>Modal body text goes here.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn  btn-primary mr-0">Save changes</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="exampleModalLive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLiveLabel">Modal Title</h5>
										<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<p>Woohoo, you're reading this text in a modal!</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
										<button type="button" class="btn  btn-primary">Save changes</button>
									</div>
								</div>
							</div>
						</div>
						<button type="button" class="btn  btn-primary" data-bs-toggle="modal" data-target="#exampleModalLive">Launch demo modal</button>
					</div>
				</div>
			</div>
			<!-- [ demo-modal ] end -->
			<!-- [ Scrolling-modal ] start -->
			<div class="col-xl-4 col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Scrolling Long Content</h5>
					</div>
					<div class="card-body">
						<div id="exampleModalLong" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Modal Title</h5>
										<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
										<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
										<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
										<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
										<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
										<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
										<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
										<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
										<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
										<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
										<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
										<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
										<button type="button" class="btn  btn-primary">Save changes</button>
									</div>
								</div>
							</div>
						</div>
						<button type="button" class="btn  btn-primary" data-bs-toggle="modal" data-target="#exampleModalLong">Launch demo modal</button>
					</div>
				</div>
			</div>
			<!-- [ Scrolling-modal ] end -->
			<!-- [ vertically-modal ] start -->
			<div class="col-xl-4 col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Vertically Centered</h5>
					</div>
					<div class="card-body">
						<div id="exampleModalCenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalCenterTitle">Modal Title</h5>
										<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
										<button type="button" class="btn  btn-primary">Save changes</button>
									</div>
								</div>
							</div>
						</div>
						<button type="button" class="btn  btn-primary" data-bs-toggle="modal" data-target="#exampleModalCenter">Launch demo modal</button>
					</div>
				</div>
			</div>
			<!-- [ vertically-modal ] end -->
			<!-- [ tooltip-modal ] start -->
			<div class="col-xl-4 col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Tooltips Modal</h5>
					</div>
					<div class="card-body">
						<div id="exampleModalPopovers" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalPopoversLabel">Modal Title</h5>
										<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<h5>Tooltips in a Button</h5>
										<p>This <a href="#!" role="button" class="btn  btn-secondary tooltip-test" data-bs-toggle="tooltip" title="Button Tooltip" data-container="#exampleModalPopovers">button</a>
											triggers a popover on click.</p>
										<hr />
										<h5>Tooltips in a modal</h5>
										<p><a href="#!" class="tooltip-test" data-bs-toggle="tooltip" title="Tooltip" data-container="#exampleModalPopovers">This link</a> and <a href="#!" class="tooltip-test" data-bs-toggle="tooltip" title="Tooltip"
												data-container="#exampleModalPopovers">that
												link</a> have tooltips on hover.</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
										<button type="button" class="btn  btn-primary">Save changes</button>
									</div>
								</div>
							</div>
						</div>
						<button type="button" class="btn  btn-primary" data-bs-toggle="modal" data-target="#exampleModalPopovers">Launch demo modal</button>
					</div>
				</div>
			</div>
			<!-- [ tooltip-modal ] end -->
			<!-- [ grid-modal ] start -->
			<div class="col-xl-4 col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Using the Grid</h5>
					</div>
					<div class="card-body">
						<div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="gridModalLabel">Grids in Modals</h5>
										<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="container-fluid bd-example-row">
											<div class="row">
												<div class="col-md-4">.col-md-4</div>
												<div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
											</div>
											<div class="row">
												<div class="col-md-3 ms-auto">.col-md-3 .ms-auto</div>
												<div class="col-md-2 ms-auto">.col-md-2 .ms-auto</div>
											</div>
											<div class="row">
												<div class="col-md-6 ms-auto">.col-md-6 .ms-auto</div>
											</div>
											<div class="row">
												<div class="col-sm-9">
													Level 1: .col-sm-9
													<div class="row">
														<div class="col-8 col-sm-6">
															Level 2: .col-8 .col-sm-6
														</div>
														<div class="col-4 col-sm-6">
															Level 2: .col-4 .col-sm-6
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
										<button type="button" class="btn  btn-primary">Save changes</button>
									</div>
								</div>
							</div>
						</div>
						<button type="button" class="btn  btn-primary" data-bs-toggle="modal" data-target="#gridSystemModal">Launch demo modal</button>
					</div>
				</div>
			</div>
			<!-- [ grid-modal ] end -->
			<!-- [ optional-modal ] start -->
			<div class="col-xl-8 col-md-6">
				<div class="card">
					<div class="card-header">
						<h5>Optional Sizes</h5>
					</div>
					<div class="card-body">
						<button type="button" class="btn  btn-primary " data-bs-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
						<button type="button" class="btn  btn-primary " data-bs-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>
						<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title h4" id="myLargeModalLabel">Large Modal</h5>
										<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										...
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title h4" id="mySmallModalLabel">Small Modal</h5>
										<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										...
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ optional-modal ] end -->
			<!-- [ Full screen modal ] start -->
			<div class="col-xl-12">
				<div class="card">
					<div class="card-header">
						<h5>Full screen modal</h5>
					</div>
					<div class="card-body">
						<div class="btn-page">
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-target="#exampleModalFullscreen">Full screen</button>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-target="#exampleModalFullscreenSm">Full screen below sm</button>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-target="#exampleModalFullscreenMd">Full screen below md</button>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-target="#exampleModalFullscreenLg">Full screen below lg</button>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-target="#exampleModalFullscreenXl">Full screen below xl</button>
						</div>
						<div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
							<div class="modal-dialog modal-fullscreen">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title h4" id="exampleModalFullscreenLabel">Full screen modal</h5>
										<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
										<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
										<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
										<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
										<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
										<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
										<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
										<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
										<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
										<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
										<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
										<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="exampleModalFullscreenSm" tabindex="-1" aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true">
							<div class="modal-dialog modal-fullscreen-sm-down">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title h4" id="exampleModalFullscreenSmLabel">Full screen below sm</h5>
										<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										...
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="exampleModalFullscreenMd" tabindex="-1" aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true">
							<div class="modal-dialog modal-fullscreen-md-down">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title h4" id="exampleModalFullscreenMdLabel">Full screen below md</h5>
										<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										...
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="exampleModalFullscreenLg" tabindex="-1" aria-labelledby="exampleModalFullscreenLgLabel" aria-hidden="true">
							<div class="modal-dialog modal-fullscreen-lg-down">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title h4" id="exampleModalFullscreenLgLabel">Full screen below lg</h5>
										<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										...
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="exampleModalFullscreenXl" tabindex="-1" aria-labelledby="exampleModalFullscreenXlLabel" aria-hidden="true">
							<div class="modal-dialog modal-fullscreen-xl-down">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title h4" id="exampleModalFullscreenXlLabel">Full screen below xl</h5>
										<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										...
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ Full screen modal ] end -->
			<!-- [ varying-modal ] start -->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Varying Modal Content</h5>
					</div>
					<div class="card-body btn-page">
						<button type="button" class="btn  btn-primary" data-bs-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
						<button type="button" class="btn  btn-primary" data-bs-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
						<button type="button" class="btn  btn-primary" data-bs-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @bootstrap</button>
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">New message</h5>
										<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<form>
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">Recipient:</label>
												<input type="text" class="form-control" id="recipient-name">
											</div>
											<div class="form-group">
												<label for="message-text" class="col-form-label">Message:</label>
												<textarea class="form-control" id="message-text"></textarea>
											</div>
										</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
										<button type="button" class="btn  btn-primary">Send message</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ varying-modal ] end -->
		</div>
		<!-- [ Main Content ] end -->
@endsection
