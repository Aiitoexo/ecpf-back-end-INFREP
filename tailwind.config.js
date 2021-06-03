module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
  darkMode: false, // or 'media' or 'class'
  theme: {
      letterSpacing: {
          tightest: '-.075em',
          tighter: '-.05em',
          tight: '-.025em',
          normal: '0',
          wide: '.025em',
          wider: '.05em',
          widest: '.25em',
      },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
