<template>
    <span>
        <span v-if="participant">
            <button v-on:click="atualizaLista()" v-if="!tipo || (tipo != 'button' && tipo != 'link')" type="button" class="css || btn btn-primary" data-toggle="modal" v-bind:data-target="'#' + name">{{ titulo }}</button>
            <button v-on:click="atualizaLista()" v-if="tipo == 'button'" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + name">{{ titulo }}</button>
            <a v-on:click="atualizaLista()" v-if="tipo == 'link'" href="#" v-bind:class="css || ''" data-toggle="modal" v-bind:data-target="'#' + name"> {{ titulo }} </a>
        </span>
        <span v-if="!participant">
            <button v-if="!tipo || (tipo != 'button' && tipo != 'link')" type="button" class="css || btn btn-primary" data-toggle="modal" v-bind:data-target="'#' + name">{{ titulo }}</button>
            <button v-if="tipo == 'button'" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + name">{{ titulo }}</button>
            <a v-if="tipo == 'link'" href="#" v-bind:class="css || ''" data-toggle="modal" v-bind:data-target="'#' + name"> {{ titulo }} </a>
        </span>
    </span>
</template>

<script>
    export default {
        props: [
            'tipo',
            'name',
            'titulo',
            'css',
            'participant',
        ],
        methods: {
            atualizaLista: function () {
                this.$store.commit('SET_PARTICIPANT', this.participant);
            }
        }
    }
</script>
