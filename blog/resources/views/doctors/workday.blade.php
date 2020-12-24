@extends('includes.newnav')
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('doctor work time') }}</div>
                <div class="card-body">
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>
@endif
                    <form method="POST" action="/worktime">
                        @csrf
                        <div class="form-group row">
                            <label for="day" class="col-form-label col-lg-3 col-sm-12">{{ __(' THE DAY') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" id="day" name="day">
                  
                          <option  >saturday</option>
                          <option  >sunday</option>
                          <option >monday</option>
                          <option  >tuesday</option>
                          <option  > wednesday</option>
                          <option  > thursday</option>
                          <option  > friday</option>
                             </select>
                            </div>
                        </div>
                        <div class="form-group m-form__group row m--margin-top-20">
                            <label for="form" class="col-form-label col-lg-3 col-sm-12">{{ __(' FROM') }}</label>

                            <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type='text' class="form-control" id="m_timepicker_1" readonly placeholder="Select time" type="text" name="from"/>
                            </div>
                        </div>
                        <div class="form-group m-form__group row m--margin-top-20">
												<label class="col-form-label col-lg-3 col-sm-12">
												{{ __(' TO') }}
												</label>
												<div class="col-lg-9 col-md-9 col-sm-12">
													<input type='text' class="form-control" id="m_timepicker_1" readonly placeholder="Select time" type="text" name="to"/>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection