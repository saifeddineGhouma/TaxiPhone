@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-info">
			<div class="panel-heading">Commande  orange</div>
			<div class="panel-body">
					<table class="table">
							<thead>
								<th></th>
								<th>1dt</th>
								<th>5dt</th>
								<th>ligte</th>
							</thead>
							<tbody>
								<tr>
									<td>prix</td>
									<td>
										{{$commande->Orange->prix_dinar_orange}}
									</td>
									<td>
										{{$commande->Orange->prix_sinque_dinar_orange}}
									</td>
									<td>
											{{$commande->Orange->prix_light_orange}}
									</td>
								</tr>
								<tr>
									<td>Nombre </td>
									<td>{{$commande->Orange->quentity_one_dinar}}</td>
									<td>{{$commande->Orange->quentity_five_dinar}}</td>
									<td>{{$commande->Orange->light_orange}}</td>
								</tr>
								<tr>
									<td>Total offre </td>
									<td>	{{$commande->Orange->price_cmd_one_dinar}}</td></td>
									<td>	{{$commande->Orange->price_cmd_five_dinar}}</td>
									<td>	{{$commande->Orange->light_orange}}</td>
								</tr>
								<tr>
									<td>TT CMD Orange </td>
									<td></td>
									<td><h3>{{$commande->Orange->price_cmd_one_dinar + $commande->Orange->price_cmd_five_dinar + $commande->Orange->light_orange }}</h3></td>
									<td></td>
								</tr>
							</tbody>
						</table>
				
			</div>
		</div>
	</div>
	<!-----  oredoo panel-->
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-info">
			<div class="panel-heading">Commande  Oredooo</div>
			<div class="panel-body">
				<div class="form-group-inner">
					<div class="row" >
						<table class="table">
							<thead>
								<th></th>
								<th>1dt</th>
								<th>5dt</th>
								<th>ligte</th>
							</thead>
							<tbody>

							
								<tr>
									<td>prix</td>
									<td>
										{{$commande->Oredoo->prix_dinar_oredoo}}
									</td>
									<td>
										{{$commande->Oredoo->prix_sinque_dinar_oredoo}}
									</td>
									<td>
										{{$commande->Oredoo->prix_light_oredoo}}
									</td>
								</tr>
								<tr>
									<td>Nombre </td>
									<td>{{$commande->Oredoo->quentity_one_dinar}}</td>
									<td>{{$commande->Oredoo->quentity_five_dinar}}</td>
									<td>{{$commande->Oredoo->light_oredoo * $commande->Oredoo->prix_light_telecome }}</td>
								</tr>
								<tr>
									<td>Total offre </td>
									<td>	{{$commande->Oredoo->price_cmd_one_dinar}}</td></td>
									<td>	{{$commande->Oredoo->price_cmd_five_dinar}}</td>
									<td>	{{$commande->Oredoo->light_oredoo}}</td>
								</tr>
								<tr>
									<td>TT CMD Oredoo </td>
									<td></td>
										<td><h3>{{$commande->Oredoo->price_cmd_one_dinar + $commande->Oredoo->price_cmd_five_dinar + $commande->Oredoo->light_oredoo *$commande->Oredoo->prix_light_oredoo }}</h3></td>
									<td></td>
								</tr>
					
							</tbody>
						</table>
						
						
						
						
						
						
						
						
						
						
						
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!----------  telecome panel---->
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-info">
			<div class="panel-heading">Commande  T.T</div>
			<div class="panel-body">
				<div class="form-group-inner">
						<table class="table">
							<thead>
								<th></th>
								<th>1dt</th>
								<th>5dt</th>
								<th>ligte</th>
							</thead>
								<tbody>
								<tr>
									<td>prix</td>
									<td>
										{{$commande->Telecome->prix_dinar_telecome}}
									</td>
									<td>
										{{$commande->Telecome->prix_sinque_dinar_telecome}}
									</td>
									<td>
										{{$commande->Telecome->prix_light_telecome}}
									</td>
								</tr>
								<tr>
									<td>Nombre </td>
									<td>{{$commande->Telecome->quentity_one_dinar}}</td>
									<td>{{$commande->Telecome->quentity_five_dinar}}</td>
									<td>{{$commande->Telecome->light_telecome}}</td>
								</tr>
								<tr>
									<td>Total offre </td>
									<td>	{{$commande->Telecome->price_cmd_one_dinar}}</td></td>
									<td>	{{$commande->Telecome->price_cmd_five_dinar}}</td>
									<td>	{{$commande->Telecome->light_telecome * $commande->Oredoo->prix_light_telecome}}</td>
								</tr>
								<tr>
									<td>TT CMD Telecome </td>
									<td></td>
										<td><h3>{{$commande->Telecome->price_cmd_one_dinar + $commande->Telecome->price_cmd_five_dinar + $commande->Telecome->light_telecome*$commande->Oredoo->prix_light_telecome }}</h3></td>
									<td></td>
								</tr>
							</tbody>
						</table>
				</div>
			</div>
		</div>
	</div>
	
	<!--------------------
	
	!!!!!!!!!! commande panuel
	---->
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">Commande</div>
			<div class="panel-body">
<form method="post" action="{{route('edit.commande',$commande->id)}}">
 {{ csrf_field() }}
				<div class="form-group-inner">
					<div class="row" >
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<label class="login2 pull-left pull-right-pro">Total</label>
						</div>
						
						<div class="col-lg-8 col-md-4 col-sm-6 col-xs-12">
							<div class="form-group has-default has-feedback">
								
								<div class="input-group">
									<span class="input-group-addon">$</span>
									<input type="text" class="form-control" id="total" aria-describedby="inputGroupSuccess4Status" name="total" value="{{$commande->price_total}}"disabled>
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
									<input type="text" class="form-control" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status" value="{{$commande->prix_donnee}}" name="avance">
								</div>
								
								
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<label class="login2 pull-left pull-right-pro">Credi</label>
						</div>
						
						<div class="col-lg-8 col-md-4 col-sm-6 col-xs-12">
							<div class="form-group has-default has-feedback">
								
								<div class="input-group">
									<span class="input-group-addon">$</span>
									<input type="text" class="form-control" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status" value="{{$commande->pricx_recette}}" name="credi" disabled>
								</div>
								
						

								@php

				  $checked1 = ((bool)$commande->payee=="1")? 'checked="checked"':'';
      $checked2 = ((bool)$commande->payee=="0")? 'checked="checked"':'';
				@endphp

							</div>
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<label class="login2 pull-left pull-right-pro">Termine ?</label>
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="form-group has-default has-feedback">
								
								<div class="radio">
									<label>
										<input type="radio" name="payee" id="optionsRadios1" value="1" {{	$checked1}} >
										oui
									</label>
								</div>
								
								
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="form-group has-default has-feedback">
								
								<div class="radio">
									<label>
										<input type="radio" name="payee" id="optionsRadios1" value="0" {{	$checked2}}>
										Non
									</label>
								</div>
								
								
							</div>
						</div>
						<div class="col-lg-12 col-md-12" style="margin-bottom: 10px"></div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<textarea class="form-control" name="description"rows="3">{{$commande->description}}</textarea>
						</div>
						
					</div>
					
				</div>
<button type="submit" class="btn btn-success btn-lg btn-block">Edit Commande</button>

			</div>

<br>
		</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	
	spinbox.prop('disabled', true);
</script>
@stop