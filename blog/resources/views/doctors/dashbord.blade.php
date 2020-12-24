@extends('includes.newnav')
@section('titel','new interviwes')
@section('content')

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div>
                    @endif
                  <table class="table">
                    <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">picent record</th>
                    <th scope="col">picent name</th>
                    <th scope="col">start the intrviwe</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($interviews as $interview)
                    <tr>
                    <td scope="row">{{$interview->id}}</td>
                    <td scope="row">{{$interview->date}}</td>
                    <td><a href="/record/{{$interview->pichant_id}}" class="btn btn-primary">show</a></td>
                    <td><a href="/interviews/{{$interview->id}}" class="btn btn-primary">start</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>   
              
@endsection


