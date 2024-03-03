/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily : {
        'hurricane' : 'Hurricane',
        'inter' : 'Inter',
        'poppins' : 'Poppins'
      },
      colors : {
        'utama' : '#8338ec',
        'secondary' : '#907DDF',
        'putih' : '#ffff',
        'green' : '#06d6a0'
      },
  },
  plugins: [],
}
}
