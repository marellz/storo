<template>
  <custom-button-action class="mr-5 mb-2" @click="$emit('share')">
    <share-icon class="h-5" />
    <span class="hidden md:inline">Share</span>
  </custom-button-action>
</template>
<script lang="ts" setup>
import { ShareIcon } from "@heroicons/vue/24/outline";
defineEmits(['share'])
</script>
