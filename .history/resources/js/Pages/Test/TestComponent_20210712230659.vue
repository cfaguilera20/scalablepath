<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Test
            </h2>
        </template>
        <div>{{ state.counter }}</div>
        <button type="button" @click="state.counter++">Increment</button>
    </app-layout>
</template>

<style scoped></style>

<script>
import AppLayout from "@/Layouts/TestLayout";
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
    components: {
        AppLayout,
    },
};
</script>
