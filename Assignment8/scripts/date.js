"use strict";
const $D = selector => document.querySelector(selector);

const today = new Date();

const custom = (today.getMonth()+1).toString().padStart(2, '0') + '/'
                        + today.getDate().toString().padStart(2, '0') + '/'
                        + today.getFullYear().toString();
document.write(custom);
