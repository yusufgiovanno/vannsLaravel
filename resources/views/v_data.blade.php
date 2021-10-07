@extends('layouts.master')
@section('title', 'Admin')
@section('content')

<h2>Employees</h2>
       <p>List of All Employee</p>
       <table class="table table-bordered" style="width:100%" id="datatable-buttons">
           <thead class="thead-light">
               <tr>
                   <th>No.</th>
                   <th>Firstname</th>
                   <th>Lastname</th>
                   <th>Title</th>
                   <th>Photo</th>
                   <th>Action</th>
               </tr>
           </thead>
           <tbody>
               @foreach ($emp as $emps)
                   <tr>
                       <td>{!! $loop->index + 1 !!}</td>
                       <td>{!! $emps->first_name !!}</td>
                       <td>{!! $emps->last_name !!}</td>
                       <td>{!! $emps->title !!}</td>
                       <td><img src="{!! $emps->picture !!}" style='width:25px'></td>
                       <td>
                           <a href={{ 'edit/' . $emps->id }}><i class="fa fa-edit"></i></a>
                           <a href={{ 'delete/' . $emps->id }} onclick="return confirm('Are you sure to deactivate Employee {!! $emps->first_name !!}?')"><i class="fa fa-eye-slash"></i></a>
                           <a href={{ 'drop/' . $emps->id }} onclick="return confirm('Are you sure to drop Employee {!! $emps->first_name !!}?')"><i class="fa fa-eraser"></i></a>
                       </td>
                   </tr>
               @endforeach
           </tbody>
       </table>
       
@endsection