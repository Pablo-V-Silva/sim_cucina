<template>
    <div class="vue-container" style="background-color: #00000030">
        <section class="testimonial page-section-ptb blue-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <span class="text-white">they say we did great job!</span>
                            <h3 class="text-center text-white">Our Customers feedback</h3>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12  testimonial-bg py-4 form-container">
                        <div class="testimonial-bg-inner mt-0">
                            <div class="_owl-carousel">
                                <div class="item">
                                    <div class="testimonial text-center py-4">
                                        <ul class="nav nav-tabs round justify-content-center" role="tablist">
                                            <li role="presentation">
                                                <a class="active" href="#all-faqs" aria-controls="all-faqs" role="tab"
                                                    data-toggle="tab"><i class="ti-credit-card"></i></a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#tab-01" aria-controls="tab-01" role="tab" data-toggle="tab"><i
                                                        class="ti-dashboard"></i></a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#tab-02" aria-controls="tab-02" role="tab" data-toggle="tab"><i
                                                        class="ti-package"></i></a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#tab-03" aria-controls="tab-03" role="tab" data-toggle="tab"><i
                                                        class="ti-world"></i></a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#tab-04" aria-controls="tab-04" role="tab" data-toggle="tab"><i
                                                        class="ti-comment-alt"></i></a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#tab-04" aria-controls="tab-04" role="tab" data-toggle="tab"><i
                                                        class="ti-location-arrow"></i></a>
                                            </li>
                                        </ul>
                                        <!-- <div class="option">
                                            <h4 class="text-blue">Scegli il tipo di combustibile</h4>
                                            <div class="combustibile" v-for="combustibile in getCombustibili"
                                                :key="combustibile.tipo">
                                                <label for="tipocomb">{{ combustibile.tipo }} {{
                                                        combustibile.tecnologia != '' ?
                                                        '(' +
                                                        combustibile.tecnologia + ')' : '' }}</label>
                                                <input type="radio" name="tipocomb" id="tipocomb" :value="combustibile.id">

                                            </div>

                                            <select name="tipo" id="tipocomb" class="form-input">
                                                <option v-for="combustibile in getCombustibili" :key="combustibile.tipo"
                                                    :value="combustibile.id">{{ combustibile.tipo }} {{
                                                        combustibile.tecnologia != '' ?
                                                        '(' +
                                                        combustibile.tecnologia + ')' : '' }}</option>
                                            </select>
                                        </div>
                                        <div class="option">
                                            <h4 class="text-blue">Inserisci il numero di persone in casa</h4>
                                            <input type="num" id="persone" class="form-control form-input">
                                        </div>
                                        <div class="option">
                                            <h4 class="text-blue">Scegli il tipo di consumo</h4>
                                            <select name="tipo" id="tipo" class="form-input">
                                                <option value="0" disabled selected>Seleziona</option>
                                                <option value="basso">Bassa</option>
                                                <option value="medio">Media</option>
                                                <option value="alto">Alta</option>
                                            </select>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <div class="container">
            <div class="page-title">
                <h1>Qui ci va il titolo</h1>
            </div>
            <div class="form-container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-blue">Scegli il tipo di combustibile</h4>
                        <select name="tipo" id="tipocomb">
                            <option v-for="combustibile in getCombustibili" :key="combustibile.tipo"
                                :value="combustibile.id">{{ combustibile.tipo }} {{ combustibile.tecnologia != '' ? '(' +
                                    combustibile.tecnologia + ')' : '' }}</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h4>Inserisci il numero di persone in casa</h4>
                        <input type="num" id="persone" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h4>Scegli il tipo di consumo</h4>
                        <select name="tipo" id="tipo">
                            <option value="0" disabled selected>Seleziona</option>
                            <option value="basso">Bassa</option>
                            <option value="medio">Media</option>
                            <option value="alto">Alta</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="button" v-on:click="this.executeCalc()"><span>Calcola</span></button>
                    </div>
                </div>
            </div>
        </div> -->
        <section class="tab-page page-section-ptb" v-if="isCalc == true">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs justify-content-center" role="tablist">
                            <li role="presentation"><a class="active" href="#all" aria-controls="all" role="tab"
                                    data-toggle="tab">Consumo</a></li>
                            <li role="presentation"><a href="#ecommerce" aria-controls="ecommerce" role="tab"
                                    data-toggle="tab">Ecommerce</a></li>
                            <li role="presentation"><a href="#smm" aria-controls="smm" role="tab" data-toggle="tab">SMM</a>
                            </li>
                            <li role="presentation"><a href="#technology" aria-controls="technology" role="tab"
                                    data-toggle="tab">Technology</a></li>
                            <li role="presentation"><a href="#services" aria-controls="services" role="tab"
                                    data-toggle="tab">B2B Services</a></li>
                            <li role="presentation"><a href="#seo" aria-controls="seo" role="tab" data-toggle="tab">SEO</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="all">
                                <div class="row">
                                    <div class="col-md-6 align-self-center">
                                        <img class="img-fluid" src="images/device/10.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="mb-2">Consumi</h5>
                                        <p class="mb-2">qui ci va un testo descrittovp di circa 2 o 3 righe</p>

                                        <ul class="list-mark">
                                            <li><strong>Consumo Giornaliero:</strong> {{ getConsGiornaliero }}</li>
                                            <li><strong>Consumo Settimanale:</strong> {{ getConsGiornaliero * 7 }}</li>
                                            <li><strong>Consumo Mensile:</strong> {{ getConsGiornaliero * 30 }}</li>
                                            <li><strong>Consumo Annuale:</strong> {{ getConsGiornaliero * 365 }}</li>
                                        </ul>
                                        <a class="button mt-3" href="#">SEE ALL FEATURES</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="ecommerce">
                                <div class="row">
                                    <div class="col-md-6 pull-right align-self-center order-md-2 ">
                                        <img class="img-fluid" src="images/device/11.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="mb-2">Content submission</h5>
                                        <p class="mb-2">Typesetting industry lorem Ipsum is simply dummy text of the
                                            printing and. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book</p>
                                        <p class="mb-2">Printing and typesetting lorem Ipsum is simply dummy text of the
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                            the 1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book</p>
                                        <ul class="list-mark">
                                            <li>Ipsum has been the industry's random text.</li>
                                            <li>Industry's random text ipsum has been the.</li>
                                            <li>Been the ipsum has industry's random text.</li>
                                        </ul>
                                        <a class="button mt-3" href="#">SEE ALL FEATURES</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="smm">
                                <div class="row">
                                    <div class="col-md-6 align-self-center">
                                        <img class="img-fluid" src="images/device/12.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="mb-2">Real-time analytics</h5>
                                        <p class="mb-2">Typesetting industry lorem Ipsum is simply dummy text of the
                                            printing and. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book</p>
                                        <p class="mb-2">Printing and typesetting lorem Ipsum is simply dummy text of the
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                            the 1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book</p>
                                        <ul class="list-mark">
                                            <li>Ipsum has been the industry's random text.</li>
                                            <li>Industry's random text ipsum has been the.</li>
                                            <li>Been the ipsum has industry's random text.</li>
                                        </ul>
                                        <a class="button mt-3" href="#">SEE ALL FEATURES</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="technology">
                                <div class="row">
                                    <div class="col-md-6 pull-right align-self-center order-md-2">
                                        <img class="img-fluid" src="images/device/13.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="mb-2">Usa based seo company</h5>
                                        <p class="mb-2">Typesetting industry lorem Ipsum is simply dummy text of the
                                            printing and. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book</p>
                                        <p class="mb-2">Printing and typesetting lorem Ipsum is simply dummy text of the
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                            the 1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book</p>
                                        <ul class="list-mark">
                                            <li>Ipsum has been the industry's random text.</li>
                                            <li>Industry's random text ipsum has been the.</li>
                                            <li>Been the ipsum has industry's random text.</li>
                                        </ul>
                                        <a class="button mt-3" href="#">SEE ALL FEATURES</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="services">
                                <div class="row">
                                    <div class="col-md-6 align-self-center">
                                        <img class="img-fluid" src="images/device/14.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="mb-2">100% white hat ethics</h5>
                                        <p class="mb-2">Typesetting industry lorem Ipsum is simply dummy text of the
                                            printing and. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book</p>
                                        <p class="mb-2">Printing and typesetting lorem Ipsum is simply dummy text of the
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                            the 1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book</p>
                                        <ul class="list-mark">
                                            <li>Ipsum has been the industry's random text.</li>
                                            <li>Industry's random text ipsum has been the.</li>
                                            <li>Been the ipsum has industry's random text.</li>
                                        </ul>
                                        <a class="button mt-3" href="#">SEE ALL FEATURES</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="seo">
                                <div class="row">
                                    <div class="col-md-6 pull-right align-self-center order-md-2">
                                        <img class="img-fluid" src="images/device/15.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="mb-2">Reputation management</h5>
                                        <p class="mb-2">Typesetting industry lorem Ipsum is simply dummy text of the
                                            printing and. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book</p>
                                        <p class="mb-2">Printing and typesetting lorem Ipsum is simply dummy text of the
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                            the 1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book</p>
                                        <ul class="list-mark">
                                            <li>Ipsum has been the industry's random text.</li>
                                            <li>Industry's random text ipsum has been the.</li>
                                            <li>Been the ipsum has industry's random text.</li>
                                        </ul>
                                        <a class="button mt-3" href="#">SEE ALL FEATURES</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <div class="calcolo-container" v-if="isCalc == true">
            <h3>Consumo medio giornaliero</h3>
            <p><strong>{{ getSpesaGiornaliera }}</strong></p>
            <h3>Spesa media Giornaliera</h3>
            <p><strong>{{ getConsGiornaliero }}</strong></p>
        </div> -->
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: "Test",
    data() {
        return {
            combustibili: null,
            calc: false,
            consGiornaliero: null,
            spesaGiornaliera: null,
        }
    },

    mounted() {
        this.getDataForInputs();
    },

    methods: {
        getDataForInputs() {
            axios
                .get(
                    "/api/combustibili"
                )
                .then((r) => {
                    this.combustibili = r.data.combustibili;
                });
        },

        executeCalc() {
            let tipocomb = document.getElementById('tipocomb').value;
            /* console.log(tipo); */
            let persone = document.getElementById('persone').value;
            /* console.log(persone); */
            let tipo = document.getElementById('tipo').value;

            if (tipocomb == null || tipo == null || persone == null) {
                console.error('Missing Parameters');
            } else {
                axios.get(
                    '/api/calcolo/' + tipocomb + '/' + persone + '/' + tipo
                )
                    .then((r) => {
                        /* console.log(r); */
                        this.spesaGiornaliera = r.data.spesa_tot_giornaliera;
                        this.consGiornaliero = r.data.cons_tot_giornaliero;
                        this.calc = true;
                    })
            }
        }
    },

    computed: {
        getCombustibili() {
            console.log(this.combustibili)
            return this.combustibili;
        },

        isCalc() {
            return this.calc;
        },

        getSpesaGiornaliera() {
            return this.spesaGiornaliera;
        },

        getConsGiornaliero() {
            return this.consGiornaliero;
        },
    },

    created() {

    }
}
</script>

<style lang="scss">
.vue-container {

    p,
    li {
        color: #353535;
    }

    .form-container {

        input,
        select {
            border-radius: 30px;
            height: auto;
            line-height: 1.33333;
            padding: 15px 18px 15px 30px;
            background: #fff;
            color: #353535;
            border: 1px solid #00000030;
            box-shadow: 0px 4px 18px rgb(0 0 0 / 10%);
            margin-bottom: 1rem;
        }

        button {
            width: 100%;
        }
    }
}</style>
