<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">     

                <h5><b>{{ $title }}</b></h5>           

                <a href="/admin/kategori/create" class="btn btn-primary mb-2"><i class="fas faplus"></i>Isi data</a>
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Snack</td>
                        <td><div class="d-flex">
                            <a href="/admin/user//edit" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                            {{--  <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>--}}
                            <form action="/admin/user/" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm ml-1"><i class="fas fa-trash"></i></button>
                        </form>
                        </div></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>