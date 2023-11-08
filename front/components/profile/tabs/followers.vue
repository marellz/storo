<template>
  <div class="space-y-10">
    <div class="grid md:grid-cols-2 gap-10">
      <div>
        <custom-tabs :tabs="tabs" default-tab="followers">
          <template #action>
            <form-search />
          </template>
          <template #followers>
            <div class="space-y-5">
              <h2 class="font-medium text-lg">Your followers</h2>
              <custom-scroll class="space-y-2" max-height="max-h-[50vh]">
                <follow-suggestion
                  :following="i <= 4"
                  v-for="i in 15"
                  :key="i"
                />
              </custom-scroll>
            </div>
          </template>
          <template #following>
            <div class="space-y-5">
              <h2 class="font-medium text-lg">People you follow</h2>
              <custom-scroll class="space-y-2" max-height="max-h-[50vh]">
                <follow-suggestion following v-for="i in 15" :key="i" />
              </custom-scroll>
            </div>
          </template>
        </custom-tabs>
      </div>

      <div class="space-y-10 md:mt-[127px] 2xl:mt-[90px]">
        <div class="space-y-5">
          <h2 class="font-medium text-lg">Suggestions</h2>
          <custom-scroll class="space-y-2">
            <follow-suggestion v-for="i in 5" :key="i" />
          </custom-scroll>
        </div>
      </div>
    </div>
  </div>
</template>
<script lang="ts" setup>
const tabs = [
  {
    key: "followers",
    label: "Followers",
  },
  {
    key: "following",
    label: "Following",
  },
];
</script>
