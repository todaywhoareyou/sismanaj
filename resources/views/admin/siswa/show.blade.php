@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Siswa </li>
        </ul>
    </div>
</div>
<section>
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display">Detail Data Siswa</h1>
        </header>
        <div class="row">
            
            
            <div class="col-lg-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <form class="card">
                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th class="pt-0 pb-0">NIS</th>
                                            <td class="pt-0 pb-0">{{$siswa->nis ?? "Tidak Diketahui"}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Nama</th>
                                            <td class="pt-0 pb-0">{{$siswa->nama ?? "Tidak Diketahui"}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Tempat Lahir</th>
                                            <td class="pt-0 pb-0">{{$siswa->tempat_lahir ?? "Tidak Diketahui"}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Tanggal Lahir</th>
                                            <td class="pt-0 pb-0">{{date("d-m-Y", strtotime($siswa->tanggal_lahir))}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Alamat</th>
                                            <td class="pt-0 pb-0">{{$siswa->alamat ?? "Tidak Diketahui"}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">No HP</th>
                                            <td class="pt-0 pb-0">{{$siswa->nohp ?? "Tidak Diketahui"}}</td>
                                        </tr>
                                            <th class="pt-0 pb-0">Jenis Kelamin </th>
                                            <td class="pt-0 pb-0">{{$siswa->jenis_kelamin}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Tanggal Diterima</th>
                                            <td class="pt-0 pb-0">{{date("d-m-Y", strtotime($siswa->tanggal_masuk))}}</td>
                                        </tr>
                                        </tr>
                                            <th class="pt-0 pb-0">Angkatan Tahun </th>
                                            <td class="pt-0 pb-0">{{$siswa->angkatan_thn}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                            <div class="card-footer">
                                <a href="{{route('guru.index')}}" class="btn btn-primary">Kembali</a>
                            </div>
                            </div>
                            
                          </form>
                    </div>
                    
                </div>
              
            </div>
          </div>
        
    </div>
</section>
@endsection

@section('custom-script')
<script type="text/javascript">
    
</script>
@endsection