<template>
  <custom-dropdown label="Select order" trigger-class="!bg-transparent">
    <template #trigger>
      <span>{{ label }}</span>
      <chevron-up-down-icon class="h-5" />
    </template>

    <custom-dropdown-item>
      <FireIcon class="h-5" />
      <span>Relevant</span>
    </custom-dropdown-item>
    <custom-dropdown-item>
      <BarsArrowDownIcon class="h-5" />
      <span>Latest</span>
    </custom-dropdown-item>
    <custom-dropdown-item>
      <BarsArrowUpIcon class="h-5" />
      <span>Oldest</span>
    </custom-dropdown-item>
  </custom-dropdown>
</template>
<script lang="ts" setup>
import {
  ChevronUpDownIcon,
  BarsArrowDownIcon,
  BarsArrowUpIcon,
  FireIcon,
} from "@heroicons/vue/24/outline";

defineProps({
  label: {
    type: String,
    default: "Order by",
  },
});
</script>
