/** @type {import('tailwindcss').Config} */
module.exports = {
content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',
],
theme: {
    colors : {
        putih: '#fff',
        biru: '#5fa8d3',
        merah: '#e07a5f',
        utama: '#2ec4b6',
        kedua: '#B6B6B6',
        ketiga: '#949CA9',
        keempat: '#2a9d8f',
        kelima: '#F4F4F4',
        kuning: '#FF9F1C',
        hitam: '#46494c',
        body: '#FBFAFA',
    },
    extend: {
        fontFamily: {
            DMSANS : ['DM Sans', 'sans-serif'],
            PlusJakarta : ['Plus Jakarta Sans', 'sans-serif'],
        },
        dropShadow: {
            '3xl': '0px 4px 10px rgba(138, 142, 148, 0.05)',
            '4xl' : '0px 0px 24px #FBFAFA',
            '5xl': '0px 2px 12px rgba(0, 0, 0, 0.04)',
        },
    },
},
    plugins: [
        require('preline/plugin'),
    ],
}

