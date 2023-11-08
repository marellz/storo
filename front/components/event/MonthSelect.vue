<template>
  <div class="relative" ref="modal">
    <layout-card class="space-y-5">
      <div class="flex items-center justify-center space-x-2">
        <h1 class="text-2xl font-bold text-center">2023</h1>
        <custom-button-action class="xl:hidden" @click="showMonths = !showMonths">
          <ChevronDownIcon class="h-5" />
        </custom-button-action>
      </div>
    </layout-card>
    <layout-card
      class="mt-2 shadow-lg flex absolute w-full invisible xl:visible"
      :class="{ '!visible': showMonths }"
    >
      <div class="flex flex-wrap xl:flex-row">
        <div
          class="text-center p-2"
          v-for="(m, index) in monthsData"
          :key="index"
        >
          <input
            type="radio"
            name="selected-month"
            class="h-0 w-0 invisible absolute z-[-999]"
            :value="index"
            :id="`month-${index}`"
            v-model="selectedMo"
          />
          <!-- @change="event => selectedMo = event.target.value" -->
          <label :for="`month-${index}`">
            <div
              class="border rounded-lg py-2 px-7 text-lg font-medium"
              :class="{
                'text-slate-500': m.past,
                'text-tufts-blue border-tufts-blue': selectedMo == index,
              }"
            >
              <span>
                {{ m.month }}
              </span>

              <div class="flex justify-center space-x-1 mt-2">
                <span
                  class="w-2 h-2 rounded-full bg-tufts-blue"
                  :class="{ '!bg-slate-500': m.past }"
                  v-for="i in m.eventNumber"
                  :key="i"
                ></span>
              </div>
            </div>
          </label>
        </div>
      </div>
      <custom-button-action class="absolute bottom-4 right-4 xl:hidden" @click="showMonths = false">
          <ChevronUpIcon class="h-5" />
        </custom-button-action>
    </layout-card>
  </div>
</template>
<script lang="ts" setup>
import { ChevronDownIcon, ChevronUpIcon } from "@heroicons/vue/24/outline";
import { onClickOutside } from "@vueuse/core";
const props = defineProps({
  selected: {
    type: Number,
    default: 0,
  },
});

const modal = ref('')
const emit = defineEmits(["update:month"]);

const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

const currentMonth = computed(() => {
  let d = new Date();
  return d.getMonth();
});

const selectedMo = computed({
  get: () => props.selected,
  set: (v) => {
    emit("update:month", v);
  },
});

const showMonths = ref(false);

const randomNumber = () => {
  return Math.floor(Math.random() * 4) + 1;
};

const monthsData = months.map((month, index) => {
  return {
    month,
    past: index < currentMonth.value,
    eventNumber: randomNumber(),
  };
});

onClickOutside(modal, () => (showMonths.value = false));

</script>
