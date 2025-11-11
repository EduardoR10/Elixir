// tailwind.config.js
export default {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.js",
  ],
  theme: {
    container: {
      center: true,
      padding: "1rem",
      screens: { sm: "640px", md: "768px", lg: "1024px", xl: "1200px" }
    },
    extend: {
      colors: {
        elixir: {
          black: "#0b0b0b",
          gold: "#f5c542",
          goldSoft: "#e4b73b",
        }
      },
      fontFamily: {
        serif: ['"Lora"', 'serif'],
        sans: ['"Roboto"', 'ui-sans-serif', 'system-ui']
      },
      boxShadow: {
        'gold': '0 0 0 1px rgba(245,197,66,0.35), 0 10px 30px -10px rgba(245,197,66,0.25)',
      },
      backgroundImage: {
        'radial-faint': 'radial-gradient(1200px 600px at 50% -10%, rgba(245,197,66,0.10), transparent 60%)',
        'radial-strong': 'radial-gradient(800px 400px at 50% -10%, rgba(245,197,66,0.18), transparent 65%)'
      }
    },
  },
  plugins: [],
}
