@extends('includes.newnav')
@section('titel','Add doctor')
@section('content')

                    <form method="POST" action="/doctors">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __(' Doctor Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"  required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                      

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="fellowship" class="col-md-4 col-form-label text-md-right">{{ __(' Doctor jop degre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="jop_degre"  required autocomplete="jop_degre" autofocus>
                                @error('jop_degre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="fellowship" class="col-md-4 col-form-label text-md-right">{{ __(' Doctor fellowship') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="fellowship"  required autocomplete="fellowship" autofocus>
                                @error('fellowship')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group  row">
                          <label for="day"  class="col-md-4 col-form-label text-md-right">{{ __(' DOCTOR SPISHALTY') }}</label>
                          <div class="col-md-6">
                           <select class="form-control" id="speshaltyId" name="speshaltyId">
                             @foreach($spesialties as  $speshalty  )
                              <option value="{{ $speshalty->id }}" class="form-control" selected>{{ $speshalty ->name }} </option>
                              @endforeach
                          </select>
                          <div>
                         </div>

                         <div class="form-group row">
                            <label for="diagnosis_prise" class="col-md-4 col-form-label text-md-right">{{ __('diagnosis prise ') }}</label>
                            <div class="col-md-6">
                           <input id="m_touchspin_2" type="text" class="form-control"  name="diagnosis_prise" placeholder="" type="text">
                                @error('diagnosis_prise')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    </form>
               
@endsection