@extends('includes.newnav')
@section('titel','examinations result')
@section('content')

   
        
                <table class="table">
                    
                
                    <tr>
                    <th scope="col">type</th>
                    <th scope="col">result</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($interview->examinations as $examination)
                    <tr>
                    <td scope="row">{{$examination->name}}</td>
                    <td>{{$examination->result}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>     
              

@endsection
