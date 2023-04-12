<template>
    <div class="vue-container">
        <div class="calcolo-container">
            <div class="container">
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
                                            <img :src="'/img/icons-png/' + getCalcoloImg" alt="combustibile corrente">
                                        </div>
                                        <div class="pricing-prize">
                                            <h2 class="text-black"><span>€ </span>{{ getSpesaMensileCalcolo }} <span>/AL
                                                    MESE</span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="pricing-list">
                                        <ul class="text-left px-4 w-100% text-black">
                                            <li class="w-100 d-flex justify-content-between"><span>Combustibile:</span>
                                                <span><strong>{{ getCombustibileCalcoloNome }}</strong></span>
                                            </li>
                                            <li class="w-100 d-flex justify-content-between"><span>Persone:</span>
                                                <span><strong>{{ getPersone }}</strong></span>
                                            </li>
                                            <li class="w-100 d-flex justify-content-between"><span>TipoConsumo:</span>
                                                <span><strong>{{ getTipoConsumo }}</strong></span>
                                            </li>
                                            <li class="w-100 d-flex justify-content-between"><span>Consumo Mensile:</span>
                                                <span><strong>{{ getConsumoMensileCalcolo }} KWh</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-order mt-3">
                                        <a class="button black active" href="#" v-on:click="goToCalcolo()">Cambia Dati</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pricing pricing-01 active text-center">
                                    <div class="pricing-title">
                                        <div class="section-title text-center">
                                            <h5 class="text-center">IL TUO CONFRONTO</h5>
                                            <span>Confrontato</span>
                                        </div>
                                        <div class="pricing-img">
                                            <img :src="'/img/icons-png/' + getConfrontatoImg"
                                                alt="combustibile confrontato">
                                        </div>
                                        <div class="pricing-prize">
                                            <h2 class="text-black"><span>€ </span>{{ getSpesaMensileConfrontato }} <span>/AL
                                                    MESE</span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="pricing-list">
                                        <ul class="text-left px-4 w-100% text-black">
                                            <li class="w-100 d-flex justify-content-between"><span>Combustibile:</span>
                                                <span><strong>{{ getCombustibileConfrontatoNome }}</strong></span>
                                            </li>
                                            <li class="w-100 d-flex justify-content-between"><span>Persone:</span>
                                                <span><strong>{{ getPersone }}</strong></span>
                                            </li>
                                            <li class="w-100 d-flex justify-content-between"><span>TipoConsumo:</span>
                                                <span><strong>{{ getTipoConsumo }}</strong></span>
                                            </li>
                                            <li class="w-100 d-flex justify-content-between"><span>Consumo Mensile:</span>
                                                <span><strong>{{ getConsumoMensileConfrontato }} KWh</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-order mt-3">
                                        <a class="button black active" href="#" v-on:click="goToCalcolo()">Cambia Dati</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pricing pricing-01 active text-center">
                                    <div class="pricing-title">
                                        <div class="section-title text-center">
                                            <h5 v-if="getDiff >= 0" class="text-center">Potenziale Risparmio</h5>
                                            <h5 v-else class="text-center">Potenziale Perdita</h5>
                                            <span>Conclusione</span>
                                        </div>
                                        <div class="pricing-img">
                                            <img src="/images/icon/05.png" alt="">
                                        </div>
                                        <div class="pricing-prize">
                                            <h2 class="text-black"><span>€ </span>{{ getDiff }} <span>/AL
                                                    MESE</span>
                                            </h2>
                                        </div>
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
    name: 'calcola Confronto',
    data() {
        return {
            persone: null,
            combustibile: null,
            tipoConsumo: null,
            confrontoId: null,
            spesaGiornalieraCalcolo: null,
            spesaMensileCalcolo: null,
            consumoGiornalieroCalcolo: null,
            consumoMensileCalcolo: null,
            spesaGiornalieraConfrontato: null,
            spesaMensileConfrontato: null,
            consumoGiornalieroConfrontato: null,
            consumoMensileConfrontato: null,
            combustibileCalcoloNome: '',
            combustibileConfrontatoNome: '',
            combustibili: '',
            calcoloImg: null,
            confrontatoImg: null,
        }

    },

    mounted() {
        this.getCombustibiliList();
        this.scrollIntoPage();
    },

    methods: {
        scrollIntoPage() {
            let mainContainer = document.getElementById('main-cont-vue');
            let mainContPos = mainContainer.offsetTop;
            mainContPos = mainContPos - 75;
            window.scrollTo({ top: mainContPos, behavior: 'smooth' });
        },

        getCombustibiliList() {
            axios
                .get('/api/combustibili')
                .then((r) => {
                    this.combustibili = r.data.combustibili;
                    this.calcoloConfronto();
                    this.calcoloConfrontato();
                })
        },

        calcoloConfronto() {
            axios.get(
                '/api/calcolo/' + this.combustibile + '/' + this.persone + '/' + this.tipoConsumo
            )
                .then((r) => {
                    /* console.log(r); */
                    this.spesaGiornalieraCalcolo = r.data.spesa_tot_giornaliera;
                    let spesaMensile = Number(this.spesaGiornalieraCalcolo) * 30;
                    spesaMensile = spesaMensile.toFixed(2);
                    this.spesaMensileCalcolo = spesaMensile;
                    this.consumoGiornalieroCalcolo = r.data.cons_tot_giornaliero;
                    let consumoMensile = Number(this.consumoGiornalieroCalcolo) * 30;
                    consumoMensile = consumoMensile.toFixed(2);
                    this.consumoMensileCalcolo = consumoMensile;
                    this.checkCombustibileName('calcolo');
                    this.calcoloImg = r.data.immagine;
                })
        },

        calcoloConfrontato() {
            axios.get(
                '/api/calcolo/' + this.confrontoId + '/' + this.persone + '/' + this.tipoConsumo
            )
                .then((r) => {
                    /* console.log(r); */
                    this.spesaGiornalieraConfrontato = r.data.spesa_tot_giornaliera;
                    let spesaMensile = Number(this.spesaGiornalieraConfrontato) * 30;
                    spesaMensile = spesaMensile.toFixed(2);
                    this.spesaMensileConfrontato = spesaMensile;
                    this.consumoGiornalieroConfrontato = r.data.cons_tot_giornaliero;
                    let consumoMensile = Number(this.consumoGiornalieroConfrontato) * 30;
                    consumoMensile = consumoMensile.toFixed(2);
                    this.consumoMensileConfrontato = consumoMensile;
                    this.checkCombustibileName('confrontato');
                    this.confrontatoImg = r.data.immagine;
                })
        },

        checkCombustibileName(string) {
            let id;
            if (string == 'calcolo') {
                id = this.combustibile;
            } else if (string == 'confrontato') {
                id = this.confrontoId;
            }
            let name = '';
            this.combustibili.forEach(element => {
                if (element.id == id) {
                    name = element.tipo;
                    if (element.tecnologia != '') {
                        let tecnologia = element.tecnologia;
                        name = name + ' - ' + tecnologia;
                        console.log(element.tecnologia)
                    }
                    if (string == 'calcolo') {
                        this.combustibileCalcoloNome = name;
                    } else if (string == 'confrontato') {
                        this.combustibileConfrontatoNome = name;
                    }
                }
            });
        },
    },

    computed: {
        getSpesaMensileCalcolo() {
            return this.spesaMensileCalcolo;
        },

        getSpesaMensileConfrontato() {
            return this.spesaMensileConfrontato;
        },

        getConsumoMensileCalcolo() {
            return this.consumoMensileCalcolo;
        },

        getConsumoMensileConfrontato() {
            return this.consumoMensileConfrontato;
        },

        getPersone() {
            return this.persone;
        },

        getTipoConsumo() {
            return this.tipoConsumo;
        },

        getCombustibileCalcoloNome() {
            return this.combustibileCalcoloNome;
        },

        getCombustibileConfrontatoNome() {
            return this.combustibileConfrontatoNome;
        },

        getDiff() {
            return (this.spesaMensileCalcolo - this.spesaMensileConfrontato).toFixed(2);
        },

        getCalcoloImg() {
            return this.calcoloImg;
        },

        getConfrontatoImg() {
            return this.confrontatoImg;
        }
    },

    created() {
        this.persone = this.$route.query.persone;
        this.combustibile = this.$route.query.combustibile;
        this.tipoConsumo = this.$route.query.tipoConsumo;
        this.confrontoId = this.$route.query.confrontoId;
    }
}
</script>

<style lang="scss" scoped></style>