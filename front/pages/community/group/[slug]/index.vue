<template>
  <layout-container>
    <div class="grid grid-cols-3 gap-10">
      <div>
        <layout-card class="space-y-5 flex flex-col items-start">
          <img
            class="w-full object-cover rounded-lg block"
            src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?q=80&w=2669&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt=""
          />

          <div class="flex items-center space-x-2">
            <h1 class="text-2xl font-medium">A nice community</h1>
            <span
              class="text-slate-500 font-medium bg-slate-200 px-2 text-sm rounded-lg"
              >Topic</span
            >
          </div>
          <p class="line-clamp-3 text-slate-500">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam
            neque, nihil quia explicabo perspiciatis consequatur illo sed nobis
            eum animi eveniet molestiae obcaecati sequi maxime amet distinctio.
            Quibusdam, nemo eaque.
          </p>

          <div class="flex items-center space-x-2 text-slate-500">
            <CalendarDaysIcon class="h-7" />
            <p class="font-medium">Created 12th March 2023</p>
          </div>

          <div class="grid grid-cols-2 gap-5 w-full">
            <div class="text-slate-500 font-medium flex items-center space-x-2">
              <UserGroupIcon class="h-7" />
              <span class="text-lg">123 members</span>
            </div>
            <div class="text-slate-500 font-medium flex items-center space-x-2">
              <RectangleStackIcon class="h-7" />
              <span class="text-lg">4,122 posts</span>
            </div>
          </div>
          <custom-button-action
            class="w-full border space-x-2 rounded ml-auto hover:text-tufts-blue hover:border-tufts-blue"
          >
            <hand-raised-icon class="h-5" />
            <span>Join/Request</span>
          </custom-button-action>

          <div>
            <custom-button-action
              class="border-none space-x-2 rounded ml-auto hover:text-tufts-blue hover:border-tufts-blue"
            >
              <span> Community guide/rules </span>
              <ArrowTopRightOnSquareIcon class="h-5" />
            </custom-button-action>
          </div>
        </layout-card>
      </div>
      <div class="col-span-2 space-y-10">
        <post-creation />
        <div class="py-5 flex justify-end">
          <custom-dropdown label="Select order" trigger-class="!bg-transparent">
            <template #trigger>
              <span>Posts order</span>
              <chevron-up-down-icon class="h-5" />
            </template>

            <custom-dropdown-item>
              <FireIcon class="h-5" />
              <span>Relevant</span>
            </custom-dropdown-item>
            <custom-dropdown-item>
              <BarsArrowDownIcon class="h-5" />
              <span>Latest</span>
            </custom-dropdown-item>
            <custom-dropdown-item>
              <BarsArrowUpIcon class="h-5" />
              <span>Oldest</span>
            </custom-dropdown-item>
          </custom-dropdown>
        </div>
        <layout-card class="space-y-5">
          <div class="-mx-5">
            <blog-comment />
            <blog-comment />
          </div>
        </layout-card>
      </div>
    </div>
  </layout-container>
</template>
<script lang="ts" setup>
import {
  BookmarkIcon,
  HeartIcon,
  ChatBubbleOvalLeftEllipsisIcon,
  ShareIcon,
  HandRaisedIcon,
  ChevronUpDownIcon,
  BarsArrowDownIcon,
  BarsArrowUpIcon,
  FireIcon,
  UserGroupIcon,
  RectangleStackIcon,
  ArrowTopRightOnSquareIcon,
} from "@heroicons/vue/24/outline";

import { UserCircleIcon, CalendarDaysIcon } from "@heroicons/vue/24/solid";
</script>
