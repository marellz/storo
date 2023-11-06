<template>
  <div ref="dropdown" class="relative inline-flex flex-col">
    <button
      type="button"
      class="inline-flex items-center space-x-2 p-2 border border-slate-300 rounded bg-white"
      :class="triggerClass"
      @click="visible = !visible"
    >
      <slot name="trigger">
        <span>{{ label }}</span>
        <chevron-down-icon class="h-5" />
      </slot>
    </button>
    <!-- menu -->
    <div
      class="flex flex-col invisible absolute top-full border border-slate-300 rounded bg-white z-50 min-w-full transform transition"
      :class="{ '!visible translate-y-1': visible }"
    >
      <slot />
    </div>
  </div>
</template>
<script lang="ts" setup>
import { ChevronDownIcon } from "@heroicons/vue/24/outline";

defineProps({
  label: {
    type: String,
    default: "Dropdown",
  },
  triggerClass: {
    type: String,
    default: "",
  },
});
const visible = ref(false);
const dropdown = ref(null);

import { onClickOutside } from "@vueuse/core";
onClickOutside(dropdown, () => (visible.value = false));
</script>
