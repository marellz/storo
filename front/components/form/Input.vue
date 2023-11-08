<template>
  <div class="flex flex-col mb-2">
    <slot name="label">
      <label v-if="label" :for="id" class="font-medium mb-2 text-gray-700" :class="{'opacity-50': disabled}">
        <p class="m-0">
          {{ label }}
        </p>
      </label>
    </slot>
    <input
      :id="id"
      v-model="mValue"
      class="outline-none border h-10 px-3 rounded-lg focus:ring-2 focus:ring-primary bg-transparent disabled:opacity-50"
      :type="inputType"
      :name="name"
      :required="required"
      :disabled="disabled"
      :readonly="readonly"
      :placeholder="placeholder"
    />

    <div v-if="error" class="mt-2 text-xs text-red-500">
      <p class="my-0">{{ error }}</p>
    </div>

    <slot name="help">
      <div class="mt-2 text-sm text-slate-500 flex items-center space-x-2" v-if="help">
        <information-circle-icon class="h-5" />
        <span>
          {{ help }}
        </span>
      </div>
    </slot>
  </div>
</template>
<script setup lang="ts">
import { InformationCircleIcon } from '@heroicons/vue/24/outline'
const props = defineProps({
  modelValue: {
    type: [String, Number, Boolean, Object],
    default: "",
  },
  inputType: {
    type: String,
    default: "text",
  },
  name: {
    type: String,
    default: "",
  },
  label: {
    type: String,
    default: null,
  },
  disabled: {
    type: Boolean,
    default: false,
  },
  required: {
    type: Boolean,
    default: false,
  },
  readonly: {
    type: Boolean,
    default: false,
  },
  placeholder: {
    type: String,
    default: null,
  },
  help: {
    type: String,
    default: null,
  },
  error: {
    type: String,
    default: null,
  },
});

const emit = defineEmits(["update:model-value"]);
const id = Math.random().toString(36).substring(7);
const mValue = computed({
  get: () => props.modelValue,
  set: (v) => {
    emit("update:model-value", v);
  },
});
</script>
