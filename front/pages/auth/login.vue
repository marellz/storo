<template>
  <div>
    <h1 class="text-3xl font-bold">Login</h1>
    <form @submit.prevent="login">
      <div class="mt-10">
        <form-input type="email" label="Email" v-model="user.email" required />
        <form-input type="password" label="Password" v-model="user.password" required />

        <form-checkbox v-model:checked="rememberMe">Rememeber me</form-checkbox>

        <custom-button block>Login</custom-button>
      </div>
    </form>

    <div class="mt-5 space-y-3 text-gray-700">
      <p>No account? <nuxt-link to="/auth/register" class="text-tufts-blue">Register</nuxt-link> </p>
      <nuxt-link class="block" to="/auth/password-recovery">Recover password</nuxt-link>
    </div>

  </div>
</template>
<script lang="ts" setup>

definePageMeta({
  layout: "auth",
});

const user = ref({
  email: "",
  password: "",
});

const rememberMe = ref(false);

const login = async () => {

}
</script>
