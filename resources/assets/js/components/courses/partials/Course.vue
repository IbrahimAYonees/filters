<template>
    <div id="course">
        <div class="media">
            <div class="media-left">
                <a href="#">
                    <img class="media-object" src="http://via.placeholder.com/84x84&text=..." :alt="course.name">
                </a>
            </div>
            <div class="media-body">
                <ul class="list-inline" v-if="course.subjects">
                    <li v-for="subject in course.subjects">{{ subject.name }}</li>
                </ul>

                <h4 class="media-heading">{{ course.name }}</h4>
                <ul class="list-inline">
                    <li class="list-inline-item">{{ course.formattedAccess }}</li>
                    <li class="list-inline-item">{{ course.formattedDifficulty }}</li>
                    <li class="list-inline-item">{{ course.formattedType }}</li>
                    <li class="list-inline-item">{{ course.formattedStarted }}</li>
                </ul>
            </div>
        </div>
        <br>
    </div>
</template>

<script>
    export default {
        props:{
            course: Object
        }
    }
</script>

<style scoped>

</style>
