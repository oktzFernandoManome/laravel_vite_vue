<template>
    <li>
      <p>
        <strong>{{ productName }}</strong><span class="fill_blank_spaces"></span><span>{{ formattedPrice }}</span>
      </p>
    </li>
</template>

<script>
export default {
  name: "Products",
  props: {
    productName: {
      type: String,
      required: true,
    },
    productPrice: {
      type: Number,
      required: true,
    },
  },
  computed: {
    formattedPrice() {
      return this.productPrice.toLocaleString("pt-BR", {
        style: "currency",
        currency: "BRL",
      });
    },
  },
};
</script>

<style scoped>
li {
  list-style: none;
}

li > p {
  display: flex;
  width: 12rem;
  justify-content: space-between;
  align-items: center;
}

.fill_blank_spaces {
  flex: 1;
  align-self: flex-end;
  border-bottom: 1px solid black;
  margin: 0 0.5rem;
}
</style>
