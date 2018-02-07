<template>
    <div v-bind:class="defineCor">
        <div class="panel-heading">
            <h3 class="card-title">{{ titulo }}</h3>
        </div>
            <div class="panel-body">
               <slot></slot>
            </div>
    </div>
</template>

<script>
    export default {
        props: [
            'titulo',
            'cor',
        ],
        computed: {
            defineCor: function () {
                return 'panel ' + (this.cor || 'panel-default')
            }
        }
        }
</script>
