@extends('common/layout')

@section('content')
<h1>SELLER LOGIN</h1>

<div class="row">
  <div class="col-lg-6"></div>
  <div class="log col-lg-6">
    <form method='POST' action="/seller_login">
      @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="text" name="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 form-check">

      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <p>Don't have an account <a href="seller_reg">Create an account</a></p>
    @if(isset($msg))
    {{ $msg }}
    @endif

  </div>
</div>
@endsection