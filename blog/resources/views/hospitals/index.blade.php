@extends('includes.newnav')
@section('titel','all hospitals')
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
                    <th scope="col">hospital name</th>
                    <th scope="col">update</th>
                    <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hospitals as $hospital )
                    <tr>
                    <th scope="row">{{ $hospital->id }}</th>
                    <td>{{  $hospital->name }}</td>
                    <td>
                    <a href="/hospitals/{{ $hospital->id }}/edit" class="btn btn-primary">edit</a>
                    @csrf
                    </td>
                    <td>
                 @method('DELETE')
                 <a href="/hospitals/{{ $hospital->id }}/delete" class="btn btn-danger float-left mr-2 btn-sm">delete</a>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>    

    
@endsection