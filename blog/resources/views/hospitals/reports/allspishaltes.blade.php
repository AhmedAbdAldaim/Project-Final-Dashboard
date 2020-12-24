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
											<th title="Field #1">
												id
											</th>
											<th title="Field #2">
												name
											</th>
                                            <th title="Field #11">
										 doctors number
											</th>
										</tr>
									</thead>
                                     <tbody>
                                     @foreach($speshaltys as $speshalty)
										<tr>

											
											<td>
												{{$speshalty->id}}
											</td>
											<td>
                                            {{$speshalty->name}}
											</td>
                                            <td>
											{{$speshalty->doctors->count()}}
											</td>
                                          
										</tr>
									@endforeach
										    
                                        </tbody>
								</table>
@endsection