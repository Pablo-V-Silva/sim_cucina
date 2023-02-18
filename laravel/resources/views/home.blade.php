@extends('layouts.mainLayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection


@section('header_js')
@endsection

@section('content')
    <main>
        <div class="containerCalcolo py-5 text-center">
            <div class="container ">
                <form action="{{ route('calcola_cucina', $_REQUEST) }}" method="get">

                    <div class="row my-3 justify-content-center">
                        <h2 class="text-light py-2">Scegli il tipo di combustibile</h2>
                        <select class="w-75 grow" name="tipoCombustibile">
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
                        <input class="w-75 myInput text-center grow" type="number" name="numeroPersone"
                            value="{{ old('numeroPersone') }}">
                    </div>
                    <div class="row my-3 justify-content-center">
                        <h2 class="text-light py-2">Inserisci la quantità di consumo</h2>
                        <select class="w-75 grow" name="quantita">
                            <option value="0" disabled selected>Seleziona</option>
                            <option value="basso">Bassa</option>
                            <option value="medio">Media</option>
                            <option value="alto">Alta</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <input class="calcolaBtn grow" type="submit" value="CALCOLA">
                    </div>

                </form>
                @if ($is_calc == true)
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
                @endif
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
                        <img src="revolution/assets/dummy.png" style='background-color:#2046f2' alt=""
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
                    <!-- SLIDE  -->
                    <li data-index="rs-56" data-transition="random-static,random-premium,random"
                        data-slotamount="default,default,default,default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-randomtransition="on"
                        data-easein="default,default,default,default" data-easeout="default,default,default,default"
                        data-masterspeed="300,default,default,default" data-thumb="" data-rotate="0,0,0,0"
                        data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="revolution/assets/dummy.png" style='background-color:#2046f1' alt=""
                            data-lazyload="revolution/assets/transparent.png" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" class="rev-slidebg"
                            data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption   tp-resizeme" id="slide-56-layer-26"
                            data-x="['left','left','left','left']" data-hoffset="['-495','-495','-495','-495']"
                            data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                            data-frames='[{"delay":310,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5;"><img src="revolution/assets/dummy.png" alt=""
                                data-ww="['2300px','2300px','2300px','2300px']"
                                data-hh="['1626px','1626px','1626px','1626px']"
                                data-lazyload="revolution/assets/1dec9-d1.png" data-no-retina> </div>
                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption   tp-resizeme" id="slide-56-layer-4"
                            data-x="['right','right','right','right']" data-hoffset="['50','50','50','50']"
                            data-y="['top','top','top','top']" data-voffset="['189','189','189','189']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":530,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeOut"}]'
                            data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 6; white-space: nowrap; font-size: 74px; line-height: 74px; font-weight: 900; color: rgba(255, 255, 255, 1.00);font-family: 'Poppins', sans-serif;">
                            We are an expert
                            <br>SEO marketer
                        </div>
                        <!-- LAYER NR. 15 -->
                        <div class="tp-caption   tp-resizeme packages-text" id="slide-56-layer-6"
                            data-x="['right','right','right','right']" data-hoffset="['50','50','50','50']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','-10','-10']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":1980,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 18px; font-weight: 900; color: rgba(255, 255, 255, 1.00);font-family: 'Poppins', sans-serif;">
                            Packages from just $299 per month. </div>
                        <!-- LAYER NR. 16 -->
                        <div class="tp-caption rev-btn button black tp-resizeme rev-right-slide-btn" id="slide-56-layer-7"
                            data-x="['right','right','right','right']" data-hoffset="['220','220','220','220']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','50']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                            data-responsive_offset="on"
                            data-frames='[{"delay":3200,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                            data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                            data-paddingleft="[35,35,35,35]" style="z-index: 9; cursor:pointer;">SEO Prices </div>
                        <!-- LAYER NR. 17 -->
                        <div class="tp-caption rev-btn  tp-resizeme button white" id="slide-56-layer-8"
                            data-x="['right','right','right','right']" data-hoffset="['50','50','50','50']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','50']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                            data-responsive_offset="on"
                            data-frames='[{"delay":2540,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                            data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                            data-paddingleft="[35,35,35,35]" style="z-index: 10; cursor:pointer;">Free E-Book </div>
                        <!-- LAYER NR. 18 -->
                        <div class="tp-caption   tp-resizeme" id="slide-56-layer-12"
                            data-x="['left','left','left','left']" data-hoffset="['-200','-200','-200','-200']"
                            data-y="['top','top','top','top']" data-voffset="['150','150','150','150']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                            data-frames='[{"delay":3920,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 11;"><img src="revolution/assets/dummy.png" alt=""
                                data-ww="['261px','261px','261px','261px']" data-hh="['127px','127px','127px','127px']"
                                data-lazyload="revolution/assets/861ee-c1.png" data-no-retina> </div>
                        <!-- LAYER NR. 19 -->
                        <div class="tp-caption   tp-resizeme" id="slide-56-layer-14"
                            data-x="['right','right','right','right']" data-hoffset="['-90','-90','-90','-90']"
                            data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                            data-frames='[{"delay":3920,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 12;"><img src="revolution/assets/dummy.png" alt=""
                                data-ww="['182px','182px','182px','182px']" data-hh="['83px','83px','83px','83px']"
                                data-lazyload="revolution/assets/8b7de-c2.png" data-no-retina> </div>
                        <!-- LAYER NR. 20 -->
                        <div class="tp-caption   tp-resizeme" id="slide-56-layer-16"
                            data-x="['right','right','right','right']" data-hoffset="['-200','-200','-200','-200']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['130','130','130','130']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                            data-responsive_offset="on"
                            data-frames='[{"delay":3920,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 13;"><img src="revolution/assets/dummy.png" alt=""
                                data-ww="['247px','247px','247px','247px']" data-hh="['126px','126px','126px','126px']"
                                data-lazyload="revolution/assets/427e6-c3.png" data-no-retina> </div>
                        <!-- LAYER NR. 21 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-56-layer-18"
                            data-x="['center','center','center','center']" data-hoffset="['-290','-290','-290','-290']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                            data-responsive_offset="on"
                            data-frames='[{"delay":6500,"speed":1000,"frame":"0","from":"x:0px;rX:0deg;","mask":"x:stage_left;y:stage_bottom;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 14;"><img src="revolution/assets/dummy.png" alt=""
                                data-ww="['297px','297px','297px','297px']" data-hh="['695px','695px','695px','695px']"
                                data-lazyload="revolution/assets/cd3dc-r2.png" data-no-retina> </div>
                        <!-- LAYER NR. 22 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-56-layer-24"
                            data-x="['left','left','left','left']" data-hoffset="['20','20','20','20']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-30','-30','-30','-30']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                            data-responsive_offset="on"
                            data-frames='[{"delay":4620,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 15;"><img src="revolution/assets/dummy.png" alt=""
                                data-ww="['1044px','1044px','1044px','1044px']"
                                data-hh="['216px','216px','216px','216px']" data-lazyload="revolution/assets/a9c45-f2.png"
                                data-no-retina> </div>
                        <!-- LAYER NR. 23 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-56-layer-23"
                            data-x="['left','left','left','left']" data-hoffset="['24','24','24','24']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-45','-45','-45','-45']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                            data-responsive_offset="on"
                            data-frames='[{"delay":5120,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 16;"><img src="revolution/assets/dummy.png" alt=""
                                data-ww="['1034px','1034px','1034px','1034px']"
                                data-hh="['214px','214px','214px','214px']" data-lazyload="revolution/assets/a9c45-f1.png"
                                data-no-retina> </div>
                        <!-- LAYER NR. 24 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-56-layer-22"
                            data-x="['left','left','left','left']" data-hoffset="['32','32','32','32']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-53','-53','-53','-53']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                            data-responsive_offset="on"
                            data-frames='[{"delay":5610,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 17;"><img src="revolution/assets/dummy.png" alt=""
                                data-ww="['1016px','1016px','1016px','1016px']"
                                data-hh="['210px','210px','210px','210px']" data-lazyload="revolution/assets/a4659-f3.png"
                                data-no-retina> </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-57" data-transition="random-static,random-premium,random"
                        data-slotamount="default,default,default,default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-randomtransition="on"
                        data-easein="default,default,default,default" data-easeout="default,default,default,default"
                        data-masterspeed="default,default,default,default" data-thumb="" data-rotate="0,0,0,0"
                        data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="revolution/assets/dummy.png" style='background-color:#0f34d8' alt=""
                            data-lazyload="revolution/assets/transparent.png" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" class="rev-slidebg"
                            data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 25 -->
                        <div class="tp-caption   tp-resizeme" id="slide-57-layer-4"
                            data-x="['right','right','right','right']" data-hoffset="['50','50','50','50']"
                            data-y="['top','top','top','top']" data-voffset="['190','190','190','190']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeIn"},{"delay":"wait","speed":310,"frame":"999","to":"opacity:0;","ease":"Power3.easeOut"}]'
                            data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; white-space: nowrap; font-size: 74px; line-height: 74px; font-weight: 900; color: rgba(255, 255, 255, 1.00);font-family: 'Poppins', sans-serif;">
                            Guaranteed increase of
                            <br>your website Traffic
                        </div>
                        <!-- LAYER NR. 27 -->
                        <div class="tp-caption   tp-resizeme packages-text" id="slide-57-layer-6"
                            data-x="['right','right','right','right']" data-hoffset="['50','50','50','50']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":1940,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":310,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 7; white-space: nowrap; font-size: 16px; line-height: 18px; font-weight: 900; color: rgba(255, 255, 255, 1.00);font-family: 'Poppins', sans-serif;">
                            Packages from just $299 per month. </div>
                        <!-- LAYER NR. 28 -->
                        <div class="tp-caption rev-btn button black tp-resizeme rev-right-slide-btn" id="slide-57-layer-7"
                            data-x="['right','right','right','right']" data-hoffset="['220','220','220','220']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['60','60','60','60']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                            data-responsive_offset="on"
                            data-frames='[{"delay":3230,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":310,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                            data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                            data-paddingleft="[35,35,35,35]" style="z-index: 8; cursor:pointer;">SEO Prices </div>
                        <!-- LAYER NR. 29 -->
                        <div class="tp-caption rev-btn  tp-resizeme button white" id="slide-57-layer-8"
                            data-x="['right','right','right','right']" data-hoffset="['50','50','50','50']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['60','60','60','60']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                            data-responsive_offset="on"
                            data-frames='[{"delay":2580,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":310,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                            data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                            data-paddingleft="[35,35,35,35]" style="z-index: 9; cursor:pointer;">Free E-Book </div>
                        <!-- LAYER NR. 30 -->
                        <div class="tp-caption   tp-resizeme" id="slide-57-layer-29"
                            data-x="['left','left','left','left']" data-hoffset="['-201','-201','-201','-201']"
                            data-y="['top','top','top','top']" data-voffset="['112','112','112','112']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                            data-frames='[{"delay":4000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":310,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 10;"><img src="revolution/assets/dummy.png" alt=""
                                data-ww="['594px','594px','594px','594px']" data-hh="['541px','541px','541px','541px']"
                                data-lazyload="revolution/assets/0497b-x3.png" data-no-retina> </div>
                        <!-- LAYER NR. 31 -->
                        <div class="tp-caption   tp-resizeme" id="slide-57-layer-27"
                            data-x="['center','center','center','center']" data-hoffset="['-399','-399','-399','-399']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['738','738','738','738']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                            data-responsive_offset="on"
                            data-frames='[{"delay":3280,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":310,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 11;"><img src="revolution/assets/dummy.png" alt=""
                                data-ww="['3328px','3328px','3328px','3328px']"
                                data-hh="['996px','996px','996px','996px']" data-lazyload="revolution/assets/4c203-x1.png"
                                data-no-retina> </div>
                        <!-- LAYER NR. 32 -->
                        <div class="tp-caption   tp-resizeme" id="slide-57-layer-30"
                            data-x="['left','left','left','left']" data-hoffset="['-158','-158','-158','-158']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['265','265','265','265']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                            data-responsive_offset="on"
                            data-frames='[{"delay":4690,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;rZ:358;","ease":"Power3.easeInOut"},{"delay":"wait","speed":310,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 12;"><img src="revolution/assets/dummy.png" alt=""
                                data-ww="['571px','571px','571px','571px']" data-hh="['41px','41px','41px','41px']"
                                data-lazyload="revolution/assets/6e017-x2.png" data-no-retina> </div>
                    </li>
                </ul>
                <div class="tp-bannertimer" style="height: 5px; background-color: rgba(0, 0, 0, 0.15);"></div>
            </div>
        </div>

        <!-- END REVOLUTION SLIDER -->

        <!--=================================
                                                                                                                banner -->




    </main>
@endsection

@section('footer_js')
@endsection
