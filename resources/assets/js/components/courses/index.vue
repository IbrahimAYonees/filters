<template>
    <div id="index" class="row">
        <div class="col-md-3">
            <filters
                endpoint="/filters"
            >
            </filters>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default bg-white p-2 m-4">
                <div class="panel-body">
                    <template v-if="courses.length">
                        <ul class="list-unstyled">
                            <course
                                v-for="course in courses"
                                :key="course.id"
                                :course="course"
                            >
                            </course>
                        </ul>
                        <pagination
                            v-if="meta"
                            :meta="meta"
                        >
                        </pagination>
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
    import Course from './partials/Course';
    import Pagination from '../pagination/Pagination';
    import Filters from '../filters/Filters';

    export default {
        name:'index',
        components:{
            Course,
            Pagination,
            Filters
        },
        data(){
            return{
                courses: [],
                meta: null,
            }
        },
        mounted(){
            this.getCourses();
        },
        methods:{
            getCourses(page = this.$route.query.page ,filters = this.$route.query){
                axios.get('/courses/show/all',{
                    params:{
                        page,
                        ...filters
                    }
                })
                .then((response) => {
                    this.courses = response.data.data;
                    this.meta = response.data.meta;
                });
            }
        },
        watch: {
            '$route.query': {
                handler (query) {
                    this.getCourses(1, query)
                },
                deep: true
            }
        },
    }
</script>

<style scoped>

</style>
