@include('header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form method="POST" action="{{ url('/insert')}}">
				{{ csrf_field()}}

				<fieldset>
					<legend>Buku Baru</legend>
					@if(count($errors) > 0)
					@foreach($errors->all() as $error)
					<div class="alert alert-danger">
						{{ $error }}
					</div>
					@endforeach

					@endif

					<div class="form-group">
						<label for="exampleInputEmail1">Judul Buku</label>
						<input type="text" class="form-control" name="judul" placeholder="Judul Buku">
						
					</div>

					<div class="form-group">
						<label for="exampleInputEmail2">Penerbit</label>
						<input type="text" class="form-control" name="penerbit" placeholder="Penerbit Buku">
						
					</div>

					<div class="form-group">
						<label for="exampleInputEmail3">Tahun Terbit</label>
						<input type="text" class="form-control" name="tahun_terbit" placeholder="Tahun Tarbit Buku">
						
					</div>

					<div class="form-group">
						<label for="exampleInputEmail4">Pangarang</label>
						<input type="text" class="form-control" name="pengarang" placeholder="Pangarang Buku">
						
					</div>

					<button type="submit" class="btn btn-primary" value=""> Submit</button>

					<a href="{{ url('/')}}" class="btn btn-secondary">Back</a>



				</fieldset>
				
			</form>
				
		</div>

	</div>
</div>
@include('footer')