/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './inc/**/*.php',
    './template-parts/**/*.php',
    './assets/js/**/*.js',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Outfit', 'system-ui', 'sans-serif'],
        serif: ['Playfair Display', 'ui-serif', 'Georgia', 'serif'],
      },
      colors: {
        brand: {
          ink: '#1A1A1A', // Professional Black
          cream: '#FFFFFF', // Pristine White
        },
        // Kidazzle Brand Identity 2.0 & Legacy Map
        kidazzle: {
          gold: '#D4AF37', // KIDazzle Gold
          teal: '#20B2AA', // Sky Teal
          coral: '#FF7F50', // Sunset Coral
          red: '#EF4444',
          redLight: '#FEF2F2',
          orange: '#F97316',
          orangeLight: '#FFF7ED',
          yellow: '#EAB308',
          yellowLight: '#FEFCE8',
          green: '#22C55E',
          greenLight: '#F0FDF4',
          cyan: '#06B6D4',
          cyanLight: '#ECFEFF',
          blue: '#2563EB', // Royal Blue
          blueLight: '#EFF6FF',
          blueDark: '#1E3A8A', // Navy Blue
          purple: '#A855F7',
          purpleLight: '#F3E8FF',
          slate: '#475569',
        },
      },
      keyframes: {
        marquee: {
          '0%': { transform: 'translateX(0%)' },
          '100%': { transform: 'translateX(-50%)' },
        },
      },
      animation: {
        marquee: 'marquee 30s linear infinite',
      },
    },
  },
  safelist: [
    // Animations & Delays
    'animate-pulse', 'animate-bounce', 'animate-spin', 'animate-fade-in-up',
    'fade-in-up', 'delay-100', 'delay-200', 'delay-300',

    // Custom shadows
    'shadow-card', 'shadow-cardHover', 'shadow-float', 'shadow-glow', 'shadow-soft',

    // Static utilities
    'w-2', 'h-2', 'rounded-full',

    // Kidazzle base colors (no opacity) - ALL prefixes
    {
      pattern: /(bg|text|border|from|to)-kidazzle-(gold|coral|red|orange|yellow|green|cyan|blue|blueDark|purple|slate|teal)(Light)?$/,
      variants: ['hover', 'group-hover', 'focus'],
    },
    // Kidazzle opacity variants
    {
      pattern: /(bg|text|border|from|to)-kidazzle-(gold|coral|red|orange|yellow|green|cyan|blue|blueDark|purple|slate|teal)(Light)?\/(5|10|15|20|30|40|50|80|90)$/,
      variants: ['hover'],
    },

    // Brand base colors
    {
      pattern: /(bg|text|border)-brand-(ink|cream)$/,
      variants: ['hover'],
    },
    // Brand opacity variants
    {
      pattern: /(bg|text|border)-brand-(ink|cream)\/(5|10|20|30|40|50|60|70|80|90)$/,
      variants: ['hover'],
    },
  ],
  plugins: [],
};

