@extends('layouts.header')

<div class="container">

<form action="{{route('signin')}}" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">login</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" min="6">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">вход</button>
</form>
</div>
