@extends('includes.newnav')
@section('titel','add specialty')
@section('content')
 
       
                    <form method="POST" action="/spesialties">
                        @csrf
                        @if ($errors->any())
                    <div class="alert alert-danger">
                       <ul>
                    @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                             @endforeach
                        </ul>

                    </div>
                        @endif
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('add specialty') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"  required autocomplete="name" autofocus >
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('add') }}
                                </button>
                            </div>
                        </div>
                    </form>
             
@endsection
 
 
 
 
 