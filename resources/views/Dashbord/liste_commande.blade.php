

@extends('layouts.master')
@section('content')


<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1 style="color:blue">Mr: {{$client->name}} {{$client->last_name}}</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">ID</th>
                                                <th data-field="name" >Date Commande</th>
                                                <th data-field="email" >Total</th>
                                                <th data-field="phone" >Avance</th>
                                                <th data-field="complete">Credi</th>
                                                
                                                
                                                <th data-field="date" >Edit commande</th>
                                                <th data-field="price" >Show Commande</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($commandes as $commande)
                                            <tr>
                                                <td></td>
                                                <td> </td>
                                                <td>{{$commande->created_at}} </td>
                                                <td>{{$commande->price_total}}</td>
                                                <td>{{$commande->prix_donnee}}</td>
                                                <td class="datatable-ct"><span class="pie">{{$commande->pricx_recette}}</span>
                                                </td>
                                               
                                                <td> <button class="btn btn-warning col-md-12">
                                                <a href="">
                                                
                                                <span class="glyphicon glyphicon-edit"></span></a>
                                                </button></td>
                                                <td> <button class="btn btn-info col-md-12">
                                                <a href="{{route('show.commande',$commande->id)}}">
                                                
                                                <span class="glyphicon glyphicon-eye-open"></span></a>
                                                </button></td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                       @endforeach
                                          
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop

