module.exports = {
  content: [
    // "./src/components/Pack.js",
    "./src/**/*.{js,jsx,ts,tsx}",
  ],
  theme: {
    colors: {
      'white': '#ffffff',
      'effyis-purple': '#5D4FA0', 
      'effyis-blue': '#1A144C',
      'effyis-azure': '#1fc1e5',
    },
    screens: {
      'md': '900px',
    },
    extend: {
      boxShadow: {
        '3xl': 'rgba(0, 0, 0, 0.35) 0px 5px 15px;',
        '4xl': 'rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px',
      }
    }
  },
  plugins: [],
}
