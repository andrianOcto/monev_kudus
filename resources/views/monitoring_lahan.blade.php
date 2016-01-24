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
                    <label>Wilayah : </label>
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
                        <td><img class="imgCompare" src="" width="200px"></td>
                    </tr>
                    <tr style="text-align:center">
                        <td></td>
                        <td style="line-height:1.5"><strong>Pola Ruang <br/> Kabupaten Kudus <br/></strong></td>
                        <td style="line-height:1.5"><strong>Pola Ruang <br/> Wilayah Jati</strong></td>
                        <!-- tahun -->
                        <td style="line-height:1.5"><strong>Pola Ruang <br/> Wilayah Jati <br/> 2009 </strong></td>
                        <td style="line-height:1.5"><strong>Pola Ruang <br/> Wilayah Jati <br/> 2014 </strong></td>
                    </tr>
                    <tr style="background-color:#ECF0F5">
                        <td style="text-align:right; width:20%">Kawasan Lindung :</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Hutan Lindung</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%; line-height:1.5"><strong>Kaw. Yang Memberikan Perlindungan Terhadap Kawasan Bawahannya</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Sempadan Sungai</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20% line-height:1.5"><strong>Kaw. Sekitar Danau atau Waduk</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Sekitar Mata Air</strong></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%; line-height:1.5"><strong>Kaw. Lindung Spiritual dan Kearifan Lokal</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Ruang Terbuka Hijau</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Cagar Budaya</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Rawan Bencana Alam</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Lindung Geologi</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr style="background-color:#ECF0F5">
                        <td style="text-align:right; width:20%">Kawasan Budidaya:</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Hutan Produksi</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Hutan Rakyat</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Pertanian</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Perikanan</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Pertambangan</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Industri</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Pariwisata</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Pemukiman</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Perkebunan</strong></td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                        <td style="text-align:center">0,7 ha</td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Pertahanan</strong></td>
                        <td style="text-align:center">0,7 ha</td>
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