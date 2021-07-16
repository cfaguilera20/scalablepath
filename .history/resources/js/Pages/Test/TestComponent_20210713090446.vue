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
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Airline</th>
                                <th>Flight</th>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="flight in flights" :key="flight.id">
                                <td>{{ flight.id }}</td>
                                <td>{{ flight.airline }}</td>
                                <td>{{ flight.name }}</td>
                                <td>Details</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="m-4">{{ counter }}</div>
                    <jet-button class="m-4" @click="counter++">
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
    components: {
        AppLayout,
        JetButton,
    },
    data() {
        return {
            counter: 0,
            loading: true,
            flights: [],
        };
    },
    mounted() {
        this.getFlights();
    },
    methods: {
        getFlights() {
            this.loading = true;
            this.axios
                .get("/api/flights")
                .then((response) => {
                    this.flights = response.data.data;
                })
                .catch((error) => {
                    console.log(error);
                    this.errored = true;
                })
                .finally(() => (this.loading = false));
        },
    },
};
</script>
