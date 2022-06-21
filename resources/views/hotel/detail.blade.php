@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')

<!-- <div class="container mt-5 mb-5"> -->
<div class="row">
    <div class="col-md-12">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                <h3>Detail Data Hotel</h3>
                <!-- <form action="{{ route('hotel.update', $hotel->id) }}" method="post" enctype="multipart/form-data"> -->

                {{ csrf_field() }}
                {!! method_field('put') !!}

                <?php //dd($hotel); 
                ?>

                <div class="form-group">
                    <label class="font-weight-bold">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Hotel" value="{{$hotel->name}}" readonly />
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Alamat</label>
                    <input type="text" class="form-control" name="address" placeholder="Masukkan Alamat Hotel" value="{{$hotel->address}}" readonly />
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Daerah</label>
                    <input type="text" class="form-control" name="regency" placeholder="Masukkan Daerah Hotel" value="{{$hotel->regency}}" readonly />
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">No. Telepon</label>
                    <input type="text" class="form-control" name="phone" placeholder="Masukkan No. Telepon Hotel" value="{{$hotel->phone}}" readonly />
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Website</label>
                    <input type="text" class="form-control" name="website" placeholder="Masukkan Website Hotel" value="{{$hotel->website}}" readonly />
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">GAMBAR</label><br>
                    @if($hotel->image)
                    <img src="{{ URL::to('/') }}/hotelspic/{{$hotel->image}}" alt="{{ URL::to('/') }}/hotelspic/{{$hotel->image}}" height="200" />
                    @endif
                    <!-- <input type="file" class="form-control" name="image"> -->
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Lokasi latitude</label>
                    <input type="text" class="form-control" name="latitude" placeholder="Masukkan Lokasi latitude Hotel" value="{{$hotel->latitude}}" readonly />
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Lokasi longitude</label>
                    <input type="text" class="form-control" name="longitude" placeholder="Masukkan Lokasi longitude Hotel" value="{{$hotel->longitude}}" readonly />
                </div>


                <a href="{{ route('hotel.index') }}"><button type="button" class="btn btn-md btn-warning">KEMBALI</button></a>
                <!-- <button type="reset" class="btn btn-md btn-warning">RESET</button> -->

                <!-- </form> -->
            </div>
        </div>
    </div>
</div>
<!-- </div> -->

@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
<form action="" id="delete-form" method="post">
    @method('delete')
    @csrf
</form>
<script>
    // $('#example2').DataTable({
    //     "responsive": true,
    // });

    function notificationBeforeDelete(event, el) {
        event.preventDefault();
        if (confirm('Apakah anda yakin akan menghapus data ? ')) {
            $("#delete-form").attr('action', $(el).attr('href'));
            $("#delete-form").submit();
        }
    }
</script>
@endpush