<template>
  <layout-card class="flex items-center">
    <nuxt-link to="/user/id" class="flex items-center space-x-4">
      <user-circle-icon class="h-12 text-slate-500" />
      <div>
        <p class="font-medium">Jane Doe</p>
        <p class="text-slate-500 text-sm">13 mutual followers</p>
      </div>
    </nuxt-link>
    <div class="flex items-center space-x-2 ml-auto">
      <custom-button-action
        class="border space-x-2 rounded hover:text-tufts-blue hover:border-tufts-blue"
      >
        <paper-airplane-icon class="h-5" />
      </custom-button-action>
      <template v-if="following">
        <custom-button-action
          class="border space-x-2 rounded hover:bg-red-500 hover:border-red-500 hover:text-white"
        >
          <user-minus-icon class="h-5" />
        </custom-button-action>
      </template>

      <custom-button-action
        v-else
        class="border space-x-2 rounded hover:text-tufts-blue hover:border-tufts-blue"
      >
        <user-plus-icon class="h-5" />
      </custom-button-action>
    </div>
  </layout-card>
</template>
<script lang="ts" setup>
import { UserCircleIcon } from "@heroicons/vue/24/solid";
import {
  UserPlusIcon,
  UserMinusIcon,
  PaperAirplaneIcon,
} from "@heroicons/vue/24/outline";

defineProps({
  following: {
    type: Boolean,
    default: false,
  },
});
</script>
