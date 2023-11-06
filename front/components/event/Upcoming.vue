<template>
  <layout-card class="flex items-center">
    <div class="bg-slate-100 rounded-lg p-3">
        <p class="text-4xl font-bold">13</p>
        <p class="uppercase text-slate-500">Oct</p>
    </div>
    <div class="ml-3">
        <p class="text-lg font-medium line-clamp-2">Fundraising event for yadad days</p>
        <div>
            <p class="text-sm text-slate-500">Main Stadium</p>
        </div>
    </div>
    <div class="ml-auto flex space-x-4 pl-2">
        <custom-button-action>
            <bookmark-icon class="h-5"/>
        </custom-button-action>
        <custom-button-action class="space-x-2">
            <span>Going</span>
            <star-icon class="h-5"/>
        </custom-button-action>
    </div>
  </layout-card>
</template>
<script lang="ts" setup>
import { BookmarkIcon, StarIcon } from '@heroicons/vue/24/outline';
</script>
