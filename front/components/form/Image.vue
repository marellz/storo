<template>
    <div>
        <input type="file" :id="id" class="h-0 w-0 absolute z-[-900]" />
        <label :for="id" class="inline-flex items-center space-x-2 border border-transparent p-2 hover:border-tufts-blue hover:text-tufts-blue rounded">
          <photo-icon class="h-5" />
          <span>{{ label }}</span>
        </label>
    </div>
</template>
<script lang="ts" setup>

import { PhotoIcon } from '@heroicons/vue/24/outline';

defineProps({
  label: {
    type: String,
    default: "Image",
  },
});

const id = Math.random().toString(36).substring(7);
</script>
