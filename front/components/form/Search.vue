<template>
  <form @submit.prevent="submit">
    <div class="flex border rounded-lg">
      <input
        :id="id"
        v-model="query"
        class="flex-auto w-full outline-none h-10 px-3 focus:ring-2 focus:ring-primary bg-transparent disabled:opacity-50"
        type="text"
        :name="name"
        :required="required"
        :disabled="disabled"
        :readonly="readonly"
        :placeholder="placeholder"
      />
      <custom-button-action type="submit" class="border-none">
        <MagnifyingGlassIcon class="h-5" />
      </custom-button-action>
    </div>
  </form>
</template>
<script lang="ts" setup>
import { MagnifyingGlassIcon } from '@heroicons/vue/24/outline';

defineProps({
  name: {
    type: String,
    default: "search",
  },
  disabled: {
    type: Boolean,
    default: false,
  },
  required: {
    type: Boolean,
    default: true,
  },
  readonly: {
    type: Boolean,
    default: false,
  },
  placeholder: {
    type: String,
    default: 'Search',
  }, 
});

const query = ref('')
const emit = defineEmits(['search'])
const id = Math.random().toString(36).substring(7);
const submit = ()=> {
    emit('search', query.value)
}
</script>
