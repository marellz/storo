<template>
  <layout-container>
    <div class="grid xl:grid-cols-3 gap-10">
      <div>
        <layout-card class="space-y-5 flex flex-col items-center">
          <div class="text-center py-5">
            <img
              class="w-64 h-64 object-cover rounded-full mx-auto"
              src="https://images.unsplash.com/photo-1541532713592-79a0317b6b77?q=80&w=2576&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt=""
            />
          </div>

          <h1 class="text-3xl font-medium">John Doe</h1>

          <div class="w-full space-y-5">
            <p class="line-clamp-3 text-slate-500">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Quibusdam neque, nihil quia explicabo perspiciatis.
            </p>

            <div class="flex items-center space-x-2 text-slate-500">
              <CalendarDaysIcon class="h-7" />
              <p class="font-medium">Joined 12th March 2023</p>
            </div>
          </div>

          <div class="grid grid-cols-2 gap-5 w-full">
            <div class="text-slate-500 font-medium flex items-center space-x-2">
              <UserGroupIcon class="h-7" />
              <span class="text-lg">123 followers</span>
            </div>
            <div class="text-slate-500 font-medium flex items-center space-x-2">
              <UserGroupSolidIcon class="h-7" />
              <span class="text-lg">123 following</span>
            </div>
            <div class="text-slate-500 font-medium flex items-center space-x-2">
              <RectangleStackIcon class="h-7" />
              <span class="text-lg">4,122 posts</span>
            </div>
          </div>
          <custom-button-action
            class="w-full border space-x-2 rounded ml-auto hover:text-tufts-blue hover:border-tufts-blue"
          >
            <user-plus-icon class="h-5" />
            <span>Follow</span>
          </custom-button-action>
        </layout-card>
      </div>
      <div class="xl:col-span-2">
        <custom-tabs :tabs="tabs" default-tab="posts">
          <template #posts>
            <profile-tabs-posts />
          </template>
          <template #followers>
            <profile-tabs-followers />
          </template>
          <template #communities>
            <profile-tabs-communities />
          </template>
          <template #likes>
            <profile-tabs-likes />
          </template>
          <template #account>
            <profile-tabs-account />
          </template>
        </custom-tabs>
      </div>
    </div>
  </layout-container>
</template>

<script lang="ts" setup>
import {
  UserGroupIcon,
  RectangleStackIcon,
  UserPlusIcon,
} from "@heroicons/vue/24/outline";
import {
  CalendarDaysIcon,
  UserGroupIcon as UserGroupSolidIcon,
} from "@heroicons/vue/24/solid";

const tabs = ref([
  {
    key: "posts",
    label: "Posts",
  },
  {
    key: "followers",
    label: "Followers",
  },
  {
    key: "communities",
    label: "Communities",
  },
  {
    key: "likes",
    label: "Likes",
  },
  {
    key: "account",
    label: "Account",
  },
]);

</script>
