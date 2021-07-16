<template>
    <div>
        {{ foo }}
    </div>
</template>

<style scoped></style>

<script>
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
