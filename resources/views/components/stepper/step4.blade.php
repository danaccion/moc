<<<<<<< HEAD
<style>
    .bs-calltoaction{
        position: relative;
        width:auto;
        padding: 15px 25px;
        border: 1px solid black;
        margin-top: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
    }

        .bs-calltoaction > .row{
            display:table;
            width: calc(100% + 30px);
        }
        
            .bs-calltoaction > .row > [class^="col-"],
            .bs-calltoaction > .row > [class*=" col-"]{
                float:none;
                display:table-cell;
                vertical-align:middle;
            }

                .cta-contents{
                    padding-top: 10px;
                    padding-bottom: 10px;
                }

                    .cta-title{
                        margin: 0 auto 15px;
                        padding: 0;
                    }

                    .cta-desc{
                        padding: 0;
                    }

                    .cta-desc p:last-child{
                        margin-bottom: 0;
                    }

                .cta-button{
                    padding-top: 10px;
                    padding-bottom: 10px;
                }

    @media (max-width: 991px){
        .bs-calltoaction > .row{
            display:block;
            width: auto;
        }

            .bs-calltoaction > .row > [class^="col-"],
            .bs-calltoaction > .row > [class*=" col-"]{
                float:none;
                display:block;
                vertical-align:middle;
                position: relative;
            }

            .cta-contents{
                text-align: center;
            }
    }



    .bs-calltoaction.bs-calltoaction-default{
        color: #333;
        background-color: #fff;
        border-color: #ccc;
    }

    .bs-calltoaction.bs-calltoaction-primary{
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4;
    }

    .bs-calltoaction.bs-calltoaction-info{
        color: #fff;
        background-color: #5bc0de;
        border-color: #46b8da;
    }

    .bs-calltoaction.bs-calltoaction-success{
        color: #fff;
        background-color: #5cb85c;
        border-color: #4cae4c;
    }

    .bs-calltoaction.bs-calltoaction-warning{
        color: #fff;
        background-color: #f0ad4e;
        border-color: #eea236;
    }

    .bs-calltoaction.bs-calltoaction-danger{
        color: #fff;
        background-color: #d9534f;
        border-color: #d43f3a;
    }

    .bs-calltoaction.bs-calltoaction-primary .cta-button .btn,
    .bs-calltoaction.bs-calltoaction-info .cta-button .btn,
    .bs-calltoaction.bs-calltoaction-success .cta-button .btn,
    .bs-calltoaction.bs-calltoaction-warning .cta-button .btn,
    .bs-calltoaction.bs-calltoaction-danger .cta-button .btn{
        border-color:#fff;
    }
</style>

<div class="container py-3">
    <div class="row text-center">
        <h1 class="my-0 fw-normal">Vælg netværk</h1>
    </div>

    <div class="bs-calltoaction bs-calltoaction-default" hidden>
        <div class="row">
            <div class="col-md-9 cta-contents">
                <h4 class="cta-title">Prøv et medlemsskab af Meet Over Coffee i 30 dage</h4>
            </div>
            <div class="col-md-3 cta-button">
                <a href="#" class="btn btn-lg btn-block btn-success">Free Trial</a>
            </div>
            </div>
    </div>

=======
<div class="container py-3">
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @forelse($networks as $network)
            <div class="col">
                <div class="card">
<<<<<<< HEAD
                    <a href="{{ route('network.profile', $network->slug) }}" style="height: 140px; background: url( {{ $network->logo ? asset( 'images/networks/' . $network->id . '/logo/' . $network->logo ) : 'https://dummyimage.com/538x140/dee2e6/6c757d.jpg' }} ) center; background-size: cover"
                            class="card-img-top">
                    </a>
                    <div class="card-body" style="height: 150px">
                    <h5 class="card-title">{{ $network->name }}</h5>
                    @if ( $network->description )
                        <p class="card-text">{{ Str::words($network->description, 10) }}</p>
                    @else
                        <br />
                    @endif
                    <input type="checkbox" class="btn-check" id="btn-check-outlined{{ $network->id }}" onclick="joinNetwork( this, {{ $network }}, {{ auth()->user()->id }} )" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btn-check-outlined{{ $network->id }}">Join Network for only Kr. {{ $network->price }} Per month</label>
=======
                    <span
                        style="height: 140px; background: url( {{ asset('images/networks/' . $network->id . '/logo/' . $network->logo ) }} ) center; background-size: cover"
                        class="card-img-top"
                    ></span>
                    <div class="card-body">
                    <h5 class="card-title">{{ $network->name }}</h5>
                    <p class="card-text">{{ $network->description }}</p>
                    <button type="button" class="btn btn-primary" onclick="joinNetwork( this, {{ $network->id }}, {{ auth()->user()->id }} )">Join Network</button>
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                    </div>
                </div>
            </div>
        @empty
            <p>No networks available.</p>
        @endforelse
    </div>
<<<<<<< HEAD
=======

    <div class="row">
        <div class="text-end tilmelding-send mb-5 mt-4">
            <a href="javascript:;" class="prev btn btn-outline-warning fs-5 px-4 py-3">
                <i class="fa fa-angle-left fw-5" aria-hidden="true"></i> Previous
            </a>

            <a href="{{ route('dashboard') }}" class="next btn btn-success fs-5 px-4 py-3">
                Go to my Dashboard
            </a>
        </div> 
    </div>
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
</div>