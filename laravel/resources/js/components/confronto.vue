<template>
    <div class="vue-container">
        <div class="confronta-container">
            <div class="choose-confronto">
                <!--=================================
intro-title -->
                <!-- <section class="intro-title black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <div class="intro-content">
                                <div class="intro-name">
                                    <h3 class="text-white">Pricing Tables</h3>
                                    <ul class="breadcrumb mt-1">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item text-white">Pages</li>
                                        <li class="breadcrumb-item active">Pricing Tables</li>
                                    </ul>
                                </div>
                                <div class="intro-img">
                                    <img class="img-fluid" src="/images/breadcrumb/02.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
                <!--=================================
intro-title -->

                <section class="tabs" id="main-cont-vue">
                    <div class="container">
                        <div class="row mt-10">
                            <div class="col-md-4 bottom-m3">
                                <div class="pricing pricing-01 active text-center">
                                    <div class="pricing-title">
                                        <div class="section-title text-center">
                                            <h5 class="text-center">IL TUO CALCOLO</h5>
                                            <span>Sessione ID:</span>
                                        </div>
                                        <div class="pricing-img">
                                            <img src="/images/icon/05.png" alt="">
                                        </div>
                                        <div class="pricing-prize">
                                            <h2 class="text-black"><span>€ </span>{{ getSpesaMensile }} <span>/AL
                                                    MESE</span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="pricing-list">
                                        <ul class="text-left px-4 w-100% text-black">
                                            <li class="w-100 d-flex justify-content-between"><span>Combustibile:</span>
                                                <span><strong>{{ getCombustibileName }}</strong></span>
                                            </li>
                                            <li class="w-100 d-flex justify-content-between"><span>Persone:</span>
                                                <span><strong>{{ getPersone }}</strong></span>
                                            </li>
                                            <li class="w-100 d-flex justify-content-between"><span>TipoConsumo:</span>
                                                <span><strong>{{ getTipoConsumo }}</strong></span>
                                            </li>
                                            <li class="w-100 d-flex justify-content-between"><span>Consumo Mensile:</span>
                                                <span><strong>{{ getConsumoMensile }} KWh</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-order mt-3">
                                        <a class="button black active" href="#" v-on:click="goToCalcolo()">Cambia Dati</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 d-flex flex-column justify-content-center align-items-center">
                                <h4 class="mb-4 text-center">Seleziona il Combustibile con cui confrontare</h4>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs round justify-content-center align-items-center" role="tablist">
                                    <li role="presentation" v-for="combustibile in getCombustibili" :key="combustibile.id"
                                        class="my-1">
                                        <a href="#" v-on:click="confronta(combustibile.id)" aria-controls="all-faqs"
                                            role="tab" data-toggle="tab" class="d-flex align-items-center">
                                            <img :src="'/img/icons-png/' + combustibile.immagine" alt="">
                                        </a>
                                    </li>
                                </ul>
                                <h4 v-if="getConfrontoName != ''">{{ getConfrontoName }}</h4>
                                <div id="submit-button-container">
                                    <div class="col-sm-12 my-4 disabled" id="submit-button">
                                        <a class="button my-3 w-100 text-center" href="#"
                                            v-on:click="startConfronto()">Calcola</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</template>
    
<script>
import axios from 'axios';
export default {
    name: 'confronto',

    data() {
        return {
            combustibile: null,
            persone: null,
            tipoConsumo: null,
            spesaGiornaliera: null,
            consumoGiornaliero: null,
            combustibili: null,
            spesaMensile: 0,
            consumoMensile: 0,
            combustibileName: '',
            confrontoId: null,
            isConfronto: false,
            confrontoName: '',
            userId: null,
            sessionToken: null,
        }
    },

    mounted() {
        this.getUserId();
        this.scrollIntoPage();
        this.executeCalc();
        this.getCombustibileList();
    },

    methods: {

        executeCalc() {
            axios.get(
                '/api/calcolo/' + this.combustibile + '/' + this.persone + '/' + this.tipoConsumo
            )
                .then((r) => {
                    /* console.log(r); */
                    this.spesaGiornaliera = r.data.spesa_tot_giornaliera;
                    let spesaMensile = Number(this.spesaGiornaliera) * 30;
                    spesaMensile = spesaMensile.toFixed(2);
                    console.log(spesaMensile)
                    this.spesaMensile = spesaMensile;
                    console.log(this.spesaMensile);
                    this.consumoGiornaliero = r.data.cons_tot_giornaliero;
                    let consumoMensile = Number(this.consumoGiornaliero) * 30;
                    consumoMensile = consumoMensile.toFixed(2);
                    this.consumoMensile = consumoMensile;
                })

        },

        getUserId() {
            let userId = document.querySelector("meta[name='user']").getAttribute('content');
            this.userId = userId;
            let token = document.querySelector("meta[name='session']").getAttribute('content');
            this.sessionToken = token;
        },

        getCombustibileList() {
            axios.get(
                '/api/combustibili'
            ).then((r) => {
                this.combustibili = r.data.combustibili;
                this.checkCombustibileName(this.combustibile)
            })
        },

        checkCombustibileName(id) {
            this.combustibileName = '';
            this.combustibili.forEach(element => {
                if (element.id == id) {
                    this.combustibileName = element.tipo
                    if (element.tecnologia != '') {
                        let tecnologia = element.tecnologia;
                        this.combustibileName + ' - ' + tecnologia;
                    }
                    return;
                }
            });
        },

        checkConfrontoName(id) {
            this.confrontoName = '';
            this.combustibili.forEach(element => {
                if (element.id == id) {
                    this.confrontoName = element.tipo
                    if (element.tecnologia != '') {
                        let tecnologia = element.tecnologia;
                        this.confrontoName = this.confrontoName + ' - ' + tecnologia;
                    }
                    return;
                }
            });
        },

        confronta(combustibile) {
            let button = document.getElementById('submit-button');
            this.confrontoId = combustibile;
            if (button.classList.contains('disabled')) {
                button.classList.remove('disabled');
            }
            this.checkConfrontoName(combustibile);
        },

        goToCalcolo() {
            this.$router.push({ name: 'Calcolo' });
        },

        startConfronto() {
            console.log('user: ' + this.userId);
            console.log('remember: ' + this.sessionToken);
            axios
                .post('/api/sessioni/store', {
                    userId: this.userId,
                    sessionToken: this.sessionToken,
                    combustibile: this.combustibile,
                    persone: this.persone,
                    tipoCons: this.tipoConsumo,
                    id_confrontato: this.confrontoId,
                })
                .then((r) => {
                    console.log(r)
                })
            this.$router.push({
                name: 'CalcolaConfronto',
                query: {
                    combustibile: this.combustibile,
                    persone: this.persone,
                    tipoConsumo: this.tipoConsumo,
                    confrontoId: this.confrontoId,
                }
            })
        },

        scrollIntoPage() {
            let mainContainer = document.getElementById('main-cont-vue');
            let mainContPos = mainContainer.offsetTop;
            mainContPos = mainContPos - 75;
            window.scrollTo({ top: mainContPos, behavior: 'smooth' });
        }
    },

    computed: {
        getSpesaGiornaliera() {
            return this.spesaGiornaliera;
        },

        getSpesaMensile() {
            return this.spesaMensile;
        },

        getConsumoGiornaliero() {
            return this.consumoGiornaliero;
        },

        getConsumoMensile() {
            return this.consumoMensile;
        },

        getCombustibile() {
            return this.combustibileName;
        },

        getPersone() {
            return this.persone;
        },

        getTipoConsumo() {
            return this.tipoConsumo;
        },

        getCombustibili() {
            return this.combustibili;
        },

        getCombustibileName() {
            return this.combustibileName;
        },

        getIsConfronto() {
            return this.isConfronto;
        },

        getConfrontoName() {
            return this.confrontoName;
        }
    },

    created() {
        console.log(this.$route.query)
        this.combustibile = this.$route.query.combustibile;
        this.persone = this.$route.query.persone;
        this.tipoConsumo = this.$route.query.tipoConsumo;
    }
}
</script>
    
<style>
.disabled {
    display: none !important;
}

.pricing .pricing-list ul li {
    border-bottom: 1px solid #2046f25e;
}

.nav-tabs .active img {
    filter: invert(1);
}
</style>
