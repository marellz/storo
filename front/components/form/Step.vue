<template>
  <div class="grid lg:grid-cols-3 gap-6 my-10 border-b pb-10">
    <div>
      <slot name="legend">
        <h1 class="text-2xl font-medium">{{ title }}</h1>
        <p class="text-lg text-gray-500">{{ info }}</p>
      </slot>
    </div>
    <div class="col-span-2">
      <slot />
    </div>
  </div>
</template>
<script lang="ts" setup>
defineProps({
  title: {
    type: String,
    default: "",
  },
  info: {
    type: String,
    default: "",
  },
});
</script>
