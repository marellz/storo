<template>
  <layout-container>
    <div>
      <layout-salutation main="Events" context="" />
      <div class="grid xl:grid-cols-3 gap-10">
        <div class="xl:col-span-2 row-start-2 xl:row-start-1">
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
              <div class="grid md:grid-cols-2 gap-4">
                <template v-for="(ev, index) in eventsInfo" :key="index">
                  <div class="md:col-span-2 mt-10 first:mt-0">
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
        <div class="xl:mt-[134px]">
          <event-month-select :selected="selectedMonth" @update:month="updateSelection" />
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

const currentMonth = computed(()=>{
  let d = new Date()
  return d.getMonth()
});

const updateSelection = (month: number) => selectedMonth.value = month

const selectedMonth = ref(currentMonth.value)

</script>
