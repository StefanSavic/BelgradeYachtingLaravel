<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {!! SEOMeta::generate() !!}

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Styles -->
        <style>
            *:focus{
                outline:none!important;
            }
            body{
                /* overflow-x: hidden; */
                
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                /* overflow-x: hidden; */
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
                flex-direction: column;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div id="app" class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
         
            <section id="hero" class="hero">
                    <by-navigation
                      about="{{__('about')}}"
                      gallery="{{__('gallery')}}"
                      contact="{{__('contact')}}"
                      locale="{{app()->getLocale()}}"
                      en="en"
                      sr="sr"
                    ></by-navigation>
                
                <div class="hero__content container">
                    {{-- <h1 class="hero-title">Belgradeyachting Story</h1> --}}
                    <h1 class="hero-title">{{__('Unique yachting experience on our BelgradeYachting cruise')}}</h1>
                    <p>{{'"'}}{{__('Rent our boat and feel the true Belgrade River Trip')}}{{'"'}}</p>
                </div>
                
            </section>
                    <div class="scrolled">
                
                        
                        
                        
                        <by-about 
                        title="{{__('Rent our boat and join a journey!')}}"
                        subtitle="{{__('Book our comfortable boat and experience a Belgrade from a different perspective. Cruise Belgrade in an equipped lux boat, with 2 cabins, kitchen and toilet. Celebrate your birthday, teambuilding, bachelors party, or just a peaceful day on the river with a family.')}}"
                        subtitle2="{{__('We offer a full personalised cruise experience, whether you want to visit some of the numerous restaurants on the river, sungaze on a sundeck with a glass of wine, or take a swim at some of the pristine clear places on Sava or Danube river, we will get you there. Our skipper knows every part of the river, all the local fisherman, floating bars, restaurants, and could recommend a local places with a best fish stew and culinar specialities you could try. Choose your own playlist or ask a skipper to play a few local tunes on a guitar, which will surely make this trip an unforgettable one.')}}"
                        capacity="{{__('Up to 8 persons aboard')}}"
                        price="{{__('1h from 50 eur')}}"
                        ></by-about>
                        
                        <gallery 
                        gallery="{{__('gallery')}}"
                        
                        ></gallery> 
                        <instafeed></instafeed>
                        <contact 
                        contact="{{__('contact')}}"
                        telephone="{{__('telephone')}}"
                        
                        ></contact >
    
                </div> 

            </div>
        </div> 
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
