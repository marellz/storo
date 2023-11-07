<template>
  <layout-card class="flex space-x-3">
    <nuxt-link
      :to="link"
      class="block bg-slate-100 rounded-lg p-5 text-center self-start w-20"
    >
      <p class="text-4xl font-bold">{{ eventInfo.date }}</p>
      <p class="uppercase text-slate-500">{{ eventInfo.monthShort }}</p>
    </nuxt-link>
    <div class="flex-auto">
      <nuxt-link :to="link">
        <p class="text-lg font-medium line-clamp-2">
          Fundraising event for the band
        </p>
        <div class="text-sm text-slate-500 flex items-center space-x-2">
          <MapPinIcon class="h-4" />
          <span> Main Stadium </span>
        </div>
      </nuxt-link>
      <div class="flex space-x-4 mt-4">
        <custom-button-action>
          <bookmark-icon class="h-5" />
        </custom-button-action>
        <custom-button-action class="space-x-2">
          <span>Going</span>
          <star-icon class="h-5" />
        </custom-button-action>
      </div>
    </div>
    <nuxt-link :to="link">
      <img
        class="h-32 w-28 rounded-lg object-cover border"
        src="https://images.unsplash.com/photo-1569930784237-ea65a2f40a83?q=80&w=2624&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        alt=""
      />
    </nuxt-link>
  </layout-card>
</template>
<script lang="ts" setup>
import { BookmarkIcon, StarIcon } from "@heroicons/vue/24/outline";
import { MapPinIcon } from "@heroicons/vue/24/solid";

defineProps({
  eventInfo: {
    type: Object,
    default: () => {
      return {
        date: 13,
        monthShort: "OCT",
      };
    },
  },
});

const link = `/events/slug`;
</script>
