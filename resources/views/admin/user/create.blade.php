<div class="container-fluid pt-2">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <title><b>Isi Data</b></title>
                    @isset($user)
                        <form action="/admin/user/{{ $user->id }}" method="POST">
                            @method('put')
                    @else
                    <form action="/admin/user" method="POST">
                    @endisset                    
                        @csrf
                    <div class="form-group">
                        <label for=""><b>Nama Lengkap</b></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama Lengkap" value="{{ isset($user) ? $user->name : '' }}">
                        @error('name')
                            <div class="in">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for=""><b>Email</b></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ isset($user) ? $user->email : '' }}">
                        @error('email')
                            <div class="in">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for=""><b>Password</b></label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Isi password">
                        @error('password')
                            <div class="in">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for=""><b>Konfirmasi Password</b></label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="re_password" placeholder="Isi password">
                        @error('re_password')
                            <div class="in">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <a href="/admin/user" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>Balik</a>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>