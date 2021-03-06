@extends('layouts.master')
@section('title','LpProdSeries|Accueil')

@section('css')
<link rel="stylesheet" href="css/cardslider.css"/>
@endsection

@section('body')
<div class="container">

    <section class="container pt-3">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="display">Séries</h1>
            </div>
            <div class="col-lg-12">
                @if(isset($mot))
                    @if(count($series) == 0)
                    <div class="alert alert-danger" role="alert">
                        Aucun résultat pour <span class="font-italic">{{$mot}}</span>.
                    </div>
                    @endif
                @endif
                <div class="row mt-5 justify-content-center">
                    @foreach($series as $serie)
                        <div class="card mt-3 mb-3 ml-3 mr-3" style="width: 18rem;">
                            <img src="{{$serie->image}}" class="card-img-top" alt="le poster de la série" width="100%" height="350">
                            <div class="card-body">
                                <h4 class="card-text"><a href="{{route('serie.show', $serie->id)}}">{{$serie->titre}}</a></h4>
                                <small class="text-muted">{{$serie->annee}}</small>
                                <div class="row">
                                    <h5><i class="fas fa-thumbs-up"></i></h5>&nbsp;&nbsp;
                                    <h5><i class="fas fa-thumbs-down"></i></h5>&nbsp;&nbsp;
                                    <h5><i class="fas fa-eye"></i></h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">{{$series->appends(['motCle' => $mot])->links()}}</div>
            </div>
        </div>
    </section>
    
    <hr/>
    <br/>

    @auth
<section class="container pt-3">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="display">Des séries pour toi</h1>
            </div>
            <div class="col-lg-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @php $mod = 1; @endphp
                    @for($i = 0; $i < count($series_rcmd); $i++)
                        @if($i == 0)
                        <div class="carousel-item active">
                            <div class="row">
                                @while(($mod % 5) != 0)
                                    @if($i == count($series_rcmd) - 1)
                                        <div class="col col-lg-3">
                                            <!--<img src="{{$series_rcmd[$i]->image}}" class="d-block w-100" alt="...">-->
                                            <div class="card" style="width: 18rem;">
                                                <img src="{{$series_rcmd[$i]->image}}" class="card-img-top" alt="le poster de la série" width="100%" height="350">
                                                <div class="card-body">
                                                    <h4 class="card-text"><a href="{{route('serie.show', $series_rcmd[$i]->id)}}">{{$series_rcmd[$i]->titre}}</a></h4>
                                                    <small class="text-muted">{{$series_rcmd[$i]->annee}}</small>
                                                    <div class="row">
                                                        <h5><i class="fas fa-thumbs-up"></i></h5>&nbsp;&nbsp;
                                                        <h5><i class="fas fa-thumbs-down"></i></h5>&nbsp;&nbsp;
                                                        <h5><i class="fas fa-eye"></i></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @break
                                    @else
                                        <div class="col col-lg-3">
                                            <!--<img src="{{$series_rcmd[$i]->image}}" class="d-block w-100" alt="...">-->
                                            <div class="card" style="width: 18rem;">
                                                <img src="{{$series_rcmd[$i]->image}}" class="card-img-top" alt="le poster de la série" width="100%" height="350">
                                                <div class="card-body">
                                                    <h4 class="card-text"><a href="{{route('serie.show', $series_rcmd[$i]->id)}}">{{$series_rcmd[$i]->titre}}</a></h4>
                                                    <small class="text-muted">{{$series_rcmd[$i]->annee}}</small>
                                                    <div class="row">
                                                        <h5><i class="fas fa-thumbs-up"></i></h5>&nbsp;&nbsp;
                                                        <h5><i class="fas fa-thumbs-down"></i></h5>&nbsp;&nbsp;
                                                        <h5><i class="fas fa-eye"></i></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @php $mod++; $i++; @endphp
                                    @endif
                                @endwhile
                            </div>
                        </div>
                        @else
                            @php $mod++; $i-- @endphp
                            <div class="carousel-item">
                                <div class="row">
                                    @while(($mod % 5) != 0)
                                        @if($i == count($series_rcmd) - 1)
                                            <div class="col col-lg-3">
                                                <!--<img src="{{$series_rcmd[$i]->image}}" class="d-block w-100" alt="...">-->
                                                <div class="card" style="width: 18rem;">
                                                    <img src="{{$series_rcmd[$i]->image}}" class="card-img-top" alt="le poster de la série" width="100%" height="350">
                                                    <div class="card-body">
                                                        <h4 class="card-text"><a href="{{route('serie.show', $series_rcmd[$i]->id)}}">{{$series_rcmd[$i]->titre}}</a></h4>
                                                        <small class="text-muted">{{$series_rcmd[$i]->annee}}</small>
                                                        <div class="row">
                                                            <h5><i class="fas fa-thumbs-up"></i></h5>&nbsp;&nbsp;
                                                            <h5><i class="fas fa-thumbs-down"></i></h5>&nbsp;&nbsp;
                                                            <h5><i class="fas fa-eye"></i></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @break
                                        @else
                                            <div class="col col-lg-3">
                                                <!--<img src="{{$series_rcmd[$i]->image}}" class="d-block w-100" alt="...">-->
                                                <div class="card" style="width: 18rem;">
                                                    <img src="{{$series_rcmd[$i]->image}}" class="card-img-top" alt="le poster de la série" width="100%" height="350">
                                                    <div class="card-body">
                                                        <h4 class="card-text"><a href="{{route('serie.show', $series_rcmd[$i]->id)}}">{{$series_rcmd[$i]->titre}}</a></h4>
                                                        <small class="text-muted">{{$series_rcmd[$i]->annee}}</small>
                                                        <div class="row">
                                                            <h5><i class="fas fa-thumbs-up"></i></h5>&nbsp;&nbsp;
                                                            <h5><i class="fas fa-thumbs-down"></i></h5>&nbsp;&nbsp;
                                                            <h5><i class="fas fa-eye"></i></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @php $mod++; $i++; @endphp
                                        @endif
                                    @endwhile
                                </div>
                            </div>
                        @endif
                    @endfor
                </div>
                </div>
            </div>
        </div>
        <div class="row">
                    <a class="btn btn-outline-info" href="#carouselExampleControls" role="button" data-slide="prev">
                        <i class="fa fa-lg fa-chevron-left"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="btn btn-outline-info" href="#carouselExampleControls" role="button" data-slide="next">
                        <i class="fa fa-lg fa-chevron-right"></i>
                        <span class="sr-only">Next</span>
                    </a>
        </div>
</section>
@endauth

</div>

@endsection

@section('js')
@endsection