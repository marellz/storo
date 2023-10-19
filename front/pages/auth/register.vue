<template>
  <div>
    <h1 class="text-3xl font-bold">Register</h1>
    <form @submit.prevent="register">
      <div class="mt-10">
        <form-input label="Name" v-model="user.name" required />
        <form-input type="email" label="Email" v-model="user.email" required />
        <form-input type="password" label="Password" v-model="user.password" required />
        <form-input type="password" label="Confirm password" v-model="user.password_confirmation" required />

        <custom-button block>Register</custom-button>
      </div>
    </form>

    <div class="mt-5 space-y-3 text-gray-700">
      <p>Already have an account? <nuxt-link to="/auth/login" class="text-tufts-blue">Login</nuxt-link> </p>
    </div>

  </div>
</template>
<script lang="ts" setup>

definePageMeta({
  layout: "auth",
});

const user = ref({
  name: "",
  email: "",
  password: "",
  password_confirmation: "",
});

const register = async () => {

}
</script>
