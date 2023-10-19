<template>
  <div>
    <h1 class="text-3xl font-bold">Reset password</h1>
    <form @submit.prevent="resetPassword">
      <div class="mt-10">
        <form-input type="password" label="New password" v-model="user.password" required />
        <form-input type="password" label="Confirm password" v-model="user.password_confirmation" required />

        <custom-button block>Confirm reset password</custom-button>
      </div>
    </form>
  </div>
</template>
<script lang="ts" setup>

const route = useRoute()
const token = route.params.token

definePageMeta({
  layout: "auth",
});

const user = ref({
  password: "",
  password_confirmation: "",
});

const resetPassword = async () => {
  user.value.token = token

  console.log(user);
  
}
</script>
