@extends('template_frontend.home')
@section('isi')

<!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
<!-- blog part start-->
    <section class="blog_part ">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section_tittle">
                        <h2></h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
            	@foreach($datas as $data)
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <a href="{{route('view.room',$data->id)}}"><img style="height: 330px;width: 250px;margin: auto; " src="{{asset($data->gambar)}}" alt=""></a>
                        <div class="blog_text">
                            <h2><a href="{{route('view.room',$data->id)}}">{{$data->nama}}</a></h2>
                            <p>{{$data->alamat}}</p>
                            <ul>
                                <li>
                                    <i class="ti-calendar"></i>
                                    <p>13th Dec</p>
                                </li>
                                <li>
                                    <i class="ti-heart"></i>
                                    <p>15</p>
                                </li>
                                <li>
                                    <i class="far fa-comment-dots"></i>
                                    <p>10</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
        
    </section>
    <!-- blog part end-->
@endsection