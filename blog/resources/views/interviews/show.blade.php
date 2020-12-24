@extends('includes.newnav')
@section('titel','interview section')
@section('content')


    <form action="/interviews/{{$interview->id}}/update" method="POST" enctype="multipart/form-data">
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
<div class="form-group col-md-6">
      <label for="the_diagnosis"> symptoms</label >
      <div class="col-md-6">
       <textarea type="text" name="symptoms"   class="form-control"  ></textarea>
        </div>
        </div>
        <div class="form-group">
      <label for="the_diagnosis"> diagnosis</label >
      <div class="col-md-6">
       <textarea type="text" name="the_diagnosis"   class="form-control"  ></textarea>
        </div>
        </div>
              <div class="form-group">
 
        <label for="notes"> notes about the interview</label >
        <div class="col-md-6">
        <textarea type="text" name="notes"   class="form-control"  ></textarea>
        </div>
        </div>
 <div class="form-group ">
        
      <table class="table" style="width:70%">
        <tr>
          <th><a href="/examinations/doctor/create/{{$interview->id}}" class="btn btn-primary">add  examinations</a></th>
            <th><a href="/record/examinations/{{$interview->id}}" class="btn btn-primary">chick ruselt</a></th>
              <th>  <a href="/medicine/create/{{$interview->id}}" class="btn btn-primary">add medicine </a>
              <th> <button type="submit" class="btn btn-primary">save
      </button></th>
    
        </tr>
      </tbody>
       </div>
      
    </form>
      <div>
      
@endsection