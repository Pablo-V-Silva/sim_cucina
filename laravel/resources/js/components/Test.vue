<template>
    <div class="vue-container" style="background-color: #00000030">
        <section class="testimonial page-section-ptb blue-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <span class="text-white">they say we did great job!!!</span>
                            <h3 class="text-center text-white">Our Customers feedback</h3>
                        </div>
                    </div>
                    <div class="col-md-12  testimonial-bg py-4 form-container">
                        <div class="testimonial-bg-inner mt-0">
                            <div class="_owl-carousel">
                                <div class="item">
                                    <div class="testimonial text-center py-4">
                                        <div class="input-container">
                                            <h4 class="mb-4">Scegli il tipo di combustibile</h4>
                                            <ul class="nav nav-tabs justify-content-center mb-4" role="tablist">
                                                <li role="presentation" v-for="combustibile in getCombustibili"
                                                    :key="combustibile.tipo"><a
                                                        v-on:click="setCombustibile(combustibile.id)" aria-controls="all"
                                                        role="tab" data-toggle="tab">{{ combustibile.tipo }} {{
                                                            combustibile.tecnologia != '' ?
                                                            '(' +
                                                            combustibile.tecnologia + ')' : '' }}</a></li>
                                            </ul>
                                        </div>
                                        <div class="input-container">
                                            <h4 class="mb-4">Digita il numero di persone in casa</h4>
                                            <input type="num" id="persone" v-on:keyup="setPersone()"
                                                class="form-control form-input">
                                        </div>
                                        <div class="input-container">
                                            <h4 class="mb-4">Scegli il tipo di consumo</h4>
                                            <ul class="nav nav-tabs justify-content-center mb-4" role="tablist">
                                                <li role="presentation"><a v-on:click="setConsumo('basso')"
                                                        aria-controls="all" role="tab" data-toggle="tab">Basso</a></li>
                                                <li role="presentation"><a v-on:click="setConsumo('medio')"
                                                        aria-controls="all" role="tab" data-toggle="tab">Medio</a></li>
                                                <li role="presentation"><a v-on:click="setConsumo('alto')"
                                                        aria-controls="all" role="tab" data-toggle="tab">Alto</a></li>
                                            </ul>
                                        </div>
                                        <button class="button" v-on:click="this.executeCalc()"><span>Calcola</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="result"></div>
        <section class="tab-page page-section-ptb" v-if="isCalc == true">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs justify-content-center" role="tablist">
                            <li role="presentation"><a class="active" href="#consumo" aria-controls="consumo" role="tab"
                                    data-toggle="tab">Consumo</a></li>
                            <li role="presentation"><a href="#spesa" aria-controls="spesa" role="tab"
                                    data-toggle="tab">Spesa</a></li>
                            <li role="presentation"><a href="#seo" aria-controls="seo" role="tab"
                                    data-toggle="tab">Confronta</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="consumo">
                                <div class="row">
                                    <div class="col-md-6 align-self-center">
                                        <img class="img-fluid" src="images/device/10.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="mb-2">Consumi</h5>
                                        <p class="mb-2">qui ci va un testo descrittovp di circa 2 o 3 righe</p>

                                        <ul class="list-mark">
                                            <li><strong>Consumo Giornaliero:</strong> {{ getConsGiornaliero }} KW</li>
                                            <li><strong>Consumo Settimanale:</strong> {{ (getConsGiornaliero * 7).toFixed(2)
                                            }} KW</li>
                                            <li><strong>Consumo Mensile:</strong> {{ (getConsGiornaliero * 30).toFixed(2) }}
                                                KW</li>
                                            <li><strong>Consumo Annuale:</strong> {{ (getConsGiornaliero * 365).toFixed(2)
                                            }} KW</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="spesa">
                                <div class="row">
                                    <div class="col-md-6 pull-right align-self-center order-md-2 ">
                                        <img class="img-fluid" src="images/device/11.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="mb-2">Spesa</h5>
                                        <p class="mb-2">qui ci va un testo descrittovp di circa 2 o 3 righe</p>

                                        <ul class="list-mark">
                                            <li><strong>Spesa Giornaliera:</strong> {{ getSpesaGiornaliera }} Euro</li>
                                            <li><strong>Spesa Settimanale:</strong> {{ (getSpesaGiornaliera * 7).toFixed(2)
                                            }} Euro</li>
                                            <li><strong>Spesa Mensile:</strong> {{ (getSpesaGiornaliera * 30).toFixed(2) }}
                                                Euro</li>
                                            <li><strong>Spesa Annuale:</strong> {{ (getSpesaGiornaliera * 365).toFixed(2) }}
                                                Euro</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="seo">
                                <div class="row">
                                    <div class="col-md-6 align-self-center">
                                        <img class="img-fluid" src="images/device/10.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="mb-2">Confronta</h5>
                                        <p class="mb-2">qui ci va un testo descrittovp di circa 2 o 3 righe</p>
                                        <a class="button mt-3"  :href="'/conf-start/' + getSelectedCombustibile + '/' + getSelectedPersone + '/' + getSelectedTipoCons">Vai alla pagina del confronto</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
            combustibile: null,
            persone: null,
            tipoCons: null
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

            if (this.combustibile == null || this.tipoCons == null || this.persone == null) {
                console.error('Missing Parameters');
            } else {
                axios.get(
                    '/api/calcolo/' + this.combustibile + '/' + this.persone + '/' + this.tipoCons
                )
                    .then((r) => {
                        /* console.log(r); */
                        this.spesaGiornaliera = r.data.spesa_tot_giornaliera;
                        this.consGiornaliero = r.data.cons_tot_giornaliero;
                        this.calc = true;
                        let resultContainer = document.getElementById('result').offsetTop;
                        window.scrollTo({ top: resultContainer, behavior: 'smooth' });
                    })
            }
        },

        setCombustibile(id) {
            this.combustibile = id;
        },

        setConsumo(value) {
            this.tipoCons = value;
        },

        setPersone() {
            let value = document.getElementById('persone').value;
            this.persone = value;
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

        getSelectedCombustibile(){
            return this.combustibile;
        },

        getSelectedPersone(){
            return this.persone;
        },

        getSelectedTipoCons(){
            return this.tipoCons;    
        }
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

        .nav-tabs {

            li {

                a {
                    border: 1px solid #00000030;
                    cursor: pointer;
                }
            }
        }

        input.form-control {
            width: unset;
            margin: 0 auto;
            margin-bottom: 1.5rem;
        }
    }
}
</style>
