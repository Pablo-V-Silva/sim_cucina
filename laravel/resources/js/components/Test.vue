<template>
    <div class="container" style="background-color: #00000030">
        <div class="page-title">
            <h1>Qui ci va il titolo</h1>
        </div>
        <div class="form-container">
            <div class="row">
                <div class="col-12">
                    <h4>Scegli il tipo di combustibile</h4>
                    <select name="" id="">
                        <option value="#">test</option>
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

            <button id="calcolabtn">Calcola</button>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: "Test",
    data() {
        return {

        }
    },

    mounted() {
        let test;
        axios
          .get(
            "/api/combustibili"
          )
          .then((r) => {
            console.log(r);
          });
    },

    methods: {
        
    },

    computed: {
        
    },

    created() {

    }
}
</script>
