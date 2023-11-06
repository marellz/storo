<template>
  <layout-card class="flex items-center">
    <user-group-icon class="h-12 text-slate-500" />
    <p class="font-medium ml-4">Great community</p>
    <custom-button-action
      class="border space-x-2 rounded ml-auto hover:text-tufts-blue hover:border-tufts-blue"
    >
      <hand-raised-icon class="h-5" />
      <span>Join</span>
    </custom-button-action>
  </layout-card>
</template>
<script lang="ts" setup>
import { UserGroupIcon } from "@heroicons/vue/24/solid";
import { HandRaisedIcon } from "@heroicons/vue/24/outline";
</script>

