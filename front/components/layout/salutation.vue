<template>
  <div class="p-2 mb-5">
    <h1 class="text-3xl font-semibold">{{ main }}</h1>
    <p class="text-lg text-slate-500 mt-1">{{ context }}</p>
  </div>
</template>
<script lang="ts" setup>
defineProps({
  main: {
    type: String,
    default: "",
  },
  
  context: {
    type: String,
    default: "",
  },
});
</script>
