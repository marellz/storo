<template>
  <div
    class="flex border rounded-lg"
    :class="{ 'bg-primary border-primary text-white': checked }"
  >
    <input
      :id="id"
      v-model="val"
      class="radio h-0 w-0 hidden"
      type="checkbox"
      :value="inputValue"
      ref="radio"
    />
    <label :for="id" class="p-4 flex-auto" :class="labelClass">
      <div class="checkbox-content">
        <slot>
          <p>
            {{ label }}
          </p>
        </slot>
      </div>
    </label>
  </div>
</template>
<script setup lang="ts">
const props = defineProps({
  checked: {
    type: [Boolean, Array, String, Number],
    default: false,
  },
  inputValue: {
    type: [String, Boolean, Number],
    default: true,
  },
  label: {
    type: String,
    default: null,
  },
  labelClass: {
    type: String,
    default: "",
  },
});

const emit = defineEmits(["update:checked"]);
const id = Math.random().toString(36).substring(7);
const val = computed({
  get: () => props.checked,
  set: (v) => {
    emit("update:checked", v);
  },
});


</script>