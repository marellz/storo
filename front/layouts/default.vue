<template>
  <div class="flex flex-col h-[100vh]">
    <main class="flex flex-auto">
      <!-- nav  -->
      <div class="w-64">
        <div class="rounded-lg sticky top-6 py-5">
          <div class="mb-10 px-5">
            <nuxt-link to="/">
              <img
                src="@/assets/images/logos/logo-black.png"
                class="h-12"
                alt=""
              />
            </nuxt-link>
          </div>
          <ul
            class="border-b border-b-slate-300 last:border-b-0 mb-5 pb-5 space-y-2"
            v-for="(group, index) in links"
            :key="index"
          >
            <li v-for="(link, index) in group" :key="index">
              <nuxt-link
                :to="link.path"
                class="py-2 px-5 flex items-center space-x-2 border-r-2 border-r-transparent text-slate-600"
                :class="{
                  '!text-tufts-blue border-r-tufts-blue bg-blue-50':
                    pathMatches(link.path),
                }"
              >
                <component v-if="link.icon" :is="link.icon" class="h-5" />
                <span>
                  {{ link.label }}
                </span>
                <span
                  v-if="link.notifications"
                  class="text-xs !ml-auto font-bold text-white bg-tufts-blue w-4 h-4 inline-flex justify-center items-center rounded-full"
                  >{{ link.notifications }}</span
                >
              </nuxt-link>
            </li>
          </ul>
        </div>
      </div>
      <div class="flex-auto overflow-auto h-full bg-slate-100 pb-16">
        <layout-header />
        <slot />
      </div>
    </main>
  </div>
</template>
<script lang="ts" setup>
import {
  BookmarkSquareIcon,
  ChatBubbleLeftRightIcon,
  GlobeAmericasIcon,
  MegaphoneIcon,
  NewspaperIcon,
  UserIcon,
} from "@heroicons/vue/24/outline";

const links = ref([
  [
    {
      label: "Feed",
      icon: GlobeAmericasIcon,
      path: "/",
    },
    {
      label: "Blog",
      icon: NewspaperIcon,
      path: "/blog",
    },
    {
      label: "Events",
      icon: BookmarkSquareIcon,
      path: "/events",
    },
    {
      label: "Community",
      icon: MegaphoneIcon,
      path: "/community",
    },
    // {
    //   label: "Shop",
    //   icon: BuildingStorefrontIcon,
    //   path: "#",
    // },
  ],
  [
    {
      label: "Profile",
      icon: UserIcon,
      path: `/user/id`,
    },
    {
      label: "Messages",
      icon: ChatBubbleLeftRightIcon,
      path: "/messages",
      notifications: 2,
    },
  ],
]);

const route = useRoute();
const pathMatches = (path) => {
  if (path === "/") {
    return path == route.path;
  }
  return path == route.path || route.path.includes(path);
};
</script>
