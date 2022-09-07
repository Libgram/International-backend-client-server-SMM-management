import './bootstrap';

import 'tw-elements/dist/js/index.min'

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import.meta.glob([
    '../assets/img/**',
]);
