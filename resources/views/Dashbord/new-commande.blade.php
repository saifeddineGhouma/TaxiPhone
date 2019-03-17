@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="sparkline12-list">
			<div class="sparkline12-hd">
				<div class="main-sparkline12-hd">
					<h1>All Form Element</h1>
				</div>
			</div>
			<div class="sparkline12-graph">
				<div class="basic-login-form-ad">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="all-form-element-inner">
								<form action="#">
									<div class="form-group-inner">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<label class="login2 pull-right pull-right-pro">Normal</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
												<input type="text" class="form-control" />
											</div>
										</div>
									</div>
									<div class="form-group-inner">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<label class="login2 pull-right pull-right-pro">Support text</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
												<input type="text" class="form-control" />
											</div>
										</div>
									</div>
									<div class="form-group-inner">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<label class="login2 pull-right pull-right-pro">Full Name</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
												<input type="text" class="form-control" />
											</div>
										</div>
									</div>
									<div class="form-group-inner">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<label class="login2 pull-right pull-right-pro">Username</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
												<input type="text" class="form-control" />
											</div>
										</div>
									</div>
									<div class="form-group-inner">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<label class="login2 pull-right pull-right-pro">Email</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
												<input type="email" class="form-control" />
											</div>
										</div>
									</div>
									<div class="form-group-inner">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<label class="login2 pull-right pull-right-pro">Password</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
												<input type="password" class="form-control" />
											</div>
										</div>
									</div>
									<div class="form-group-inner">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<label class="login2 pull-right pull-right-pro">Placeholder</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
												<input type="text" class="form-control" placeholder="Placeholder" />
											</div>
										</div>
									</div>
									<div class="form-group-inner">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
												<label class="login2 pull-right pull-right-pro">Disabled</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
												<input type="text" disabled class="form-control" placeholder="Disabled input here..." />
											</div>
										</div>
									</div>
									<div class="form-group-inner">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
												<label class="login2 pull-right pull-right-pro"><span class="basic-ds-n">Bootstrap</span> Default Checkbox</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
												<div class="bt-df-checkbox">
													<input class="pull-left" type="checkbox">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group-inner">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
												<label class="login2 pull-right pull-right-pro"><span class="basic-ds-n">Bootstrap</span> Default Radio</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
												<div class="bt-df-checkbox">
													<input class="pull-left radio-checked" type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
													<input class="pull-left" type="radio" value="option2" id="optionsRadios2" name="optionsRadios">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group-inner">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
												<label class="login2 pull-right pull-right-pro">Inline <span class="basic-ds-n">Checkbox</span>
											</label>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
											<div class="bt-df-checkbox pull-left">
												<label>
													<input class="pull-left radio-checked" checked="" type="checkbox"> a</label>
													<label>
														<input class="pull-left radio-checked" type="checkbox"> b</label>
														<label>
															<input class="pull-left radio-checked" type="checkbox"> c</label>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
														<label class="login2 pull-right pull-right-pro">Custom Checkbox and Radios </label>
													</div>
													<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
														<div class="bt-df-checkbox pull-left">
															<div class="row">
																<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																	<div class="i-checks pull-left">
																		<label>
																			<input type="checkbox" value=""> <i></i> Option one </label>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																		<div class="i-checks pull-left">
																			<label>
																				<input type="checkbox" value="" checked=""> <i></i> Option two checked </label>
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																			<div class="i-checks pull-left">
																				<label>
																					<input type="checkbox" value="" disabled="" checked=""> <i></i> <span class="basic-ds-n">Option</span> Three checked and disabled </label>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																				<div class="i-checks pull-left">
																					<label>
																						<input type="checkbox" value="" disabled=""> <i></i> Option four disabled </label>
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																					<div class="i-checks pull-left">
																						<label>
																							<input type="radio" value="option1" name="a"> <i></i> Option one </label>
																						</div>
																					</div>
																				</div>
																				<div class="row">
																					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																						<div class="i-checks pull-left">
																							<label>
																								<input type="radio" checked="" value="option2" name="a"> <i></i> Option two checked </label>
																							</div>
																						</div>
																					</div>
																					<div class="row">
																						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																							<div class="i-checks pull-left">
																								<label>
																									<input type="radio" disabled="" checked="" value="option2"> <i></i> <span class="basic-ds-n">Option</span> Three checked and disabled </label>
																								</div>
																							</div>
																						</div>
																						<div class="row">
																							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																								<div class="i-checks pull-left">
																									<label>
																										<input type="radio" disabled="" name="a"> <i></i> Option four disabled </label>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="row">
																					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
																						<label class="login2 pull-right pull-right-pro">Inline <span class="basic-ds-n">Checkbox</span>
																					</label>
																				</div>
																				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
																					<div class="inline-checkbox-cs">
																						<label class="checkbox-inline i-checks pull-left">
																							<input type="checkbox" value="option1" id="inlineCheckbox1"> a </label>
																							<label class="checkbox-inline i-checks pull-left">
																								<input type="checkbox" value="option2" id="inlineCheckbox2"> b </label>
																								<label class="checkbox-inline i-checks pull-left">
																									<input type="checkbox" value="option3" id="inlineCheckbox3"> c </label>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="form-group-inner">
																						<div class="row">
																							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																								<label class="login2 pull-right pull-right-pro">Select</label>
																							</div>
																							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
																								<div class="form-select-list">
																									<select class="form-control custom-select-value" name="account">
																										<option>Select 1</option>
																										<option>Select 2</option>
																										<option>Select 3</option>
																										<option>Select 4</option>
																									</select>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="form-group-inner">
																						<div class="row">
																							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																								<label class="login2 pull-right pull-right-pro">Select Multiple</label>
																							</div>
																							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
																								<div class="form-select-list">
																									<select class="form-control custom-select-value" multiple="">
																										<option>option 1</option>
																										<option>option 2</option>
																										<option>option 3</option>
																										<option>option 4</option>
																									</select>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="form-group-inner input-with-success">
																						<div class="row">
																							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																								<label class="login2 pull-right pull-right-pro">Input with success</label>
																							</div>
																							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
																								<div class="form-select-list">
																									<input type="text" class="form-control">
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="form-group-inner input-with-warning">
																						<div class="row">
																							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																								<label class="login2 pull-right pull-right-pro">Input with warning</label>
																							</div>
																							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
																								<div class="form-select-list">
																									<input type="text" class="form-control">
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="form-group-inner input-with-error">
																						<div class="row">
																							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																								<label class="login2 pull-right pull-right-pro">Input with error</label>
																							</div>
																							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
																								<div class="form-select-list">
																									<input type="text" class="form-control">
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="form-group-inner">
																						<div class="row">
																							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																								<label class="login2 pull-right pull-right-pro">Input Sizing Lg</label>
																							</div>
																							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
																								<div class="form-select-list">
																									<input type="text" class="form-control input-lg" placeholder=".input-lg">
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="form-group-inner">
																						<div class="row">
																							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																								<label class="login2 pull-right pull-right-pro">Input Sizing Default </label>
																							</div>
																							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
																								<div class="form-select-list">
																									<input type="text" class="form-control" placeholder="Default input">
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="form-group-inner">
																						<div class="row">
																							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																								<label class="login2 pull-right pull-right-pro">Input Sizing Sm </label>
																							</div>
																							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
																								<div class="form-select-list">
																									<input type="text" class="form-control input-sm" placeholder=".input-sm">
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="form-group-inner">
																						<div class="row">
																							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																								<label class="login2 pull-right pull-right-pro">Column sizing</label>
																							</div>
																							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
																								<div class="row">
																									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
																										<div class="form-select-list">
																											<input type="text" class="form-control" placeholder=".col-md-2">
																										</div>
																									</div>
																									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
																										<div class="form-select-list">
																											<input type="text" class="form-control basic-ele-mg-t-10" placeholder=".col-md-4">
																										</div>
																									</div>
																									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																										<div class="form-select-list basic-ele-mg-t-10">
																											<input type="text" class="form-control" placeholder=".col-md-6">
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="form-group-inner">
																						<div class="row">
																							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
																								<label class="login2 pull-right pull-right-pro">Input groups @</label>
																							</div>
																							<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
																								<div class="input-group">
																									<span class="input-group-addon">@</span>
																									<input type="text" placeholder="Username" class="form-control">
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="form-group-inner">
																						<div class="row">
																							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
																								<label class="login2 pull-right pull-right-pro">Input groups .00</label>
																							</div>
																							<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
																								<div class="input-group">
																									<input type="text" class="form-control">
																									<span class="input-group-addon">.00</span>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="form-group-inner">
																						<div class="row">
																							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
																								<label class="login2 pull-right pull-right-pro">Input groups @ and.00</label>
																							</div>
																							<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
																								<div class="input-group">
																									<span class="input-group-addon">@</span>
																									<input type="text" class="form-control">
																									<span class="input-group-addon">.00</span>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="form-group-inner">
																						<div class="row">
																							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
																								<label class="login2 pull-right pull-right-pro">Input Groups Checkbox</label>
																							</div>
																							<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
																								<div class="input-group">
																									<span class="input-group-addon"> <input type="checkbox"> </span>
																									<input type="text" class="form-control">
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="form-group-inner">
																						<div class="row">
																							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
																								<label class="login2 pull-right pull-right-pro">Input Groups Radio</label>
																							</div>
																							<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
																								<div class="input-group">
																									<span class="input-group-addon"> <input type="radio"> </span>
																									<input type="text" class="form-control">
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="form-group-inner">
																						<div class="row">
																							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
																								<label class="login2 pull-right pull-right-pro">Input Groups Bootstrap Default</label>
																							</div>
																							<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
																								<div class="input-group">
																									<span class="input-group-btn"><button type="button" class="btn btn-primary">Go!</button></span>
																									<input type="text" class="form-control">
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="form-group-inner">
																						<div class="row">
																							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
																								<label class="login2 pull-right pull-right-pro">Input Groups Left Go</label>
																							</div>
																							<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
																								<div class="input-group custom-go-button">
																									<span class="input-group-btn"><button type="button" class="btn btn-primary">Go!</button></span>
																									<input type="text" placeholder=".custom-go-button" class="form-control">
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="form-group-inner">
																						<div class="row">
																							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
																								<label class="login2 pull-right pull-right-pro">Input Groups Right Go</label>
																							</div>
																							<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
																								<div class="input-group custom-go-button">
																									<input type="text" class="form-control">
																									<span class="input-group-btn"><button type="button" class="btn btn-primary">Go!</button></span>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="form-group-inner">
																						<div class="row">
																							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
																								<label class="login2 pull-right pull-right-pro">Input With dropdowns Default</label>
																							</div>
																							<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
																								<div class="input-group">
																									<div class="input-group-btn">
																										<button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button" aria-expanded="false">Action <span class="caret"></span>
																										</button>
																										<ul class="dropdown-menu">
																											<li><a href="#">Action</a>
																										</li>
																										<li><a href="#">Another action</a>
																									</li>
																									<li><a href="#">Something else here</a>
																								</li>
																								<li class="divider"></li>
																								<li><a href="#">Separated link</a>
																							</li>
																						</ul>
																					</div>
																					<input type="text" class="form-control">
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="form-group-inner">
																		<div class="row">
																			<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
																				<label class="login2 pull-right pull-right-pro">Input With left dropdowns Custom</label>
																			</div>
																			<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
																				<div class="input-group">
																					<div class="input-group-btn custom-dropdowns-button">
																						<button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button" aria-expanded="false">Action <span class="caret"></span>
																						</button>
																						<ul class="dropdown-menu">
																							<li><a href="#">Action</a>
																						</li>
																						<li><a href="#">Another action</a>
																					</li>
																					<li><a href="#">Something else here</a>
																				</li>
																				<li class="divider"></li>
																				<li><a href="#">Separated link</a>
																			</li>
																		</ul>
																	</div>
																	<input type="text" placeholder=".custom-dropdowns-button" class="form-control">
																</div>
															</div>
														</div>
													</div>
													<div class="form-group-inner">
														<div class="row">
															<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
																<label class="login2 pull-right pull-right-pro">Input With right dropdowns Custom</label>
															</div>
															<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
																<div class="input-group">
																	<input type="text" class="form-control">
																	<div class="input-group-btn custom-dropdowns-button">
																		<button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button" aria-expanded="false">Action <span class="caret"></span>
																		</button>
																		<ul class="dropdown-menu pull-right">
																			<li><a href="#">Action</a>
																		</li>
																		<li><a href="#">Another action</a>
																	</li>
																	<li><a href="#">Something else here</a>
																</li>
																<li class="divider"></li>
																<li><a href="#">Separated link</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group-inner">
										<div class="row">
											<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
												<label class="login2 pull-right pull-right-pro">Input Segmented Default</label>
											</div>
											<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
												<div class="input-group">
													<div class="input-group-btn">
														<button tabindex="-1" class="btn btn-white" type="button">Action</button>
														<button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button" aria-expanded="false"><span class="caret"></span>
														</button>
														<ul class="dropdown-menu">
															<li><a href="#">Action</a>
														</li>
														<li><a href="#">Another action</a>
													</li>
													<li><a href="#">Something else here</a>
												</li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a>
											</li>
										</ul>
									</div>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group-inner">
						<div class="row">
							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
								<label class="login2 pull-right pull-right-pro">Input Left Segmented</label>
							</div>
							<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
								<div class="input-group">
									<div class="input-group-btn dropdown-segmented">
										<button tabindex="-1" class="btn btn-white" type="button">Action</button>
										<button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button" aria-expanded="false"><span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a href="#">Action</a>
										</li>
										<li><a href="#">Another action</a>
									</li>
									<li><a href="#">Something else here</a>
								</li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a>
							</li>
						</ul>
					</div>
					<input type="text" placeholder=".dropdown-segmented" class="form-control">
				</div>
			</div>
		</div>
	</div>
	<div class="form-group-inner">
		<div class="row">
			<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
				<label class="login2 pull-right pull-right-pro">Input right Segmented</label>
			</div>
			<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
				<div class="input-group">
					<input type="text" class="form-control">
					<div class="input-group-btn dropdown-segmented">
						<button tabindex="-1" class="btn btn-white" type="button">Action</button>
						<button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button" aria-expanded="false"><span class="caret"></span>
						</button>
						<ul class="dropdown-menu pull-right">
							<li><a href="#">Action</a>
						</li>
						<li><a href="#">Another action</a>
					</li>
					<li><a href="#">Something else here</a>
				</li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a>
			</li>
		</ul>
	</div>
</div>
</div>
</div>
</div>


<div class="form-group-inner">
<div class="login-btn-inner">
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-9">
	<div class="login-horizental cancel-wp pull-left form-bc-ele">
		<button class="btn btn-white" type="submit">Cancel</button>
		<button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
	</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@stop