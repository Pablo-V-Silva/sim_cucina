<template>
    <div class="container" style="background-color: #00000030">
        <div class="page-title">
            <h1>Qui ci va il titolo</h1>
        </div>
        <div class="form-container">
            <div class="row">
                <div class="col-12">
                    <h4>Scegli il tipo di combustibile</h4>
                    <select name="tipo" id="tipocomb">
                        <option v-for="combustibile in getCombustibili" :key="combustibile.tipo" :value="combustibile.id">{{combustibile.tipo}}</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h4>Inserisci il numero di persone in casa</h4>
                    <input type="num" id="persone">
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

            <button v-on:click="this.executeCalc()">Calcola</button>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: "Test",
    data() {
        return {
            combustibili: null
        }
    },

    mounted() {
        this.getDataForInputs();
    },

    methods: {
        getDataForInputs(){
            axios
          .get(
            "/api/combustibili"
          )
          .then((r) => {
            this.combustibili = r.data.combustibili;
          });
        },

        executeCalc(){
            let tipocomb = document.getElementById('tipocomb').value;
            /* console.log(tipo); */
            let persone = document.getElementById('persone').value;
            /* console.log(persone); */
            let tipo = document.getElementById('tipo').value;

            if(tipocomb == null || tipo == null || persone == null){
                console.error('Missing Parameters');
            }else{
                axios.get(
                    '/api/calcolo/'+ tipocomb + '/' + persone + '/' + tipo
                )
                .then((r)=>{
                    console.log(r);
                })
            }
        }
    },

    computed: {
        getCombustibili(){
            console.log(this.combustibili)
            return this.combustibili;
        }
    },

    created() {

    }
}
</script>
