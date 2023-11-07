<template>
  <button
    :type="type"
    class="inline-flex items-center justify-center py-2 px-2 rounded-lg font-medium"
    :class="colors[color] ?? colors['info']"
  >
    <slot />
  </button>
</template>
<script setup>
defineProps({
  type: {
    type: String,
    default: 'button',
  },
  color: {
    type: String,
    default: "default",
  },
});

const colors = {
  default: "border text-slate-500",
  info: "text-primary bg-blue-100 hover:bg-blue-200", // blue,
  warning: "text-amber-500 bg-amber-100", // amber,
  error: "text-red-500 bg-red-100", // red,
  success: "text-green-500 bg-green-100", // green,
};
</script>
