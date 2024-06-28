@extends('layout.app')

@section('title', 'Data Subkategori')

@section('content')

<div class="card shadow">
    <div class="card-header">
        <h4 class="card-title">
            Data Subkategori
        </h4>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-end mb-4">
            <a href="#modal-form" class="btn btn-primary modal-tambah">Tambah Data</a>
        </div>
        <div class="table-responsive">
            <table class="table table-borderes table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Nama Subkategori</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-form" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Subkategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <form class="form-kategori">
                    <div class="form-group">
                        <label for="">Nama Subkategori</label>
                        <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Subkategori" required>
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select name="id_kategori" id="id_kategori" class="form-control">
                            @foreach ($categories as $category)
                                <option value="({$category->id})">({$category->nama_kategori})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="deskripsi" placeholder="Deskripsi" class="form-control" id="" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" class="form-control" name="gambar">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btm-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>        
      </div>
    </div>
  </div>
</div>

@endsection

@push('js')
    <script>
        $(function(){
            $.ajax({
                url : '/api/categories',
                success : function ({data}) {
                    let row;
                    data.map(function (val) {
                        row += `
                        <tr>
                            <td>$(index+1)</td>
                            <td>$(val.nama_subkategori)</td>
                            <td>$(val.category.nama_kategory)</td>
                            <td>$(val.deskripsi)</td>
                            <td><img src="/uploads/$(val.gambar)" width="150"></td>
                            <td>
                                <a data-toggle="modal" href="#modal-form" data-id="$(val.id)" class="btn btn-warning modal-ubah">Edit</a>
                                <a href="#" data-id="$(val.id)" class="btn btn-danger btn-hapus">Hapus</a>
                            </td>
                        </tr>
                        `;
                    });

                    $('tbody').append(row)
                }
            })
        
            $(document).on('click', '.btn-hapus', function(){
                const id = $(this).data('id')

                const token = localStorage.getItem('token');

                confirm_dialog =confirm('Apakah anda yakin?');
                if (confirm_dialog) {
                    $.ajax({
                        url : '/api/subcategories/' + id,
                        type : 'DELETE',
                        headers: {
                            "Authorization": token
                        },
                        success :function(data) {
                            if(data.message == "success") {
                                alert('Data Berhasil Dihapus');
                                location.reload()
                            }
                        }
                    })
                }

                $.ajax({

                })
            });
            
            $('.modal-tambah').click(function(){
                $('modal-form').modal('show')
                $('input[name="nama_subkategori"]').val()
                $('input[name="id_kategori"]').val()
                $('textarea[name="deskripsi"]').val()
              
                $('.form-subkategori').submit(function(e){
                    e.preventDefault()
                    const $form = $(this)
                    const token = localStorage.getItem('token');
                    const frmdata = new FormData(this);
                    $.ajax({
                        url : 'api/subcategories',
                        type : 'POST',
                        data : frmdata,
                        cache : false,
                        contentType :false,
                        processData :false,
                        headers: {
                            "Authorization": token
                        },
                        success :function(data) {
                            if(data.success) {
                                alert('Data Berhasil Ditambahkan');
                                location.reload()
                            }
                        }
                    })

                });
            });

            $(document).on('click', 'modal-ubah', function(){
                $('modal-form').modal('show')
                const id = $(this).data('id');

                $.get('/api/subcategories/' + id, function(data){
                    $('input[name="nama_subkategori"]').val(data.nama_subkategori)
                    $('input[name="id_kategori"]').val(data.id_kategori)
                    $('textarea[name="deskripsi"]').val(data.deskripsi)
                });
                $('.form-kategori').submit(function(e){
                    e.preventDefault()
                    const $form = $(this)
                    const token = localStorage.getItem('token');
                    const frmdata = new FormData(this);
                    $.ajax({
                        url : `api/subcategories/$(id)?_method=PUT`,
                        type : 'POST',
                        data : frmdata,
                        cache : false,
                        contentType :false,
                        processData :false,
                        headers: {
                            "Authorization": token
                        },
                        success :function(data) {
                            if(data.success) {
                                alert('Data Berhasil Diubah');
                                location.reload()
                            }
                        }
                    })

                });
            
            });
                
        });



    
    </script>
@endpush