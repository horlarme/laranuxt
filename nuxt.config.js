
export default {
  /*
  ** Nuxt.js root directory
  ** See https://nuxtjs.org/api/configuration-srcdir/
  */
  srcDir: 'client/',
  /*
  ** Nuxt target
  ** See https://nuxtjs.org/api/configuration-target
  */
  target: 'server',
  /*
  ** Headers of the page
  ** See https://nuxtjs.org/api/configuration-head
  */
  head: {
    title: process.env.npm_package_name || '',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: process.env.npm_package_description || '' },
    ],
    link: [
      { rel: 'preconnect', href: 'https://fonts.gstatic.com' },
      { href: 'https://fonts.googleapis.com/css2?family=Rubik&display=swap', rel: 'stylesheet' },
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
    ],
    script: [
      { type: 'module', src: 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js' },
      { type: 'noModule', src: 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js' },
    ],
  },
  /*
  ** Global CSS
  */
  css: [
  ],
  /*
  ** Plugins to load before mounting the App
  ** https://nuxtjs.org/guide/plugins
  */
  plugins: [
    '~/plugins/vue-custom-elements',
  ],
  /*
  ** Auto import components
  ** See https://nuxtjs.org/api/configuration-components
  */
  components: [
    '@/components',
  ],
  /*
  ** Nuxt.js dev-modules
  */
  buildModules: [
    // https://tailwindcss.nuxtjs.org/
    '@nuxtjs/tailwindcss',
    // https://typescript.nuxtjs.org/
    '@nuxt/typescript-build',
    // https://composition-api.nuxtjs.org/
    '@nuxtjs/composition-api/module',
    // https://typed-vuex.roe.dev/
    'nuxt-typed-vuex',
    // https://github.com/fumeapp/nuxt-storm
    'nuxt-storm',
  ],

  tailwindcss: {
    mode: 'jit',
  },

  /*
  ** Nuxt.js modules
  */
  modules: [
    // Doc: https://axios.nuxtjs.org/usage
    '@nuxtjs/axios',
    // Doc: https://github.com/acidjazz/nuxt-tailvue
    ['nuxt-tailvue', { all: true }],
  ],
  /*
  ** Axios module configuration
  ** See https://axios.nuxtjs.org/options
  */
  axios: {
    credentials: true,
    baseURL: process.env.API_URL,
    headers: {
      accept: 'application/json',
    },
  },
  /*
  ** Build configuration
  ** See https://nuxtjs.org/api/configuration-build/
  */
  build: {
  },

  /*
  ** Runtime Config
  ** See https://nuxtjs.org/guide/runtime-config/
  */
  publicRuntimeConfig: {
    apiUrl: process.env.API_URL,
  },
}
