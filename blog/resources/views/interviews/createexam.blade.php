@extends('includes.newnav')
@section('titel','add examinations')
@section('content')
 
                <div class="card-body">
                    <form method="POST" action="/examinations/doctor/create/{{$interview->id}}">
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
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('add exminations') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"  required autocomplete="name" autofocus >
                            </div>
                        </div>
                        <div class="form-group  row">
                   
                    <label for="selecthopital"  class="col-md-4 col-form-label text-md-right"> {{ __('exminations hospital') }}</label>
                    <div class="col-md-6">
                      <select class="form-control" id="hospitalId" name="hospitalId">

                       @foreach($hospitals as  $hospital  )
                   
                        <option value="{{ $hospital->id }}" class="form-control" selected>{{ $hospital->name }} </option>
                          @endforeach
                        </select>
                        <div>
                         </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('add') }}
                                </button>
                                <a href="/home" class="btn btn-primary">exit</a>
                            </div>
                        </div>
                    </form>
                

@endsection