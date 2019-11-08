 @extends('layout.layout')

@section('title', 'My Portfolio')

@section('content') 


<div class="jumbotron text-center">
	<div class="col-sm-11 col-sm-offset-1 text-white">
		<img src="{{asset('img/user-vector.jpg')}}" alt="user picture" class="rounded-circle" >
		<h1>Adrian Salasa</h1>
		<p>Programmer | Web Developer | Movie Anthusias</p>
	</div>
</div>

<section class="about" id="about">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-2">
				<h2 class="text-center">About</h2>
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-5 col-sm-offset-1 ">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col-sm-5">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
</section>

<section class="portfolio" id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-2">
				<h2 class="text-center mt-3">Portfolio</h2>				
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4">			
				<a href="" class="thumbnail">
					 <img src="{{asset('img/1.png')}}" alt="Gambar kesatu" class="img-fluid mb-3 Gbr" >	
				</a>	
			</div>
			<div class="col-sm-4">			
				<a href="" class="thumbnail">
					 <img src="{{asset('img/2.png')}}" alt="Gambar kedua" class="img-fluid mb-3 Gbr">	
				</a>	
			</div>
			<div class="col-sm-4">			
				<a href="" class="thumbnail">
					 <img src="{{asset('img/3.png')}}" alt="Gambar ketiga" class="img-fluid mb-3 Gbr">	
				</a>	
			</div>									
		</div>

		<div class="row">
			<div class="col-sm-4">			
				<a href="" class="thumbnail">
					 <img src="{{asset('img/4.png')}}" alt="Gambar keempat" class="img-fluid mb-3 Gbr">	
				</a>	
			</div>
			<div class="col-sm-4">			
				<a href="" class="thumbnail">
					 <img src="{{asset('img/5.png')}}" alt="Gambar kelima" class="img-fluid mb-3 Gbr">	
				</a>	
			</div>
			<div class="col-sm-4">			
				<a href="" class="thumbnail">
					 <img src="{{asset('img/6.png')}}" alt="Gambar keenam" class="img-fluid mb-3 Gbr">	
				</a>	
			</div>									
		</div>
	</div>
</section>

<section class="contact" id="contact">	
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 text-center">
				<h2 class="mt-3">Contact</h2>
				<hr>
			</div>
		</div>

		<div class="row cnt">
			<div class="col-sm-8 col-sm-offset-2">
				<form>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" id="nama" class="form-control" placeholder="masukan nama">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control" placeholder="masukan email">
					</div>
					<div class="form-group">
						<label for="telp">No. Telp</label>
						<input type="number" name="telp" id="telp" class="form-control" placeholder="masukan nomor telepon">
					</div>
					<select class="form-control">
						<option>-- Pilih Kategori --</option>
						<option>Web Design</option>
						<option>Web Development</option>
					</select>
					<div class="form-group mt-2">
						<label for="pesan">Pesan</label>
						<textarea class="form-control" id="pesan" rows="10" placeholder="Masukan pesan anda"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Kirim</button>
				</form>
			</div>
		</div>
	</div>
</section>

<footer>
	<div class="container text-center">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 text-center">
				<p>&copy; Copyright 2019 | Built by <a href="https://www.instagram.com/adrian_salasa">Adrian Salasa</a> </p>
			</div>
		</div>
	</div>
</footer>

@endsection
