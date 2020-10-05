<template>
  <div class="container">
    <div class="row">
      <div v-bind:class="defineTamanho">
        <slot></slot>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["tamanho"],
  computed: {
    defineTamanho: function() {
      if (this.tamanho >= 12) {
        return "col-md-12";
      } else if (this.tamanho <= 2) {
        return "col-md-2 col-md-offset-5";
      } else if (this.tamanho % 2 == 0) {
        return (
          "col-md-" + this.tamanho + " col-md-offset-" + (12 - this.tamanho) / 2
        );
      } else {
        return (
          "col-md-" +
          (Number(this.tamanho) + 1) +
          " col-md-offset-" +
          (12 - (Number(this.tamanho) + 1)) / 2
        );
      }
    },
  },
};
</script>
