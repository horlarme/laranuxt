<template>
  <section class="w-full space-x-5 flex items-center justify-between h-screen relative -mt-20">
    <div>
      <h1 class="text-5xl mb-5 flex items-center">
        I'm&nbsp;
        <strong v-if="!editing" class="font-sans">
          {{ data.full_name }}
        </strong>
        <input
          v-else
          v-model="form.full_name"
          type="text"
          class="font-bold outline-none font-sans flex-shrink-1"
        >
        <Actions :editing="editing" @edit="edit" @clear="clear" @save="update" />
      </h1>
      <h3 v-if="!editing" class="text-3xl">
        {{ data.bio }}
      </h3>
      <div v-else>
        <textarea
          v-model="form.bio"
          class="text-3xl outline-none resize-none w-full"
          maxlength="256"
          :disabled="loading"
          rows="2"
        />
        <input
          v-model="form.social_facebook"
          :disabled="loading"
          type="text"
          class="text-base outline-none w-full p-3"
          placeholder="Facebook"
        >
        <input
          v-model="form.social_instagram"
          :disabled="loading"
          type="text"
          class="text-base outline-none w-full p-3"
          placeholder="Instagram"
        >
        <input
          v-model="form.social_github"
          :disabled="loading"
          type="text"
          class="text-base outline-none w-full p-3"
          placeholder="Github"
        >
        <input
          v-model="form.social_twitter"
          :disabled="loading"
          type="text"
          class="text-base outline-none w-full p-3"
          placeholder="Twitter"
        >
        <input
          v-model="form.social_linkedin"
          :disabled="loading"
          type="text"
          class="text-base outline-none w-full p-3"
          placeholder="LinkedIn"
        >
        <input
          v-model="form.email"
          :disabled="loading"
          type="text"
          class="text-base outline-none w-full p-3"
          placeholder="Email"
        >
      </div>
    </div>
    <img
      src="//picsum.photos/600"
      alt="Lawal Oladipupo"
      class="w-[320px] h-[320px] shadow-inner rounded object-center object-cover"
    >
    <SocialSection :profile="data" />
  </section>
</template>

<script lang="ts">
import Vue from 'vue'
import { AxiosResponse } from 'axios'
import { PropType } from '@nuxtjs/composition-api'
import SocialSection from '@/components/sections/SocialSection.vue'
import Actions from '@/components/Actions.vue'
import { MetApiResponse, User } from '@/types/api'

export default Vue.extend({
  name: 'IntroductionSection',
  components: { Actions, SocialSection },
  props: {
    data: {
      type: Object as PropType<User>,
      required: true,
    },
  },
  data () {
    return {
      loading: false,
      editing: false,
      form: {} as User,
    }
  },
  methods: {
    edit () {
      this.editing = true
      this.form = Object.assign({}, this.data)
    },
    clear () {
      this.editing = false
      this.form = {} as User
    },
    update () {
      this.loading = true
      this.$axios.$patch<AxiosResponse<MetApiResponse<User>>>('profile', this.form)
        .then(response => (this.$emit('updated', response.data.data)))
        .then(() => this.$toast.success('Profile Updated Successfully'))
        .finally(() => {
          this.loading = true
          this.clear()
        })
    },
  },
})
</script>

<style scoped>

</style>
