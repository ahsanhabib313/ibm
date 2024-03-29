@extends('authentication.layouts.master')
@section('title', 'Unlock User | Endless Admin Panel')
@section('styles')

@endsection

@section('content')
<div class="container-fluid">
  <!-- Unlock page start-->
  <div class="authentication-main">
    <div class="row">
      <div class="col-md-12 p-0">
        <div class="auth-innerright">
          <div class="authentication-box">
            <div class="text-center"><img src="{{asset('assets/images/endless-logo.png')}}" alt=""></div>
            <div class="card mt-4 p-4 mb-0">
              <form class="theme-form">
                <div class="form-group">
                  <label class="col-form-label">Enter your Password</label>
                  <input class="form-control" type="password" placeholder="*******">
                </div>
                <div class="form-group form-row mb-2">
                  <div class="col-md-3">
                    <button class="btn btn-primary" type="submit">Unlock</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Unlock page end-->
</div>
@endsection
@section('scripts')
@endsection     