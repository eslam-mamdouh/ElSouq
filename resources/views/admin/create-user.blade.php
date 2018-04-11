

@extends('admin.master.header')
@section('content')

<div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="../../index.html" method="post">
      <div class="form-group has-feedback">
      <label>First Name</label>
        <input class="form-control" placeholder="First name" type="text">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <label>Last Name</label>
        <input class="form-control" placeholder="Last name" type="text">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <label>Email</label>
        <input class="form-control" placeholder="Email" type="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <label>Password</label>
        <input class="form-control" placeholder="Password" type="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group">
        <label>Role</label>
        <select class="form-control">
            <option>Client</option>
            <option>Admin</option>
        </select>
    </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4 col-xs-offset-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
  @endsection