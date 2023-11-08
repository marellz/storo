<template>
  <div class="relative p-5 border-t">
    <form @submit.prevent="sendMessage" class="flex">
      <textarea
        class="border outline-none rounded resize-none w-full p-3"
        placeholder="Type something..."
        rows="3"
      ></textarea>
      <button class="p-3 absolute right-5 top-5">
        <paper-airplane-icon class="h-7 text-slate-500" />
      </button>
    </form>
  </div>
</template>
<script lang="ts" setup>
import { PaperAirplaneIcon } from "@heroicons/vue/24/solid";

const emit = defineEmits(['send'])

const sendMessage = () => {
    emit('send')
}
</script>
