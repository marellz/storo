<template>
  <!-- nav  -->
  <div
    class="w-full fixed h-full shadow lg:static sm:w-64 flex-none bg-white z-30 transform -translate-x-full transition ease-in-out lg:translate-x-0"
    :class="{ '!translate-x-0': active }"
  >
    <div class="rounded-lg sticky top-0 py-5">
      <div class="flex justify-end px-5 lg:invisible">
        <custom-button-action @click="$emit('close')">
          <ArrowLeftIcon class="h-5" />
        </custom-button-action>
      </div>
      <div class="mb-10 px-5">
        <nuxt-link to="/">
          <img src="@/assets/images/logos/logo-black.png" class="h-12" alt="" />
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
              '!text-tufts-blue border-r-tufts-blue bg-blue-50': pathMatches(
                link.path
              ),
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
import { ArrowLeftIcon } from "@heroicons/vue/24/solid";

defineEmits(['close'])
defineProps({
  active:{
    type:Boolean,
    default: false,
  }
})
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
