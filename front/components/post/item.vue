<template>
  <layout-card class="space-y-5">
    <div class="flex items-center">
      <user-circle-icon class="h-12 text-slate-500" />
      <div class="ml-2">
        <p class="font-medium">Jane Doe</p>
        <p class="text-slate-500 text-sm">5 minutes ago</p>
      </div>
      <button
        class="border rounded p-2 ml-auto hover:text-tufts-blue hover:border-tufts-blue"
      >
        <ellipsis-horizontal-icon class="h-7" />
      </button>
    </div>
    <div class="bg-slate-50 rounded-lg p-5">
      <p class="font-light">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt quo
        odit porro beatae, aut cumque, illo ad debitis minus doloribus numquam,
        eius magnam dolore! Iusto distinctio est quod rem? Modi.
      </p>
    </div>
    <actions-wrap>
      <actions-like />
      <actions-comment />
      <actions-share />
    </actions-wrap>
  </layout-card>
</template>
<script lang="ts" setup>
import { UserCircleIcon } from "@heroicons/vue/24/solid";
import { EllipsisHorizontalIcon } from "@heroicons/vue/24/outline";
</script>
