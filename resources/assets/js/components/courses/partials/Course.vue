<template>
    <li class="media m-4" id="course">
        <img class="mr-3" src="http://via.placeholder.com/84x84&text=..." :alt="course.name">
        <div class="media-body">
            <ul class="list-inline" v-if="course.subjects">
                <li v-for="subject in course.subjects">{{ subject.name }}</li>
            </ul>
            <h5 class="mt-0 mb-1">{{ course.name }}</h5>
            <ul class="list-inline">
                <li class="list-inline-item">{{ course.formattedAccess }}</li>
                <li class="list-inline-item">{{ course.formattedDifficulty }}</li>
                <li class="list-inline-item">{{ course.formattedType }}</li>
                <li class="list-inline-item">{{ course.formattedStarted }}</li>
            </ul>
        </div>
    </li>
</template>

<script>
    export default {
        name: 'course',
        props:{
            course: Object
        }
    }
</script>

<style scoped>

</style>
