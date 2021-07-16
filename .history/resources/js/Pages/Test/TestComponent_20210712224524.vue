<template>
    <div>
        {{ foo }}
    </div>
</template>

<style scoped></style>

<script>

import { reactive } from 'vue';


export default {
    props: {
        foo: String,
    },
    data() {
        return {

        };
    },
};
</script>
