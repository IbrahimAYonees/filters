<template>
    <div id="index" class="row">
        <div class="col-md-3">
            Filters
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <template v-if="courses.length">
                        <course v-for="course in courses" :key="course.id" :course="course"></course>
                    </template>
                    <template v-else>
                        no courses found!
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Course from'./partials/Course';

    export default {
        components:{
            Course
        },
        data(){
            return{
                courses:[]
            }
        },
        mounted(){
            this.getCourses();
        },
        methods:{
            getCourses(){
                axios.get('/courses/show/all')
                .then((response) => {
                    this.courses = response.data.data;
                });
            }
        }
    }
</script>

<style scoped>

</style>
