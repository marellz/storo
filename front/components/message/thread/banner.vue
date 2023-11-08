<template>
  <div
    class="px-5 py-[17px] space-y-4 flex flex-col lg:flex-row lg:items-center border-b"
    ref="banner"
  >
    <div class="flex items-center space-x-2 flex-1">
      <custom-button-action class="xl:hidden" @click="$emit('go-back')">
        <ArrowLeftIcon class="h-5" />
      </custom-button-action>
      <user-circle-icon class="h-12 text-slate-500" />
      <div class="flex-none">
        <p class="font-medium text-lg">John Doe</p>
        <div class="text-slate-400 text-sm flex space-x-1.5 items-center">
          <span class="block rounded-full h-2 w-2 bg-current"></span>
          <span>Available</span>
        </div>
      </div>
      <button
        class="!ml-auto !mr-2 text-slate-500"
        :class="{ 'text-tufts-blue': searchActive }"
        @click="searchActive = !searchActive"
      >
        <MagnifyingGlassIcon class="h-6" />
      </button>
    </div>
    <form-search class="lg:!ml-auto hidden" :class="{'!block': searchActive}"/>
  </div>
</template>
<script lang="ts" setup>
import { ArrowLeftIcon } from "@heroicons/vue/24/outline";
import { UserCircleIcon, MagnifyingGlassIcon } from "@heroicons/vue/24/solid";
import { onClickOutside } from "@vueuse/core";


defineProps({
  selectedThread: {
    type: Object,
    // required: true
    default: () => {
      return {
        name: "John Doe",
        status: "Available",
      };
    },
  },
});

defineEmits(["go-back"]);

const searchActive = ref(false);
const banner = ref(null)
onClickOutside(banner, () => (searchActive.value = false));
</script>
