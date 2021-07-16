import Vue from "vue";
import Vuetify from "vuetify";

Vue.use(Vuetify);
export default new Vuetify();


import { createApp } from 'vue'
import { createVuetify } from 'vuetify'

const vuetify = createVuetify(...) // Replaces new Vuetify(...)
