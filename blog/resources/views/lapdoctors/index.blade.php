@extends('includes.newnav')
@section('titel','all lapdoctor')
@section('content')

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div>
                    @endif
                  <table class="table">
                    <thead>
                    <tr>
                    <th scope="col"> name </th>
                    <th scope="col"> Email</th>
                    <th scope="col"> update</th>
                    <th scope="col"> delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hospital->labdoctors as $labdoctor)
                    <tr>
                    <td scope="row">{{$labdoctor->user->name}}</td>
                    <td scope="row">{{$labdoctor->user->email}}</td>
                    <td>
                    <a href="#" class="btn btn-primary">edit</a>
                    @csrf
                    </td>
                    <td>
                 @method('DELETE')
                 <a href="#" class="btn btn-danger float-left mr-2 btn-sm">delete</a>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>   
            
@endsection