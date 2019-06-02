@extends('layouts.master')
@section('content')
<div class="data-table-area mg-b-15">
 <div class="container-fluid">
  <div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="sparkline13-list">
     <div class="sparkline13-hd">
      <div class="main-sparkline13-hd">
       <h1>Liste  <span class="table-project-n">Des</span> Clients</h1>
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
          <th data-field="name" data-editable="true">Nom Client</th>
          <th data-field="email" data-editable="true">Travail</th>
          <th data-field="phone" data-editable="true">Phone</th>
          <th data-field="complete">Credi</th>
          <th data-field="task" >Add Commande</th>
          
          <th data-field="date" >Edit Client</th>
          <th data-field="price" >Show Commande</th>
          <th data-field="action">Delete Client</th>
         </tr>
        </thead>
        <tbody>
         @foreach($clients as $client)
         <tr>
          <td></td>
          <td> <a href="">
           <span class="glyphicon glyphicon-plus"></span></a></td>
           <td>{{$client->name}}  {{$client->first_name}}</td>
           <td>{{$client->work}}</td>
           <td>{{$client->phone}}</td>
           <td class="datatable-ct"><span class="pie">1/6</span>
          </td>
          <td>
           <button class="btn btn-success col-md-12">
           <a href="{{route('create.commande',$client->id)}}">
            
            <span class="glyphicon glyphicon-plus "></span></a>
            </button>
           </td>
           <td> <button class="btn btn-warning col-md-12">
            <a href="">
             
             <span class="glyphicon glyphicon-edit"></span></a>
            </button></td>
            <td> <button class="btn btn-info col-md-12">
             <a href="{{route('liste.commande',$client->id)}}">
              
              <span class="glyphicon glyphicon-eye-open"></span></a>
             </button></td>
             <td class="datatable-ct">
              <button class="btn btn-info col-md-12">
             <a onclick="return confirm('Are you sure?')"  href="{{route('delete.client',$client->id)}}" >
              
              <span class="glyphicon glyphicon-trash"></span></a>
           
             </button>

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