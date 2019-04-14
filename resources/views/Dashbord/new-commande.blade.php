@extends('layouts.master')
@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-default color-red">
			<div class="panel-heading text-center">
			<h1>Passe Commande</h1></div>
			<div class="panel-body">
				<div class="sparkline12-list">
					
					<div class="sparkline12-graph">
						<div class="basic-login-form-ad">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="all-form-element-inner">
										<form method="post" action="{{route('passe.commande')}}">
											{{ csrf_field() }}
											<div class="form-group-inner has-success">
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
														<input name="client_id"type="hidden" value="{{Request::route('id')
}}">
													</div>
													<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
														<div class="panel panel-success">
															<div class="panel-heading">Commande Orange</div>
															<div class="panel-body">
																<div class="form-group-inner">
																	<div class="row" >
																		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
																			<!--label 1dt orange-->
																			<label class="login2 pull-left pull-right-pro">1dt</label>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 has-success" >
																			<!--label 1dt quentite-->
																			<div class="touchspin-inner">
																				
																				<input class="touchspin1 form-control" type="text" value="" name="quentity_one_dinar_orange" id="quentity_one_dinar_orange">
																			</div>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
																			<div class="form-group">
																				<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
																				<div class="input-group">
																					<div class="input-group-addon">$</div>
																					<input type="text" class="form-control" id="prix_one_dinar_orange" name="prix_one_dinar_orange" placeholder="Amount">
																					<div class="input-group-addon">.00</div>
																				</div>
																			</div>
																			
																		</div>
																		<div class="col-lg-12 col-md-12" style="margin-bottom: 10px"></div>
																		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																			<label class="login2 pull-left pull-right-pro">5dt</label>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
																			
																			<div class="touchspin-inner">
																				
																				<input class="touchspin1" type="text" value="" name="quentity_five_dinar_orange" id="quentity_five_dinar_orange">
																			</div>
																		</div>
																		
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
																			
																			<div class="form-group">
																				<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
																				<div class="input-group">
																					<div class="input-group-addon">$</div>
																					<input type="text" class="form-control" id="prix_orange_sinque_dinar"name="prix_orange_sinque_dinar" placeholder="Amount">
																					<div class="input-group-addon">.00</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-lg-12 col-md-12" style="margin-bottom: 10px"></div>
																		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																			<label class="login2 pull-left pull-right-pro">Light</label>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
																			
																			<div class="touchspin-inner">
																				
																				<input class="touchspin1" type="text" value="" name="light_orange" id="light_orange">
																			</div>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
																			<div class="form-group">
																				<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
																				<div class="input-group">
																					<div class="input-group-addon">$</div>
																					<input type="text" class="form-control" id="prix_light_orange"name="prix_light_orange" placeholder="Amount">
																					<div class="input-group-addon">.00</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!----------
												********Oredoo*********
											--------->
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
														
													</div>
													<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
														<div class="panel panel-danger">
															<div class="panel-heading">Commande  Oredoo</div>
															<div class="panel-body">
																<div class="form-group-inner">
																	<div class="row" >
																		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																			<label class="login2 pull-left pull-right-pro">1dt</label>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
																			
																			<div class="touchspin-inner">
																				
																				<input class="touchspin1" type="text" value="" name="quentity_one_dinar_oredoo" id="quentity_one_dinar_oredoo">
																			</div>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
																			<div class="form-group">
																				<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
																				<div class="input-group">
																					<div class="input-group-addon">$</div>
																					<input type="text" class="form-control" id="prix_one_dinar_oredoo"name="prix_one_dinar_oredoo" placeholder="Amount">
																					<div class="input-group-addon">.00</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-lg-12 col-md-12" style="margin-bottom: 10px"></div>
																		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																			<label class="login2 pull-left pull-right-pro">5dt</label>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
																			
																			<div class="touchspin-inner">
																				
																				<input class="touchspin1" type="text" value="" name="quentity_five_dinar_oredoo" id="quentity_five_dinar_oredoo">
																			</div>
																		</div>
																		
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
																			<div class="form-group">
																				<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
																				<div class="input-group">
																					<div class="input-group-addon">$</div>
																					<input type="text" class="form-control" id="prix_sinque_dinar_oredoo"name="prix_sinque_dinar_oredoo" placeholder="Amount">
																					<div class="input-group-addon">.00</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-lg-12 col-md-12" style="margin-bottom: 10px"></div>
																		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																			<label class="login2 pull-left pull-right-pro">Light</label>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
																			
																			<div class="touchspin-inner">
																				
																				<input class="touchspin1" type="text" value="" name="light_oredoo" id="light_oredoo">
																			</div>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
																			<div class="form-group">
																				<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
																				<div class="input-group">
																					<div class="input-group-addon">$</div>
																					<input type="text" class="form-control" id="prix_light_oredoo"name="prix_light_oredoo" placeholder="Amount">
																					<div class="input-group-addon">.00</div>
																				</div>
																			</div>
																		</div>
																		
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--------------
												*******T.T*******
											-------------->
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
														
													</div>
													<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
														<div class="panel panel-info">
															<div class="panel-heading">Commande  T.T</div>
															<div class="panel-body">
																<div class="form-group-inner">
																	<div class="row" >
																		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																			<label class="login2 pull-left pull-right-pro">1dt</label>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
																			
																			<div class="touchspin-inner">
																				
																				<input class="touchspin1" type="text" value="" name="quentity_one_dinar_tt" id="quentity_one_dinar_tt">
																			</div>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
																			<div class="form-group">
																				<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
																				<div class="input-group">
																					<div class="input-group-addon">$</div>
																					<input type="text" class="form-control" id="prix_one_dinar_tt" name="prix_one_dinar_tt" placeholder="Amount">
																					<div class="input-group-addon">.00</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-lg-12 col-md-12" style="margin-bottom: 10px"></div>
																		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																			<label class="login2 pull-left pull-right-pro">5dt</label>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
																			
																			<div class="touchspin-inner">
																				
																				<input class="form-control touchspin1" type="text" value="" name="quentity_five_dinar_tt" id="quentity_five_dinar_tt">
																			</div>
																		</div>
																		
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
																			<div class="form-group">
																				<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
																				<div class="input-group">
																					<div class="input-group-addon">$</div>
																					<input type="text" class="form-control" id="prix_sinque_dinar_tt" name="prix_sinque_dinar_tt"placeholder="Amount">
																					<div class="input-group-addon">.00</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-lg-12 col-md-12" style="margin-bottom: 10px"></div>
																		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																			<label class="login2 pull-left pull-right-pro">Light</label>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
																			
																			<div class="touchspin-inner">
																				
																				<input class="touchspin1" type="text" value="" name="light_telecome" id="light_telecome">
																			</div>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
																			<div class="form-group">
																				<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
																				<div class="input-group">
																					<div class="input-group-addon">$</div>
																					<input type="text" class="form-control" id="prix_light_tt" name="prix_light_tt" placeholder="Amount">
																					<div class="input-group-addon">.00</div>
																				</div>
																			</div>
																		</div>
																		
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!---------
												*****Restte de commande *****
											---------->
											<div class="form-group-inner" id="block_commande" style="display: none">
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
														
													</div>
													<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
														<div class="panel panel-default">
															<div class="panel-heading">Commande</div>
															<div class="panel-body">
																<div class="form-group-inner">
																	<div class="row" >
																		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
																			<label class="login2 pull-left pull-right-pro">Total</label>
																		</div>
																		
																		<div class="col-lg-8 col-md-4 col-sm-6 col-xs-12">
																			<div class="form-group has-default has-feedback">
																				
																				<div class="input-group">
																					<span class="input-group-addon">$</span>
																					<input type="text" class="form-control" id="total" aria-describedby="inputGroupSuccess4Status" name="total">
																				</div>
																				
																				
																			</div>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
																			<label class="login2 pull-left pull-right-pro">Avance</label>
																		</div>
																		
																		<div class="col-lg-8 col-md-4 col-sm-6 col-xs-12">
																			<div class="form-group has-default has-feedback">
																				
																				<div class="input-group">
																					<span class="input-group-addon">$</span>
																					<input type="text" class="form-control" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status" name="avance">
																				</div>
																				
																				
																			</div>
																		</div>
																		
																	
																		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
																			<label class="login2 pull-left pull-right-pro">Termine ?</label>
																		</div>
																		
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
																			<div class="form-group has-default has-feedback">
																				
																				<div class="radio">
																					<label>
																						<input type="radio" name="payee" id="optionsRadios1" value="1" >
																						oui
																					</label>
																				</div>
																				
																				
																			</div>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
																			<div class="form-group has-default has-feedback">
																				
																				<div class="radio">
																					<label>
																						<input type="radio" name="payee" id="optionsRadios1" value="0" checked>
																						Non
																					</label>
																				</div>
																				
																				
																			</div>
																		</div>
																		<div class="col-lg-12 col-md-12" style="margin-bottom: 10px"></div>
																		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																			<textarea class="form-control" name="description"rows="3"></textarea>
																		</div>
																		
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											
											
											<!------------
												******button submit*********
											-------------->
											
											
											
											<div class="form-group-inner">
												<div class="login-btn-inner">
													<div class="row">
														<div class="col-lg-3"></div>
														<div class="col-lg-9">
															<div class="login-horizental cancel-wp pull-left form-bc-ele">
																<button class="btn btn-white" type="button" id="caculer">Calculer</button>
																<button class="btn btn-sm btn-primary login-submit-cs" type="">Save Change</button>
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
				
			</div></div>
		</div>
	</div>
	@include('Dashbord.js_code')
	@stop