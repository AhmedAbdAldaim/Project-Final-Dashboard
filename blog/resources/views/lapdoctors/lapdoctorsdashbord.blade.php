@extends('includes.newnav')
@section('content')

                      
                <div class="card-header">all </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div>
                    @endif
                  <table class="table">
                    <thead>
                    <tr>
                    <th scope="col">picant name </th>
                    <th scope="col">examination type</th>
                    <th scope="col"> start</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($examinations as $examination)
                    <tr>
                    <td scope="row">{{$examination->interview->pichant->user->name}}</td>
                    <td scope="row">{{$examination->name}}</td>
                    <td>
                    <a href="/lapdoctors/examintaons/{{$examination->id}}" class="btn btn-primary">start</a>
                    @csrf
                    </td>
                  
                    </tr>
                    @endforeach
                    </tbody>
                </table>   
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection