<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Test
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="pa-10">{{ state.counter }}</div>
                    <jet-button
                        class="ml-4"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                    >
                        Log in
                    </jet-button>
                    <button clas type="button" @click="state.counter++">
                        Increment
                    </button>
                </div>
            </div>
        </div>
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
