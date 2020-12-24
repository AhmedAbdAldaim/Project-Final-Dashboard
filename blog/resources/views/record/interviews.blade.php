  @extends('includes.newnav')
@section('titel','interviews record')
@section('content')



  <table class="table">
                    <thead>
                    <tr>
                    <th scope="col">date</th>
                    <th scope="col">the_diagnosis</th>
                    <th scope="col">notes </th>
                    <th scope="col">examinations</th>
                    <th scope="col">medicines</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($interviews as $interview)
                    <tr>
                    <td scope="row">{{$interview->date}}</td>
                    <td>{{$interview->the_diagnosis}}</td>
                    <td>{{$interview->notes}}</td>
                    <td><a href="/record/examinations/{{$interview->id}}" class="btn btn-primary">show</a></td>
                    <td><a href="/record/medicines/{{$interview->id}}" class="btn btn-primary">show</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>     
                @endsection