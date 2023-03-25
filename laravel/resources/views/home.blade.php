@extends('layouts.mainLayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection


@section('header_js')
@endsection

@section('content')
    <main>
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
                                data-hh="['298px','298px','298px','298px']" data-lazyload="img/pexels6.jpg" data-no-retina
                                style="object-fit: contain"> </div>
                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption   tp-resizeme" id="slide-55-layer-11"
                            data-x="['right','right','right','right']" data-hoffset="['-660','-660','-660','-660']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-100','-100']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                            data-responsive_offset="on"
                            data-frames='[{"delay":4090,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 11;"></div>
                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption   tp-resizeme" id="slide-55-layer-12"
                            data-x="['left','left','left','left']" data-hoffset="['-659','-659','-659','-659']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['-101','-101','-101','-101']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                            data-responsive_offset="on"
                            data-frames='[{"delay":4090,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 12;"> </div>
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


        {{-- Catalogo Simulatori --}}
        <section id="1" class="education page-section-ptb"
            style="background:url(images/bg-element/01.png) no-repeat 150px 70px;">
            <div class="container">
                <h2 class="pb-5 text-center">Cambia i tuoi Consumi, Senza cambiare le tue abitudini</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box-01 round text-center">
                            <div class="feature-box-img mb-2">
                                <a href="{{ route('vueTest') }}">
                                    <img class="img-fluid" src="img/isometric-gas-stove.png" alt="">
                                </a>
                            </div>
                            <div class="feature-box-info mt-2">
                                <h5 class="text-blue mb-2">Simulatore Cucina</h5>
                                <p>Questo simulatore ti guiderà attraverso un'analisi dettagliata dell'impatto
                                    energetico e del
                                    consumo dei tuoi fornelli, soddisfacendo la tua curiosità, il tuo desiderio di
                                    risparmiare
                                    denaro
                                    e di fare la differenza per il nostro pianeta.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box-01 round text-center">
                            <div class="feature-box-img mb-2">
                                <img class="img-fluid" src="images/icon/05.png" alt="">
                            </div>
                            <div class="feature-box-info mt-2">
                                <h5 class="text-blue mb-2">Simulatore Macchina</h5>
                                <p>Minima aut! Perspiciatis eos quos totam cum Et voluptatem cupiditate cum veniam dicta
                                    assumenda fuga modi aperiam error.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box-01 round text-center">
                            <div class="feature-box-img mb-2">
                                <img class="img-fluid" src="images/icon/06.png" alt="">
                            </div>
                            <div class="feature-box-info mt-2">
                                <h5 class="text-blue mb-2">
                                    Simulatore Idrico
                                </h5>
                                <p>Et voluptatem cupiditate minima aut! Perspiciatis eos quos totam cum cum veniam dicta
                                    fuga modi error assumenda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

@section('footer_js')
@endsection
