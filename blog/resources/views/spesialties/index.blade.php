@extends('includes.newnav')
@section('titel','all spesialties')
@section('content')
@if(session()->has('error'))
 <div class="alert alert-danger">
{{ session()->get('error') }} 
</div>
@endif

 
		<table class="table table-sm m-table m-table--head-bg-brand">
				<thead class="thead-inverse">
                    <tr>
                    <th scope="col">iD</th>
                    <th scope="col">specialties name</th>
                    <th scope="col">pdate</th>
                    <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($spesialties as $speshalty )
                    <tr>
                    <th scope="row">{{ $speshalty->id }}</th>
                    <td>{{ $speshalty->name}}</td>
                    <td>
                    <a href="/spesialties/{{ $speshalty->id }}/edit" class="btn btn-primary">edit</a>
                    @csrf
                    </td>
                    <td>
                 @method('DELETE')
                 <a href="/spesialties/{{ $speshalty->id }}/delete" class="btn btn-danger float-left mr-2 btn-sm">delete</a>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>    

  
   
@endsection  
  
  
  
  
  
  




