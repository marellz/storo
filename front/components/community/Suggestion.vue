<template>
  <layout-card class="flex items-center">
    <nuxt-link :to="`/community/group/id`" class="flex items-center space-x-4">
      <user-group-icon class="h-12 text-slate-500" />
      <div class="flex-auto">
        <p class="font-medium">Great community</p>
        <div class="text-slate-500 text-sm">543 members</div>
      </div>
    </nuxt-link>
    <custom-button-action
      class="border space-x-2 rounded ml-auto hover:text-tufts-blue hover:border-tufts-blue"
    >
      <user-plus-icon class="h-5" />
      <span>Join</span>
    </custom-button-action>
  </layout-card>
</template>
<script lang="ts" setup>
import { UserGroupIcon } from "@heroicons/vue/24/solid";
import { UserPlusIcon } from "@heroicons/vue/24/outline";
</script>
