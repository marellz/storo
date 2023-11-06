<template>
  <component
    :is="preferredComponent"
    class="inline-flex justify-center items-center py-2 text-lg px-6 font-medium rounded whitespace-nowrap hover:opacity-80 disabled:opacity-50"
    :disabled="disabled"
    :type="btnType"
    :to="to"
    :class="[color, { 'w-full': block }]"
    @click="emitClick"
  >
    <slot />
  </component>
</template>
<script setup>
const props = defineProps({
  type: {
    type: String,
    default: null,
  },
  disabled: {
    type: Boolean,
    default: false,
  },
  block: {
    type: Boolean,
    default: false,
  },
  color: {
    type: String,
    default: "bg-tufts-blue text-white",
  },
  to: {
    type: String,
    default: null,
  },
});

const components = {
  button: `button`,
  link: `router-link`,
};

const preferredComponent = computed(() =>
  !!props.to ? components["link"] : components[["button"]]
);

const btnType = computed(() => {
  !!props.to ? null : props.type;
});

const emit = defineEmits(["update:click"]);
function emitClick() {
  emit("update:click");
}
</script>
