<template>
  <custom-button-action class="mr-5 mb-2" @click="$emit('bookmark')">
    <bookmark-icon class="h-5" />
  </custom-button-action>
</template>
<script lang="ts" setup>
import { BookmarkIcon } from "@heroicons/vue/24/outline";
defineEmits(['bookmark'])
</script>
