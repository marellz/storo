<template>
  <custom-button-action class="mr-5 mb-2" @click="$emit('comment')">
    <chat-bubble-oval-left-ellipsis-icon class="h-5" />
    <span>{{ count }} <span class="hidden md:inline"> comment{{ count !== 1 ? 's' : ''}}</span></span>
  </custom-button-action>
</template>
<script lang="ts" setup>
import { ChatBubbleOvalLeftEllipsisIcon } from "@heroicons/vue/24/outline";
defineProps({
  count:{
    type: Number,
    default: 0
  }
})
defineEmits(['comment'])
</script>
