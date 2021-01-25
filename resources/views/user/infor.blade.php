@extends('user.master')
@section('home')
	<h3 class="mt-0">Thông tin cá nhân</h3>
	<form method="post" action="{{URL::to('dashboard/user/1')}}">
				@csrf
				@method('PUT')
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label>Tên đăng nhập</label>
							<input type="" class="form-control bora-none" disabled="false" value="{{$user->name}}" name="username">
						</div>
						<div class="form-group">
							<label>Họ và Tên</label>
							<input type="" class="form-control bora-none" value="{{$user->fullname}}" name="fullname">
						</div>
						<div class="form-group">
							<label>Ngày sinh</label>
							<input type="" value="{{$user->birth}}" class="form-control bora-none" name="birth">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>Số điện thoại</label>
							<input type="" value="{{$user->phone}}" class="form-control bora-none" name="phone">
						</div>
						<div class="form-group">
							<label>Địa chỉ</label>
							<input type="" value="{{$user->address}}" class="form-control bora-none" name="phone">
						</div>
					</div>
				</div>
				<button class="btn btn-primary">Lưu thay đổi</button>
				<button style="background: var(--primary)" class="btn btn-info">Xuất ra sách PDF</button>
			</form>
@endsection