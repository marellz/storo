<template>
  <layout-container>
    <div class="grid grid-cols-3 gap-10">
      <div class="space-y-10">
        <img
          class="w-full rounded-lg object-cover"
          src="https://images.unsplash.com/photo-1569930784237-ea65a2f40a83?q=80&w=2624&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          alt=""
        />
      </div>
      <div class="col-span-2 space-y-10">
        <layout-card class="space-y-5">
          <div class="flex items-start">
            <layout-salutation
              class="mb-0"
              main="Fundraising event for the band"
              context=""
            ></layout-salutation>
            <div class="flex space-x-4 !ml-auto">
              <custom-button-action>
                <bookmark-icon class="h-5" />
              </custom-button-action>
              <custom-button-action class="space-x-2">
                <span>Share</span>
                <share-icon class="h-5" />
              </custom-button-action>
              <custom-button-action class="space-x-2">
                <span>Going</span>
                <star-icon class="h-5" />
              </custom-button-action>
            </div>
          </div>
          <p class="text-slate-500 flex items-center space-x-3 text-xl">
            <MapPinIcon class="h-7" />
            <span>Main Stadium</span>
            <span class="px-2">|</span>
            <ClockIcon class="h-7" />
            <span> 09:00 - 12:00 </span>
            <span class="px-2">|</span>
            <UserGroupIcon class="h-7" />
            <span>123 confirmed attendees</span>
          </p>

          <div class="space-y-3 !mt-10">
            <h5 class="text-lg text-slate-500 font-medium">About the event</h5>
            <p class="text-lg leading-7">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
              consectetur, iusto aliquid cupiditate magni vero ipsam voluptas
              veritatis accusantium ea saepe qui nesciunt quidem est fugit
              doloribus maiores libero eum.
            </p>
          </div>
          <div class="space-y-3 !mt-10">
            <h5 class="text-lg text-slate-500 font-medium">
              Event hosts
            </h5>
            <div class="flex">
              <nuxt-link to="#user_page" class="flex items-center space-x-2 p-2 border mr-2 rounded-lg hover:border-tufts-blue">
                <user-circle-icon class="h-7 text-slate-500" />
                <p class="font-medium text-lg">Jimmy Doe</p>
              </nuxt-link>
            </div>
          </div>
          <div class="space-y-3 !mt-10">
            <h5 class="text-lg text-slate-500 font-medium">
              Followers attending
            </h5>
            <div class="flex">
              <nuxt-link to="#user_page" class="flex items-center space-x-2 p-2 border mr-2 rounded-lg hover:border-tufts-blue">
                <user-circle-icon class="h-7 text-slate-500" />
                <p class="font-medium text-lg">John Doe</p>
              </nuxt-link>
              <nuxt-link to="#user_page" class="flex items-center space-x-2 p-2 border mr-2 rounded-lg hover:border-tufts-blue">
                <user-circle-icon class="h-7 text-slate-500" />
                <p class="font-medium text-lg">Jane Doe</p>
              </nuxt-link>
            </div>
          </div>
        </layout-card>
      </div>
    </div>
  </layout-container>
</template>
<script lang="ts" setup>
import { BookmarkIcon, StarIcon, ShareIcon } from "@heroicons/vue/24/outline";

import {
  ClockIcon,
  MapPinIcon,
  UserGroupIcon,
  UserCircleIcon,
} from "@heroicons/vue/24/solid";
</script>
