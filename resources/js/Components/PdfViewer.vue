<template>
    <div>
      <iframe :src="pdfUrl" width="100%" height="500"></iframe>
    </div>
  </template>

<script setup>
import { ref } from 'vue';

const props = defineProps({
    pdfurl: String,

});
</script>
