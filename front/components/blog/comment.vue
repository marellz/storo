<template>
  <div class="border-b first-border-t p-5 space-y-5">
    <div class="flex items-center">
      <div class="flex items-center">
        <user-circle-icon class="h-12 text-slate-500" />
        <div class="ml-2">
          <p class="font-medium">Jane Doe</p>
          <p class="text-slate-500 text-sm">5 minutes ago</p>
        </div>
      </div>
      <button
        class="border rounded p-2 ml-auto hover:text-tufts-blue hover:border-tufts-blue"
      >
        <ellipsis-horizontal-icon class="h-7" />
      </button>
    </div>
    <div>
      <div class="bg-slate-50 rounded-lg p-5">
        <p class="font-light">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt quo
          odit porro beatae, aut cumque, illo ad debitis minus doloribus
          numquam, eius magnam dolore! Iusto distinctio est quod rem? Modi.
        </p>
      </div>
    </div>
    <actions-wrap>
      <actions-like />
      <actions-comment />
    </actions-wrap>
  </div>
</template>
<script lang="ts" setup>
import { UserCircleIcon } from "@heroicons/vue/24/solid";
import {
  EllipsisHorizontalIcon,
  HeartIcon,
  ChatBubbleOvalLeftEllipsisIcon,
} from "@heroicons/vue/24/outline";
</script>
