import Vue from "vue";
import Vuetify from "vuetify";

Vue.use(Vuetify);
export default new Vuetify();

import { createVuetify } from 'vuetify'

const vuetify = createVuetify(...) // Replaces new Vuetify(...)
