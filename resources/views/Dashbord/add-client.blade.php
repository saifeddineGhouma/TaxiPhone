@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="sparkline12-list mt-b-30">
			<div class="sparkline12-hd">
				<div class="main-sparkline12-hd">
					<h1>ADD Client</h1>
				</div>
			</div>
			<form action="{{route('add_client')}}" method="post">
				                       {{ csrf_field() }}

			<div class="sparkline12-graph">
				<div class="input-knob-dial-wrap">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<div class="input-mask-title">
								<label>Nom</label>
							</div>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
							<div class="input-mark-inner mg-b-22">
								<input type="text" class="form-control"name="name" value="{{old('title')}}"  placeholder="الإسم">

								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<div class="input-mask-title">
								<label>Prenom</label>
							</div>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
							<div class="input-mark-inner mg-b-22">
								<input type="text" class="form-control"name="first_name" value="{{old('title')}}"  placeholder="اللقب">
							</div>
						</div>
					</div>
				
					
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<div class="input-mask-title">
								<label>Phone</label>
							</div>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
							<div class="input-mark-inner mg-b-22">
								<input type="text" class="form-control"name="phone"data-mask="(999) 999-9999" placeholder="هاتف">
								
							</div>
						</div>
					</div>
				
				
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<div class="input-mask-title">
								<label>Adresse</label>
							</div>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
							<div class="input-mark-inner">
								<input type="text" class="form-control" name="adresse" data-mask="9999" placeholder="عنوان">
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<div class="input-mask-title">
								<label>Travail</label>
							</div>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
							<div class="input-mark-inner">
								<input type="text" class="form-control"name="work" placeholder="العمل">
							</div>
						</div>
					</div>

						<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							
						</div>
						<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
							<div class="input-mark-inner">
								<input type="submit" class="form-control btn-success" value="New Client">
							</div>
						</div>
					</div>


				</div>

			</form>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="sparkline13-list mt-b-30 nk-ds-n-pro">
			<div class="sparkline13-hd">
				<div class="main-sparkline13-hd">
					<h1>Range Slider</h1>
				</div>
			</div>
			<div class="sparkline13-graph">
				<div class="input-knob-dial-wrap">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="themesaller-forms mg-b-20">
								<div class="slider-wrapper purple-slider">
									<div id="slider"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="themesaller-forms mg-b-20">
								<div class="slider-wrapper purple-slider">
									<div id="slider1"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="themesaller-forms mg-b-20">
								<div class="spacer-b16a">
									<label for="amount">Maximum price:</label>
									<input type="text" id="amount" class="slider-input">
								</div>
								<div class="slider-wrapper yellow-slider">
									<div id="slider2"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="themesaller-forms mg-b-20">
								<div class="spacer-b16a">
									<label for="bedrooms">Number of bedrooms:</label>
									<input type="text" id="bedrooms" class="slider-input">
								</div>
								<div class="slider-wrapper blue-slider">
									<div id="slider3"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="themesaller-forms mg-b-20">
								<div class="spacer-b16a">
									<label for="budget">Project Budget:</label>
									<input type="text" id="budget" class="slider-input">
								</div>
								<div class="slider-wrapper purple-slider">
									<div id="slider8"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="themesaller-forms mg-b-20">
								<div class="spacer-b16a">
									<label for="amounts">Price range:</label>
									<input type="text" id="amounts" class="slider-input">
								</div>
								<div class="slider-wrapper">
									<div id="slider-range"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="themesaller-forms mg-b-20 mg-t-50">
								<div class="slider-wrapper green-slider">
									<div id="slider10"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="themesaller-forms mg-b-20">
								<div id="eq" class="slider-group blue-slider">
									<div class="sliderv-wrapper"><span>77</span>
								</div>
								<div class="sliderv-wrapper"><span>55</span>
							</div>
							<div class="sliderv-wrapper"><span>40</span>
						</div>
						<div class="sliderv-wrapper"><span>55</span>
					</div>
					<div class="sliderv-wrapper"><span>77</span>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="themesaller-forms mg-b-20">
			<div id="eq2" class="slider-group purple-slider">
				<div class="sliderv-wrapper"><span>77</span>
			</div>
			<div class="sliderv-wrapper"><span>55</span>
		</div>
		<div class="sliderv-wrapper"><span>40</span>
	</div>
	<div class="sliderv-wrapper"><span>55</span>
</div>
<div class="sliderv-wrapper"><span>77</span>
</div>
</div>
</div>
</div>
</div>
<div class="row dps-tb-ntn">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="themesaller-forms">
<div class="spacer-b16a">
<label for="sales">Vertical Range:</label>
<input type="text" id="sales" class="slider-input">
</div>
<div class="sliderv-wrapper green-slider green-left-pro">
<div id="slider7"></div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="themesaller-forms">
<div class="spacer-b16a">
<label for="volume">Vertical:</label>
<input type="text" id="volume" class="slider-input">
</div>
<div class="sliderv-wrapper black-slider">
<div id="slider6"></div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="themesaller-forms">
<div class="spacer-b16a">
<label for="vtip">Vertical Tooltip:</label>
<input type="text" id="vtip" class="slider-input">
</div>
<div class="sliderv-wrapper yellow-slider">
<div id="slider9"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@stop