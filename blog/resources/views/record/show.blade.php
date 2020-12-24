@extends('includes.newnav')
@section('titel','record ')
@section('content')


                  <table class="table">
                    <thead>
                   
                    <tr>
                    <th scope="col">name</th>
                    <th scope="col"> gender</th>
                    <th scope="col"> birthday</th>
                    <th scope="col"> address</th>
                    <th scope="col"> blood_type</th>
                    <th  scope="col">
                                           sensitivity
                                            </th>


                                            <th scope="col">
                                              genetic_diseases
                                            </th>
                                            <th scope="col">
                                          social_status
                                            </th>
                                            <th scope="col">
                                                bad_habit
                       </th>
                                           
                     <th scope="col"> interviews record</th>
        
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td scope="row">{{$pichant->user->name}}</td>
                   
                    <td>{{$pichant->gender}}</td>
                    <td>{{$pichant->birthday}}</td>
                    <td>{{$pichant->address}}</td>
                    <td>{{$pichant->blood_type}}</td>
                    <td>{{$pichant->sensitivity}}</td>
                    <td>{{$pichant->genetic_diseases}}</td>
                    <td>{{$pichant->social_status}}</td>
                    <td> {{$pichant->bad_habit }}</td>
                 <td><a href="/record/intreviews/{{$pichant->id}}/show" class="btn btn-primary">intervews</a></td>
             </tbody>
                </table> 
             
@endsection
