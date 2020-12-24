@extends('includes.newnav')
@section('titel','all admins')
@section('content')

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div>
                    @endif
                  <table class="table">
                    <thead>
                    <tr>
                    <th scope="col">admin name </th>
                    <th scope="col">adimn Email</th>
                    <th scope="col"> update</th>
                    <th scope="col"> delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                    <td scope="row">{{$user->name}}</td>
                    <td scope="row">{{$user->email}}</td>
                    <td>
                    <a href="/admins/{{$user->id}}/edit" class="btn btn-primary">edit</a>
                    @csrf
                    </td>
                    <td>
                 @method('DELETE')
                 <a href="/admins/{{$user->id}}/delete" class="btn btn-danger float-left mr-2 btn-sm">delete</a>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>   
             
           
@endsection