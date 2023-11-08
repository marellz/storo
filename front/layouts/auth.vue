<template>
  <div class="flex flex-col lg:flex-row lg:justify-center items-center lg:h-[70vh] space-y-10 pt-10">
    <div>
       <nuxt-link to="/">
          <img
            src="@/assets/images/logos/logo-black.png"
            class="h-16 md:h-32"
            alt=""
          />
        </nuxt-link>
    </div>
    <div class="px-5 w-2/3 md:w-1/2 lg:w-1/3 md:max-w-[500px] min-w-[320px] lg:border-l">
      <slot />
    </div>
  </div>
</template>

<script lang="ts" setup></script>
