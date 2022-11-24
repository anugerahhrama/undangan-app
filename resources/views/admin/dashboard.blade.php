@extends('admin.base.base')

@section('content')
    

<div class="content-header">
  <div class="container">
    <div class="row mx-3">
      <div class="col-sm-6">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard </li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content pb-5">
  <div class="container">
    <div class="row mx-3 py-4 mb-3">
      <div class="col-lg-4">
        <img src="{{ url ('img/profile.png') }}" alt="Profile" height="250">
      </div>
      <div class="col-lg-8">
        <div>
          <div class="my-3 text-profile">
            <p>Nama &nbsp;&nbsp;: <strong>Samsudin</strong></p>
            <p>Email &nbsp;&nbsp;&nbsp;: <strong>samsudinsakti@gmail.com</strong></p>
            <p>No. Hp : <strong>090909090909</strong></p>
            <p>Alamat : <strong>Blitar</strong></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mx-3">
      <div class="col-lg-4 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3 class="text-white">150</h3>
            <h4 class="text-white ">Jumlah Undangan</p>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3 class="text-white">53</h3>
            <h4 class="text-white ">Jumlah Undangan</p>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-6">
        <div class="small-box bg-success warna">
          <div class="inner">
            <h3 class="text-white">44</h3>
            <h4 class="text-white ">Jumlah Undangan</p>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection