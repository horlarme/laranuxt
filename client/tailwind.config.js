/*
** TailwindCSS Configuration File
**
** Docs: https://tailwindcss.com/docs/configuration
** Default: https://github.com/tailwindcss/tailwindcss/blob/master/stubs/defaultConfig.stub.js
*/
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  mode: 'jit',
  variants: {
    extend: {
      borderWidth: ['first'],
    },
  },
  plugins: [
  ],
  theme: {
    extend: {
      colors: {
        black: '#212121',
        white: '#f8f8f8',
      },
      fontFamily: {
        rubik: 'Rubik',
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  purge: {
    // Learn more on https://tailwindcss.com/docs/controlling-file-size/#removing-unused-css
    enabled: process.env.NODE_ENV === 'production',
    content: [
      'node_modules/tv-*/dist/tv-*.umd.min.js',
      'client/components/**/*.vue',
      'client/layouts/**/*.vue',
      'client/pages/**/*.vue',
      'client/plugins/**/*.js',
      'client/lib/**/*.ts',
      'client/lib/**/*.js',
      'client/lib/**/*.vue',
      'nuxt.config.js',
    ],
  },
}
