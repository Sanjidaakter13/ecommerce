@extends('frontend.template.master')
@section('content')
<form action="{{route('doregistration')}}" method="post">
    @csrf
    <div style="margin: 55px;" class="conteiner">
    <div class="mb-3 row">
            <label for="staticname" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input name="name" type="text" class="form-control" id="staticname" value="">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input name="email" type="email" class="form-control" id="staticEmail" value="">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input name="password" type="password" class="form-control" id="inputPassword">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
            <div class="col-sm-10">
                <input name="number" type="number" class="form-control" id="inputNumber" required min="11">
            </div>
        </div>
        <button type="submit" style="background-color:#D19C97; border: none; padding:10px;">Submit</button>
    </div>
</form>
@endsection
