/** @type {import('tailwindcss').Config} */
export default {
	content: ['./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}'],
	theme: {
		extend: {
			colors: {
				brand: {
					maroon: {
						50: '#fcf4f4',
						100: '#f9eaea',
						200: '#f1cccd',
						300: '#e8afb0',
						400: '#d57376',
						500: '#c3383b',
						600: '#af3235',
						700: '#922a2c',
						800: '#752223',
						900: '#601b1d',
						950: '#902324', // Core Brand Maroon
					},
					orange: {
						50: '#fff9f4',
						100: '#fff3e8',
						200: '#ffe1c6',
						300: '#ffcfa4',
						400: '#ffab60',
						500: '#f17c10', // Core Brand Orange
						600: '#d9700e',
						700: '#b55d0c',
						800: '#914a0a',
						900: '#763c08',
						950: '#462305',
					},
				},
			},
			fontFamily: {
				sans: ['Inter', 'system-ui', 'sans-serif'],
				display: ['Outfit', 'system-ui', 'sans-serif'],
			},
		},
	},
	plugins: [],
}

