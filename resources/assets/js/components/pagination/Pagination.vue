<template>
    <nav v-if="meta.total >= 1" id="pagination">
        <ul class="pagination">
            <li class="page-item m-1" :class="{ 'disabled': meta.current_page === 1}">
                <a href="#" @click.prevent="switched(meta.current_page - 1)" class="page-link">
                    <span>&laquo;</span>
                </a>
            </li>
            <li v-for="x in meta.last_page" class="page-item m-1" :class="{ 'active': meta.current_page === x}">
                <a href="#" @click.prevent="switched(x)" class="page-link">{{ x }}</a>
            </li>
            <li class="page-item m-1" :class="{ 'disabled': meta.current_page === meta.last_page}">
                <a href="#" @click.prevent="switched(meta.current_page + 1)" class="page-link">
                    <span>&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</template>

<script>
    export default {
        name:'pagination',
        props:{
            meta: Object
        },
        methods:{
            switched(page){
                if (this.pageIsOutOfBounds(page)) {
                    return;
                }
                this.$emit('paginationSwitched', page);

                this.$router.replace({
                    query: Object.assign({}, this.$route.query, { page })
                });
            },
            pageIsOutOfBounds (page) {
                return page <= 0 || page > this.meta.last_page
            }
        }
    }
</script>

<style scoped>

</style>
