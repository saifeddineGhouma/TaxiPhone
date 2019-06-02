@extends('layouts.master')
@section('content')
	<form method="post" action="{{route('passe.commande')}}">
					{{ csrf_field() }}
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-default color-red">
			<div class="panel-heading text-center">
			<h1>Passe Commande</h1></div>
			<div class="panel-body">
				<div class="sparkline12-list">
					
					<div class="sparkline12-graph">
						<div class="basic-login-form-ad">
							<!------------start code --------->
							<div class="row">
								<div class="col-md-3">
									
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="exampleInputName2">Qute</label>
										
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="exampleInputName2">Prix</label>
										
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="exampleInputName2">Total</label>
										
									</div>
								</div>
							</div>
							<!---->

							<!------>

							<hr/>
<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label for="exampleInputName2">TTN</label>
										
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
    		<input class="form-control" type="text" value="" name="quentity_one_dinar_oredoo" id="quentity_one_dinar_oredoo">

  </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										
										<div class="form-group">
											<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
											<div class="input-group">
												<div class="input-group-addon">$</div>
												<input type="text" class="form-control" id="prix_one_dinar_oredoo"name="prix_one_dinar_oredoo" value="{{$client->prix_ticket}}">
												<div class="input-group-addon">.00</div>
											</div>
										</div>
										
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										
										<div class="form-group">
											<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
											<div class="input-group">
												<div class="input-group-addon">$</div>
												<input type="text" class="form-control" id="total_ttn" name="total_ttn">
												<div class="input-group-addon">.00</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<!--------------->
							<hr/>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label for="exampleInputName2">TEX</label>
										
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
    <input class=" form-control" type="text" value="" name="quentity_one_dinar_orange" id="quentity_one_dinar_orange">

  </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										
										<div class="form-group">
											<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
											<div class="input-group">
												<div class="input-group-addon">$</div>
												<input type="text" class="form-control" id="prix_one_dinar_orange" name="prix_one_dinar_orange" value="{{$client->prix_ticket}}" 
>
												<div class="input-group-addon">.00</div>
											</div>
										</div>
										
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										
										<div class="form-group">
											<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
											<div class="input-group">
												<div class="input-group-addon">$</div>
												<input type="text" class="form-control" id="total_torange" name="total_torange">
												<div class="input-group-addon">.00</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<!------>
							<hr/>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label for="exampleInputName2">TTL</label>
										
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
   <input class="form-control" type="text" value="" name="quentity_one_dinar_tt" id="quentity_one_dinar_tt">
  </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										
										<div class="form-group">
											<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
											<div class="input-group">
												<div class="input-group-addon">$</div>
												<input type="text" class="form-control" id="prix_one_dinar_tt" name="prix_one_dinar_tt" value="{{$client->prix_ticket}}" >
												<div class="input-group-addon">.00</div>
											</div>
										</div>
										
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										
										
										<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
										<div class="input-group">
											<div class="input-group-addon">$</div>
											<input type="text" class="form-control" id="total_ttelecome" id="total_ttelecome">
											<div class="input-group-addon">.00</div>
										</div>
										
									</div>
								</div>
							</div>
							<hr/>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label for="exampleInputName2">CTN</label>
										
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
    <input class="form-control" type="text" value="" name="quentity_five_dinar_oredoo" id="quentity_five_dinar_oredoo">
  </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
										<div class="input-group">
											<div class="input-group-addon">$</div>
											<input type="text" class="form-control" id="prix_sinque_dinar_oredoo"name="prix_sinque_dinar_oredoo"value="{{$client->prix_carta}}" >
											<div class="input-group-addon">.00</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
										<div class="input-group">
											<div class="input-group-addon">$</div>
											<input type="text" class="form-control" id="total_cartatn" name="total_cartatn">
											<div class="input-group-addon">.00</div>
										</div>
									</div>
								</div>
							</div>
							<!---->
							<hr/>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label for="exampleInputName2">C EX</label>
										
									</div>
								</div>
								<div class="col-md-3">
								<div class="form-group">
    <input class="form-control" type="text" value="" name="quentity_five_dinar_orange" id="quentity_five_dinar_orange">
  </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
										<div class="input-group">
											<div class="input-group-addon">$</div>
											<input type="text" class="form-control" id="prix_orange_sinque_dinar"name="prix_orange_sinque_dinar"value="{{$client->prix_carta}}">
											<div class="input-group-addon">.00</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
										<div class="input-group">
											<div class="input-group-addon">$</div>
											<input type="text" class="form-control" id="total_cartaorange" name="total_cartaorange">
											<div class="input-group-addon">.00</div>
										</div>
									</div>
								</div>
							</div>
							<!------>
							<hr/>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label for="exampleInputName2">CTL</label>
										
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
    			<input class="form-control" type="text" value="" name="quentity_five_dinar_tt" id="quentity_five_dinar_tt">
  </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
										<div class="input-group">
											<div class="input-group-addon">$</div>
											<input type="text" class="form-control" id="prix_sinque_dinar_tt" name="prix_sinque_dinar_tt"value="{{$client->prix_carta}}">
											<div class="input-group-addon">.00</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
										<div class="input-group">
											<div class="input-group-addon">$</div>
											<input type="text" class="form-control" id="total_cartatelecome" name="total_cartatelecome">
											<div class="input-group-addon">.00</div>
										</div>
									</div>
								</div>
							</div>
							<hr/>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label for="exampleInputName2">TN</label>
										
									</div>
								</div>
								<div class="col-md-3">
										<div class="form-group">
	<input class="form-control" type="text" value="" name="light_oredoo" id="light_oredoo">  </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
										<div class="input-group">
											<div class="input-group-addon">$</div>
											<input type="text" class="form-control" id="prix_light_oredoo"name="prix_light_oredoo" value="{{$client->prix_light}}">
											<div class="input-group-addon">.00</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
										<div class="input-group">
											<div class="input-group-addon">$</div>
											<input type="text" class="form-control" id="total_lighttn" name="total_lighttn">
											<div class="input-group-addon">.00</div>
										</div>
									</div>
								</div>
							</div>
							<!---->
							<hr/>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label for="exampleInputName2">EX</label>
										
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
    	
    	<input class="form-control" type="text" value="" name="light_orange" id="light_orange">
  </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
										<div class="input-group">
											<div class="input-group-addon">$</div>
											<input type="text" class="form-control" id="prix_light_orange"name="prix_light_orange"value="{{$client->prix_light}}">
											<div class="input-group-addon">.00</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
										<div class="input-group">
											<div class="input-group-addon">$</div>
											<input type="text" class="form-control" id="total_light_orange"name="total_light_orange">
											<div class="input-group-addon">.00</div>
										</div>
									</div>
								</div>
							</div>
							<!------>
							<hr/>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label for="exampleInputName2">TL</label>
										
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
        <input class="form-control" type="text" value="" name="light_telecome" id="light_telecome">

  </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
										<div class="input-group">
											<div class="input-group-addon">$</div>
											<input type="text" class="form-control"  id="prix_light_tt" name="prix_light_tt"value="{{$client->prix_light}}">
											<div class="input-group-addon">.00</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
										<div class="input-group">
											<div class="input-group-addon">$</div>
											<input type="text" class="form-control" id="total_lighttelecome" name="total_lighttelecome">
											<div class="input-group-addon">.00</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
												
												<button class="btn btn-success btn-lg btn-block" type="button" id="saif">Calculer</button>
											</div>
							</div>
							
							<!----end code tableau edit -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="all-form-element-inner">
									
								
											<div class="form-group-inner has-success">
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
														<input name="client_id"type="hidden" value="{{Request::route('id')
														}}">
													</div>
													
												</div>
											</div>
											
											
											<!----------
												********Oredoo*********
											--------->
											
											<!--------------
												*******T.T*******
											-------------->
											
											
											<!---------
												*****Restte de commande *****
											---------->
											<div class="form-group-inner" id="block_commande" style="display: none">
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
														
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
															<div class="panel-footer">
																

																												<button class="btn btn-success btn-lg btn-block" type="submit" id="caculer">Ajouter</button>

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
																
																<button class="btn btn-sm btn-primary login-submit-cs" style="display: none"type="">Save Change</button>
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
				</div>
				
			</div></div>
		</div>
	</div>
</form>
	@include('Dashbord.js_code')
	@stop