@include('header')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form method="POST" action="{{ url('/edit', array($buku['id'])) }}">
				{{csrf_field()}}
				<fieldset>
					<legend>Buku Buku</legend>
					@if(count($errors) > 0)
					@foreach($errors->all() as $error)
					<div class="alert alert-danger">
						{{ $error }}
					</div>
					@endforeach

					@endif

					<div class="form-group">
						<label for="1">Judul Buku</label>
						<input type="text" name="judul" value ="{{ $buku['judul'] }}" class="form-control" placeholder="">
					</div>

					<div class="form-group">
						<label for="2">Penerbit</label>
						<input type="text" name="penerbit" value ="{{ $buku['penerbit'] }}" class="form-control" placeholder="">
					</div>

					<div class="form-group">
						<label for="1">Tahun terbit</label>
						<input type="text" name="tahun_terbit" value ="{{ $buku['tahun_terbit'] }}" class="form-control" placeholder="">
					</div>

					<div class="form-group">
						<label for="1">Pengarang</label>
						<input type="text" name="pengarang" value ="{{ $buku['pengarang'] }}" class="form-control" placeholder="">
					</div>


					<button type="submit" class="btn btn-primary" value="">Update</button>
					<a href="{{ url('/') }}" class="btn btn-secondary"></a>
				</fieldset>
				
			</form>
		</div>
	</div>
</div>