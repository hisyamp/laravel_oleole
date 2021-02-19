@extends('template_frontend.home')
@section('isi')
<!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Best way to tour</h5>
                            <h1 style="font-size: 65px">Tentukan destinasi liburan anda</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->
<!-- banner part start--> 
    <section class="search_your_country">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="search_form">
                            <div class="form-row">
                                <div class="col-lg-9">
                                <form action="{{route('dropdown.store')}}" method="post">
                                    @csrf
                                    <div class="search_form_iner ">
                                            <select class="form-group custom_select " name="city_id" id="inlineFormCustomSelect">
                                            <option selected>Kota</option>
                                            @foreach($cities as $city)
                                            <option value="{{$city->id}}">{{$city->nama}}</option>
                                            @endforeach
                                        </select>
                                        <select class="form-group custom_select " name="category_id" id="inlineFormCustomSelect1">
                                            <option selected>Kategori Wisata</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-lg-3 ">
                                    <button type="submit" class="search_btn">search</button>
                                </div>
                             </form>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
        <img src="{{asset('public/tourby/img/animate_icon/Shape-1.png')}}" alt="" class="feature_icon_1">
        <img src="{{asset('public/tourby/img/animate_icon/Shape-2.png')}}" alt="" class="feature_icon_2">
    </section>
    <!-- banner part start-->
        <!-- pricing part start-->
    <section class="tour_package section_padding">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="tour_package_cotent owl-carousel">
                        @foreach($datas as $data)
                        <div class="single_tour_package">
                            <img src="{{asset($data->gambar)}}" style="height: 380px;width: 300px; margin: auto; " alt="">
                            <div class="tour_pack_content">
                                <h4><a href="{{route('view.room',$data->id)}}">{{$data->nama}}</a></h4>
                                <p> {{$data->alamat}}</p>
                                <div class="tour_content_rating">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                    <a href="{{route('view.room',$data->id)}}" class="btn1">more Info</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        
                    </div>
                </div>
                <div class="col-lg-5 col-xl-3 offset-lg-1 col-sm-6">
                    <div class="tour_pack_content">
                        <img src="{{asset('public/tourby/img/section_tittle_img.png')}}" alt="">
                        <h2>Tourby</h2>
                        <p>Anda Memiliki Referensi Tempat Wisata?</p>
                        <a href="{{route('view.contact')}}" class="btn_1">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing part end-->

@endsection