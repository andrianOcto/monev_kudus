@extends('template.app')

@section('main-content')

<section class="content-header">
    <h1>Monitoring Pemetaan Lahan</h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <div class="form-inline">
                    <label>Wilayah Kecamatan : </label>
                    <select class="form-control">
                        <option>Kaliwungu</option>
                        <option>Kota</option>
                        <option>Jati</option>
                        <option>Undaan</option>
                        <option>Mejobo</option>
                        <option>Jekulo</option>
                        <option>Bae</option>
                        <option>Gebog</option>
                        <option>Dawe</option>
                    </select>
                    &nbsp;
                    <a href="#" class="btn btn-primary btn-flat">Lihat</a>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body" id="scrollx" style="margin-top:20px">
                <!-- <div class="row">
                    <div class="col-lg-6 col-xs-6">
                        <center>
                            <img src="" width="300px">
                            <h4>Peta Administrasi Kecamatan Jati</h4>
                        </center>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <center>
                            <img src="" width="300px">
                            <h4>Peta Pola Ruang Kecamatan Jati</h4>
                        </center>
                    </div>
                </div> 
                &nbsp; -->
                <table class="tCompare">
                    &nbsp;
                    <tr style="text-align:center">
                        <td></td>
                        <td><img class="imgCompare" src="" width="200px"></td>
                       <td><img class="imgCompare" src="" width="200px"></td>
                        <td><img class="imgCompare" src="" width="200px"></td>
                    </tr>
                    <tr style="text-align:center">
                        <td></td>
                        <td><strong>Pola ruang</strong></td>
                        <!-- tahun -->
                        <td><strong>2009</strong></td>
                        <td><strong>2014</strong></td>
                    </tr>
                    <tr style="background-color:#ECF0F5">
                        <td style="text-align:right; width:20%">Keterangan :</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>KCP2B</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr style="background-color:#ECF0F5">
                        <td style="text-align:right; width:20%">Kawasan Lindung :</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Cagar Budaya</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Lindung Spiritual</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Hutan Lindung</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Hutan Rakyat</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr style="background-color:#ECF0F5">
                        <td style="text-align:right; width:20%">Kawasan Budi Daya :</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Industri</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Pertanian Tanaman</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Hutan Produksi</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Hutan Produksi Terbatas</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Pariwisata</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Pertambangan</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Tanaman Pangan</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr style="background-color:#ECF0F5">
                        <td style="text-align:right; width:20%">Kawasan Pemukiman :</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Pemukiman Pedesaan</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Pemukiman Perkotaan</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>TPA</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr style="background-color:#ECF0F5">
                        <td style="text-align:right; width:20%">Kawasan Sumber Air :</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Sekitar Waduk</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Sekitar Mata Air</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Sempadan Sungai</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                </table>
            </div>
          </div>
        </div>

        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Perijinan Lahan Kecamatan ... </h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Jenis Pemanfaatan Ruang</th>
                    <th>Pemilik (Atas Nama)</th>
                    <th>Desa/Kelurahan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>Pembangunan Kantor dan Tempat Usaha Pengumpulan Barang Bekas</td>
                      <td>CV. Putra Jaya</td>
                      <td>Tanjungkarang</td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</section>

@endsection