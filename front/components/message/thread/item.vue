<template>
  <div class="flex py" :class="{ 'justify-end': mine }">
    <div class="max-w-[70%]">
      <div class="flex items-center" :class="{ 'justify-end': mine }">
        <div
          class="flex items-center space-x-2"
          :class="{ 'flex-row-reverse': mine }"
        >
          <user-circle-icon class="h-12 text-slate-500" />
          <p v-if="!mine" class="font-medium text-lg">John Doe</p>
          <p class="text-sm font-light text-slate-400">3:4{{ index + 1 }}PM</p>
        </div>
      </div>

      <message-thread-bubble :mine="mine" />
    </div>
  </div>
</template>
<script lang="ts" setup>
import { UserCircleIcon } from "@heroicons/vue/24/solid";

const props = defineProps({
  index: {
    type: Number,
    required: true,
  },
});
const mine = props.index % 2 == 0;

</script>
