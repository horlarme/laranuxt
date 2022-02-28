<template>
  <div class="container mx-auto bg-white">
    <template v-if="!loading">
      <Header />
      <IntroductionSection :data="profile" @updated="updateProfileData" />
      <ServiceSection :data="profile.services" @updated="updateProfileData" />
      <SkillSection :data="profile.skills" @updated="updateProfileData" />
      <ExperienceSection :data="profile.experiences" @updated="updateProfileData" />
    </template>
    <div v-else class="grid place-items-center h-screen">
      <p class="text-3xl animate-bounce capitalize">Please wait... Profile fetching...</p>
    </div>
  </div>
</template>

<script lang="ts">
import Vue from 'vue'
import { AxiosResponse } from 'axios'
import IntroductionSection from '@/components/sections/IntroductionSection.vue'
import SkillSection from '@/components/sections/SkillSection.vue'
import ServiceSection from '@/components/sections/ServiceSection.vue'
import ExperienceSection from '@/components/sections/ExperienceSection.vue'
import { MetApiResponse, User } from '@/types/api'

export default Vue.extend({
  components: { ExperienceSection, SkillSection, ServiceSection, IntroductionSection },
  data () {
    return {
      loading: true,
      profile: {} as User|null,
    }
  },
  async fetch () {
    await this.fetchProfile()
  },
  methods: {
    fetchProfile () {
      this.loading = true
      this.$axios.$get<AxiosResponse<MetApiResponse<User>>>('/profile')
        .then(profile => (this.profile = profile.data.data))
        .finally(() => (this.loading = false))
    },
    updateProfileData (newProfile: User|null) {
      if (newProfile) this.profile = newProfile
      else this.fetchProfile()
    },
  },
})
</script>
