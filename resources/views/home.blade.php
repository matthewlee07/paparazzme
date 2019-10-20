@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-3 p-5">
        <img src="#" alt="" class="rounded-circle w-100" >
      </div>
      <div class="col-9 pt-5">
        <div><h1>{{$user->username}}</h1></div>
        <div class="d-flex">
          <div class="pr-5"><strong>153</strong> posts</div>
          <div class="pr-5"><strong>23k</strong> followers</div>
          <div class="pr-5"><strong>212</strong> following</div>
        </div>
        <div class="pt-4 font-weight-bold">Mechanical Engineer -> Entrepreneur -> Full Stack Developer</div>
        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quis sint magnam officia eveniet odio.</div>
        <div ><a href="#">https://matthewlee07.github.io/portfolio/</a></div>
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        <img src="#"class="w-100 pt-5"/>
      </div>
      <div class="col-4">
        <img src="#"class="w-100 pt-5"/>
      </div>
      <div class="col-4">
        <img src="#"class="w-100 pt-5"/>
      </div>
    </div>
</div>
@endsection
