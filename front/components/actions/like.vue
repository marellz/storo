<template>
  <custom-button-action class="mr-5 mb-2" @click="$emit('like')">
    <heart-icon class="h-5" />
    <span>{{ count }} <span class="hidden md:inline"> like{{ count !== 1 ? 's' : ''}}</span></span>
  </custom-button-action>
</template>
<script lang="ts" setup>
import { HeartIcon } from "@heroicons/vue/24/outline";
defineProps({
  count:{
    type: Number,
    default: 0
  }
})
defineEmits(['like'])
</script>
