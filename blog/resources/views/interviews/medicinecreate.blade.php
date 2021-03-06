@extends('includes.newnav')
@section('titel','add medicine')
@section('content')
 
                <div class="card-body">
                    <form method="POST" action="/medicine/store/{{$interview->id}}">
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
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Medicin Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="medicinename"  required autocomplete="name" autofocus >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Medicin Description') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="description"  required autocomplete="name" autofocus >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Medicin Description') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="durationofuse"  required autocomplete="name" autofocus >
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('add') }}
                                </button>
                                <a href="/home" class="btn btn-primary">back to home</a>
                            </div>
                        </div>
                    </form>
@endsection