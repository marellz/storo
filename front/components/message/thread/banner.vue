<template>
  <div class="px-5 py-[17px] space-x-2 flex border-b">
    <user-circle-icon class="h-12 text-slate-500" />
    <div class="">
      <p class="font-medium text-lg">John Doe</p>
      <div class="text-slate-400 text-sm flex space-x-1.5 items-center">
        <span class="block rounded-full h-2 w-2 bg-current"></span>
        <span>Available</span>
      </div>
    </div>
    <form-search class="!ml-auto" />
  </div>
</template>
<script lang="ts" setup>

import { UserCircleIcon } from "@heroicons/vue/24/solid";

defineProps({
  selectedThread: {
    type: Object,
    // required: true
    default: () => {
      return {
        name: "John Doe",
        status: "Available",
      };
    },
  },
});
</script>
