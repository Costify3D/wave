import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import preset from './vendor/filament/support/tailwind.config.preset';
import fs from 'fs';
import path from 'path';

const themeFilePath = path.resolve(__dirname, 'theme.json');
const activeTheme = fs.existsSync(themeFilePath) ? JSON.parse(fs.readFileSync(themeFilePath, 'utf8')).name : 'anchor';

/** @type {import('tailwindcss').Config} */
export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/components/**/*.blade.php',
        './resources/views/components/blade.php',
        './wave/resources/views/**/*.blade.php',
        './resources/themes/' + activeTheme + '/**/*.blade.php',
        './resources/plugins/**/*.php',
        './config/*.php'
    ],

    theme: {
        extend: {
            // Farben
            colors: {
                primary: {
                    '500': '#f28c28', // CI-Main-Color
                },
            },

            // Schriftfamilien
            fontFamily: {
                // 'sans' wird unsere neue Standard-Schrift für den Fließtext
                'sans': ['Saira', ...defaultTheme.fontFamily.sans],
                // 'heading' ist unsere neue Schrift für Überschriften
                'heading': ['Goldman', 'cursive'],
            },
            animation: {
                'marquee': 'marquee 25s linear infinite',
            },
            keyframes: {
                'marquee': {
                    from: { transform: 'translateX(0)' },
                    to: { transform: 'translateX(-100%)' },
                }
                
            },
            fontSize: {
                // HIER IST DIE MAGIE: Wir definieren 'text-2xl' neu
                '2xl': ['1.5rem', { // 1.5rem ist die Standardgröße für 2xl
                  lineHeight: '2rem',
                  letterSpacing: '0.025em', // Entspricht ca. 'tracking-wide'
                }],
            },
        },
    },

    plugins: [forms, require('@tailwindcss/typography')],
};