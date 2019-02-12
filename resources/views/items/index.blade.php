@extends('layouts.master')
@section('title', 'Items Overview')
@section('content')
    <div class="row">

        <div class="col-md-3">
            <p class="lead">Laptops</p>
            <div class="list-group">
                <a href="#" class="list-group-item">Category 1</a>
                <a href="#" class="list-group-item">Category 2</a>
                <a href="#" class="list-group-item">Category 3</a>
            </div>
            
        </div>

        <div class="col-md-9">

            <div class="row">
                @foreach( $items as $item )
                    
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="{{ $item->foto }}" alt="">
                            <div class="caption">
                                <h4>
                                    <p><a href="#">{{ $item->title }}</p></a>
                                </h4><br>
                                <h4 class="pull-right">€ {{ $item->prijs }}</h4>
                                
                                <p>{{ $item->beschrijving }}</p>
                            </div>
                            <div class="ratings">
                               
                                <?php
                                    $score = rand(0, 5);
                                    $reviews = rand(20,250);
                                ?>
                                
                                <p class="pull-right">{{ $reviews }} reviews</p>
                                <p>
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if($i<=$score) 
                                            <span class="glyphicon glyphicon-star"></span>
                                        @else
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                        @endif
                                    @endfor
                                </p>
                            </div>
                        </div>
                    </div>
                    
                @endforeach

            </div>

        </div>

    </div>
@stop