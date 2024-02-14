<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">     

                <h5><b>{{ $title }}</b></h5>           
                <br>
                
                <form action="/admin/kategori" method="post">

                @csrf
                <label for="">Nama Kategori</label>
                <input type="text" name="name" class="form-center @error('name') is-invalid @enderror" placeholder="Nama Kategori">
                    @error('nama')
                        <div class="in">
                            {{ message }}
                        </div>
                    @enderror
                <a href="/admin/kategori" class="btn btn-info mt-2"><i class="fas fa-arrow-left"></i>Balik</a>
                <button type="submit" class="btn btn-primary mt-2"><i class="fas fa save "></i>Simpan</button>
            </form>
            </div>
        </div>
    </div>
</div>