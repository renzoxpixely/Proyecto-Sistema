@extends('auth.contenido')






@section('login')

<div class="limiter" >
		<div class="container-login100 ">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/img-01.png" alt="IMG">
				</div>


 


				<form class="form-horizontal was-validated" method="POST" action="{{ route('login')}}">
        {{ csrf_field() }}
					<span class="login100-form-title">
						Sistema Tawa
					</span>

					<div class="wrap-input100 validate-input {{$errors->has('usuario' ? 'is-invalid' : '')}}">
          <input type="text" value="{{old('usuario')}}" name="usuario" id="usuario" class="input100" placeholder="Usuario">
            {!!$errors->first('usuario','<span class="invalid-feedback">:message</span>')!!}
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input {{$errors->has('password' ? 'is-invalid' : '')}}" data-validate = "Password is required">
          <input type="password" name="password" id="password" class="input100" placeholder="Contraseña">
            {!!$errors->first('password','<span class="invalid-feedback">:message</span>')!!}
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Acceder
						</button>
					</div>
          </form>
					<div class="text-center p-t-12">
						<span class="txt1">
							Olvidaste
						</span>
						<a class="txt2" href="#">
							Usuario / Contraseña?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Solicitar una cuenta
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				
			</div>
		</div>
	</div>























<!--
<div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-group mb-0">
          <div class="card p-4">

          <form class="form-horizontal was-validated" method="POST" action="{{ route('login')}}">
          {{ csrf_field() }}
              <div class="card-body">
              <h1>Acceder</h1>
              <p class="text-muted">Control de acceso al sistema</p>
              <div class="form-group mb-3{{$errors->has('usuario' ? 'is-invalid' : '')}}">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" value="{{old('usuario')}}" name="usuario" id="usuario" class="form-control" placeholder="Usuario">
                {!!$errors->first('usuario','<span class="invalid-feedback">:message</span>')!!}
              </div>
              <div class="form-group mb-4{{$errors->has('password' ? 'is-invalid' : '')}}">
                <span class="input-group-addon"><i class="icon-lock"></i></span>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                {!!$errors->first('password','<span class="invalid-feedback">:message</span>')!!}
              </div>
              <div class="row">
                <div class="col-6">
                  <button type="submit" class="btn btn-primary px-4">Acceder</button>
                </div>
              </div>
            </div>
          </form>

          </div>
          <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
            <div class="card-body text-center">
              <div>
                <h2>Sistema de Ventas IncanatoIT</h2>
                <p>Sistema de compras, Ventas desarrollado en PHP utilizando el Framework Laravel y Vue Js, con el gestor de base de datos MariaDB.</p>
                <a href="https://www.udemy.com/user/juan-carlos-arcila-diaz/" target="_blank" class="btn btn-primary active mt-3">Ver el curso!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
-->
@endsection
