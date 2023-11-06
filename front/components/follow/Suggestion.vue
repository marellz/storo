<template>
  <layout-card class="flex items-center">
    <user-circle-icon class="h-12 text-slate-500" />
    <p class="font-medium ml-4">Jane Doe</p>
    <custom-button-action
      class="border space-x-2 rounded ml-auto hover:text-tufts-blue hover:border-tufts-blue"
    >
      <user-plus-icon class="h-5" />
      <span>Follow</span>
    </custom-button-action>
  </layout-card>
</template>
<script lang="ts" setup>
import { UserCircleIcon } from "@heroicons/vue/24/solid";
import { UserPlusIcon } from "@heroicons/vue/24/outline";
</script>
