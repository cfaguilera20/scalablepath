
<template>
    <app-layout>
        <div>{{ state.counter }}</div>
        <button type="button" @click="state.counter++">Increment</button>
    <app-layout>
</template>

<style scoped></style>

<script>

import AppLayout from '@/Layouts/AppLayout'
import { reactive } from "vue";

export default {
    props: {
        foo: String,
    },
    setup() {
        const state = reactive({ counter: 0 });
        return { state };
    },
    data() {
        return {};
    },
};
</script>
