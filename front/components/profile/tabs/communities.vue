<template>
  <div class="space-y-10">
    <div class="grid grid-cols-2 gap-10">
      <div>
        <custom-tabs :tabs="tabs" default-tab="groups">
          <template #action>
            <form-search />
          </template>
          <template #groups>
            <div class="space-y-5">
              <h2 class="font-medium text-lg">Your community groups</h2>
              <custom-scroll class="space-y-2" max-height="max-h-[50vh]">
                <community-group
                  v-for="i in 4"
                  :key="i"
                />
              </custom-scroll>
            </div>
          </template>
          <template #forums>
            <div class="space-y-5">
              <h2 class="font-medium text-lg">Forums you take part in</h2>
              <custom-scroll class="space-y-2" max-height="max-h-[50vh]">
                <community-forum v-for="i in 3" :key="i" />
              </custom-scroll>
            </div>
          </template>
        </custom-tabs>
      </div>

      <!-- if mine -->
      <div class="space-y-10 mt-[90px]"> 
        <div class="space-y-5">
          <h2 class="font-medium text-lg">Suggestions</h2>
          <custom-scroll class="space-y-5">
            <community-group />
            <community-forum v-for="i in 2" :key="i" />
          </custom-scroll>
        </div>
      </div>
    </div>
  </div>
</template>
<script lang="ts" setup>
const tabs = [
  {
    key: "groups",
    label: "Groups",
  },
  {
    key: "forums",
    label: "Forums",
  },
];
</script>
