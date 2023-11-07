<template>
  <perfect-scrollbar class="overflow-auto pr-5" :class="[maxHeight]">
    <slot />
  </perfect-scrollbar>
</template>
<script lang="ts" setup>
defineProps({
  maxHeight: {
    type: String,
    default: "max-h-full",
  },
});
</script>
