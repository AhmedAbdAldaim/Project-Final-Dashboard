@extends('includes.newnav')
@section('content')
 <div class="tab-content">
			<div class="tab-pane active" id="m_user_profile_tab_1">
			@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>
@endif
					<form class="m-form m-form--fit m-form--label-align-right" method="POST" action="/doctors/{{$user->id}}/profile" enctype="multipart/form-data"> 
				          	@csrf
		                      <div class="m-portlet__body">
								  <div class="form-group m-form__group m--margin-top-10 m--hide">
														<div class="alert m-alert m-alert--default" role="alert">
															oko
														</div>
													</div>
													<div class="form-group m-form__group row">
														<div class="col-10 ml-auto">
															<h3 class="m-form__section">
																1. Personal Details
															</h3>
														</div>
													</div>
													<div class="form-group m-form__group row">
														<label for="example-text-input" class="col-2 col-form-label">
															Full Name
														</label>
														<div class="col-7">
															<input class="form-control m-input" type="text" value="{{$user->name}}">
														</div>
													</div>
													<div class="form-group m-form__group row">
														<label for="example-text-input" class="col-2 col-form-label">
														 Email
														</label>
														<div class="col-7">
															<input class="form-control m-input" type="email" value="{{$user->email}}">
														</div>
													</div>
													
													</div>
													<div class="form-group m-form__group row">
														<label for="example-text-input" class="col-2 col-form-label">
															Phone No.
														</label>
														<div class="col-7">
															<input class="form-control m-input" type="text" value="+456669067890">
												
														</div>
													</div>
													<div class="form-group m-form__group row">
														<label for="example-text-input" class="col-2 col-form-label">
															Address
														</label>
														<div class="col-7">
															<input class="form-control m-input" type="text" value="L-12-20 Vertex, Cybersquare">
														</div>
													</div>
													
													<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
													<div class="form-group m-form__group row">
														<div class="col-10 ml-auto">
															<h3 class="m-form__section">
																2. qualifications
															</h3>
														</div>
													</div>
													
													<div class="form-group m-form__group row">
														<label for="example-text-input" class="col-2 col-form-label">
														qualifications
														</label>
														<div class="col-7">
														<textarea class="form-control"  rows="2" name="qualifications" value="{{$user->doctor->qualifications}}"></textarea>
															
														</div>
                                                         </div>
														<div class="form-group m-form__group row">
														<label for="example-text-input" class="col-2 col-form-label">
														carear
														</label>
														<div class="col-7">
														<textarea class="form-control"  rows="2" name="carear" value="{{$user->doctor->carear}}"></textarea>
															</div>
														</div>
													<div class="form-group m-form__group row">
														<label for="example-text-input" class="col-2 col-form-label">
															fellowship
														</label>
														<div class="col-7">
															<input class="form-control m-input" type="text" name="fellowship"  value="{{$user->doctor->fellowship}}">
														</div>
													</div>
														<div class="form-group m-form__group row">
														<label for="example-text-input" class="col-2 col-form-label">
															image
														</label>
														<div class="col-7">
															<input class="form-control m-input" type="file" name="image">
														</div>
													</div>
												
												<div class="m-portlet__foot m-portlet__foot--fit">
													
														<div class="row">
															<div class="col-2"></div>
															<div class="col-7">
																<button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom" >
																	Save changes
																</button>
																
															</div>
														</div>
													
												</div>
											</form>
										</div>
                                        @endsection
