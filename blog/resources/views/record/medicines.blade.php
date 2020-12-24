@extends('includes.newnav')

@section('titel','interview medicines')

@section('content')
  
       
                <table class="table">
                    <thead>
                 
                    <tr>
                    <th >name</th>
                    <th >description</th>
                    <th >duration of use</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($interview->medicines as $medicine)
                    <tr>
                    <td >{{$medicine->name}}</td>
                    <td >{{$medicine->description}}</td>
                    <td >{{$medicine->duration_of_use}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>     
                
@endsection
