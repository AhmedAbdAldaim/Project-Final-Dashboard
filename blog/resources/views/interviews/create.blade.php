@extends('includes.newnav')
@section('content')
<div class="card mb-3" style="width: 18rem; ">
    <div class="card-header bg-dark text-white">
   add a new catogary
   
    </div>
    <div class="card-body">
    <form action="/interviews" method="POST">
    @csrf
      <div class="form-group">
     <label for="Catogary">add</label >
     <input type="text" name="notes"   class="form-control" >
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary">
    add
      </button>
      </div>
    </form>
    </div>
    </div>
@endsection