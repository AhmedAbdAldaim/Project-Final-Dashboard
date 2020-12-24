@extends('includes.newnav')

@section('content')
@section('titel','entre results')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>
@endif
                 <form method="POST" action="/lapdoctors/examintaons/{{$examination->id}}/update">
                        @csrf
                     
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('result of  examination') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="result"   required autocomplete="name" autofocus>
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('date') }}</label>

                            <div class="col-md-6">
                                <input type="date" name="date" class="form-control"  >
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
              
@endsection
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 