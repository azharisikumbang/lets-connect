@extends('layouts.komunitas.layouts')

@section('content')

<div class="container">
   
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                   <h3 >Edit Profile</h3>
                    <form>
                       <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nama:</label>
                                <input type="text" class="form-control" id="name" placeholder="Masukkan nama">
                            </div>
                           
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Tangal berdiri</label>
                                <input type="date" class="form-control" id="email" placeholder="Masukkan email">
                            </div>
                        </div>
                       </div>
                       <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact">Kontak:</label>
                                <input type="text" class="form-control" id="contact" placeholder="Masukkan nama">
                            </div>
                           
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="website">Tangal berdiri</label>
                                <input type="link" class="form-control" id="website" placeholder="Masukkan website">
                            </div>
                        </div>
                       </div>
                       <div class="form-group">
                        <label for="website">Alamat</label>
                        
                        <textarea class="form-control" id="alamat" placeholder="Alamat.." style="background-color: rgb(247, 247, 247)">New York</textarea>
                    </div>
                    <div class="form-group">
                        <label for="website">Deskripsi</label>
                        
                        <textarea class="form-control" id="alamat" placeholder="Alamat.." style="background-color: rgb(247, 247, 247)">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque amet veritatis numquam, doloribus, odio rem debitis sed a tempore corrupti voluptate placeat fugiat repellat ab ipsa cum dolorum velit tenetur!</textarea>
                    </div>
                       
                    <button type="submit" class="btn-simpan2 ok">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection