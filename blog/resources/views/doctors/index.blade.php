@extends('includes.newnav')

@section('content')


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div>
                    @endif
                  <table class="table">
                    <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">dovtor name </th>
                    <th scope="col">doctor speshalty</th>
                    <th scope="col">doctor adress</th>
                    <th scope="col"> update </th>
                    <th scope="col"> delete </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hospital->doctors as $doctorz)
                    <tr>
                    <td scope="row">{{$doctorz->id}}</td>
                    <td scope="row">{{$doctorz->user->name}}</td>
                    <td scope="row">{{$doctorz->speshalty->name}}</td>
                    <td scope="row">{{$doctorz->adress}}</td>
                      <td>
                    <a href="/doctors/{{$doctorz->user->id}}/profile" class="btn btn-primary">edit</a>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
