<template>
  <div class="flex flex-wrap">
    <ul class="flex-auto flex flex-wrap items-center space-x-3">
      <li v-for="(tab, index) in tabs" :key="index" class="py-1">
        <custom-button-action
          @click="activeTab = tab.key"
          class=""
          :class="{ '!border-tufts-blue !text-tufts-blue': activeTab == tab.key }"
        >
          {{ tab.label }}
        </custom-button-action>
      </li>
    </ul>
      <slot name="action"/>
  </div>

  <div
    v-for="(tab, index) in tabs"
    :key="index"
    v-show="activeTab == tab.key"
    class="pt-10"
  >
    <slot :name="tab.key"></slot>
  </div>
</template>
<script setup>
const props = defineProps({
  tabs: {
    type: Array,
    required: true,
  },
  defaultTab: {
    type: String,
  },
});

const activeTab = ref(props.defaultTab);
</script>
