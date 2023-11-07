<template>
  <layout-container>
    <div>
      <layout-salutation main="Events" context="" />
      <div class="grid grid-cols-3 gap-10">
        <div class="col-span-2">
          <custom-tabs default-tab="upcoming" :tabs="tabs">
            <template #action>
              <li class="py-1">
                <custom-button-action
                  class="bg-tufts-blue text-white border-tufts-blue"
                  >Create an event</custom-button-action
                >
              </li>
            </template>

            <template #upcoming>
              <div class="grid grid-cols-2 gap-4">
                <template v-for="(ev, index) in eventsInfo" :key="index">
                  <div class="col-span-2 mt-10 first:mt-0">
                    <h1 class="text-xl text-slate-500 font-medium">
                      {{ ev.month }}
                    </h1>
                  </div>
                  <template v-for="(_event, i) in ev.events" :key="i">
                    <event-upcoming-lg
                      :event-info="_event"
                      v-if="index === 0 && i === 0"
                    />
                    <event-upcoming :event-info="_event" v-else />
                  </template>
                </template>
              </div>
            </template>
          </custom-tabs>
        </div>
        <div class="mt-[134px]">
          <layout-card class="space-y-5">
            <h1 class="text-2xl font-bold text-center">
              2023
            </h1>
            <div class="flex flex-wrap">
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
                  @change="event => selectedMo = event.target.value"
                  />
                <label :for="`month-${index}`">
                  <p
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
                    <span class="w-2 h-2 rounded-full bg-tufts-blue" :class="{'!bg-slate-500': m.past}" v-for="(item, index) in m.eventNumber" :key="index"></span>
                  </div>
                  </p>
                </label>
              </div>
            </div>
          </layout-card>
        </div>
      </div>
    </div>
  </layout-container>
</template>
<script lang="ts" setup>
const tabs = ref([
  {
    key: "upcoming",
    label: "Upcoming",
  },
  {
    key: "going",
    label: "Going",
  },
  {
    key: "canceled",
    label: "Canceled",
  },
  {
    key: "bookmarked",
    label: "Bookmarked",
  },
]);

const eventsInfo = ref([
  {
    month: "October",
    events: [
      { date: "13", monthShort: "OCT" },
      { date: "14", monthShort: "OCT" },
    ],
  },
  {
    month: "November",
    events: [
      { date: "3", monthShort: "NOV" },
      { date: "12", monthShort: "NOV" },
      { date: "26", monthShort: "NOV" },
    ],
  },
]);

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


const currentMonth = computed(()=>{
  let d = new Date()
  return d.getMonth()
});

const selectedMo = ref(currentMonth.value)

const randomNumber = ()=> {
  return Math.floor(Math.random() * 4) + 1
}

const monthsData = months.map((month,index)=> {
  return {
    month,
    past: index < currentMonth.value,
    eventNumber : randomNumber()
  } 
})

</script>
