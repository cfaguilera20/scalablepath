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
                    <div class="m-4">{{ state.counter }}</div>
                    <jet-button class="m-4" @click="state.counter++">
                        Increment
                    </jet-button>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<style scoped></style>

<script>
import AppLayout from "@/Layouts/TestLayout";
import JetButton from "@/Jetstream/Button";
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
        return {
            isLoading: true,
            items: [],
        };
    },
    mounted() {
        this.getFlights();
    },
    actions: {
        getFlights() {
            this.axios
                .get("https://api.coindesk.com/v1/bpi/currentprice.json")
                .then((response) => {
                    this.info = response.data.bpi;
                })
                .catch((error) => {
                    console.log(error);
                    this.errored = true;
                })
                .finally(() => (this.loading = false));
        },
    },
    components: {
        AppLayout,
        JetButton,
    },
};
</script>
