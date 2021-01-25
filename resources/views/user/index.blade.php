@extends('user.user')
@section('content')
<div class="row">
		<div class="col-6">
			<form method="post" action="{{URL::to('dashboard/user/1')}}">
				@csrf
				@method('PUT')
				<div class="form-group">
					<label>username</label>
					<input type="" class="form-control" disabled="false" value="{{$user->name}}" name="username">
				</div>
				<div class="form-group">
					<label>Họ và Tên</label>
					<input type="" class="form-control" value="{{$user->fullname}}" name="fullname">
				</div>
				<div class="form-group">
					<label>Ngày sinh</label>
					<input type="" value="{{$user->birth}}" class="form-control" name="birth">
				</div>
				<div class="form-group">
					<label>Số điện thoại</label>
					<input type="" value="{{$user->phone}}" class="form-control" name="phone">
				</div>
				<button class="btn btn-primary">Lưu</button>
			</form>
			<a class="btn btn-warning" href="{{URL::to('dashboard/user/export-test')}}">Xuất file PDF</a>
			<a class="btn btn-info" href="{{URL::to('dashboard/video')}}">Xem video của bạn</a>
		</div>
	</div>
@endsection