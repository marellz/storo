<template>
  <div class="flex flex-col lg:flex-row lg:justify-center items-center lg:h-[70vh]">
    <div>
       <nuxt-link to="/">
          <img
            src="@/assets/images/logos/logo-black.png"
            class="h-32 lg:h-64"
            alt=""
          />
        </nuxt-link>
    </div>
    <div class="px-5 md:w-1/2 lg:w-1/3 md:max-w-[500px] min-w-[320px] lg:border-l">
      <slot />
    </div>
  </div>
</template>

<script lang="ts" setup></script>
