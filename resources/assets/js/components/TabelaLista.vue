<template>
  <div>
    <a v-if="criar" v-bind:href="criar" class="btn btn-primary">Criar</a>

    <table class="table table-hover">
      <thead>
        <tr>
          <th v-for="titulo in titulos">{{ titulo }}</th>

          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in itens">
          <td v-for="i in item">{{ i }}</td>
          <td>
            <a v-if="detalhe" v-bind:href="editar" class="btn btn-warning"
              >Detalhe |</a
            >

            <a v-if="editar" v-bind:href="editar" class="btn btn-success"
              >Editar |</a
            >

            <a v-if="deletar" v-bind:href="deletar" class="btn btn-danger"
              >Deletar</a
            >
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: ["titulos", "itens", "criar", "detalhe", "editar", "deletar", "token"],
};
</script>
