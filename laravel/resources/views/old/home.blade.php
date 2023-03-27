@extends('layouts.mainLayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection


@section('header_js')
@endsection

@section('content')
    <main>
        <div class="containerJumbo">
            <div class="containerCalcolo py-5 text-center">
                <div class="container ">
                    <div class="row align-items-center justify-content-center layerJumbo">
                        <div class="col text-light">
                            <h1 class="text-light">Benvenuti nell'era dell'efficienza energetica!</h1>
                            <p class="text-light">Questo simulatore ti guiderà attraverso un'analisi dettagliata dell'impatto
                                energetico e del
                                consumo del tuo edificio, soddisfacendo la tua curiosità, il tuo desiderio di risparmiare
                                denaro
                                e di fare la differenza per il nostro pianeta.</p>
                        </div>
                        <div class="col">
                            <form action="{{ route('calcola_cucina', $_REQUEST) }}" method="get">

                                <div class="row  flex-column my-3 justify-content-center align-items-center">
                                    <h2 class="text-light py-2">Scegli il tipo di combustibile</h2>
                                    <select class="w-40 text-center" name="tipoCombustibile">
                                        <option value="0" disabled selected>Seleziona</option>
                                        @foreach ($combustibili as $combustibile)
                                            <option value="{{ $combustibile->id }}">{{ $combustibile->tipo }}
                                                {{ $combustibile->tecnologia == null ? '' : '(' . $combustibile->tecnologia . ')' }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row my-3 flex-column align-items-center">
                                    <h2 class="text-light py-2">Inserisci il numero di persone in casa</h2>
                                    <input class="w-25 myInput text-center grow" type="number" name="numeroPersone"
                                        value="{{ old('numeroPersone') }}">
                                </div>
                                <div class="row my-3 flex-column  justify-content-center align-items-center">
                                    <h2 class="text-light py-2">Inserisci la quantità di consumo</h2>
                                    <select class="w-40 grow" name="quantita">
                                        <option value="0" disabled selected>Seleziona</option>
                                        <option value="basso">Bassa</option>
                                        <option value="medio">Media</option>
                                        <option value="alto">Alta</option>
                                    </select>
                                </div>
                                <div class="text-center mb-3">
                                    <input class="calcolaBtn grow" type="submit" value="CALCOLA">
                                </div>

                            </form>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col">
                                @if ($is_calc == true)
                                    <div class="pb-4">
                                        <h2 class="my-2 text-light py-2">In totale
                                            {{ $persone > 1 ? 'consumate' : 'consumi' }}:</h2>
                                        <h3 class="my-2 text-light py-2">{{ $cons_tot_giornaliero }} kw al giorno (€
                                            {{ $spesa_tot_giornaliera }})
                                        </h3>
                                        <h3 class="my-2 text-light py-2">{{ $cons_tot_giornaliero * 7 }} kw a settimana (€
                                            {{ $spesa_tot_giornaliera * 7 }})
                                        </h3>
                                        <h3 class="my-2 text-light py-2">{{ $cons_tot_giornaliero * 30 }} kw al mese* (€
                                            {{ $spesa_tot_giornaliera * 30 }})
                                        </h3>
                                        <h3 class="my-2 text-light py-2">{{ $cons_tot_giornaliero * 365 }} kw all'anno (€
                                            {{ $spesa_tot_giornaliera * 365 }})
                                        </h3>
                                        <a class="confrontaBtn"
                                            href="{{ route('confronta_cucina', ['spesa' => $spesa_tot_giornaliera, 'persone' => $persone, 'consumo' => $cons_tot_giornaliero, 'object' => $consumo]) }}">CONFRONTA</a>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                    {{-- @if ($is_calc == true)
                        <div class="layerJumbo pb-4 w-50">
                            <h2 class="my-2 text-light py-2">In totale {{ $persone > 1 ? 'consumate' : 'consumi' }}:</h2>
                            <h3 class="my-2 text-light py-2">{{ $cons_tot_giornaliero }} kw al giorno (€
                                {{ $spesa_tot_giornaliera }})
                            </h3>
                            <h3 class="my-2 text-light py-2">{{ $cons_tot_giornaliero * 7 }} kw a settimana (€
                                {{ $spesa_tot_giornaliera * 7 }})
                            </h3>
                            <h3 class="my-2 text-light py-2">{{ $cons_tot_giornaliero * 30 }} kw al mese* (€
                                {{ $spesa_tot_giornaliera * 30 }})
                            </h3>
                            <h3 class="my-2 text-light py-2">{{ $cons_tot_giornaliero * 365 }} kw all'anno (€
                                {{ $spesa_tot_giornaliera * 365 }})
                            </h3>
                            <a class="confrontaBtn"
                                href="{{ route('confronta_cucina', ['spesa' => $spesa_tot_giornaliera, 'persone' => $persone, 'consumo' => $cons_tot_giornaliero, 'object' => $consumo]) }}">CONFRONTA</a>
                        </div>
                    @endif --}}
                </div>
            </div>
        </div>



        <!--=================================
                                                                                                                                                                                                                                                            banner -->

        <div id="rev_slider_17_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="seo-5"
            data-source="gallery"
            style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.3.0.2.1 auto mode -->
            <div id="rev_slider_17_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-55" data-transition="random-static,random-premium,random"
                        data-slotamount="default,default,default,default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-randomtransition="on"
                        data-easein="default,default,default,default" data-easeout="default,default,default,default"
                        data-masterspeed="default,default,default,default" data-thumb="" data-rotate="0,0,0,0"
                        data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="revolution/assets/dummy.png" style='background-color:rgb(9 31 36)' alt=""
                            data-lazyload="revolution/assets/transparent.png" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                            data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption   tp-resizeme" id="slide-55-layer-4"
                            data-x="['center','center','center','center']" data-hoffset="['1','1','1','1']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['-190','-190','-190','-190']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":500,"split":"chars","splitdelay":0.05,"speed":1000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; white-space: nowrap; font-size: 74px; line-height: 82px; font-weight: 900; color: rgba(255, 255, 255, 1.00);font-family: 'Poppins', sans-serif;">
                            Benvenuti nell'era <br>
                            dell'efficienza energetica!

                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption   tp-resizeme packages-text" id="slide-55-layer-6"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-50']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":1930,"speed":1000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 7; white-space: nowrap; font-size: 16px; line-height: 18px; font-weight: 900; color: rgba(255, 255, 255, 1.00);font-family: 'Poppins', sans-serif;">
                            Prova il nostro servizio e scopri come possiamo aiutarti. </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption rev-btn button black tp-resizeme rev-left-button" id="slide-55-layer-7"
                            data-x="['center','center','center','center']" data-hoffset="['-110','-110','-3000','-3000']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['40','20','1000','1000']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                            data-responsive="on" data-responsive_offset="on"
                            data-frames='[{"delay":2650,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                            data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                            data-paddingleft="[35,35,35,35]" style="z-index: 8; cursor:pointer;">Get started now </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption rev-btn  tp-resizeme button white rev-right-button" id="slide-55-layer-8"
                            data-x="['center','center','center','center']" data-hoffset="['110','110','110','110']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['40','20','20','20']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                            data-responsive_offset="on"
                            data-frames='[{"delay":2650,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                            data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                            data-paddingleft="[35,35,35,35]" style="z-index: 9;cursor:pointer;">Discover more </div>
                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption   tp-resizeme" id="slide-55-layer-10"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-65','-65','-65','-65']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                            data-responsive_offset="on"
                            data-frames='[{"delay":3370,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 10;"><img src="revolution/assets/dummy.png" alt=""
                                data-ww="['1018px','1018px','1018px','1018px']"
                                data-hh="['298px','298px','298px','298px']" data-lazyload="revolution/assets/91dfe-12.png"
                                data-no-retina> </div>
                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption   tp-resizeme" id="slide-55-layer-11"
                            data-x="['right','right','right','right']" data-hoffset="['-660','-660','-660','-660']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-100','-100']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                            data-responsive_offset="on"
                            data-frames='[{"delay":4090,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 11;"><img src="revolution/assets/dummy.png" alt=""
                                data-ww="['682px','682px','682px','682px']" data-hh="['428px','428px','428px','428px']"
                                data-lazyload="revolution/assets/8cffe-z2.png" data-no-retina> </div>
                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption   tp-resizeme" id="slide-55-layer-12"
                            data-x="['left','left','left','left']" data-hoffset="['-659','-659','-659','-659']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['-101','-101','-101','-101']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                            data-responsive_offset="on"
                            data-frames='[{"delay":4090,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 12;"><img src="revolution/assets/dummy.png" alt="" data-ww=""
                                data-hh="" data-lazyload="revolution/assets/8cffe-z1.png" data-no-retina> </div>
                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption   tp-resizeme" id="slide-55-layer-13"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['-220','-220','-220','-220']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                            data-responsive_offset="on"
                            data-frames='[{"delay":4810,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 13;"><img src="revolution/assets/dummy.png" alt=""
                                data-ww="['313px','313px','313px','313px']" data-hh="['327px','327px','327px','327px']"
                                data-lazyload="revolution/assets/8f327-z3.png" data-no-retina> </div>
                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption   tp-resizeme" id="slide-55-layer-15"
                            data-x="['left','left','left','left']" data-hoffset="['-510','-510','-510','-510']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-390','-390','-390','-390']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                            data-responsive_offset="on"
                            data-frames='[{"delay":4820,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 14;"><img src="revolution/assets/dummy.png" alt=""
                                data-ww="['531auto','531auto','531auto','531auto']"
                                data-hh="['658px','658px','658px','658px']" data-lazyload="revolution/assets/e5a7f-z4.png"
                                data-no-retina> </div>
                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption   tp-resizeme" id="slide-55-layer-17"
                            data-x="['right','right','right','right']" data-hoffset="['-320','-320','-320','-320']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-180','-180','-180','-180']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                            data-responsive_offset="on"
                            data-frames='[{"delay":4810,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 15;"><img src="revolution/assets/dummy.png" alt=""
                                data-ww="['336px','336px','336px','336px']" data-hh="['451px','451px','451px','451px']"
                                data-lazyload="revolution/assets/d9342-z5.png" data-no-retina> </div>
                    </li>
                </ul>
                <div class="tp-bannertimer" style="height: 5px; background-color: rgba(0, 0, 0, 0.15);"></div>
            </div>
        </div>




    </main>
@endsection

@section('footer_js')
@endsection
