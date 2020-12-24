@extends('includes.newnav')       
@section('content')
<
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div>
                    @endif
                  <table class="table">
                    <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">pichant name</th>
                    <th scope="col">picent record</th>
                    <th scope="col">start the intrviwe</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($interviews as $interview)
                    <tr>
                    <td scope="row">{{$interview->id}}</td>
                    <td>{{$interview->pichant->user->name}}</td>
                    <td><a href="#" class="btn btn-primary">record</a></td>
                    <td><a href="#" class="btn btn-primary">start</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>   
            
@endsection
