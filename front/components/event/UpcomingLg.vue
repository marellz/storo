<template>
  <layout-card class="md:col-span-2">
    <div class="flex flex-col xl:flex-row xl:space-x-5 ">
      <div class="flex flex-col order-1 mt-5 xl:mt-0 xl:order-none">
        <div class="flex items-start space-x-3">
          <nuxt-link
            :to="link"
            class="block bg-slate-100 rounded-lg p-5 w-20 text-center flex-none"
          >
            <p class="text-4xl font-bold">{{ eventInfo.date }}</p>
            <p class="uppercase text-slate-500">{{ eventInfo.monthShort }}</p>
          </nuxt-link>
          <div class="flex flex-col xl:flex-row items-start flex-auto xl:space-x-3">
            <nuxt-link :to="link" class="space-y-2">
              <p class="text-2xl font-medium line-clamp-2">
                End of year party for the club
              </p>
              <div>
                <div class="text-slate-500 flex flex-col xl:flex-row xl:items-center xl:space-x-2 space-y-2 xl:space-y-0">
                  <div class="flex items-center space-x-2">
                    <MapPinIcon class="h-4" />
                    <span>Main Stadium</span>
                  </div>
                  <span class="px-2 hidden xl:inline-block">|</span>
                  <div class="flex items-center space-x-2">
                    <ClockIcon class="h-4"/>
                    <span> 09:00 - 12:00 </span>
                  </div>
                </div>
              </div>
              <div class="text-slate-500 flex items-center space-x-2">
                <UserGroupIcon  class="h-4"/>
                <span>123 confirmed attendees</span>
              </div>
            </nuxt-link>
            <div class="flex space-x-4 xl:!ml-auto mt-5 xl:mt-0">
              <custom-button-action>
                <bookmark-icon class="h-5" />
              </custom-button-action>
              <custom-button-action>
                <span>Going</span>
                <star-icon class="h-5" />
              </custom-button-action>
            </div>
          </div>
        </div>
        <hr class="my-5" />
        <div class="bg-slate-100 font-light p-5 rounded-lg">
          <p class="line-clamp-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
            consectetur, iusto aliquid cupiditate magni vero ipsam voluptas
            veritatis accusantium ea saepe qui nesciunt quidem est fugit
            doloribus maiores libero eum.
          </p>
          <nuxt-link :to="link" class="text-tufts-blue inline-flex items-center space-x-2 mt-3 p-2">
            <span class="font-medium text-sm">See more</span>
            <ArrowLongRightIcon class="h-5" />
          </nuxt-link>
        </div>
      </div>
      <nuxt-link :to="link" class="flex-none">
        <img
          class="w-full h-64 xl:h-full xl:w-56 rounded-lg object-cover border"
          src="https://images.unsplash.com/photo-1569930784237-ea65a2f40a83?q=80&w=2624&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          alt=""
        />
      </nuxt-link>
    </div>
  </layout-card>
</template>
<script lang="ts" setup>
import { ArrowLongRightIcon, BookmarkIcon, StarIcon } from "@heroicons/vue/24/outline";
import { ClockIcon, MapPinIcon, UserGroupIcon } from "@heroicons/vue/24/solid";

defineProps({
  eventInfo: {
    type: Object,
    required: true,
  },
});

const link = `/events/slug`;
</script>
