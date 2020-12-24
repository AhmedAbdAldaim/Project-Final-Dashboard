@extends('includes.newnav')
@section('content')
  	<!--begin: Search Form -->
	  <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
									<div class="row align-items-center">
										<div class="col-xl-8 order-2 order-xl-1">
											<div class="form-group m-form__group row align-items-center">
												<div class="col-md-4">
													<div class="m-input-icon m-input-icon--left">
														<input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
														<span class="m-input-icon__icon m-input-icon__icon--left">
															<span>
																<i class="la la-search"></i>
															</span>
														</span>
													</div>
												</div>
											</div>
										</div>
									
									</div>
								</div>
								<!--end: Search Form -->
		<!--begin: Datatable -->
  <table class="m-datatable" id="html_table" width="100%">
<thead>
										<tr>
											<th >
												id
											</th>
											<th >
												name
											</th>
											<th >
												spishalty
											</th>
											<th >
												hospital
											</th>
											<th >
												address
											</th>
											<th >
												jop degre
											</th>
										</tr>
									</thead>
                                     <tbody>
                                     @foreach($doctors as $doctor)
										<tr>

											
											<td>
												{{$doctor->id}}
											</td>
											<td>
                                            {{$doctor->user->name}}
											</td>
											<td>
											{{$doctor->speshalty->name}}
											</td>
                                            @foreach($doctor->hospitals as $hospital)
											<td>
                                            {{$hospital->name}}
											</td>
                                            @endforeach
											<td>
                                            <img src="{{asset('storage/image/'. $doctor->image)}}" alt="" hight="50px" width="100px">
											</td>
											<td>
                                            {{$doctor->carear}}
											</td>
											
										</tr>
									@endforeach
										    
                                        </tbody>
								</table>
@endsection