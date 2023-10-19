<template>
  <div>
    <h1 class="text-3xl font-bold">Recover password</h1>
    <form @submit.prevent="sendRecoveryEmail">
      <div class="mt-10">
        <form-input :disabled="recoveryEmailSent" type="email" label="Email" v-model="email" required />

        <custom-button :disabled="recoveryEmailSent" block>Send recovery email</custom-button>
      </div>
    </form>

    <p v-if="recoveryEmailSent" class="my-3 text-tufts-blue">
      Recovery email sent, please check your inbox to proceed with recovering your account.
    </p>

    <div class="mt-5 space-y-3 text-gray-700">
      <nuxt-link class="block" to="/auth/login">Back to login</nuxt-link>
    </div>

  </div>
</template>
<script lang="ts" setup>

definePageMeta({
  layout: "auth",
});

const email = ref('');

const recoveryEmailSent = ref(false);

const sendRecoveryEmail = async () => {

}
</script>
