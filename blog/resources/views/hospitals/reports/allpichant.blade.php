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
											<th title="Field #3">
											birthday	 
											</th>
											<th title="Field #4">
                                            gender
											</th>
											<th title="Field #5">
                                             blode type 
											</th>
											<th title="Field #6">
										   sensitivity
											</th>
                                            <th title="Field #7">
											  genetic_diseases
											</th>
                                            <th title="Field #8">
										  social_status
											</th>
                                            <th title="Field #9">
										 	 	bad_habit
											</th>
                                            <th title="Field #10">
										 	adresess 	
											</th>
                                            <th title="Field #11">
										 	interviews 	
											</th>
										</tr>
									</thead>
                                     <tbody>
                                     @foreach($pichants as $pichant)
										<tr>

											
											<td>
												{{$pichant->patriot_number}}
											</td>
											<td>
                                            {{$pichant->user->name}}
											</td>
                                            <td>
                                            {{$pichant->birthday}}
											</td>
											<td>
											{{$pichant->gender}}
											</td>
											<td>
                                        	{{$pichant->blood_type}}
											</td>
                                           
											<td>
                                            {{$pichant->sensitivity}}
											</td>
											<td>
                                            {{$pichant->genetic_diseases}}
											</td>
                                            <td>
                                            {{$pichant->social_status}}
											</td>
                                            <td>
                                            {{$pichant->bad_habit }}
											</td>
                                            <td>
                                            {{$pichant->address }}
											</td>
											<td><a href="/record/{{$pichant->id}}" class="btn btn-primary">{{$pichant->interviews->count()}}</a></td>
                                          
										</tr>
									@endforeach
										    
                                        </tbody>
								</table>
@endsection