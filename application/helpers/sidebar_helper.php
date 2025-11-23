<?php

function menu_active($current, $active) {
    return ($current == $active)
        ? 'bg-[#EEF4FF] text-[#3874FF] font-semibold'
        : 'text-white hover:bg-white/10';
}

function icon_active($current, $active) {
    return ($current == $active)
        ? 'text-[#3874FF]'
        : 'text-white';
}
