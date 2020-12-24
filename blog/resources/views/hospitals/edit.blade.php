@extends('includes.newnav')
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('update hospital') }}</div>

                <div class="card-body">
                    <form method="POST" action="/hospitals/{{ $hospital->id }}/update">
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
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Hospital name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"  required autocomplete="name" autofocus value="{{$hospital->name}}">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection