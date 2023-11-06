<template>
  <div class="flex items-center space-x-2 p-2 hover:bg-tufts-blue hover:text-white cursor-pointer" @click="$emit('click')">
    <slot />
  </div>
</template>
<script lang="ts" setup>
defineEmits("click");
</script>
