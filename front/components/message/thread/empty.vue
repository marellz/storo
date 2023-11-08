<template>
  <div class="bg-slate-50 h-full flex items-center justify-center">
    <div
      class="flex flex-col items-center space-y-10 transform -translate-y-[10%]"
    >
      <img src="@/assets/images/undraw_messages.svg" class="w-1/2" />
      <div class="space-y-5 text-center">
        <p class="font-medium text-3xl">Welcome to Messages.</p>
        <p class="font-light text-xl">
          Select a thread to display chats between you and another user.
        </p>
        <custom-button class="space-x-2">
          <span>Create new message</span>
          <paper-airplane-icon class="h-4" />
        </custom-button>
      </div>
    </div>
  </div>
</template>
<script lang="ts" setup>
import { PaperAirplaneIcon } from "@heroicons/vue/24/solid";

</script>
