@extends('layouts.app')

@section('content')


<div class="content">

<h1>Laporan Harian </h1>
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
 
 <!-- OrderDetai -->
<div class="form-group col-sm-12">
    <div class="box-body table-responsive no-padding"  >
      <table class="table table-bordered" id="crud_table" border="3">
            <thead>
               
                <th>Nama Customer</th>
                <th>Kode Order</th>
                <th>QTY</th>
                <th>Subtotal</th>
                <th>Status</th>
                <th>Tanggal</th>
                <th>Tipe</th>
            </thead>
         @foreach($lapHar as $key=>$item)
       {{--dd($item)--}}
          <tr class="trbody">
           <td>
           {!! Form::text('nama_customer',$item->nama_customer, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ) !!} 
            </td>
           <td>
           {!! Form::text('code_order',$item->code_order, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ) !!}  
           </td>
           <td>
           {!! Form::text('jumlah_barang',$item->jumlah_barang, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ) !!} 
            </td>
           <td>{!! Form::text('total',$item->total, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ) !!}  </td>
           <td>{!! Form::text('status',$item->status, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ) !!}  </td>
            <td>{!! Form::text('tanggal',$item->tanggal, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ) !!}  </td>
            <td>{!! Form::text('tipe',$item->Pembayaran->tipe_pembayaran, ['class' => 'form-control','readonly'] ) !!}  </td>

            <thead>          
                  <th>code barang</th> 
                  <th>nama barang</th> 
                  <th>qty</th> 
                  <th>harga </th>
                  <th>subtotal </th>
                  <!-- <th>laba</th>  -->
            </thead>
            @foreach($item->OrderItem as $k=>$val)
              {{--dd($val)--}}
              <tr>
                  <td>{{$val->code_barang}}</td>
                  <td>{{$val->nama_barang}}</td>
                  <td>{{$val->qty}}</td>
                  <td>{{$val->harga}}</td>
                  <td>{{$val->subtotal}}</td>
              </tr>
            @endforeach
           
          </tr>
          @endforeach


    </table>
   </div>
 </div>


<!-- Jumlah barang  -->
<div class="form-group col-sm-6 ">
    {!! Form::label('totBar', 'Total Barang :') !!}
    {!! Form::text('totBar',$totBar, ['class' => 'form-control jumlah','id'=>'jumlah','readonly'] ) !!}  
</div>


<!-- TOTAL Harga -->
<div class="form-group col-sm-6 ">
    {!! Form::label('totHar', 'Total :') !!}
    {!! Form::text('totHar',number_format($totHar, 2)  , ['class' => 'form-control total','id'=>'total','readonly'] ) !!}
</div>

<!-- TOTAL Laba -->
<div class="form-group col-sm-6 ">
    {!! Form::label('totLab', 'Laba :') !!}
    {!! Form::text('totLab',number_format($totLab, 2)  , ['class' => 'form-control totalLaba','id'=>'totalLaba','readonly'] ) !!}
</div>

  {!! Form::open(['url' => 'excelPJH']) !!}
<div class="form-group col-sm-6">
    {!! Form::hidden('tgl',$tgl,['class'=>'form-control'])!!}
  <!-- <a  class="btn btn-success">Export Excel</a> -->
  {!! Form::submit('Export', ['class' => 'btn btn-success']) !!}

</div>

{!! Form::close() !!}
                    </div>
            </div>
        </div>
    </div>
@endsection
