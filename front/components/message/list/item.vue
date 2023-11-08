<template>
  <a
    @click="() => $emit('selected')"
    :href="`#thread-${index}`"
    class="flex items-center space-x-2 px-5 py-2 border-b border-t border-t-transparent hover:bg-blue-200"
    :class="{ 'bg-tufts-blue hover:bg-tufts-blue border-t': active }"
  >
    <user-circle-icon
      class="h-16 text-slate-400"
      :class="{ 'text-white': active, 'text-tufts-blue': unread }"
    />
    <div :class="{ 'text-white': active }">
      <div class="flex items-center space-x-2">
        <p class="font-medium text-lg" :class="{ 'text-tufts-blue': unread, 'text-white': unread && active }">
          John Doe
        </p>
        <p
          class="text-slate-500 text-sm"
          :class="{
            'text-white': active,
            'text-prussian-blue font-bold': unread,
            '!text-white': active && unread
          }"
        >
          5 minutes ago
        </p>
      </div>
      <p class="text-slate-500 line-clamp-1" :class="{ 'text-white': active }">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
      </p>
    </div>
    <span
      v-show="unread"
      :class="{'!bg-white !text-tufts-blue':active}"
      class="flex-none text-xs !ml-auto font-bold text-white bg-tufts-blue w-6 h-6 inline-flex justify-center items-center rounded-full"
      >{{ unread }}</span
    >
  </a>
</template>
<script lang="ts" setup>
import { UserCircleIcon } from "@heroicons/vue/24/solid";
defineEmits(["selected"]);

defineProps({
  active: {
    type: Boolean,
    default: false,
  },
  unread: {
    type: Number,
    default: 0,
  },
  index: {
    type: Number,
    required: true,
  },
});
</script>
