<script setup>
import { ref } from "vue"

const name = ref("")
</script>

<template>
    <p>{{name}}</p>
    <input type="text" v-model="name">
</template>